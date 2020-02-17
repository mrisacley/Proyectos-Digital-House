<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    public $table = 'quiz';
    public $timestamps = false;
    protected $guarded = ['id','categoria_id'];

    public function categoria(){
        return $this->belongsTo('App\Categoria','categoria_id');
    }
}
