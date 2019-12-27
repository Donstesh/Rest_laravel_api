<?php

namespace App\Http\Controllers\country;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\CountryModel;

class Countrycontroller extends Controller
{
    public function countries()
    {
        return response()->json(CountryModel::get(), 200);
    }
}
