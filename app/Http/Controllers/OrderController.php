<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function sendEmail($orderId)
    {
        $order = Order::findOrFail($orderId);

        // Send the email to the order's user
        Mail::to($order->user->email)->send(new OrderShipped($order));

        return response()->json(['message' => 'Email sent successfully.']);
    }
}
