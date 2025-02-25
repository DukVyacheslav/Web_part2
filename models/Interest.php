<?php
class Interest {
    const INTERESTS = [
        'Хобби' => [
            'Программирование' => 'Разработка веб-приложений',
            'Фотография' => 'Пейзажная и портретная съемка'
        ],
        'Спорт' => [
            'Велоспорт' => 'Горные велопоходы',
            'Плавание' => 'Бассейн 3 раза в неделю'
        ]
    ];

    public static function getAll() {
        return self::INTERESTS;
    }
}