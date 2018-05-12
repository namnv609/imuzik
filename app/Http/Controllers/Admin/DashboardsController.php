<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardsController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        return view("admin/dashboards/index");
    }
}
