<?php

namespace ComplainDesk;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    //
    //
    protected $fillable = [
            'action', 'user_id', 'description'
        ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
