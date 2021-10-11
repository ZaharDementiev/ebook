<?php

namespace App\Http\Controllers;

use App\Models\HTMLBook;
use App\Services\FileControlService;

class BookController extends Controller
{
    public function index(HTMLBook $book)
    {
        $text = FileControlService::getBodyContent('uploads/math/' . $book->name . '.html');

        return view('edit', compact('book', 'text'));
    }
}
