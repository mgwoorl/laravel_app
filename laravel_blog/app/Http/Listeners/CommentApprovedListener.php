<?php

namespace App\Listeners;

use App\Events\CommentApproved;
use Illuminate\Support\Facades\Log;

class CommentApprovedListener
{
    public function handle(CommentApproved $event)
    {
        Log::info($event->comment);
    }
}