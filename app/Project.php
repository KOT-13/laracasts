<?php

namespace App;

use App\Events\ProjectCreated;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Mail;

/**
 * Class Project
 * @package App
 */
class Project extends Model
{
    protected $guarded = [];

    protected $dispatchesEvents = [
        'created' => ProjectCreated::class
    ];

    /**
     * @return BelongsTo
     */
    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return HasMany
     */
    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class);
    }

    /**
     * @param $task
     * @return mixed
     */
    public function addTask($task)
    {
        $this->tasks()->create($task);
    }
}
