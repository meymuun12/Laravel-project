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
            <input type="text" name="name" placeholder="Name" class="py-4 px-6 bg-gray-100 rounded-xl">
            <input type="email" name="email" placeholder="Email" class="py-4 px-6 bg-gray-100 rounded-xl">
            <button type="submit" class="w-28 py-4 px-8 bg-green-500 text-white rounded-xl">Add</button>
        </form>
    </div>
</div>

    
</body>
</html>