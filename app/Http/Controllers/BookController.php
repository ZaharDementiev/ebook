<?php

namespace App\Http\Controllers;

use App\Models\HTMLBook;
use App\Services\FileControlService;

class BookController extends Controller
{
    public function index(HTMLBook $book)
    {
        $book = FileControlService::getBodyContent('C:\xampp\htdocs\ebook\storage\app\uploads\math\\' . $book->name);

        return view('book', compact('book'));
    }
}
