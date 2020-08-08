<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Storage;

class Task extends Model
{

    protected $fillable = ['projectID', 'title', 'status'];

    public function project()
    {
        return $this->hasOne(Project::class);
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
            Storage::dalete('uploads/' . $this->file);
            $this->delete();
        }

        public function uploadFile($file)
        {
            if($file == null) { return; }
            Storage::dalete('uploads/' . $this->file);
            $filename = str_random(10) . '.' . $file->extension();
            $file->saveAs('uploads', $filename);
            $this->file = $filename;
            $this->save();
        }

        public function setProject($id)
        {
            if($id == null) {return;}
            $this->projectID = $id;
            $this->save();
        }

        public function statusNew($id)
        {

        }

        public function statusInProgress()
        {

        }

        public function statusFinish()
        {

        }
}
