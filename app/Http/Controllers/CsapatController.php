<?php

namespace App\Http\Controllers;

use App\Models\Csapat;
use Illuminate\Http\Request;

class CsapatController extends Controller
{
    public function index()
    {
        $csapatok=Csapat::all();
        return view("csapat.index", [
            "csapatok" => $csapatok
        ]);
    }
}
