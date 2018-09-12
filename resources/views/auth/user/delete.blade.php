@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal" method="DELETE" action="{{ route('deleteAccount') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-danger">
                            Change Password
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
