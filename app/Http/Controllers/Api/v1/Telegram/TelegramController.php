<?php

namespace App\Http\Controllers\Api\v1\Telegram;

use App\Http\Controllers\Controller;
use App\Services\Telegram\TelegramNotificationServices;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;

class TelegramController extends Controller
{
    public function notification(Request $request): int
    {
        return (new TelegramNotificationServices(
            $request->input('name'),
            $request->input('phone'),
            $request->input('city'),
                $request->input('coupon') ?? 'Отсуствуют')
        )->notification();
    }
}
