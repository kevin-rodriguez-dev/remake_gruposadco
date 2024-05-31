<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ClearApp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clear:app';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear cache, views, config, routes and compiled classes';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->call('cache:clear');
        $this->call('view:clear');
        $this->call('config:clear');
        $this->call('route:clear');
        $this->call('optimize:clear');

        $this->info('All caches, views, routes, and compiled classes have been cleared!');
    }
}
