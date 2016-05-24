<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{
    //explicit tell which table, this model map with
    protected $table = 'user_group';
    //prevent massassign by explicit tell $app,
    //which columns inserted
    protected $fillable = array("user_id", "group_id");

    public function user(){
        return $this->hasOne(User::class, "id", "user_id");
    }

    public function group(){
        return $this->hasOne(Group::class, "id", "group_id");
    }
}
