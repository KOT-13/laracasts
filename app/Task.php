<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Task
 * @package App
 */
class Task extends Model
{
    protected $guarded = [];

    /**
     * @param bool $completed
     */
    public function complete($completed = true)
    {
        $this->update(compact('completed'));
    }

    public function incomplete()
    {
        $this->complete(false);
    }

    /**
     * @return BelongsTo
     */
    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
