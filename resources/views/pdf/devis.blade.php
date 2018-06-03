<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<style>
  .A4 {
    max-width: 21cm;
    min-width: 21cm;
    width:     21cm;
    position: relative;
  }
  table {
    width:100%
  }

  td > ul {
    margin: 0;
  }

  td, th {
    padding: 10px;
  }

  .va-t {
    vertical-align: top;
  }
  .va-m {
    vertical-align: middle;
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
</style>
<body class="A4">
  <div class="main" style="background: grey;">

    <div class="block-left va-t">
      <div>
        <img src="{{$devis->user->logo}}" alt="logo de prenom nom" class="va-t">
        <span>{{$devis->user->firstname}} {{$devis->user->lastname}}</span>
      </div>
      <div>
        <img src="http://via.placeholder.com/30x30" alt="" class="va-m"> <span>{{$devis->user->phone}}</span>
        <img src="http://via.placeholder.com/30x30" alt="" class="va-m"> <span>{{$devis->user->email}}</span>
      </div>
    </div>

    <div class="block-right">
      <div>DEVIS</div>
      <ul>
        <li>Date du devis: {{$devis->human->created_at}}</li>
        <li>Devis n°: {{$devis->id}}</li>
        <li>Référence: {{$devis->nb_type}}</li>
      </ul>
    </div>




    <p><b>Intitulé</b>: {{$devis->title}}</p>
    <p><b>Début de la prestation</b>: {{$devis->human->prestation_start}}</p>
    <table>
      <thead>
        <tr style="text-align:left;">
          <th>Description</th>
          <th>Heures</th>
          <th>Date de livraison théorique</th>
          <th>Montant</th>
        </tr>
      </thead>
      {{-- TASK --}}
      <tbody class="tasks">
        @php($i = 0)
        @php($totalDay = 0)
        @foreach ($devis->tasks as $task)
          @php($totalDay += $task->calculs->day)
          <tr class="task">
            <td>
              <h3 class="titre">{{ $task->title }}</h3>
              {!! $task->tasks !!}
            </td>
            <td class="duration">{{ $task->duration }}h</td>
            <td class="date">{{$task->devis->prestation_start->addDays($totalDay)}} ({{$task->calculs->day}} jours)</td>
            <td class="price">{{$devis->working_price * $task->duration }}€</td>
          </tr>
          @php($i++)
        @endforeach
      </tbody>
      <tfoot>
        <tr>
          <th>Date de livraison théorique :</th>
          <td>16 juin 2019 <small>(23 jours)</small></td>
        </tr>
        <tr>
          <th>Montant total prévisionnel :</th>
          <td>2313 €</td>
        </tr>
      </tfoot>

    </table>
  </div>
</body>
</html>