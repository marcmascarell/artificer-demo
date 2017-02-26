<?php

namespace App;

class Test extends \Illuminate\Database\Eloquent\Model
{
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
//    protected $fillable = [
//    ];

    protected $guarded = [
        'pocoyo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
