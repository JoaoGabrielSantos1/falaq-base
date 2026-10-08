@extends('layouts.app')

@section('title', 'Criar Evento — FalaQ')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-6 text-gray-800">
        Criar Novo Evento
    </h1>

    <form action="{{ route('eventos.store') }}" method="POST">
        @csrf

        <!-- Título -->
        <div class="mb-4">
            <label for="titulo" class="block text-sm font-medium text-gray-700 mb-2">
                Título do Evento
            </label>

            <input
                type="text"
                name="titulo"
                id="titulo"
                value="{{ old('titulo') }}"
                class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('titulo') border-red-500 @enderror"
                placeholder="Digite o título do evento"
            >

            @error('titulo')
                <p class="text-red-500 text-sm mt-1">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <!-- Descrição -->
        <div class="mb-4">
            <label for="descricao" class="block text-sm font-medium text-gray-700 mb-2">
                Descrição do Evento
            </label>

            <textarea
                name="descricao"
                id="descricao"
                rows="5"
                class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('descricao') border-red-500 @enderror"
                placeholder="Digite a descrição do evento"
            >{{ old('descricao') }}</textarea>

            @error('descricao')
                <p class="text-red-500 text-sm mt-1">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <!-- Data -->
        <div class="mb-4">
            <label for="data_evento" class="block text-sm font-medium text-gray-700 mb-2">
                Data do Evento
            </label>

            <input
                type="date"
                name="data_evento"
                id="data_evento"
                value="{{ old('data_evento') }}"
                class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('data_evento') border-red-500 @enderror"
            >

            @error('data_evento')
                <p class="text-red-500 text-sm mt-1">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <!-- Botão -->
        <button
            type="submit"
            class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition"
        >
            Criar Evento
        </button>
    </form>
</div>
@endsection