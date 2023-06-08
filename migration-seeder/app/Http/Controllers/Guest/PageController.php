<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
public function index(){
$trains = Train::all();
return view('home', compact('trains'));

}

   public function show($train_code)
{
    $train = Train::where('train_code', $train_code)->first();

    return view('details', compact('train'));
}



}