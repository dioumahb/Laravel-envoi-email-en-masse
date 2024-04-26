<?php

namespace App\Jobs;

use App\Mail\SendMassMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendMassMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $users;

    /**
     * Create a new job instance.
     */
    public function __construct($users)
    {
        $this->users = $users;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->users)->send(new SendMassMail());
    }
}
