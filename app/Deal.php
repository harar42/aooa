<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Deal extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'promotion','partner_id','image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id'
    ];

    public function partner()
    {
        return $this->belongsTo('App\Partner');
    }

    public function getPartner()
    {
        return $this->belongsTo('App\Partner')->get();

    }
}
