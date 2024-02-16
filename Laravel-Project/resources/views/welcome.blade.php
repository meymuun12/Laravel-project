<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-<your-integrity-hash>" crossorigin="anonymous" />
    
    <title>Document</title>
</head>
<body class="bg-gray-300 p-4">
<div class="lg: w-2/4 mx-auto py-8 px-4 bg-white rounded-xl">
    <h1 class=" font-bold text-5xl text-center mb-8"> laravel+tailwind</h1>


    <div class="mb-6">
        <form action="create.php" method="POST" class="flex flex-col space-y-4">
            <input type="text" name="titel" placeholder="The Todo list" class="py-4 px-6 bg-gray-100 rounded-xl">
            <Textarea  name="description" placeholder="The todo description" class="py-4 px-6 bg-gray-100 rounded-xl"></Textarea>
            <button type="submit" class="w-28 py-4 px-8 bg-green-500 text-white rounded-xl">Add</button>
                <!-- resources/views/welcome.blade.php -->
              <a class="w-28 py-4 px-8 bg-green-500 text-white rounded-xl" href="{{ route('todo.create') }}">Create</a>
        </form>
    </div>
    <hr>
    <div class=" mt-2">
        <div class="py-4 flex items-center border-b border-gray-300 px-3">
            <div class="flex-1 pr-8">
                <h3 class="text-lg font-semibold">The title</h3>
                <p class="text-gray-500">The description</p>

                </div class=" flex space-x-3">
                 <button class="py-2 px-2 bg-green-500 text-white rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg>
                   </button>
                   <button class="py-2 px-2 bg-red-500 text-white rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                        </svg>

                   </button>
                
                <div>

            </div>

        </div>
    </div>
</div>

    
</body>
</html>