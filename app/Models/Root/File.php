<?php

namespace App\Models\Root;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    //
    protected $table = 'file';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nome',
        'mime',
        'path',
        'tamanho'
    ];


}
