<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(Project $project) {
        return $project->all();
    }

    public function store(Project $project) {
        $project::create(request(['title', 'description']));

        return redirect('/projects');
    }
}
