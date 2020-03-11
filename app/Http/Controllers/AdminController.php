<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Topic;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $topics = Topic::all();

        return view('admin.dashboard', compact('topics'));
    }

    public function getUsers(User $user)
    {
        return view('admin.show_user', compact('user'));
    }
}
