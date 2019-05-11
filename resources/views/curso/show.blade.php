@extends('master')
@section('titulo', 'Cursos')
@section('conteudo')
  <dl>
  	<dt>
  		Sigla
  	</dt>
  	<dd>
  		{{$curso->sigla}}
  	</dd>
  	<dt>
  		Nome
  	</dt>
  	<dd>
  		{{$curso->nome}}
  	</dd>
  </dl>
  <h3>Alunos</h3>
  <table>
  @foreach($curso->alunos()->get() as $aluno)
    <tr><td>{{$aluno->nome}}</td></tr>
  @endforeach
  </table>
  <a href="/curso">Voltar</a>
@stop