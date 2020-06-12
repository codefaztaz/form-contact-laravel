<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CloudHostingProduct;
use Illuminate\Http\Response;

class HomeController extends Controller
{
  public function mail(Request $request)
  {

    // recibir por post los datos del formulario
    $json = $request->input('json', null);
    $params_array = json_decode($json, true);


       Mail::to('kevincorreo66@gmail.com')->
       send(new CloudHostingProduct($params_array ));
       return back()->with('success', 'Thanks for contacting us!');
    }






}
