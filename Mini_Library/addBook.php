<?php
require_once "app.php";

$service = new \Services\addBooks\addBooksService($db);

$viewData = $service->getAddBookViewData();

$app->loadTemplate("addBook_frontend", $viewData);



    if (isset($_POST["add"])){

        $service->addBook($_POST["language"], $_POST["author"], $_POST["year"], $_POST["genre"], $_POST["comment"], $_POST["title"]);

    }
