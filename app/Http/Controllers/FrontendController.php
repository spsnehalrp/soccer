<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\TeamRepository;

class FrontendController extends Controller
{
    public $teamRepository;

    public function __construct(TeamRepository $teamRepository)
    {
        $this->teamRepository = $teamRepository;

    }
    public function index()
    {
        return view('welcome');
    }

    public function getPlayers($id)
    {
        return view('team')->withId($id);
    }
}
