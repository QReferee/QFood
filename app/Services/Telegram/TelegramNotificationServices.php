<?php

namespace App\Services\Telegram;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class TelegramNotificationServices extends TelegramServices
{

    protected string $name;
    protected string $phone;
    protected string $city;
    protected string $promo;

    public function __construct(string $name, string $phone, string $city, string $promo)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->city = $city;
        $this->promo = $promo;
    }

    public function notification(): int
    {
        Http::post("https://api.telegram.org/bot". $this->token ."/sendMessage", [
            'chat_id' => $this->chatID,
            'text' =>
                "Пришла новая заявка - " . $this->name .
                "\nНомер телефона - " . $this->phone .
                "\nГород - " . $this->city .
                "\nПромокод - " . $this->promo
        ]);

        return 200;
    }
}
