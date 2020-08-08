<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $fillable = ['title', 'userID'];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function author()
    {
        return $this->hasOne(User::class);
    }

    public static function add($fields)
    {
        $project = new static;
        $project->fill($fields);
        $project->userID = 1;
        $project->save();

        return $project;
    }

    public function edit($fields)
    {
        $project->fill($fields);
        $project->save();
    }

    public function remove()
    {
        $this->delete();
    }


}
