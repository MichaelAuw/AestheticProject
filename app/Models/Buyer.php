<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Buyer extends Model
{
    use HasFactory;
    protected $table = 'BUYER';
    protected $fillable=[
        'USER_ID',
        'FULLNAME',
        'PHONE_NUMBER',
        'WISHLIST',
        'FOLLOWEDARTIST',
        'ADDRESS',
        'ACCOUNT_CREATION_DATE'
    ];

    public function MasterUser():BelongsTo
    {
        return $this->belongsTo(MasterUser::class);
    }
}
