<h3>Informações do Clientes</h3>
<p>ID :{{$cliente['id']}}</p>
<p>Nome:{{$cliente['nome']}}</p>
<br>
<a href="{{route('clientes.index', $cliente ['id'])}}">Voltar</a>