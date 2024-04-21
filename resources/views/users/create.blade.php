@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-lg">
            <div class="md:flex">
                <div class="w-full p-6">
                    <div class="mb-4">
                        <h2 class="text-2xl font-bold text-gray-800 text-center">Novo Usuário</h2>
                    </div>

                    <form action="{{ route('users.store') }}" method="POST" class="space-y-4">
                        @csrf
                        <div>
                            <label for="name" class="text-gray-800">Nome:</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-input w-full bg-gray-100 border-gray-300 text-gray-800 rounded-md py-2 px-4 focus:outline-none focus:border-blue-500 @error('name') @enderror">
                            @error('name')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="email" class="text-gray-800">E-mail:</label>
                            <input type="email" name="email" value="{{ old('email') }}" class="form-input w-full bg-gray-100 text-gray-800 rounded-md py-2 px-4 focus:outline-none focus:border-blue-500 @error('email') border-red-500 @enderror">
                            @error('email')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="password" class="text-gray-800">Senha:</label>
                            <input type="password" name="password" class="form-input w-full bg-gray-100 border-gray-300 text-gray-800 rounded-md py-2 px-4 focus:outline-none focus:border-blue-500 @error('password') @enderror">
                            @error('password')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" class="w-full py-2 px-4 bg-blue-500 hover:bg-blue-600 text-white rounded-md">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
