<?php

namespace App\Http\Controllers;
use App\Models\project;
use App\Models\environment;
use App\Models\Deployment;
use Illuminate\Http\Request;


class mainController extends Controller
{
    public function addProject()
    {
        $project = new project();
        $project->name ="Expense Manager";
        $project->save();
        return "Project Add Successfully";
    }
    public function addEnvironment($id)
    {
        $project = project::find($id);
        $environment = new environment();
        $environment->name = 'Android';
        $project->environment()->save($environment);
        return 'Environment Added Succesfully';
    }
    public function addDeployment($id)
    {
        $environment = environment::find($id);
        $deployment = new Deployment();
        $deployment->commit_has= 'undone';
        $environment->deployment()->save($deployment);
        return 'Deployment Add Succesfully';
    }
}
