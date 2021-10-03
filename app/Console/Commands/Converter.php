<?php

namespace App\Console\Commands;

use App\Services\FileControlService;
use Illuminate\Console\Command;
use Illuminate\Http\File;

class Converter extends Command
{
    protected $signature = 'run:converter';

    protected $description = 'Command description';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        shell_exec('C:/xampp/htdocs/ebook/storage/app/converter.sh --path=C:/xampp/htdocs/ebook/storage/app/');

        $dir = 'C:\xampp\htdocs\ebook\storage\app\uploads\math';
        $files = scandir($dir);
        foreach ($files as $file) {
            if (pathinfo($file, PATHINFO_EXTENSION) == '.docx') {
                FileControlService::removeFile($dir,$file . '.docx');
            }
        }
    }
}
