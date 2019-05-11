<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    protected $fillable=['nome','cargaHoraria'];
    public $timestamps=false;

    public function obterAlunos () {
    	return $this->belongsToMany('App\Aluno');
    }
}
