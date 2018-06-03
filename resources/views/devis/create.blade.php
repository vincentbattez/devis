@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <form action="{{ action('DevisController@store') }}" method="POST">
        @csrf   
        
        {{-- ADD DEVIS --}}
        <div class="card">
          <div class="card-header">Devis</div>
          <div class="card-body">
            <div class="form-row">
              <div class="form-group col-sm-12">
                <label for="cgu">Choisir le client</label>
                <select name="devis-id_customer" id="devis-id_customer" class="form-control" required>
                  @foreach ($customers as $customer)
                    <option value="{{$customer->id}}">{{$customer->firstname}} {{$customer->lastname}} ({{$customer->company_name}})</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-sm-6">
                <label>Type des livrables:</label>
                <input type="text" name="devis-type" class="form-control" list="devis-type" required>
                <datalist id="devis-type">
                  @foreach ($listDevisType as $devisType)
                    <option value="{{$devisType->type}}"></option>
                  @endforeach
                </datalist>
              </div>
              <div class="form-group col-sm-6">
                <label>Intitulé du devis</label>
                <input type="text" name="devis-title" class="form-control" required>
              </div>
            </div>
            <div class="form-row">            
              <div class="form-group col-sm-6">
                <label>Date du début de la prestation</label>
                <input type="date" name="devis-prestation_start" class="form-control" required>
              </div>
              <div class="form-group col-sm-6">
                <label>Nombre d'heure de travail par jour</label>
                <input type="number" name="devis-working_time" class="form-control" required max="24">
              </div>
            </div>
          </div>
        </div>


        {{-- ADD TACHES --}}
        <div class="card">
          <div class="card-header">Tâches</div>
          <div class="card-body">
            @addTask
            @endaddTask
          </div>
        </div>


        {{-- ADD CGU --}}
        <div class="card mt-3">
          <div class="card-header">CGU</div>
          <div class="card-body">
            <div class="form-row">
              <div class="col-sm-12">
                <label for="cgu">Choisir le CGU</label>
                <select name="cgu" id="cgu" class="form-control" required>
                  @foreach ($cgus as $cgu)
                    <option value="{{$cgu->id}}">{{$cgu->type}}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
        </div>

        {{-- SUBMIT --}}
        <button type="submit" class="btn btn-primary">Créer le devis</button>
      </form>
    </div>
  </div>
</div>
@endsection
