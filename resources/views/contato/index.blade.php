<h3>Essa é a view index</h3>

@foreach($contatos as $contato)

    <p>{{ $contato->nome }}</p>
    <p>{{ $contato->telefone }}</p>

@endforeach