<?php

namespace App\Http\Controllers;

use App\Models\HTMLBook;
use App\Services\FileControlService;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    function upload(Request $request)
    {
        $document = FileControlService::fileUpload($request->file('text'), 'math');
        $documentWithoutExt = str_replace('.docx', '', $document);

        $book = HTMLBook::create([
            'user_id' => 1,
            'name' => $documentWithoutExt
        ]);
    }
}
