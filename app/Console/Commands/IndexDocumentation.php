<?php namespace App\Console\Commands;

use Illuminate\Console\Command;

class IndexDocumentation extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'docs:index';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Index all documentation on Algolia';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        app('App\Services\Documentation\Indexer')->indexAllDocuments();
    }
}
