<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class File extends Model
{
    use HasFactory;
    protected $guarded = [];
    // public function fileable(): MorphTo
    // {
    //     return $this->morphTo();
    // }


    public function folder()
    {
        return $this->belongsTo(Folder::class);
    }

    // access relations
    public function accesses()
    {
        return $this->morphMany(Access::class, 'accessable');
    }


}
