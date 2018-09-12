<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubscriptionsController extends Controller
{

    public function index()
    {
        \Stripe\Stripe::setApiKey(config('services.stripe.secret'));
        $plans = \Stripe\Plan::all()->data;


        return view('subscriptions.main', compact('plans'));
    }

    public function cancel()
    {
        $user = auth()->user();
        $user->subscription('main')->cancel();

        return redirect()->back();
    }

    public function resume()
    {
        $user = auth()->user();
        $user->subscription('main')->resume();

        return redirect()->back();
    }

    public function destroy()
    {
        $user = auth()->user();
        $user->subscription('main')->cancelNow();

        return redirect()->back();
    }
}
