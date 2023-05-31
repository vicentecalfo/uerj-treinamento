<?php


function bankStatementTable($data)
{
    $headDTO = [
        "transaction" => "Transação",
        "source" => "Estabelecimento",
        "amout" => "Valor",
        "timestamp" => "Data"
    ];
    $buildHeader = array_map(fn ($head) => "<th>$head</th>",  array_values($headDTO));
    $buildBody = array_map(function ($row) {
        $buildRowColumns = array_map(fn ($content) => "<td>$content</td>", array_values($row));
        return "<tr>" . join("", $buildRowColumns) . "</tr>";
    }, $data);

    $html = [
        '<table class="table">', '<thead>', join('', $buildHeader), '</thead>', '<tbody>', join('', $buildBody), '</tbody>', '</table>'
    ];

    echo join("", $html);
}
