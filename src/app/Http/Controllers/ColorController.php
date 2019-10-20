<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Author;
use App\Book_master;
use App\Author_master;

class ColorController extends Controller
{
    public function book_list()
    {
        $book_lists = Book_master::orderBy('created_at','desc')->get();

        $data =[
            "book_lists" => $book_lists
        ];
        return view('book_list')->with($data);
    }

    public function book_create($id)
    {
        $book = Book_master::findOrFail($id);

        $data = [
          'book' => $book,
        ];

        return view('book.create')->with($data);
    }

    public function book_store(Request $request)
    {
        $books = new Book;
        $books->color = $request->color;
        $books->book_id = $request->book_id;
        $books->save();

        return redirect()->back();
    }

    public function author_list()
    {
        $author_lists = Author_master::orderBy('created_at','desc')->get();

        $data =[
            "author_lists" => $author_lists
        ];
        return view('author_list')->with($data);
    }
}
