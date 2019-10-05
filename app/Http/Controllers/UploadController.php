<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UploadRequest;

class UploadController extends Controller
{
    public function uploadBoutiqueForm()
    {
        return view('upload_boutique_form');
    }

    public function uploadBoutiqueSubmit(UploadRequest $request)
    {
        // Coming soon...
    }
}
