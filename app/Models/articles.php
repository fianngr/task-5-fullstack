<?php

namespace App\Models;

use App\Models\category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class articles extends Model
{
    use HasFactory , SoftDeletes;

    protected $guarded = ['id'];

    public function category():BelongsTo
    {
        return $this->belongsTo(category::class);
    }

    public function user():belongsTo
    {
        return $this->belongsTo(user::class);
    }
}
