<?php

namespace App\Services;

use DOMDocument;
use DOMXPath;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class FileControlService
{
    private const DIRECTORY = 'uploads/';

    public static function fileUpload($value, $directory) : string
    {
        $filenameWithExt = $value->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $value->getClientOriginalExtension();
        $fileNameToStore = $filename . '_' . time() . '.' . $extension;
        $path = $value->storeAs(self::DIRECTORY . $directory, $fileNameToStore);

        return $fileNameToStore;
    }

    public static function removeFile($directoryName, $filename)
    {
        return Storage::delete(self::DIRECTORY . $directoryName . '/' . $filename);
    }

    public static function readDocxFile($directoryName, $filename) : string
    {
        $content = fopen(Storage::path(self::DIRECTORY.$directoryName.'/'.$filename),'r');

        while(!feof($content)){

            $line = fgets($content);

            echo $line."<br>";
        }
    }

    public static function getBodyContent($path)
    {
        $document = new DOMDocument;
        $mock = new DOMDocument;

        $document->loadHTML(Storage::get($path));
        $body = $document->getElementsByTagName('body')->item(0);

        foreach ($body->childNodes as $child) {
            $node = $mock->importNode($child, true);
            $mock->appendChild($node);
        }

        $page = $mock->saveHTML();
        $lines = explode("\n", $page);
        $equation = false;
        $counterEquation = 0;
        $editedLines = [];

        foreach ($lines as $line) {
            $newLine = $line;
            if (str_contains($line, 'class="math inline"')) {
                $counterEquation++;
                $equation = true;
                $parts = explode('class="math inline"', $newLine);
                $newLine = $parts[0] . 'class="math inline" data-number-'.$counterEquation . $parts[1];
            }

            if ($equation && !str_contains($line, 'class="math inline"')) {
                $equation = false;
                $newLine = '<button class="teacher-only" type="submit" onclick="storeAnswer('.''.')">Задать</button>';
                $counterEquation = 0;
            }

            $editedLines[] = $newLine;
        }

        dd($editedLines);
        dd($lines);

        return implode("\n", $editedLines);
    }
}
