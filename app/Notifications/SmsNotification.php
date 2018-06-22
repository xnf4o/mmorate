<?php

namespace MMORATE\Notifications;

use Illuminate\Notifications\Notification;
use Auth;
use NotificationChannels\SmscRu\SmscRuMessage;
use NotificationChannels\SmscRu\SmscRuChannel;

class SmsNotification extends Notification
{
    public function via($notifiable)
    {
        return [SmscRuChannel::class];
    }

    public function toSmscRu($notifiable)
    {
        $code = rand(00000,99999);

        $user = Auth::user()->where('id', $notifiable->id)->first();
        $user->phone_code = $code;
        $user->save();

        return SmscRuMessage::create("Код подтверждения: " . $code);
    }
}
