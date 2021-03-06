<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class thread extends Model
{
    protected $table="threads";
    protected $primaryKey="id";
    protected $guarded=[];

    public function posts(){
        return $this->hasMany(post::class, 'thread_id','id')
            ->orderBy('updated_at','DESC')
            ->offset(0)
            ->limit(1);
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
