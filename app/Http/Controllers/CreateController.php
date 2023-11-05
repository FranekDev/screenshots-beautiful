<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function index()
    {
        return view('image.create', [
            'image' => Image::latest()
        ]);
    }

}
