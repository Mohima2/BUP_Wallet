<?php

namespace MCPhp;

class CreateTransaction
{
    use Api\Request;
    use Api\GenerateLink;


    public static function createUrl()
    {
        return "/payment-page/payment";
    }

    
    public static function createReqParams()
    {
        return [
            'external_id',
            'order_id',
            'amount',
            'description',
            'is_customer_paying_fee',
            'customer_details',
            'item_details',
            'selected_channels',
            'billing_address',
            'shipping_address',
            'save_card',
            'callback_url',
            'success_redirect_url',
            'failed_redirect_url'
        ];
    }

    public static function updateReqParams()
    {
        return [];
    }

    
    public static function getVABanks()
    {
        $url = '/available_virtual_account_banks';

        return static::_request('GET', $url);
    }

    
    public static function getFVAPayment($payment_id)
    {
        $url = '/callback_virtual_account_payments/payment_id=' . $payment_id;

        return static::_request('GET', $url);
    }
}