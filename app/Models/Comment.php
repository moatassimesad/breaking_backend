<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $primaryKey = 'idcomment';

    protected $fillable = [
        'userid',
        'usernamecomment',
        'textcomment',
        'tempscomment',
        'usercomment',
        'newscomment',
        'premiumcomment',
        'likescomment',
        'dislikescomment',
        'subcomment',
        'disableSubComments',
        'realsubcomment',
        'totaldislikes',
        'countsubcoms',
        'countrycomment',
        'ban',
        'reclamations',
        'spam',
        'hidecomment',
        'audiocomment',
        'linkaudiocomment',
        'linktitlecomment',
        'linkimagecomment',
        'linkurlcomment',
        'photocomment',
        'typeMedia',
        'hasHistory',
        'robot_moderated',
    ];
}
