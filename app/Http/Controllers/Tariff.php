<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Tariff extends Controller
{

    public function del(Request $request)
    {
        $data = DB::table('tariff')->where('name', $request->name);
        if ($data) {
            return redirect('/dashboard/tariff');
        }

    }





    public function run(Request $request)
    {
        $data = DB::table('tariff')->insert([
           'name' => $request->name,
           'cost' => $request->cost,
           'desc' => $request->desc,
           'from_public' => date_create()->format('Y-m-d H:i:s'),
           'to_public' => date_create()->format('Y-m-d H:i:s')
       ]);
     if ($data) {
           return redirect('/dashboard/tariff');
       }

    }




}