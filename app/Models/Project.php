<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

// use App\Models\Folder; 
class Project extends Model
{
    use HasFactory;
    protected $guarded = [];
    // public function files(): MorphMany
    // {
    //     return $this->morphMany(File::class, 'fileable');
    // }


    public function sectore()
    {

        return $this->belongsTo(Sectore::class);
    }

}
