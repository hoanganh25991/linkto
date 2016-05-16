<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserNeed extends Model
{
    //explicit tell which table, this model map with
    protected $table = 'user_need';
    //prevent massassign by explicit tell $app,
    //which columns inserted
    protected $fillable = array("user_id", "need_id");

    public function user(){
        return $this->hasOne(User::class, "id", "user_id");
    }

    public function need(){
        return $this->hasOne(Need::class, "id", "need_id");
    }
}
