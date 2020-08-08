<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateProjectController extends Controller
{
    public function index()
        {
            $projects = Project::all();
            return view('project.create', ['projects' => $projects]);
            dd($projects);
        }
}
