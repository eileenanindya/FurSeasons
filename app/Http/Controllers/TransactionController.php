<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function processTransaction(Request $request)
    {
        Stripe::setApiKey(config('services.stripe.secret'));

        try {
            $charge = Charge::create([
                'amount' => $request->amount,
                'currency' => 'usd',
                'source' => $request->stripeToken,
                'description' => 'Transaction description',
            ]);

            // Simpan data ke database
            $transaction = new Transaction();
            $transaction->stripe_id = $charge->id;
            $transaction->amount = $charge->amount;
            $transaction->currency = $charge->currency;
            $transaction->status = $charge->status;
            $transaction->save();

            return response()->json(['message' => 'Transaction successful', 'data' => $transaction]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }
}
