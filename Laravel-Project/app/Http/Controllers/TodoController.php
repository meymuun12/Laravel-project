<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        // Fetch all todos from the database
        $todos = Todo::all();
        
        // Pass todos data to the view
        return view('todos.index', compact('todos'));
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
        ]);

        // Create a new todo record
        Todo::create($validatedData);

        // Redirect back to the index page
        return redirect('/');
    }

    public function update(Request $request, $id)
    {
        // Fetch the todo by ID
        $todo = Todo::findOrFail($id);

        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
        ]);

        // Update the todo with the validated data
        $todo->update($validatedData);

        // Redirect back to the index page
        return redirect('/');
    }

    public function destroy($id)
    {
        // Fetch the todo by ID and delete it
        Todo::findOrFail($id)->delete();

        // Redirect back to the index page
        return redirect('/');
    }
}


