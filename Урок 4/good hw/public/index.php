<?php

include "../config/config.php";

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'index';
}

$params = [
    'count' => 2
];

switch ($page) {
    case 'index':
        $params['name'] = 'Alex';
        break;

    case 'catalog':
        $params['catalog'] = getCatalog();
        break;

    case 'gallery':
        if (!empty($_FILES)) upload();
        $params['gallery'] = getGallery();
        $params['message'] = $status[$_GET["message"]];;
        break;
}

echo render($page, $params);