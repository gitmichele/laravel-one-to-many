<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Task;

class HomeController extends Controller
{
    public function index() {

    $employees = Employee::all();

    return view('pages.home', compact('employees'));
    }
}
