<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project

class ProjectController extends Controller
{
 public function index()

 {
    $project = Project::all();
    return view('admin.projects.index');
 };
}
