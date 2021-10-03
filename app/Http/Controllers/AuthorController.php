<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function create(Request $req)
    {
        $author = new Author;
        $author->name=$req->name;
        $author->date_of_birth=$req->date_of_birth;
        $author->place_of_birth=$req->place_of_birth;
        $author->gender=$req->gender;
        $author->email=$req->email;
        $author->hp=$req->hp;
        $result = $author->save();
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
        return $id?Author::find($id):Author::all();
    }

    public function update(Request $req)
    {
        $author = Author::find($req->id);
        $author->id=$req->id;
        $author->name=$req->name;
        $author->date_of_birth=$req->date_of_birth;
        $author->place_of_birth=$req->place_of_birth;
        $author->gender=$req->gender;
        $author->email=$req->email;
        $author->hp=$req->hp;
        $result = $author->save();
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
        $author = Author::find($id);
        $result = $author->delete();
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
