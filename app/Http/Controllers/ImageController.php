<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

        return redirect("/image/show/{$image->id}")->with('success', 'Image uploaded');
    }

    public function delete()
    {
        //
    }

    public function update()
    {
        //
    }

    public function show(Image $image)
    {
        return view('image.show', [
            'image' => $image
        ]);
    }
}
