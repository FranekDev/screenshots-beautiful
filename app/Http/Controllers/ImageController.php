<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ImageController extends Controller
{
    public function store()
    {
        request()->validate([
            'image' => ['required', 'image']
        ]);

        $image = Image::create([
            'user_id' => auth()->id(),
            'name' => Storage::disk('public')->put('usersImages', request()->file('image'))
        ]);

//        return redirect()->route('/create', ['image' => $image])->with('success', 'Image uploaded');
        return redirect("/image/show/{$image->id}")->with('success', 'Image uploaded');
//        return view('image.show', [
//            'image' => $image
//        ]);
    }

    public function delete()
    {
        //
    }

    public function update()
    {
        //
    }

    public function show(Image $image): View
    {
        return view('image.show', [
            'image' => $image
        ]);
    }
}
