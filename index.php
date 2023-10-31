<?php

require_once 'vendor/autoload.php';
require_once 'stubdata.php';

$mediaClippingDTO = new \App\Domains\Clippings\Templates\DefaultTemplate();
$cscDTO = new \App\Domains\Clippings\Templates\CscTemplate();
$descriptiveDTO = new \App\Domains\Clippings\Templates\DescriptiveTemplate();
$categorizedDTO = new \App\Domains\Clippings\Templates\CategorizedTemplate();
$descriptiveDTO = new \App\Domains\Clippings\Templates\DescriptiveTemplate();
$textDTO = new \App\Domains\Clippings\Templates\TextTemplate();
$alwaysOnDTO =  new \App\Domains\Clippings\Templates\AlwaysOnTemplate();
$clipping = new \App\Domains\Clippings\Entitities\Clipping();
$repository = new \App\Domains\Clippings\Repository\ClippingRepository($clipping);
$templateRepository =  new \App\Domains\Clippings\Repository\TemplateRepository();
$templateFactory = new \App\Domains\Clippings\Factories\TemplateFactory();

$service = new \App\Domains\Clippings\Service\ClippingService($repository, $templateRepository, $templateFactory);
$controller = new \App\Modules\Clippings\Controllers\ClippingController($repository, $service);

$payloadTemplate = new TemplatePayloadStub();

$default = $payloadTemplate->default();
$text = $payloadTemplate->text();
$csc = $payloadTemplate->csc();
$descriptive = $payloadTemplate->descriptive();
$categorized = $payloadTemplate->categorized();
$alwaysOn = $payloadTemplate->alwaysOn();

if($_GET['preview'])
return $controller->preview($text);


/*$controller->create($text);
PHP_EOL;
echo 'fim';*/


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Preview</title>
</head>
<body>
    <button id="preview">Preview</button>
    <div id="contentPreview">
    </div>
<script>
    const contentPreview = document.querySelector('#contentPreview')

    function getData() {
        fetch('http://localhost:8000?preview=true', {
          "method": 'POST'
        })
        .then((response) => response.text())
        .then(text => {
            contentPreview.innerHTML = text
        })
    }

    const previewButton = document.querySelector('#preview')

    previewButton.addEventListener('click', getData)





</script>
</body>
</html>
