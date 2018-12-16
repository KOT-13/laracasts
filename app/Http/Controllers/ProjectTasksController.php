<?php

namespace App\Http\Controllers;

use App\Project;
use App\Task;
use Illuminate\Http\Request;

/**
 * Class ProjectTasksController
 * @package App\Http\Controllers
 */
class ProjectTasksController extends Controller
{
    /**
     * @param Project $project
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Project $project)
    {
        $project->addTask(
            request()->validate(['description' => 'required'])
        );

        return back();
    }
    /**
     * @param Task $task
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Task $task)
    {
        $method = request()->has('completed') ? 'complete' : 'incomplete';

        $task->$method();

        return back();
    }
}
