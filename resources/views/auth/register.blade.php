@extends('layouts.app')
@section('content')


<form method="POST" action="{{ route('register') }}">
  
  @csrf
  <label for="email">email</label>
  <input type="text" name="email" id="email">

  <label for="password">password</label>
  <input type="password" name="password" id="password">


  <label for="password-confirm" >Confirm Password</label>
  <input id="password-confirm" type="password" name="password_confirmation" required>

  <label for="company">company</label>
  <input type="text" name="company" id="company">

  <label for="job">job</label>
  <input type="text" name="job" id="job">

  <label for="phone">phone</label>
  <input type="tel" name="phone" id="phone">

  <label for="address">address</label>
  <input type="text" name="address" id="address">

  <input type="submit">

  {{$errors}}
</form>


@endsection
