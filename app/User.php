<?php

namespace App;

use Hash;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     * 
     * @var array
     */
    protected $dates = [
        'deleted_at',
    ];

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',        
    ];

    /**
     * @var string
     */
    protected $table = 'user';

    /**
     * --------------------------------------------------------
     * Mutators
     * --------------------------------------------------------
     */
    
    /**
     * 
     * @return void
     */
    public function setPasswordAttribute($value) 
    {
        $this->attributes['password'] = Hash::make($value);
    }
    
    /**
     * --------------------------------------------------------
     * Relacionamentos
     * --------------------------------------------------------
     */

    /**
     * 
     * @return HasMany
     */
    public function todos() 
    {
        return $this->hasMany('App\Todo');
    }

}
