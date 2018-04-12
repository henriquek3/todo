<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{

   /**
     * @var array
     */
    protected $fillable = [
        'text',
        // 'user_id',
    ];

    /**
     * @var string
     */
    protected $table = 'todo';

    /**
     * --------------------------------------------------------
     * Relacionamentos
     * --------------------------------------------------------
     */

    /**
     * 
     * @return BelongsTo
     */
    public function user() 
    {
        return $this->belongsTo('App\User');
    }

}
