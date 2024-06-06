<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\User;
use App\Notifications\InvoicePaid;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function sendNotification($invoiceId)
    {
        $invoice = Invoice::findOrFail($invoiceId);
        $user = $invoice->user; // Assuming the invoice belongs to a user

        // Send the notification
        $user->notify(new InvoicePaid($invoice));

        return response()->json(['message' => 'Notification sent successfully.']);
    }
}
