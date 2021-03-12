<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImagesRequest;
use App\Repositories\ImagesRepositoryInterface;

class ImagesController extends Controller
{
    public function create()
    {
        return view('photo');
    }
 
    public function store(ImagesRequest $request, ImagesRepositoryInterface $imagesRepository )
    {
         
        $imagesRepository->save($request->image);

        return view('photo_uploaded');
    }
}
