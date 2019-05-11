<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    //
    protected $fillable=['nome','endereco','dataNascimento','curso_id'];
    public $timestamps=false;

    public function curso() {
    	return $this->belongsTo('App\Curso','curso_id','id');
    }

    //public function obterDisciplinas() {
    //	return $this->belongsToMany('App\Disciplina');
    //}

}
