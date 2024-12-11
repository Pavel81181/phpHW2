<!-- 6. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
22 часа 15 минут
21 час 43 минуты. -->

<?php

function nowTime() {
    $hour = date('G');
    $minute = date('i');
    $hours_text = ($hour == 1 || $hour == 21) ? 'час' : 'часов';
    $minutes_text = ($minute == 1 || $minute == 21 || $minute == 31 || $minute == 41 || $minute == 51) ? 'минута' : (($minute >= 2 && $minute <= 4) || ($minute >= 22 && $minute <= 24) || ($minute >= 32 && $minute <= 34) || ($minute >= 42 && $minute <= 44) || ($minute >= 52 && $minute <= 54) ? 'минуты' : 'минут');

    return "$hour $hours_text $minute $minutes_text";
}


echo nowTime();  