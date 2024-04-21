@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <div class="max-w-5xl mx-auto bg-white rounded-lg overflow-hidden">
            <div class="p-6">
                <a href="{{ route('users.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md mb-4 inline-block">Adicionar Novo Usuário</a>
                <table class="w-full table-fixed">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="px-4 py-2 text-left">ID</th>
                            <th class="px-4 py-2 text-left">Nome</th>
                            <th class="px-4 py-2 text-left">E-mail</th>
                            <th class="px-4 py-2 text-left">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr class="hover:bg-gray-100">
                                <td class="border px-4 py-2">{{ $user->id }}</td>
                                <td class="border px-4 py-2">{{ $user->name }}</td>
                                <td class="border px-4 py-2">{{ $user->email }}</td>
                                <td class="border px-4 py-2">
                                    <a href="{{ route('users.show', $user->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white py-1 px-3 rounded-md mr-2">Ver</a>
                                    <a href="{{ route('users.edit', $user->id) }}" class="bg-green-500 hover:bg-green-600 text-white py-1 px-3 rounded-md mr-2">Editar</a>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white py-1 px-3 rounded-md">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
