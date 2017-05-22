<?php

namespace App\Console\Commands;

use App\Mail\NoticeMessage;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendNoticeEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-notice-emails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send prepared notice emails to users';

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
    public function handle()
    {
        $users = User::all();
        $bar = $this->output->createProgressBar(count($users));

        foreach ($users as $user)
        {
            Mail::to($user)->send(new NoticeMessage($user));
            $bar->advance();
        }
        $bar->finish();
        echo PHP_EOL;
        $this->line('Done') . PHP_EOL;
    }
}
