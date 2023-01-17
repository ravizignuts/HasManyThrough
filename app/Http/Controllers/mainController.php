<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\project;
use app\Models\environment;
use app\Models\deployment;

class mainController extends Controller
{
    public function addProject()
    {
        $project = new project();
        $project->name ="Hotel Management";
        $project->save();
        return "Project Add Successfully";
    }
    public function addEnvironment($id)
    {
        $project = project::find($id);
        $environment = new environment();
        $environment->name = 'JAVA';
        $project->environmet()->save($id);
        return 'Project Added Succesfully';
    }
    public function addDeployment($id)
    {
        $environment = environment::find($id);
        $deployment = new deployment();
        $deployment -> commit_hash = 'done';
        $environment->deployment()->save($id);
        return 'Deploymenty Add Succesfully';
    }
}
