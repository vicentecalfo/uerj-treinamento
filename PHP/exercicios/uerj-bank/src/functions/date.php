<?php
function formatDate($date, $format = "dd 'de' MMMM 'de' YYYY")
{
    $formatter = new IntlDateFormatter(
        APP_CONFIG['locale'],
        IntlDateFormatter::FULL,
        IntlDateFormatter::NONE,
        'America/Sao_Paulo',
        IntlDateFormatter::GREGORIAN,
        $format
    );
    return $formatter->format($date);
}
