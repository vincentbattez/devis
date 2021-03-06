<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  {{-- <link href="https://fonts.googleapis.com/css?family=Rubik:300,regular,500,700,900" rel="stylesheet" /> --}}
</head>
<style>
  /* latin */
  @font-face {
    font-family: 'Rubik';
    font-style: normal;
    font-weight: 300;
    src: local('Rubik Light'), local('Rubik-Light'), url({{ asset('fonts/Rubik-Light.ttf') }}) format('truetype');
  }
  /* latin */ 
  @font-face {
    font-family: 'Rubik';
    font-style: normal;
    font-weight: 400;
    src: local('Rubik'), local('Rubik-Regular'), url({{ asset('fonts/Rubik-Regular.ttf') }}) format('truetype');
  }
  /* latin */
  @font-face {
    font-family: 'Rubik';
    font-style: normal;
    font-weight: 500;
    src: local('Rubik Medium'), local('Rubik-Medium'), url({{ asset('fonts/Rubik-Medium.ttf') }}) format('truetype');
  }
  /* latin */
  @font-face {
    font-family: 'Rubik';
    font-style: normal;
    font-weight: 700;
    src: local('Rubik Bold'), local('Rubik-Bold'), url({{ asset('fonts/Rubik-Bold.ttf') }}) format('truetype');
  }
  /* latin */
  @font-face {
    font-family: 'Rubik';
    font-style: normal;
    font-weight: 900;
    src: local('Rubik Black'), local('Rubik-Black'), url({{ asset('fonts/Rubik-Black.ttf') }}) format('truetype');
  }
  html, body {
    height: 100%;
  }
  body {
    position: relative;
  }
  .page-break {
      page-break-after: always;
  }
  *:not(ul) {
    padding:     0;
    margin:      0;
    font-family: 'Rubik';
    font-size:   16px;
    font-weight: 400;
  }

  b {
    font-weight: 600;
  }

  ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  li {
    padding-left: 1em; 
    text-indent: -1.8px;
  }

  li::before {
    content:      "•";
    color:        #2f64d3;
    font-size:    21px;
    line-height:  8px;
    text-indent:  0px;
    display:      inline-block;
    margin-right: 5px;
    margin-left:  -11px;
  }
  .A4 {
    max-width: 21cm;
    min-width: 21cm;
    width:     21cm;
    position:  relative;
    margin: auto;
  }
  table {
    width:100%;
    border-collapse:collapse;
  }

  td > ul {
    padding-left: 15px;
  }

  td ul li:not(:last-child) {
    margin-bottom: 5px;
  }

  tbody tr:nth-child(even) {
    background-color: rgba(46, 101, 211, .07);
  }

  td, th {
    padding: 20px 10px;
  }

  th {
    text-align: center;
    font-weight: 500;
  }
  th:first-child {
    text-align: left;
  }

  .task:last-child ul {
    margin-bottom: 0;
  }

  thead,
  tfoot{
    color: white;
    background-color: #2E65D3;
  }
  /* tbody tr:not(:last-child):not(.free) td {
    padding-bottom: 0;
  } */

  tfoot td {
    text-align: right;
    background-color: #3458B8;
  }
  tfoot th {
    text-align: right !important;
  }
  .nb-day {
    font-size: 12px;
  }

  .va-t {
    vertical-align: top;
  }
  .va-m {
    vertical-align: middle;
  }
  .va-b {
    vertical-align: bottom;
  }

  .block-left {
    width: 60%;
    display: inline-block;
    position: relative;
    vertical-align: top;
  }

  .block-right {
    position: absolute;
    top: 0;
    right: 0;
  }
  
  .block-right td, .block-right th {
    padding: 5px 0;
  }

  .block-right tr {
    background-color: transparent !important;
  }

  .block-right th {
    padding-right: 20px;
  }

  .price {
    text-align: right;
    font-weight: 500;
  }
  .duration,
  .date {
    text-align: center;
  }

  .titre:not(:last-child) {
    margin-bottom: 10px;
  }
  .titre {
    margin: 0;
    font-weight: 500;
  }

  .free {
    color: #1DB100;
    background-color: #F2FFF7;
  }
  .free .price {
    text-transform: uppercase;
  }
  .devis-header {
    margin-top: 100px;
    padding-top: 15px;
    position: relative;
  }
  .devis-header:before {
    content:    '';
    position:   absolute;
    top:        0;
    left:       0;
    width:      300px;
    height:     4px;
    background: #2f64d3;
    display:    inline-block;
  }
  .devis-title,
  .devis-prestation_start {
    margin-bottom: 15px;
  }

  /*———————————————————————————————————*\
      $ USER
  \*———————————————————————————————————*/
  .user {
    /* display: flex; */
  }

  .user-info p{
    display: inline-block;
  }
  .user-info p:not(:last-child){
    margin-right: 40px;
  }

  .user-name {
    font-size: 25px;
  }

  .user-job {
    font-size: 20px;
  }

  .user-text {
    display: inline-block;
  }

  .user-logo {
    width: 100px;
    height: 100px;
    vertical-align: -20px;
  }

  .user-info img, .user-email img {
    margin-right: 15px;
  }

  .user-info img {
    width: 35px;
    height: 35px;
  }

  .user-email img{
    width: 45px;
    height: 45px;
  }

  .type {
    background:     #2E65D3;
    text-align:     center;
    padding:        40px 0;
    color:          white;
    font-size:      25px;
    font-weight:    500;
    letter-spacing: 8px;
  }

  .date-start {
    color:       #2f65d3;
    font-weight: bold;
  }
  
  b {
    font-weight: 500;
  }


