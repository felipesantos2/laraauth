<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Notifications\EmailNotification;
use Illuminate\Console\Command;

class SendNotifications extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-notifications';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        User::all()->each(fn(User $user) => $user->notify(new EmailNotification() ));
    }
}
