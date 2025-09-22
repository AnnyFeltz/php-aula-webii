@extends('layouts.app')

@section('title', 'SIGAC - Home')

@section('content')

    <h1>HOME</h1>

    <p>Você tem {{ $idade }} anos</p>
    @if ($idade >= 18)
        <p>Você é maior de idade.</p>

    @elseif ($idade >= 0 && $idade < 18)
        <p>Você é menor de idade.</p>

    @else
        <p>Idade inválida.</p>
    @endif

    @foreach ($fruta as $fruta)
        <p><strong>Fruta:</strong> {{ $fruta }}</p>
    @endforeach

    <x-alert tipo="success">
        <strong>Sucesso!</strong> Sua mensagem foi enviada com sucesso.
    </x-alert>

@endsection
