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

    public function show_employee($id) {

        $employee = Employee::findOrFail($id);

        return view('pages.show_employee', compact('employee'));
    }

    public function show_task($id) {

        $task = Task::findOrFail($id);

        return view('pages.show_task', compact('task'));
    }
}
