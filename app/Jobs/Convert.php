<?php

namespace App\Jobs;

use App\Services\FileControlService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Artisan;

class Convert implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $book;
    private $directory;

    public function __construct($book, $directory)
    {
        $this->book = $book;
        $this->directory = $directory;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        exec('su - root -c "converter --path=/home/admin/web/ebook/storage"');
        FileControlService::removeFile($this->directory, $this->book);
    }
}
