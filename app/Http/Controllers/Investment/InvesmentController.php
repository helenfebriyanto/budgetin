<?php

namespace App\Http\Controllers\Investment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvesmentController extends Controller
{
    public function index()
    {
        return view('pages.investment.investment', ['title' => 'Investment']);
    }
}
