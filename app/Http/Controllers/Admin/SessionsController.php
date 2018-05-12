<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class SessionsController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->middleware("guest", ["except" => "destroy"]);
    }

    public function index()
    {
        return view("admin/sessions/index");
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            "email" => "required|email",
            "password" => "required",
        ]);

        $credentials = $request->only(["email", "password"]);
        $rememberMe = $request->has("remember_me");

        if (Auth::attempt($credentials, $rememberMe)) {
            return redirect("/admin");
        }

        return redirect()->back()->withErrors([
            "message" => trans("admins.sessions.messages.login_invalid"),
        ]);
    }

    public function destroy()
    {
        Auth::logout();

        return redirect("/admin/login");
    }
}
