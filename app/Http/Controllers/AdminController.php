<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Filesystem\Filesystem;

class AdminController extends Controller
{
    public function index(): View | Factory
    {
        return view('admin.index', [
            'users' => User::count(),
            'images' => Image::count(),
            'imagesSize' => $this->getImagesSize(),
            'maxImagesSize' => 5
        ])->with('success', 'You are now an admin.');
    }

    private function getImagesSize()
    {
        $fileSystem = new Filesystem();
        $size = 0;
        $files = $fileSystem->allFiles('storage/usersImages');
        foreach ($files as $file) {
            $size += $file->getSize();
        }
        return round($size / (1024 * 1024 * 1024), 2);
    }
}
