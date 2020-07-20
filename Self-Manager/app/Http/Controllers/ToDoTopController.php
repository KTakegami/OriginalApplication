<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToDoTopController extends Controller
{
  public function top()
  {
    return view('todo');
  }
}
