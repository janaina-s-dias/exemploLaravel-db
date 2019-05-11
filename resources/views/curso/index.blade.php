@extends('master')
@section('titulo', 'Cursos')
@section('conteudo')
  <table>
  @foreach($cursos as $c)
  	<tr>
  		<td>{{$c->sigla}}</td><td>{{$c->nome}}</td>
  		<td><a href="curso/{{$c->id}}">Detalhe</a></td>
  	</tr>
  @endforeach
  </table>
@stop