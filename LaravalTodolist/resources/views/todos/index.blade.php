<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel + Tailwind</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>

@extends('layouts.app')

@section('content')
<div class="lg:w-2/4 mx-auto py-8 px-4 bg-white rounded-xl">
    <h1 class="font-bold text-5xl text-center mb-8">laravel+tailwind</h1>

    <div class="mb-6">
        <form action="{{ route('todos.store') }}" method="POST" class="flex flex-col space-y-4">
            @csrf
            <input type="text" name="title" placeholder="The Todo list" class="py-4 px-6 bg-gray-100 rounded-xl">
            <textarea name="description" placeholder="The todo description" class="py-4 px-6 bg-gray-100 rounded-xl"></textarea>
            <button type="submit" class="w-full md:w-28 py-4 px-8 bg-green-500 text-white rounded-xl">Add</button>
        </form>
    </div>

    <hr class="mb-6">

    <div class="mt-2">
    @foreach($todos as $todo)
    <div class="py-4 flex flex-col md:flex-row items-center border-b border-gray-300 px-3">
        <div class="md:flex-1 pr-8">
            <h3 class="text-lg font-semibold">{{ $todo->title }}</h3>
            <p class="text-gray-500">{{ $todo->description }}</p>
        </div>

        <div class="flex justify-between md:justify-start space-x-3">
            <a href="{{ route('todos.edit', $todo->id) }}" class="py-2 px-2 bg-green-500 text-white rounded-xl">
                <i class="fas fa-edit"></i> <!-- Font Awesome edit icon -->
            </a>
            <form action="{{ route('todos.destroy', $todo->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this todo?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="py-2 px-2 bg-red-500 text-white rounded-xl">
                    <i class="fas fa-trash-alt"></i> <!-- Font Awesome delete icon -->
                </button>
            </form>
        </div>

    </div>
    @endforeach
</div>

</div>
@endsection

</body>
</html>
