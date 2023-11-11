<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;

class AdminController extends Controller
{
    public function index(): View | Factory
    {
        return view('admin.index', [
            'users' => User::count(),
            'images' => Image::count()
        ]);
    }
}
