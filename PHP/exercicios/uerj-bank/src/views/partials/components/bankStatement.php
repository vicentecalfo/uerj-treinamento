<?php


function bankStatementTable($data)
{
    $header = [
        "type" => "Transação",
        "source" => "Origem",
        "amount" => "Valor",
        "date" => "Data"
    ];

    function htmlPipeType($data)
    {
        $enums = [
            'INCOME_PIX' => '<span class="tag is-success">PIX Recebido</span>',
            'OUTCOME_PIX' => '<span class="tag is-danger">PIX Enviado</span>',
            'DEBIT' => '<span class="tag is-danger">Compra no Débito</span>'
        ];
        return $enums[$data];
    }

    $htmlPipes = [
        'type' => fn ($data) => htmlPipeType($data),
        'date' => fn($data) => '<span class="tag is-link is-light">'. $data .'</span>'
    ];

    $buildHeader = array_map(fn ($head) => "<th>$head</th>",  array_values($header));
    $buildBody = array_map(function ($row) use ($header, $htmlPipes) {
        $buildRowColumns = array_map(function ($key) use ($row, $htmlPipes) {
            $hasHtmlPipe = array_key_exists($key, $htmlPipes);
            $data = $row[$key];
            $columnHtml = ['<td>', $hasHtmlPipe ? $htmlPipes[$key]($data) : $data, '</td>' ];
            return  join("",$columnHtml);
        }, array_keys($header));
        return "<tr>" . join("", $buildRowColumns) . "</tr>";
    }, $data);

    $html = [
        '<table class="table is-fullwidth is-striped">', '<thead>', join('', $buildHeader), '</thead>', '<tbody>', join('', $buildBody), '</tbody>', '</table>'
    ];

    echo join("", $html);
}
