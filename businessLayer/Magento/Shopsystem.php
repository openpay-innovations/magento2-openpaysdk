<?php

/**
 * All Magento function which can be necessary
 *
 * @author ideatarmac.com
 */

namespace BusinessLayer\Openpay\Magento;

class Shopsystem 
{
    /**
     * call functions from Magento to get all cartinformations
     * in Magento we use $quote as $cart
     * 
     * @param object $cart
     * 
     * @return object
     */
    public static function prepareShopCartObj($cart)
    { 
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $currencysymbol = $objectManager->get('Magento\Store\Model\StoreManagerInterface');
        $currency = $currencysymbol->getStore()->getCurrentCurrencyCode();
        $customer = $objectManager->create('Magento\Customer\Model\Customer');
        if (count($cart->getAllVisibleItems()) > 0) {
            foreach ($cart->getAllVisibleItems() as $item) {
                $cart->products[] = $item->getData();
            }
        }

        if ($cart->getCustomer()->getId()) {
            $cart->custom = $customer->load($cart->getCustomer()->getId())->getData();
            if ($cart->custom['gender']) {
                if ($cart->custom['gender'] == '1') {
                    $cart->gender = 'M';
                } elseif ($cart->custom['gender'] == '2') {
                    $cart->gender = 'F';
                } else {
                    $cart->gender = '';
                }
            }
            if ($cart->custom['dob']) {
                $newDate = date("d M Y", strtotime($cart->custom['dob']));  
                $cart->custom['dob'] = $newDate;
            }
        } else {
            $cart->custom = ['email' => $cart->getCustomerEmail()];
        }

        $cart->total = $cart->getGrandTotal();
        $integerTotal = round((float)$cart->getGrandTotal(), 2);
        $cart->integerTotal = (int)($integerTotal * 100);

        $cart->deliveryAddress = $cart->getShippingAddress()->getData();
        $cart->invoiceAddress = $cart->getBillingAddress()->getData();

        // Get shipping address and billing address different or not
        $billingAddress = array_diff($cart->invoiceAddress, $cart->deliveryAddress);
        if (array_key_exists('firstname', $billingAddress) && array_key_exists('lastname', $billingAddress)) {
            $cart->deliveryAddress['firstname'] = $billingAddress['firstname'];
            $cart->deliveryAddress['lastname'] = $billingAddress['lastname'];
        }

        /**
         * This code is for onestepcheckout (START)
         */
        $request = $objectManager->get('Magento\Framework\App\RequestInterface');
        $moduleManager = $objectManager->get('Magento\Framework\Module\Manager');
        $isOnestepInstalled = $moduleManager->isEnabled('Onestepcheckout_Iosc');
        if ($isOnestepInstalled) {
            $dataManager = $objectManager->get('Onestepcheckout\Iosc\Model\DataManager');
            $content = $request->getContent();
            $payload = $dataManager->deserializeJsonPost($content);
            $data = $dataManager->process($payload);
            if ($data && !$data['error']) {
                if (!$data['data']['billingAddress']) {
                    $cart->invoiceAddress =$data['data']['shippingAddress'];
                }
            }
        }
        /** (END) */

        $cart->isoCurrency = $currency;
        $cart->cartId = $cart->getId();
        $cart->source = 'Magento';
        
        if (!empty($cart->deliveryAddress['region'])) {
            $regionDelivery = $objectManager->create('Magento\Directory\Model\ResourceModel\Region\Collection')
                ->addRegionNameFilter($cart->deliveryAddress['region'])
                ->getFirstItem()
                ->toArray();
            $cart->deliveryAddress['regioncode'] = (isset($regionDelivery['code'])) ? $regionDelivery['code'] : $cart->deliveryAddress['region'];
        }
        if (!empty($cart->invoiceAddress['region'])) {
            $regionInvoice = $objectManager->create('Magento\Directory\Model\ResourceModel\Region\Collection')
                ->addRegionNameFilter($cart->invoiceAddress['region'])
                ->getFirstItem()
                ->toArray();
            $cart->invoiceAddress['regioncode'] = (isset($regionInvoice['code'])) ? $regionInvoice['code'] : $cart->invoiceAddress['region'];
        }
        
        $linesInvoice = explode("\n", $cart->invoiceAddress['street']);
        $cart->invoiceAddress['line1'] = $linesInvoice[0];
        $linesInvoice2 = (isset($linesInvoice[1])) ? $linesInvoice[1] : '';
        if (isset($linesInvoice[2])) {
            $linesInvoice2 .= ' ' . $linesInvoice[2];
        }
        $cart->invoiceAddress['line2'] = $linesInvoice2;
        
        $linesDelivery = explode("\n", $cart->deliveryAddress['street']);
        $cart->deliveryAddress['line1'] = $linesDelivery[0];
        $linesDelivery2 = (isset($linesDelivery[1])) ? $linesDelivery[1] : '';
        if (isset($linesDelivery[2])) {
            $linesDelivery2 .= ' ' . $linesDelivery[2];
        }
        $cart->deliveryAddress['line2'] = $linesDelivery2;
        
        return $cart;
    }
}
