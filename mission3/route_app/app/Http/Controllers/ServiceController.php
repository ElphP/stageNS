<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function create(Request $request)  {
        
        Service::create(["nom"=> $request->input('name')]);
        return "Donnée reçue et enregistrée dans la BDD: " . $request->input('name');  
    }
}