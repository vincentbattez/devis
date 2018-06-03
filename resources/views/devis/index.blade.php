@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    {{-- Listes des derniers devis --}}
    <div class="col-md-12">
      {{-- Card --}}
      <div class="card">
        {{-- Head --}}
        <div class="card-header">Listes des derniers devis</div>
        {{-- content --}}
        <div class="card-body">
          <ul>
            @foreach ($devis as $singleDevis)
              <li>title : {{$singleDevis->title}}</li>
              <li>type : {{$singleDevis->type}}</li>
              <li>prestation start : {{$singleDevis->prestation_start}}</li>
              <li>{{$singleDevis->working_time}}h / jours</li>
              <li>{{$singleDevis->working_price}}€ / heures</li>
              <li><a href="{{route('pdf.devis', ['id_devis' => $singleDevis->id])}}" class="btn btn-primary">PDF</a></li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
