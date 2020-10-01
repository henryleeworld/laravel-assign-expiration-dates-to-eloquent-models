<?php

namespace App\Http\Controllers;

use App\Models\Subscription;

class SubscriptionController extends Controller
{
    public function show()
    {
        $subscriptions = Subscription::onlyExpired()->get();
        foreach ($subscriptions as $subscription) {
            echo '編號：' . $subscription->id . ' ' . '到期時間：' . $subscription->ends_at. PHP_EOL;
        }
    }
}
