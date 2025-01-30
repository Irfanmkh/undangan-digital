<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\template;
use Illuminate\Http\Request;
use App\Services\XenditService;

class CheckoutController extends Controller
{
    //

    public function show (template $template){

        return view('checkout', compact('template'));
        
    }

    public function proccess (Request $request, template $template){

        $request->validate([
            'nama_customer'=>'required|string',
            'email_customer'=>'required|email',
        ]);

        $order = order::create([
            'template_id' => $template->id,
            'nama_customer' => $request->nama_customer,
            'email_customer' => $request->email_customer,
            'total_harga' => $template->harga,
            'status' => 'pending',

        ]);

          // Generate link pembayaran Xendit
        $paymentUrl = XenditService::createInvoice($order);

        // Update order dengan link pembayaran
        $order->update(['link_pembayaran' => $paymentUrl]);

        // Redirect user ke halaman pembayaran
        return redirect($paymentUrl);

        return redirect()->route('payment', ['order' => $order->id]);
    }
}
