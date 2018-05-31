@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      {{-- Card --}}
      <div class="card">
        {{-- Head --}}
        <div class="card-header">Ajouter une tache</div>
        {{-- content --}}
        <div class="card-body">
          <form action="{{ action('CustomersController@store') }}" method="POST">
            @csrf
            {{-- ID OF CURRENT DEVIS --}}
            <input type="hidden" name="id_devis" value="1" required>

            <div class="form-row">
              {{-- title --}}
              <div class="form-group col-sm-6">
                <label for="title">title:</label>
                <input type="text" class="form-control" id="title" name="title" required>
              </div>
              {{-- duration --}}
              <div class="form-group col-sm-6">
                <label for="duration">duration (en heure):</label>
                <input type="number" class="form-control" id="duration" name="duration" required> 
              </div>
            </div>

            {{-- description tasks --}}
            <div class="form-row">
              <div class="form-group col-sm-12">
                <label for="tasks">description (tasks):</label>
                <textarea class="form-control" id="tasks" name="tasks" required></textarea>
              </div>
            </div>

            {{-- category --}}
            <div class="form-row">
              <div class="form-group col-sm-12">
                <label for="category">category:</label>
                <input type="text" class="form-control" id="category" name="category" required>
              </div>
            </div>

            {{-- free --}}
            <div class="form-row">
              <label for="free" class="mt-2 mr-3">payant</label>
              <label class="switch">
                <input type="checkbox" id="free" name="free" required>
                <span class="slider round"></span>
              </label>
              <label for="free" class="mt-2 ml-3">free</label>
            </div>
  

            {{-- SUBMIT --}}
            <button type="submit" class="btn btn-primary">Ajouter une tache</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
