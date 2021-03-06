<?php
/**
 * Config-file for Alpha. Change settings here to affect installation.
 *
 */

/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly


/**
 * Define Alpha paths.
 *
 */
define('ALPHA_INSTALL_PATH', __DIR__ . '/..');
define('ALPHA_THEME_PATH', ALPHA_INSTALL_PATH . '/theme/render.php');


/**
 * Include bootstrapping functions.
 *
 */
include(ALPHA_INSTALL_PATH . '/src/bootstrap.php');


/**
 * Start the session.
 *
 */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();


/**
 * Create the Alpha variable.
 *
 */
$alpha = array();

/**
 * Site wide settings.
 *
 */
$alpha['lang']         = 'sv';
$alpha['title_append'] = ' | OOPHP';

$alpha['top'] = <<<EOD
<header id='above'>
<nav class='related'>
<span>Kursmoment: </span>
<a href="http://{$_SERVER['HTTP_HOST']}/~leer15/oophp/kmom01/alpha/webroot/">01</a>
</nav>
</header>
EOD;

$alpha['header'] = <<<EOD
<img class='sitelogo' src='img/logo-oophp.png' alt='OOPHP Logo'/>
<span class='sitetitle'>Blekinge Tekniska Högskola</span>
<span class='siteslogan'>Databaser och objektorienterad programmering i PHP</span>
EOD;


$alpha['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Lenny Erlesand (lenny@erlesand.se) | <a href='https://github.com/mosbth/Alpha-base'>Alpha på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;

$alpha['menu'] = array(
	'class' => 'navbar', 
	'items' => array(
		'hem'  			=> array('text'=>'Hem', 'url' => 'index.php', 'title' => 'Presentation om mig själv', 'class' => null),
		'redovisning'  	=> array('text'=>'Redovisning',  'url'=>'report.php', 'title' => 'Redovisning av kursmomenten', 'class' => null), 
		'kallkod'  		=> array('text'=>'Källkod',  'url'=>'source.php', 'title' => 'Visa källkoden', 'class' => null) 
	),
	
	'callback' => function($url) {
	    if (basename($_SERVER['SCRIPT_FILENAME']) == $url) {
	      return true;
	    }
    }
);


/**
 * Theme related settings.
 *
 */
$alpha['stylesheets'] = array(
	'css/normalize.css', 
	'css/style.css', 
	'http://fonts.googleapis.com/css?family=Lato:300,400,700|Open+Sans:400,700,300'
);
$alpha['favicon']    = 'favicon.ico';



/**
 * Settings for JavaScript.
 *
 */
$alpha['modernizr'] = 'js/modernizr.js';
$alpha['jquery'] = '//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js';
$alpha['javascript_include'] = array('js/main.js');

/**
 * Google analytics.
 *
 */
$alpha['google_analytics'] = null; // Set to null to disable google analytics
