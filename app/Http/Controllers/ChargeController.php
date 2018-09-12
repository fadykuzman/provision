<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ChargeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($plan_id)
    {
        return view('stripe', compact('plan_id'));
    }

    public function store(Request $request)
    {
        $stripeToken = $request->get('stripeToken');

        $plan_id = $request->get('plan_id');

        $user = auth()->user();


        if(! $user->subscribed('main'))
        {
            $user->newSubscription('main', $plan_id)
                 ->create($stripeToken);
        }
        else
        {
            if(! $user->subscribedToPlan($plan_id, 'main'))
            {
                $user->subscription('main')->swap($plan_id);
            }

        }

        return redirect('dashboard');
    }
}
