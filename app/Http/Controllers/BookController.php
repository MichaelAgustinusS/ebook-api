<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function create(Request $req)
    {
        $book = new Book;
        $book->title=$req->title;
        $book->description=$req->description;
        $book->author=$req->author;
        $book->publisher=$req->publisher;
        $book->date_of_issue=$req->date_of_issue;
        $result = $book->save();
        if($result)
        {
            return ["Result" => "Data has been saved"];
        }
        else
        {
            return["Result" => "Data failed to be saved"];
        }
    }

    public function read($id=null)
    {
        return $id?Book::find($id):Book::all();
    }

    public function update(Request $req)
    {
        $book = Book::find($req->id);
        $book->id=$req->id;
        $book->title=$req->title;
        $book->description=$req->description;
        $book->author=$req->author;
        $book->publisher=$req->publisher;
        $book->date_of_issue=$req->date_of_issue;
        $result = $book->save();
        if($result)
        {
            return ["Result" => "Data has been updated"];
        }
        else
        {
            return["Result" => "Data failed to be updated"];
        }
    }

    public function delete($id)
    {
        $book = Book::find($id);
        $result = $book->delete();
        if($result)
        {
            return ["Result" => "Data has been deleted"];
        }
        else
        {
            return["Result" => "Data failed to be deleted"];
        }
    }
}
