<?php

namespace App\Console\Commands;

use Exception;
use Illuminate\Console\Command;
use Symfony\Component\Console\Exception\InvalidArgumentException;

class AppInstall extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:install 
                                {--refresh : Refresh the database.}
                                {--seed : Run the default seeders.}
                                {--demo : Run the demo seeders.}
                            ';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install the application.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // run migrations
        $this->runMigrations();

        // run default seeders
        $this->runDefaultSeeders();

        // run seeders
        $this->runDemoSeeders();

        // return successful status code
        return 0;
    }

    /**
     * Method to run migrations.
     *
     * @return void
     * @throws InvalidArgumentException
     * @throws Exception
     */
    private function runMigrations(): void
    {
        // setup default command
        $command = 'migrate';

        // check if we should refresh the database
        if ($this->option('refresh')) {
            // if so, update the command string
            $command .= ':refresh';
        }

        // call the finished command
        $this->call($command);
    }

    /**
     * Run the default seeders.
     *
     * @return void
     */
    private function runDefaultSeeders(): void
    {
        // check if we should run the default seeders
        if (!$this->option('seed', false)) {
            return;
        }

        // run the seeders
        $this->call('db:seed');
    }

    /**
     * Run the demo seeders.
     *
     * @return void
     */
    private function runDemoSeeders(): void
    {
        // check if we should run the default seeders
        if (!$this->option('demo', false)) {
            return;
        }

        // run the seeders
        $this->call('db:seed', [
            '--class' => 'DemoDatabaseSeeder'
        ]);
    }
}
