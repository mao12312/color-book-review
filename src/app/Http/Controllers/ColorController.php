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


        $books = Book::where('book_id', $request->book_id)->get();

        $book_colors = [];
        foreach ($books as $book){
            $book_color_code = ltrim($book->color, '#');
            $book_rgb = str_split($book_color_code, 2);
            array_push($book_colors, $book_rgb);

        }

        $book_r10 = 0;
        $book_g10 = 0;
        $book_b10 = 0;

        foreach ($book_colors as $book_color) {
            $book_r10 += hexdec($book_color[0]);
            $book_g10 += hexdec($book_color[1]);
            $book_b10 += hexdec($book_color[2]);


        }
        $last_number =  Book::where('book_id', $request->book_id)->count();


        $book_r_avg = round($book_r10/$last_number);
        $book_r = dechex($book_r_avg);

        $book_g_avg = round($book_g10/$last_number);
        $book_g = dechex($book_g_avg);

        $book_b_avg = round($book_b10/$last_number);
        $book_b = dechex($book_b_avg);

        $book_rgb = "#".$book_r.$book_g.$book_b;

        Book_master::where('id',$request->book_id)->update(['average_color' => $book_rgb]);

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
