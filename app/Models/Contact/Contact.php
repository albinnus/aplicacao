<?php

namespace App\Models\Contact;

use App\Models\Root\File;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'mensagem',
        'file',
        'visitante'
    ];

    public function files(){
        return $this->hasOne(File::class,'id','file');
    }
}
