<?php

namespace App;

use Laratrust\Models\LaratrustTeam;
use App\User;

class Team extends LaratrustTeam
{
    protected $fillable = ['name'];

    public function ownedBy(User $user)
    {
        return $this->users->find($user)->hasRole('team_admin', $this->id);
    }

    public function ownedByCurrentUser()
    {
        return $this->ownedBy(auth()->user());
    }

    public function users()
    {
        return $this->belongsToMany(User::class)
                        ->withTimestamps();
    }
}
