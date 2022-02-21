<?php

namespace App\Jobs;

use App\Interfaces\NewsletterRecipientRepositoryInterface;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\NewsletterMail;
use Illuminate\Support\Facades\Mail;

class SendNewslettersJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct() {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(NewsletterRecipientRepositoryInterface $newsletterRecipientRepository)
    {
        $recipients = $newsletterRecipientRepository->all();
        Mail::to($recipients)->send(new NewsletterMail());
    }
}
