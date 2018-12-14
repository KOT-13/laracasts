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
    public function store(Project $project)
    {
        $attributes = request()->validate(['description' => 'required']);
        $project->addTask($attributes);

        return back();
    }
    /**
     * @param Task $task
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Task $task)
    {
        $task->update([
            'completed' => \request()->has('completed')
        ]);

        return back();
    }
}
