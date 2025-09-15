@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto p-6 bg-white shadow rounded">
    <h1 class="text-2xl font-bold mb-4">Edit User</h1>

    <form method="POST" action="{{ route('users.update', $user) }}" class="space-y-4">
        @csrf
        @method('PUT')

        <input type="text" name="name" value="{{ old('name', $user->name) }}" class="border p-2 w-full" placeholder="Nama">
        <input type="email" name="email" value="{{ old('email', $user->email) }}" class="border p-2 w-full" placeholder="Email">

        <input type="password" name="password" class="border p-2 w-full" placeholder="Password baru (kosongkan jika tidak diubah)">

        <select name="role" class="border p-2 w-full">
            <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
            <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
        </select>

        <button type="submit" class="w-full bg-indigo-600 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>
@endsection
