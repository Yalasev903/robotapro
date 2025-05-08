<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Registered;
use App\Models\AdminSetting;
use App\Models\Notification;

class SendAutoGreeting
{
    // Статический массив для отслеживания уже обработанных пользователей
    protected static $processed = [];

    /**
     * Обработка события регистрации.
     *
     * @param Registered $event
     * @return void
     */
    public function handle(Registered $event)
    {
        $user = $event->user;

        // Если для данного пользователя событие уже обработано, выходим
        if (isset(self::$processed[$user->id])) {
            return;
        }
        self::$processed[$user->id] = true;

        // Получаем настройки админпанели
        $adminSetting = AdminSetting::first();

        if ($adminSetting && $adminSetting->auto_greeting_enabled) {
            $greetingText = $adminSetting->auto_greeting_text ?? 'Зроби Сам – це платформа для пошуку спеціалістів та виконавців. 🚀';

            // Отправляем уведомление с приветствием
            Notification::create([
                'user_id' => $user->id,
                'title'   => '🎉 Вітаємо, ' . $user->name . '!',
                'message' => 'Привіт, ' . $user->name . '! 😊 Радий бачити тебе на платформі "Зроби Сам"! 🎈 ' . $greetingText,
                'read'    => false,
            ]);

            // Отправляем второе уведомление с описанием платформы
            Notification::create([
                'user_id' => $user->id,
                'title'   => 'ℹ️ Як працює наша платформа?',
                'message' => '👋 Привіт, ' . $user->name . '! Наш додаток створений для того, щоб виконавці та замовники працювали разом у різних сферах діяльності. 🛠️ Тут ти можеш знайти професіонала для будь-якої справи або записатися на завдання, щоб продемонструвати свої навички та заробити рейтинг! ⭐',
                'read'    => false,
            ]);
        }
    }
}
