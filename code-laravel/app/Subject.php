<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    //explicit tell which table, this model map with
    protected $table = 'subjects';
    //prevent massassign by explicit tell $app,
    //which columns inserted
    protected $fillable = array("name", "description");

    public function need(){
        return $this->belongsTo(Need::class, "id", "subject_id");
    }
}
