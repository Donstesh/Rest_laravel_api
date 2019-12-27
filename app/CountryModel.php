<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CountryModel extends Model
{   
   
    protected $table = "_z_country";

    protected $fillable = [
        /*'country_name',
        'population'
        */
        'iso',
        'name',
        'dname',
        'iso3',
        'position',
        'numcode',
        'phonecode',
        'created',
        'registred_by',
        'modified',
        'modified_by',
    ];
}
