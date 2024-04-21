@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden shadow-md">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Detalhes do Usuário</h2>
                <div class="bg-gray-100 p-4 rounded-lg">
                    <h5 class="text-xl font-semibold">{{ $user->name }}</h5>
                    <p class="text-gray-700 mt-2"><strong>Email:</strong> {{ $user->email }}</p>
                    <p class="text-gray-700"><strong>Criado em:</strong> {{ $user->created_at->format('d/m/Y H:i:s') }}</p>
                    <p class="text-gray-700"><strong>Atualizado em:</strong> {{ $user->updated_at->format('d/m/Y H:i:s') }}</p>
                </div>
                <a href="{{ route('users.index') }}" class="block bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 mt-4 rounded-md text-center">Voltar</a>
            </div>
        </div>
    </div>
@endsection
