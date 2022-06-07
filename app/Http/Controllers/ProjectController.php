<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function project(Project $project)
    {
        $projects =  $projects = Project::where('id','<>',$project->id)->take(2)->get();
        return view('projects.project',compact('project','projects'));
    }

    public function list()
    {
        $projects = Project::all();

        return view('projects.list' , compact('projects'));
    }
}
