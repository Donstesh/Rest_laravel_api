<?php

namespace App\Http\Controllers\country;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\CountryModel;
use App\StdntrgstModel;

class Countrycontroller extends Controller
{
    public function countries()
    {
        return response()->json(CountryModel::get(), 200);
    }
    public function students_register()
    {
        return response()->json(StdntrgstModel::get(), 200);
    }
}
