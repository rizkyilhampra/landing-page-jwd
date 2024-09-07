<?php

namespace App\Http\Controllers;

use App\Models\VisiMisi;

class VisiMisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('visi-misi', [
            'visiMisi' => VisiMisi::first(),
        ]);
    }
}
