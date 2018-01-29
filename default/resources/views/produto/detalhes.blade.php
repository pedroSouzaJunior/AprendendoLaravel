@extends('layout.principal')
@section('conteudo')
<div class="container">
   <h2>Detalhes do produto: {{$p->nome}} </h2>
    <ul>
        <li>
            <b>Valor:</b> R$ {{$p->valor}} 
        </li>
        <li>
            <b>Descrição:</b> {{$p->descricao or 'nenhuma descrição informada'}}
        </li>
        <li>
            <b>Quantidade em estoque:</b> {{$p->quantidade}}
        </li>
    </ul>
</div>
@stop