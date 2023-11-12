<?php

namespace App\Http\Controllers;

use App\Enums\Role;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminImagesController extends Controller
{
    public function index()
    {

//        ddd(auth()->check() && auth()->user()->role === Role::ADMIN);
//        ddd(Role::ADMIN->value);
        return view('admin.images', [
            'images' => Image::all()
        ]);
    }

    public function destroy(Image $image)
    {
        Storage::disk('public')->delete($image->name);

        $image->delete();

        return back()->with('success', 'Image Deleted.');
    }
}
