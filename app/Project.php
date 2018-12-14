<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Project
 * @package App
 */
class Project extends Model
{
    protected $guarded = [];

    /**
     * @return HasMany
     */
    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class);
    }

    /**
     * @param $description
     * @return mixed
     */
    public function addTask($description)
    {
        $this->tasks()->create($description);

    }
}
