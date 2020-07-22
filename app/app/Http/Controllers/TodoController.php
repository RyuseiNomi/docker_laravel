<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{

    public function index() {
        // DBよりTodoテーブルのレコードを全て取得
        $todos = Todo::all();

        return view('todo/index', compact('todos'));
    }
}
