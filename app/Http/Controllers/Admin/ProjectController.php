<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
 public function index()

 {
    $projects = Project::all();
    return view('admin.projects.index', compact('projects'));
 }

public function show(Project $project)
{
   return view('admin.projects.show', compact('project'));
}

public function create(Project $project)
{
   return view('admin.projects.create', compact('project'));
}


}
