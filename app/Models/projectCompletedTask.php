<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class projectCompletedTask extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'name',
        'note',
        'image',
        'end'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
