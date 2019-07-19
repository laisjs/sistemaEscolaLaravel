@extends('template')




@section ('main')

    
    
   @if(!$erro)
   <h1>O aluno: {{$aluno->nome}} foi cadastrado com sucesso</h1>
   @else
   <h1>Erro ao cadastrar o aluno: {{$aluno->nome}} no banco de dados</h1>
   @endif




<a href="/aluno/cadastro">Voltar para formulário</a>
@endsection