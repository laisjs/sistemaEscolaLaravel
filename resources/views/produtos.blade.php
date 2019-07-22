<!-- pra acessar uma arquivo dentro de uma pasta, quer dizer que eu to pegando um arquivop chamado app dentro da minha pasta layout -->

@extends('layouts.app')

@section('content')

<!-- preciso fazer um looping pra imprimir a lista e pra isso usa o foreach -->

<!-- em uma lista de produtos eu vou listar um produto -->
@foreach($produtos as $produto)
<ul>
<li>{{$produto->nome_produto}}</li>
</ul>
<!-- eu quero que ele exiba os links da paginação -->

@endforeach
{{$produtos->links()}}
@endsection