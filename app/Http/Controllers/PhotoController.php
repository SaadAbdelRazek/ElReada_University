<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{

    public function viewUploadPhotos($id){
        return view('admin.add-news-photos',compact('id'));
    }
    public function uploadNewsPhotos(Request $request,$id)
    {
        $request->validate([
            'photos.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $photo) {
                $path = $photo->store('photos', 'public');

                Photo::create([
                    'photo' => $path,
                    'type' => 'news',
                    'external_id' => $id,
                ]);
            }
        }

        return back()->with('success', 'تم رفع الصور بنجاح!');
    }
}
