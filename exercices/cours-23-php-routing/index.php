<?php

// Config
include 'config.php';

// Routing
$q = !empty($_GET['q']) ? $_GET['q'] : '';

if($q === '')
{
	$page = 'home';
}
else if($q === 'contact')
{
	$page = 'contact';
}
else if($q === 'article')
{
	$page = 'article';
}
else
{
	$page = '404';
}

// Includes
ob_start();
include 'views/pages/'.$page.'.php';
$content = ob_get_clean();

include 'views/partials/header.php';
echo $content;
include 'views/partials/footer.php';