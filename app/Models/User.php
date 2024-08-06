<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\MorphToMany;



class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


    public function folders()
    {

        return $this->belongsToMany(Folder::class, 'folder_accesses')->withPivot('update', 'read')->withTimestamps();
    }




    public function files()
    {
        return $this->belongsToMany(File::class, 'folder_accesses')->withPivot('name')->withTimestamps();
    }





    public function hasUpdateAccess($folder_id, $name)
    {

        if ($this->folders()->wherePivot('update', true)->exists()) {

            return true;
        }


        return false;
    }
}
