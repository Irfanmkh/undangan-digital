<?php

namespace App\Services;
use GuzzleHttp\Client;
use Xendit\Invoice\InvoiceApi;
use Xendit\Invoice\CreateInvoiceRequest;

class XenditService{

    public static function createInvoice($order)
    {
        
        
        
        $invoiceRequest = new CreateInvoiceRequest([

            'external_id' => 'order -'. $order->id,
            'payer_email' => $order->email_customer,
            'desc'=>'pembayaran untuk template: '. $order->template->nama,
            'amount' => $order->total_harga,
            'success_redirect_url' => url('/payment-success'),
            'failure_redirect_url' => url('/payment-failed'),
        ]);
        // $client = new Client([
        //     'verify' => false, // Disable SSL certificate verification
        // ]);

       
        $apiInstance = new InvoiceApi();
        $generateInvoice= $apiInstance->createInvoice($invoiceRequest);

        

        return dd($generateInvoice);
    }
}