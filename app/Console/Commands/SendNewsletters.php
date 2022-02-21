<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\SendNewslettersJob;

class SendNewsletters extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'newsletters:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send newsletters to all subscribed';

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
        SendNewslettersJob::dispatch();
        return "Job dispatched!";
    }
}
