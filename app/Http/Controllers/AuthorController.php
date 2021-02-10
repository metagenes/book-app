<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

use Yajra\Datatables\Datatables;

class AuthorController extends Controller
{

    public function add(Request $request)
    {
        if ($request->ajax()) {
            return $this->datatable('in');
        }

        return view('author.add');
    }

    public function create(Request $request)
    {
        $request->validate([
            'code' => 'required|exists:books,id',
            'author' => 'required|string',
        ]);

        $id = $request->code;
        $author = $request->author;

        $book = Book::findOrFail($id);
        if ($author !== '') {
            $msg = 'Succes Add Author';
        } else {
            $msg = 'Succes Remove Author';
        }

        $request->merge([
            'book_id' => $id
        ]);

        Author::create($request->all());

        return response()->json(['msg' => $msg]);
    }

    public function destroy(Stock $stock)
    {
        $stock->delete();

        return response()->json(['msg' => 'Success Delete Author']);
    }

    // Get Datatable
    public function datatable()
    {
        $author = Author::latest()->get(['id', 'author', 'created_at as date', 'book_id']);

        return Datatables::of($author)
            ->addIndexColumn()
            ->editColumn('date', '{{ localDate($date) }}')
            ->addColumn('code', function ($author)
            {
                return $author->book->code;
            })
            ->addColumn('action', '<button class="btn btn-sm btn-danger delete">Delete</button>')
            ->make(true);
    }

}