</style>
<body class="A4">
  <div class="main">

    <div class="block-left">
      <div class="user">
        <img class="user-logo" src="{{ asset('img/'.$devis->user->logo.'') }}" alt="logo de prenom nom">
        <div class="user-text">
          <p class="user-name">{{$devis->user->firstname}} {{$devis->user->lastname}}</p>
          <p class="user-job">{{$devis->user->job}}</p>
        </div>
      </div>
      <div class="user-info">
        <p class="user-phone">
          <img src="{{ asset('img/icon-phone.png') }}" class="va-m"> <span>{{$devis->user->phone}}</span>
        </p>
        <p class="user-email">
          <img src="{{ asset('img/icon-email.png') }}" class="va-m"> <span>{{$devis->user->email}}</span>
        </p>
      </div>
    </div>

    <div class="block-right">
      <div class="type">DEVIS</div>
      <table>
        <tr>
          <th>Date du devis:</th>
          <td>{{$devis->human->created_at}}</td>
        </tr>
        <tr>
          <th>Devis n°:</th>
          <td>{{$devis->id}}</td>
        </tr>
        <tr>
          <th>Référence:</th>
          <td>{{$devis->nb_type}}</td>
        </tr>
      </table>
    </div>

    <div class="devis-header">
      <p class="devis-title"><b>Intitulé: </b>{{$devis->title}}</p>
      <p class="devis-prestation_start"><b>Début de la prestation: </b><span class="date-start">{{ $devis->human->prestation_start }}</span></p>
    </div>


    <table>

      <thead>
        <tr style="text-align:left;">
          <th>Description</th>
          <th>Durée</th>
          <th>Date de livraison théorique</th>
          <th>Montant</th>
        </tr>
      </thead>
      
      {{-- TASK --}}
      <tbody class="tasks">
        @foreach ($devis->tasks as $task)
          <tr class="task{{ ($task->free === 0) ? '' : ' free' }}">
            <td {{ ($task->free === 0) ? '' : 'colspan=3' }}>
              <h3 class="titre">{{ $task->title }}</h3>
              {!! $task->tasks !!}
            </td>
            @if($task->free === 0)
              <td class="duration">{{ $task->duration }}h</td>
              <td class="date">{{ $task->calculs->dayTotal_human }} <small class="nb-day">({{ $task->calculs->day }} jours)</small></td>
              <td class="price">{{ $task->calculs->price->full }} €</td>
            @else
              <td class="price">Gratuit</td>
            @endif
          </tr>
        @endforeach
      </tbody>

      <tfoot>
        <tr>
          <th colspan="2">Date de livraison théorique :</th>
          <td colspan="2">{{ $devis->calculs->day_human }} <small class="nb-day">({{ $devis->calculs->day }} jours)</small></td>
        </tr>
        <tr>
          <th colspan="2">Montant total prévisionnel :</th>
          <td colspan="3" class="price">{{ $devis->calculs->price->decimal }},{{ $devis->calculs->price->centime }} €</td>
        </tr>
      </tfoot>

    </table>
  </div>
</body>
</html>