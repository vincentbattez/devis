@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      {{-- Card --}}
      <div class="card">
        {{-- Head --}}
        <div class="card-header">Ajouter un customer</div>
        {{-- content --}}
        <div class="card-body">
          <form action="{{ action('CustomersController@store') }}" method="POST">
            @csrf


            <div class="form-row">
              {{-- firstname --}}
              <div class="form-group col-sm-4">
                <label for="firstname">firstname:</label>
                <input type="text" class="form-control" id="firstname" name="firstname">
              </div>
              {{-- lastname --}}
              <div class="form-group col-sm-4">
                <label for="lastname">lastname:</label>
                <input type="text" class="form-control" id="lastname" name="lastname">
              </div>
              {{-- gender --}}
              <div class="form-group col-sm-4">
                <label>gender:</label>                
                <select class="custom-select" name="gender">
                  <option selected value="1">male</option>
                  <option value="2">female</option>
                </select>
              </div>
            </div>


            <div class="form-row">
              {{-- birthday --}}
              <div class="form-group col-sm-6">
                <label for="birthday">birthday:</label>
                <input type="date" class="form-control" id="birthday" name="birthday">
              </div>
              {{-- nationality --}}
              <div class="form-group col-sm-6">
                <label for="nationality">nationality:</label>
                <input type="text" class="form-control" id="nationality" name="nationality">
              </div>
            </div>


            <div class="form-row">
              {{-- email --}}
              <div class="form-group col-sm-6">
                <label for="email">email:</label>
                <input type="email" class="form-control" id="email" name="email">
              </div>
              {{-- phone --}}
              <div class="form-group col-sm-6">
                <label for="phone">phone:</label>
                <input type="tel" class="form-control" id="phone" name="phone">
              </div>
            </div>


            <div class="form-row">
              {{-- company_name --}}
              <div class="form-group col-sm-6">
                <label for="company_name">company_name:</label>
                <input type="text" class="form-control" id="company_name" name="company_name">
              </div>
              {{-- job --}}
              <div class="form-group col-sm-6">
                <label for="job">job:</label>
                <input type="text" class="form-control" id="job" name="job">
              </div>
            </div>

            
            {{-- county --}}
            <div class="form-row">
              <div class="form-group col-sm-4">
                <label for="county">county:</label>
                <input type="text" class="form-control" id="county" name="county">
              </div>
              {{-- region --}}
              <div class="form-group col-sm-4">
                <label for="region">region:</label>
                <input type="text" class="form-control" id="region" name="region">
              </div>
              {{-- city --}}
              <div class="form-group col-sm-4">
                <label for="city">city:</label>
                <input type="text" class="form-control" id="city" name="city">
              </div>
            </div>

            {{-- postal --}}
            <div class="form-row">
              <div class="form-group col-sm-6">
                <label for="postal">postal:</label>
                <input type="text" class="form-control" id="postal" name="postal">
              </div>
              {{-- address --}}
              <div class="form-group col-sm-6">
                <label for="address">address:</label>
                <input type="text" class="form-control" id="address" name="address">
              </div>
            </div>


            {{-- SUBMIT --}}
            <button type="submit" class="btn btn-primary">Ajouter un customer</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
