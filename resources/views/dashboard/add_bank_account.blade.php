@extends('layouts.app')


@section('content')
<h1>Add Bank Account</h1>
<hr>
<form method="POST" action="">
  @csrf
  <div class="form-group">
    <label for="bank_name">Bank Name</label>
    <input type="text" class="form-control" id="bank_name">
  </div>
  <div class="form-group">
    <label for="account_holder">Account holder</label>
    <input type="text" class="form-control" id="account_holder">
  </div>
  <div class="form-group">
    <label for="iban">IBAN</label>
    <input type="text" class="form-control" id="iban">
  </div>
  <button type="submit" class="btn btn-primary">Add Account</button>
</form>
@endsection
