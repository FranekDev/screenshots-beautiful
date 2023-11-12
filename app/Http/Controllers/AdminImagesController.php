<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class AdminImagesController extends Controller
{
    public function index()
    {
        return view('admin.images', [
            'images' => Image::all()
        ]);
    }
}
