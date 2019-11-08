<?php

namespace App\Http\Controllers\Teams;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Team;

class TeamUserController extends Controller
{
    public function index(Team $team)
    {
        return view('teams.users.index', compact('team'));
    }
}
