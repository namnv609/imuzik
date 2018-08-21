<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Album;

class AlbumsController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(Request $request)
    {
        $albums = Album::orderBy("id", "desc")->paginate(10);

        return view("admin/albums/index", compact("albums"));
    }
}
