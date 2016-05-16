<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //explicit tell which table, this model map with
    protected $table = 'groups';
    //prevent massassign by explicit tell $app,
    //which columns inserted
    protected $fillable = array("user_id", "need_id", "status");

    public function leader(){
        return $this->hasOne(User::class, "id", "user_id");
    }

    public function need(){
        return $this->hasOne(Need::class, "id", "need_id");
    }
}
