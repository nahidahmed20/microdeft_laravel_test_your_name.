<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    private static $project;

    public static function newProject($request)
    {
        self::$project = new Project();
        self::$project->title = $request->title;
        self::$project->description = $request->description;
        self::$project->start_date = $request->start_time;
        self::$project->end_date = $request->end_time;
        self::$project->save();
        return self::$project;
    }
}
