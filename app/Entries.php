<?php

namespace hireme;

use Illuminate\Database\Eloquent\Model;

class Entries extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'entries';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'post', 'tags', 'public', 'likes', 'entry'];

}
