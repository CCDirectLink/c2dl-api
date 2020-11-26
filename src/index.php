<?php

header('Content-type:application/json;charset=utf-8');

// -- url filter --

$_url = '';
if (isset($_GET['url'])) {
    $_url = $_GET['url'];
}

$_urlPattern = '/^[a-zA-Z0-9_\-\.\/]+$/';

$url = null;

if (preg_match($_urlPattern, $_url)) {
    $url = $_url;
}

// other get param filter as above

// -- use $url after this line --

// example data
$data = array(
    'apis' => array(
        'mods' => array(
            'latest' => array('https://api.c2dl.info/mods'),
            '0.0.0-beta' => array('https://api.c2dl.info/mods'),
        )
    ),
    'base' => array(
        'version' => '0.0.0-beta',
    ),
    'request' => array(
        'url' => $url,
    )
);

// json output
echo json_encode($data, JSON_FORCE_OBJECT);
