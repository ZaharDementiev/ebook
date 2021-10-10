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
        exec('su - admin -c "converter --path=/home/admin/web/ebook/storage"');
    }
}
