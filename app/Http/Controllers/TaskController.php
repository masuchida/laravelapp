<?php

namespace App\Http\Controllers;

use App\Models\User;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $id = auth()->user()->id;
        $user = User::find($id);

        return view('tasks.index', compact('user'));
    }

    public function store()
    {

    }

    public function destroy()
    {

    }
}
