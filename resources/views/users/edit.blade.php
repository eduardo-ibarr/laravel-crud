@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden shadow-md">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Editar Usuário</h2>
                <form action="{{ route('users.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-semibold mb-2">Nome:</label>
                        <input type="text" name="name" value="{{ $user->name }}" class="form-input w-full bg-gray-100 border-gray-300 text-gray-800 px-4 py-2 rounded-md focus:outline-none focus:bg-white @error('name') @enderror">
                        @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-semibold mb-2">E-mail:</label>
                        <input type="email" name="email" value="{{ $user->email }}" class="form-input w-full bg-gray-100 border-gray-300 text-gray-800 px-4 py-2 rounded-md focus:outline-none focus:bg-white @error('email') @enderror">
                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-gray-700 font-semibold mb-2">Senha:</label>
                        <input type="password" name="password" class="form-input w-full bg-gray-100 border-gray-300 text-gray-800 px-4 py-2 rounded-md focus:outline-none focus:bg-white @error('password') @enderror">
                        @error('password')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">Atualizar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
