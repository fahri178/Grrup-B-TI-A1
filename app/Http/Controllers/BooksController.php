<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;

class BooksController extends Controller
{
    public function getListBooks() {
        $books = Books::all();
        return response()->json($books);
    }

    public function createBook(Request $request) {
        try {
            $book = Books::create([
                'title' => $request->title,
                'author' => $request->author,
            ]);

            return response()->json($book, 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to create book', 'error' => $e->getMessage()], 500);
        }
    }
    
}
