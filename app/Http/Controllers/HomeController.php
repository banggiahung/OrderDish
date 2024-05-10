<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use App\Models\Meals;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class HomeController
{
    public function index() {

        return view('home.index');
    }
}
