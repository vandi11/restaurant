<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuItemController extends Controller
{
    public function getFoods(){

        $foods = DB::table( "menuitems") -> get();

        return foods;
    }

    public function getFood() {

        $food = DB::table( "menuitems") -> where("name", "Tiramisu")->first();

        return food;
    }

    public function food() {

        //$food = DB::table("menuitems") -> where("id", 9) ->where("name", "Tiramisu") ->first();

        $food = DB:: table("menuitems") ->select("name as Név", "price as Ár") -> where("id",  9) ->first();
        return $food;
    }
}
