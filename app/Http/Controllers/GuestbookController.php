<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guestbook;

class GuestbookController extends Controller
{
    public function store(Request $request)
    {
        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('guestbook', 'public');
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
