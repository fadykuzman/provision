@extends('layouts.app')

@section('style')
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Hey {{ $user->name }}, you are logged in!
                </div>

                <div class="card-body">
                  <a href="/changePassword"
                  >Change Password</a>
                </div>

                <div class="card-body">
                    <a href="/deleteAccount">Delete my Account</a>
                </div>

            </div>

            <hr>

            <div class="card">
                <div class="card-header">Manage Subscription</div>
                    @if (!$user->subscribed('main'))
                    <div class="card-body">
                      <a href="/subscriptions"
                      >Subscribe</a>
                    </div>
                    @else
                    <div class="card-body">
                        You are subscribed to: {{$plan->nickname}}
                    </div>
                    <div class="card-body">
                      <a href="/subscriptions"
                      >Change my Subscription</a>
                    </div>
                      @if (!$user->subscription('main')->onGracePeriod())
                      <div class="card-body">
                        <a href="{{ route('cancel_subscription')}}"
                        >Cancel My Subscription</a>
                      </div>
                      @else
                      <div class="card-body">
                        <a href="{{route('resume_subscription')}}">Resume My Subscription</a>
                      </div>
                      @endif
                    @endif
                    @if ($user->subscribed('main'))
                    <div class="card-body">
                      <a href="{{route('delete_subscription')}}">Cancel My Subscription Now</a>
                    </div>
                    @endif
            </div>

            <hr>

            <div class="card">
                <div class="card-header">Other Options</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>

                <div class="card-body">
                    <div class="dropdown">
                      <button class="dropbtn">Select Currency</button>
                      <div class="dropdown-content">
                        <a href="#" value="€, eur">Euros</a>
                        <a href="#">Dollars</a>
                        <a href="#">Zlotys</a>
                      </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="dropdown">
                      <button class="dropbtn">SelectDate Format</button>
                      <div class="dropdown-content">
                        <a href="#">mm-dd-yyyy</a>
                        <a href="#">dd-mm-yyy</a>
                        <a href="#">yyyy-mm-dd</a>
                      </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
