<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    //explicit tell which table, this model map with
    protected $table = 'offers';
    //prevent massassign by explicit tell $app,
    //which columns inserted
    protected $fillable = array("subject_id", "description");

    public function subject(){
        return $this->hasOne(Subject::class, "id", "subject_id");
    }
}
