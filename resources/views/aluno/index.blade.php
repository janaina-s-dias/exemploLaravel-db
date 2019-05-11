@extends('master')
@section('titulo', 'Aluno')
@section('conteudo')
  <a href='/aluno/create'>Novo Aluno</a>
  <table>
  	<tr>
  		<th>Nome</th>
  		<th>Nome</th>
  		<th>Data Nasc.</th>
      <th>Curso</th>
      <th></th>
  	</tr>
  @foreach($alunos as $a)
  	<tr>
  		<td>{{$a->nome}}</td>
  		<td>{{$a->endereco}}</td>
  		<td>{{$a->dataNascimento}}</td>
      <td>{{$a->curso()->first()->nome}}</td>
      <td><a href="aluno/{{$a->id}}/edit">Editar</a></td>
      <td>
        {!!Form::model($a,['url'=>'aluno/'.$a->id,'method'=>'delete'])!!}
        {!!Form::submit('Excluir')!!}
        {!!Form::close()!!}
      </td>
  	</tr>
  @endforeach 
  </table>
@stop