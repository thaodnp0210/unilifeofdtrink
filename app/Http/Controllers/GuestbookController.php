<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guestbook;
use Cloudinary\Cloudinary;

class GuestbookController extends Controller
{
    public function store(Request $request)
    {
        $imagePath = null;

        if ($request->hasFile('image')) {
            $cloudinary = new Cloudinary([
                'cloud' => [
                    'cloud_name' => env('CLOUDINARY_CLOUD_NAME'),
                    'api_key' => env('CLOUDINARY_API_KEY'),
                    'api_secret' => env('CLOUDINARY_API_SECRET')
                ]
            ]);

            $upload = $cloudinary->uploadApi()->upload(
                $request->file('image')->getRealPath()
            );

            $imagePath = $upload['secure_url'];
        }
        
        Guestbook::create([
            'name' => $request->name ?? 'Ẩn danh',
            'message' => $request->message ?? null,
            'image' => $imagePath,
        ]);
        
        return redirect()->back()->with('scrollTo', 'section6');
    }
    // public function store(Request $request)
    // {
    //     dd($request->all());
    // }
}
