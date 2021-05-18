<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Role main') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @include('layouts.flash')
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Role</th>
                                <th class="px-4 py-2">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                            <tr class="text-center">
                                <td class="border px-4 py-2">{{ $role->nom }}</td>
                                <td class="border px-4 py-2 flex justify-center">
                                    <a href="{{ route('role.edit', $role->id) }}" class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Edit</a>
                                    <form action="{{ route('role.destroy', $role->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
