<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable=['sigla','nome'];
    public $timestamps=false;

    public function alunos() {
    	return $this->hasMany('App\Aluno','curso_id');
    }
}
