@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($plans as $plan)
                <div class="card">
                    <div class="card-header">
                        <a href="/charge/{{$plan->id}}">{{$plan->nickname}}</a>
                    </div>
                    <div class="card-body">
                        {{($plan->amount / 100)}} {{ $plan->currency}} per {{$plan->interval}}
                    </div>
                    <hr>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
