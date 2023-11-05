<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;

class AdminController extends Controller
{
    public function index(): View | Factory
    {
        return view('admin.index');
    }
}
