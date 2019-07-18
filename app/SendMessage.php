<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SendMessage extends Model
{
    
    const DELIVERED = FALSE;
    const SUCCESS = TRUE;

    protected $fillable = ['recipient', 'message_id', 'message', 'status', 'response'];


}
