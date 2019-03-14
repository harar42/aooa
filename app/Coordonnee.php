<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coordonnee extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ville', 'latitude', 'longitude','ville'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id'
    ];

}
