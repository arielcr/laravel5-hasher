<?php namespace Laravel\Hasher\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class LaravelHasherCommand extends Command {

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'hash';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Converts a string to a Laravel hashed password.';

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
     * @return mixed
     */
    public function fire()
    {
        $value = $this->argument('password');
        $hash = Hash::make($value);
        $this->info($hash);
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['password', InputArgument::REQUIRED, 'Password to hash.'],
        ];
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [];
    }

}
