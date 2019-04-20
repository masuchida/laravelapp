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
        //ログインユーザーのuser.idを取得
        $id = auth()->user()->id;
        //Userモデルから全データを取得
        $user = User::find($id);

        //ユーザーに紐づくタスクをforeach文で回し、
        foreach ($user->tasks as $task) {
             echo 'タスク名：' . $task->name . '<br>';
        }
    }

    public function store()
    {

    }

    public function destroy()
    {

    }
}
