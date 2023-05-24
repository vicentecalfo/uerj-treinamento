<?php
$APIURL = "https://www.amiiboapi.com/api/amiibo/";
$hasName = isset($_GET["name"]) && !empty($_GET['name']);

$selectOptionsResponse = @file_get_contents($APIURL);

$selectOptions =  @json_decode($selectOptionsResponse)->amiibo; // o @ suprime os warnings

$selectOptionsFlat = array_map(fn ($value) => $value->name, $selectOptions);
$selectOptionHtml = fn () => join("", array_map(function ($name) use($hasName) {
    $optionValue = urlencode($name);
    $isSelected = $hasName && $optionValue === $_GET["name"] ? 'selected' : '';
    return '<option value="' . $optionValue . '" ' . $isSelected . '>' . $name . '</option>';
}, array_unique($selectOptionsFlat)));

if($hasName){
    $response = @file_get_contents($APIURL . '?name=' . $_GET["name"]);
    $data = @json_decode($response)->amiibo;
    
    $htmlCards = fn () => join("", array_map(fn ($value) => '<div class="column">
            <div class="block amiibo-card">
                <div>
                    <img src="' . $value->image . '" class="image-card"/>
                </div>
                <div>
                    <h1 class="title is-4">' . $value->character . '</h1>
                    <h2 class="title is-6">' . $value->amiiboSeries . '</h2>
                    <span class="tag is-primary">' . $value->gameSeries . '</span>
                    <span class="tag is-primary">' . $value->type . '</span>
                </div>
            </div>
        </div>', $data));
    
    $notFound = '<div class="notification is-danger">Infelizmente esse personagem não existe na coleção Amiibo</div>';
}



?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <style>
        .amiibo-card {
            display: grid;
            grid-template-columns: 120px 1fr;
            gap: 20px;
        }

        .image-card {
            height: 120px;
            display: block;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <section class="section">
        <div class="container">
            <h1 class="title">
                Amiibo Nintendo API
            </h1>
            <p class="subtitle">
                A RESTful API for Amiibo
            </p>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <form action="./api.php" method="get">
                        <div class="select">
                            <select name="name" onchange="this.form.submit()">
                                <option value="">Escolha um personagem</option>
                                <?php echo $selectOptionHtml(); ?>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="columns <?php echo $hasName ? '' : 'is-hidden' ?>">
                <?php echo $data ? $htmlCards() : $notFound; ?>
            </div>
        </div>
    </section>
</body>

</html>