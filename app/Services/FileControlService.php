<?php

namespace App\Services;

use DOMDocument;
use Illuminate\Support\Facades\Storage;

class FileControlService
{
    private const DIRECTORY = 'uploads/';

    public static function fileUpload($value, $directory) : string {
        $filenameWithExt = $value->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $value->getClientOriginalExtension();
        $fileNameToStore = $filename . '_' . time() . '.' . $extension;
        $path = $value->storeAs(self::DIRECTORY . $directory, $fileNameToStore);

        return $fileNameToStore;
    }

    public static function removeFile($directoryName, $filename) : void {
        Storage::delete(self::DIRECTORY . $directoryName . '/' . $filename);
    }

    public static function readDocxFile($directoryName, $filename) : string {
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
        $document->loadHTML(file_get_contents($path . '.html'));
        $body = $document->getElementsByTagName('body')->item(0);

        foreach ($body->childNodes as $child) {
            $mock->appendChild($mock->importNode($child, true));
        }

        return $mock->saveHTML();
    }
}
