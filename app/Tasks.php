<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    protected $table = 'vbd_tasks';
    protected $fillable = [
        'id_devis',
        'title',
        'tasks',
        'duration',
        'type',
        'free',
        'category',
    ];
    protected $appends = [
        'calculs'
    ];

    public function devis() {
        return $this->belongsTo('App\Devis', 'id_devis');
    }

    public function getCalculsAttribute() {      
        $price         = $this->devis->working_price * $this->duration;
        $price_decimal = priceDecimal($price);
        $price_centime = priceCentime($price);
        $price_full    = $price_decimal .','. $price_centime;

        $day = round($this->duration / $this->devis->working_time, 0);

        $dayTotal       = 0;
        $dayTotal      += $day;
        $dayTotal_human = $this->devis->prestation_start->addDays($dayTotal)->format('d/m/Y');
        
        return (object) [
            'day'            => $day,
            'dayTotal'       => $dayTotal,
            'dayTotal_human' => $dayTotal_human,
            'price'          => (object) [
                    'full'      => $price_full,
                    'decimal'   => $price_decimal,
                    'centime'   => $price_centime,
            ]
        ];
    }

}
