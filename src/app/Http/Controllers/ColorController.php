<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Author;
use App\Book_master;
use App\Author_master;
use phpDocumentor\Reflection\Types\Array_;

class ColorController extends Controller
{
    public function book_list()
    {
        $book_lists = Book_master::orderBy('created_at', 'desc')->get();

        //review count
        $review_counts = [];
        foreach ($book_lists as $book_list) {
            $review_count = Book::where('book_id', $book_list->id)->get()->count();
            array_push($review_counts, $review_count);
        }

        $data = [
            "book_lists" => $book_lists,
            "review_counts" => $review_counts,
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
        foreach ($books as $book) {
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
        $last_number = Book::where('book_id', $request->book_id)->count();


        $book_r_avg = round($book_r10 / $last_number);
        $book_r = dechex($book_r_avg);

        $book_g_avg = round($book_g10 / $last_number);
        $book_g = dechex($book_g_avg);

        $book_b_avg = round($book_b10 / $last_number);
        $book_b = dechex($book_b_avg);

        $book_rgb = "#" . $book_r . $book_g . $book_b;

        Book_master::where('id', $request->book_id)->update(['average_color' => $book_rgb]);

        return redirect()->back();
    }

    public function author_list()
    {
        // get author_master
        $author_lists = Author_master::orderBy('created_at', 'desc')->get();

        //review count
        $review_counts = [];
        foreach ($author_lists as $author_list) {
            $review_count = Author::where('author_id', $author_list->id)->get()->count();
            array_push($review_counts, $review_count);
        }

        // post data to view
        $data = [
            "author_lists" => $author_lists,
            "review_counts" => $review_counts
        ];
        return view('author_list')->with($data);
    }

    public function author_create($id)
    {
        $author = Author_master::findOrFail($id);

        $data = [
            'author' => $author,
        ];

        return view('author.create')->with($data);
    }

    public function author_store(Request $request)
    {
        $authors = new Author;
        $authors->color = $request->color;
        $authors->author_id = $request->author_id;
        $authors->save();


        $authors = Author::where('author_id', $request->author_id)->get();

        $author_colors = [];
        foreach ($authors as $author) {
            $author_color_code = ltrim($author->color, '#');
            $author_rgb = str_split($author_color_code, 2);
            array_push($author_colors, $author_rgb);

        }

        $author_r10 = 0;
        $author_g10 = 0;
        $author_b10 = 0;

        foreach ($author_colors as $author_color) {
            $author_r10 += hexdec($author_color[0]);
            $author_g10 += hexdec($author_color[1]);
            $author_b10 += hexdec($author_color[2]);


        }
        $last_number = Author::where('author_id', $request->author_id)->count();


        $author_r_avg = round($author_r10 / $last_number);
        $author_r = dechex($author_r_avg);

        $author_g_avg = round($author_g10 / $last_number);
        $author_g = dechex($author_g_avg);

        $author_b_avg = round($author_b10 / $last_number);
        $author_b = dechex($author_b_avg);

        $author_rgb = "#" . $author_r . $author_g . $author_b;

        Author_master::where('id', $request->author_id)->update(['average_color' => $author_rgb]);

        return redirect()->back();
    }
}
