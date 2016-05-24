<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserOffer extends Model
{
    //explicit tell which table, this model map with
    protected $table = 'user_offer';
    //prevent massassign by explicit tell $app,
    //which columns inserted
    protected $fillable = array("user_id", "offer_id");

    public function user(){
        return $this->hasOne(User::class, "id", "user_id");
    }

    public function offer(){
        return $this->hasOne(Need::class, "id", "offer_id");
    }
}
