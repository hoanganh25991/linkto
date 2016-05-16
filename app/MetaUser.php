<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MetaUser extends Model{
    //explicit tell which table, this model map with
    protected $table = 'meta_users';
    //prevent massassign by explicit tell $app,
    //which columns inserted
    protected $fillable = array(
        "user_id",
        "avatar",
        "phone",
        "gender",
        "birth_day"
    );

    public function user(){
        return $this->belongsTo(User::class, "user_id");
    }
}
