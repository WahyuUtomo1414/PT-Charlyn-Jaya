<?php

namespace App\Observers;

use App\Mail\PoApprovedMail;
use App\Models\Po;
use Illuminate\Support\Facades\Mail;

class PoObserver
{
    /**
     * Handle the Po "updated" event.
     */
    public function updated(Po $po): void
    {
        if ($po->isDirty('status') && $po->status === 'approve') {
            $user = $po->createdBy;

            if ($user && $user->email) {
                Mail::to($user->email)->send(new PoApprovedMail($po));
            }
        }
    }
}
