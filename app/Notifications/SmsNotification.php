<?php

namespace MMORATE\Notifications;

use Illuminate\Notifications\Notification;
use MMORATE\SmsCodes;
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

        SmsCodes::where('user_id', $notifiable->id)->where('status', SmsCodes::UNCONFIRMED)->delete();

        $codeDB = new SmsCodes();
        $codeDB->user_id = $notifiable->id;
        $codeDB->code = $code;
        $codeDB->save();

        return SmscRuMessage::create("Код подтверждения: " . $code);
    }
}
