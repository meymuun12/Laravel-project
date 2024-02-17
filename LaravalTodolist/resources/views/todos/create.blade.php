<!-- resources/views/todos/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Todo</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>

@extends('layouts.app')

@section('content')
    <div class="lg:w-2/4 mx-auto py-8 px-4 bg-white rounded-xl">
        <h1 class="font-bold text-3xl text-center mb-8">Create Todo</h1>

        <form action="{{ route('todos.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label for="title" class="block">Title</label>
                <input type="text" id="title" name="title" class="py-2 px-4 bg-gray-100 rounded-lg w-full">
            </div>

            <div>
                <label for="description" class="block">Description</label>
                <textarea id="description" name="description" class="py-2 px-4 bg-gray-100 rounded-lg w-full"></textarea>
            </div>

            <button type="submit" class="w-full py-2 px-4 bg-blue-500 text-white rounded-lg">Create</button>
        </form>
    </div>
@endsection

</body>
</html>
