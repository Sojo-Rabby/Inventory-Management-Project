<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function salePage(){
        return view('pages.dashboard.sale-page');
    }
}
