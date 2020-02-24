<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{

    public function index()
    {
        $title = 'Home';
        return view('pages.index')->with('title', $title);
    }

    public function dashboard()
    {
        $title = 'Dashboard';
        return view('pages.dashboard')->with('title', $title);
    }

    public function upload()
    {
        $title = 'Upload';
        return view('pages.upload')->with('title', $title);
    }

    public function about()
    {
        $title = 'About';
        return view('pages.about')->with('title', $title);
    }

    public function review()
    {
        $title = 'Review';
        return view('pages.review')->with('title', $title);
    }

    public function users()
    {
        $users = DB::table('users')->get();
        return view('pages.users')->with('users', $users);
    }


    public function reports()
    {
            $title = 'Reports';
            return view('pages.reports')->with('title', $title);
    }


    public function integrations()
    {
            $title = 'Integrations';
            return view('pages.integrations')->with('title', $title);
    }
}
