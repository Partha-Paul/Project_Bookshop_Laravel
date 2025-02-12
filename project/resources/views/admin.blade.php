<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="max-w-6xl mx-auto py-6">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="p-4">
                <h2 class="text-2xl font-semibold text-gray-700 mb-4">Users</h2>
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
                        <thead class="bg-gray-100 border-b">
                            <tr>
                                <th class="px-6 py-3 text-left text-gray-700 font-medium uppercase">Name</th>
                                <th class="px-6 py-3 text-left text-gray-700 font-medium uppercase">Email</th>
                                <th class="px-6 py-3 text-left text-gray-700 font-medium uppercase">Role</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach ($users as $user)
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-6 py-4 text-gray-800 font-medium">{{ $user->name }}</td>
                                    <td class="px-6 py-4 text-gray-600">{{ $user->email }}</td>
                                    <td class="px-6 py-4">
                                        <span class="px-3 py-1 rounded-lg text-sm font-semibold 
                                            @if($user->role === 'admin') bg-red-100 text-red-700 
                                            @elseif($user->role === 'user') bg-blue-100 text-blue-700 
                                            @else bg-gray-100 text-gray-700 @endif">
                                            {{ ucfirst($user->role) }}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @if($users->isEmpty())
                    <p class="text-gray-500 text-center py-4">No users found.</p>
                @endif
            </div>
        </div>
    </div>

</x-app-layout>
