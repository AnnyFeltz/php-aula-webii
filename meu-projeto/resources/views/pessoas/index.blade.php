<div>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
    <h1>Pessoas:</h1>
    @foreach ($pessoas as $pessoa)
        <div>
            <h2>{{$pessoa->nome}}</h2>
            <p>Idade: {{$pessoa->idade}}</p>
            <p>CPF: {{$pessoa->cpf}}</p>
        </div>
    @endforeach
</div>
