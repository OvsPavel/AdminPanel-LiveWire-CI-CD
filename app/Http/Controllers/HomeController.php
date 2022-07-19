<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Station;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $stations = Station::all();
        return view('index', compact('stations'));
    }

    public function objects($id)
    {
        $station = Station::find($id);
        $objects = $station->objects;

        return view('objects', compact('objects', 'station'));

    }

    public function usersAdmin()
    {
        $admins = User::where('role_id', 1)->get();

        return view('usersAdmin', compact('admins'));
    }

    public function roles()
    {
        $roles = Role::all();

        return view('roles', compact('roles'));
    }
}
