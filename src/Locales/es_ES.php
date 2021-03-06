<?php

// moment.js locale configuration
// locale : spanish (es)
// author : Julio Napurí : https://github.com/julionc

return [
    "months"        => explode('_', 'enero_febrero_marzo_abril_mayo_junio_julio_agosto_septiembre_octubre_noviembre_diciembre'),
    "monthsShort"   => explode('_', 'ene._feb._mar._abr._may._jun._jul._ago._sep._oct._nov._dic.'),
    "weekdays"      => explode('_', 'domingo_lunes_martes_miércoles_jueves_viernes_sábado'),
    "weekdaysShort" => explode('_', 'dom._lun._mar._mié._jue._vie._sáb.'),
    "calendar"      => [
        "sameDay"  => '[hoy]',
        "nextDay"  => '[mañana]',
        "lastDay"  => '[ayer]',
        "lastWeek" => '[el] l',
        "sameElse" => 'l',
        "withTime" => function (\Moment\Moment $moment) { return '[a la' . ($moment->getHour() !== 1 ? 's' : null) . '] H:i'; },
        "default"  => 'd/m/Y',
    ],
    "relativeTime"  => [
        "future" => 'en %s',
        "past"   => 'hace %s',
        "s"      => 'unos segundos',
        "m"      => 'un minuto',
        "mm"     => '%d minutos',
        "h"      => 'una hora',
        "hh"     => '%d horas',
        "d"      => 'un día',
        "dd"     => '%d días',
        "M"      => 'un mes',
        "MM"     => '%d meses',
        "y"      => 'un año',
        "yy"     => '%d años',
    ],
    "ordinal"       => function ($number)
    {
        return $number . 'º';
    },
    "week"          => [
        "dow" => 1, // Monday is the first day of the week.
        "doy" => 4  // The week that contains Jan 4th is the first week of the year.
    ],
];