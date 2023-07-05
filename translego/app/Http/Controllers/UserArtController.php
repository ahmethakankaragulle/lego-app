<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as Image;

class UserArtController extends Controller
{
    public function create(\Illuminate\Http\Request $request)
    {
        $filename = (string) auth()->user()->id . "-" . now()->format('Y-m-dHis');
        $dataurl = "storage/arts/" . $filename . ".png";
        $image = Image::make($request->image)->encode('png');
        $image->save($dataurl);
        $pieces = $request->collect('data')->sum(function ($item) {
            return $item[3];
        });
        $request->user()->arts()->create([
            'image' => $dataurl,
            'data' => $request->data,
            'price' => $pieces * 0.2,
            'name' => "{$pieces} parça TransLego paketi"
        ]);

        return $request->user()->arts()->whereStatus(0)->get();
    }
}
