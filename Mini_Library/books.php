<?php

require_once "app.php";

    $service = new \Services\Books\BooksService($db);
    $dataView = $service->getBooksViewData();

$app->loadTemplate("books_frontend", $dataView);



