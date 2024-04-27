<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    private $user;
    public function index(Request $request)
    {
        $this->user =  Project::newProject($request);
        if ($request->developer_one && $request->developer_two && $request->developer_three && $request->developer_four)
        {

        }
    }
}
