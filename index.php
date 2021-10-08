<?php

// Check if we are in a mission, then throw 404, cause file is missing.
$uriParts = explode('/', $_SERVER['REQUEST_URI']);
if (count($uriParts) >= 3 && $uriParts[1] === 'missions') {
    die('404 - file not found');
}

$categories = [];
foreach (scandir(__DIR__ . '/missions') as $category) {
    if (!is_dir(__DIR__ . '/missions/' . $category)) {
        continue;
    }

    if (substr($category, 0, 1) === '.') {
        continue;
    }

    $categories[] = $category;
};

echo '<ul>';
foreach ($categories as $category) {
    $missions = [];
    foreach (scandir(__DIR__ . '/missions/' . $category) as $mission) {
        if (!is_dir(__DIR__ . '/missions/' . $category . '/' . $mission)) {
            continue;
        }

        if (substr($mission, 0, 1) === '.') {
            continue;
        }

        $missions[] = $mission;
    };

    echo '<li>';
    echo $category . ' (' . count($missions) . ' missions)';
    echo '<ul>';
    foreach ($missions as $mission) {
        echo '<li><a href="' . $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/missions/' . $category . '/' . $mission . '/">' . $category . ' ' . $mission . '</a></li>';
    }
    echo '</ul>';
    echo '</li>';
}
echo '</ul>';