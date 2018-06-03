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
        <img src="http://via.placeholder.com/150x150" alt="logo de prenom nom" class="va-t">
        <span>prenom nom</span>
      </div>
      <div>
        <img src="http://via.placeholder.com/30x30" alt="" class="va-m"> <span>(+33)7 85 59 80 48</span>
        <img src="http://via.placeholder.com/30x30" alt="" class="va-m"> <span>vincent.battez.pro@gmail.com</span>
      </div>
    </div>

    <div class="block-right">
      <div>DEVIS</div>
      <ul>
        <li>Date du devis: {{$todayHuman}}</li>
        <li>Devis n°: 002</li>
        <li>Référence: W002</li>
      </ul>
    </div>




    <p><b>Intitulé</b>: {{$devis->title}}</p>
    <p><b>Début de la prestation</b>: {{$prestation_start}}</p>
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
        <tr class="task">
          <td>
            <h3>Conception des Wireframes</h3>
            <ul>
              <li>Réflexion sur l’ergonomie du site web (UX)</li>
              <li>Schéma global du site web (sans design)</li>
            </ul>
          </td>
          <td>20h</td>
          <td>07/06/2018 (7 jours)</td>
          <td>300,00 €</td>
        </tr>
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