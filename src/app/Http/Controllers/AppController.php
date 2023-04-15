<?php

namespace App\Http\Controllers;

use App\Models\AppModel;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index(){
        $data = new AppModel();
        $data->name = "chamith";
        $data->age = 13;
        $data->save();

        // $all = AppModel::all();

        return view('home');
    }
}
