<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class requestMissingItem extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'request_missing_items';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['missing_item_id', 'user_id', 'missting_item_status_id', 'requested_at'];

    
}
