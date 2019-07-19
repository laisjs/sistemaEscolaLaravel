<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<ul>
    @foreach ($alunos as $aluno)
    <li>{{ $aluno->nome }}
    <!-- dentro dessa lista eu quero que tenha um link e dentro do link eu quero deletar. assim
    quando a gente clicar vai deletar o aluno -->
    <a href='/aluno/deletar/{{$aluno->id}}'>Deletar</a>
    
    
     </li>
    @endforeach
</ul>
</body>




</html>

<!-- 1. criei a lista pra imprimir em lista, o foreach vai 
dentro da li (pq eu quero que cada aluno seja um tópico da lista)
2. $alunos representa a tabela e $aluno é cada registro, cada linha da tabela.
3. depois   que eu to na linha os atributos são as colunas.; Do registro do aluno me fala o nome.  -->