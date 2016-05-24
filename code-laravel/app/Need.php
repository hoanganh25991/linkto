<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Need extends Model
{
    //explicit tell which table, this model map with
    protected $table = 'needs';
    //prevent massassign by explicit tell $app,
    //which columns inserted
    protected $fillable = array("subject_id", "description");

    public function subject(){
        return $this->hasOne(Subject::class, "id", "subject_id");
    }

    public function group(){
        return $this->belongsTo(Group::class, "id", "need_id");
    }
}