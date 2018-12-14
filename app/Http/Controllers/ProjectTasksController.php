<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

/**
 * Class ProjectTasksController
 * @package App\Http\Controllers
 */
class ProjectTasksController extends Controller
{
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
