<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\OffersNotification;

class NotificationController extends Controller
{
    public function sendOfferNotification() {
        $user = User::first();
        $offer = [
            'name' => 'BOGO',
            'body' => 'You received an offer.',
            'thanks' => 'Thank you',
            'offerText' => 'Check out the offer',
            'offerUrl' => url('/'),
            'id' => 7
        ];

        $user->notify(new OffersNotification($offer));
        dd('Task completed!');
    }
}
