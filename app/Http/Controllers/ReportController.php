<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function reportPage(){
        return view('pages.dashboard.report-page');
    }
}
