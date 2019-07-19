@extends ('template')
<!-- a função section vai pegar tudo que estiver dentro e vai colocar dentro da caixa do yeld -->
@section('main')
    <form action="/aluno/cadastro" method="post">
    <!-- sintaxe do blade executando essa função, vai criar um input invisivel no formulário e vai ter uma chave de criptografia -->
    
    @csrf
      <input type="text" name="nome">    
      <input type="number" name="cpf">
      <button type="submit">Enviar</button>
    
    
    </form>
    @endsection
