<?php namespace App\Console\Commands;

use App\Commands\Docs\IndexAllDocuments;
use Illuminate\Console\Command;

class IndexDocs extends Command {

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
	protected $description = 'Index all Documentation on Algolia';

	/**
	 * Execute the console command.
	 *
	 * @return void
	 */
	public function handle(\Illuminate\Contracts\Bus\Dispatcher $bus)
	{
		$bus->dispatch(new IndexAllDocuments);
	}
}