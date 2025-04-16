<div>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
    <form action="{{ route('pessoas.store') }}" method="post">
        @csrf
        <label>Nome:</label>
        <input type="text" name="nome"><br>

        <label>Idade:</label>
        <input type="number" name="idade"><br>

        <label>CPF:</label>
        <input type="text" name="cpf"><br>

        <button type="submit">Criar</button>
    </form>
</div>
