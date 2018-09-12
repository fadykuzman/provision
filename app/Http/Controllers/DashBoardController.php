<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashBoardController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
  {
      $user = auth()->user();

      if($user->subscribed('main'))
      {
          $plan_id = $user->subscription('main')->stripe_plan;
          \Stripe\Stripe::setApiKey(config('services.stripe.secret'));
          $plan = \Stripe\Plan::retrieve($plan_id);
      }


      return view('dashboard.main', compact('user', 'plan'));
  }
}
