<?php
  /**
  * @Theme Name   :    porkfolio
  * @file         :    header.php
  * @package      :    porkfolio
  * @author       :    Dan Devine
  * @license      :    GPLv3
  * @filesource   :    wp-content/themes/porkfolio/header.php
  */
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php wp_title('&raquo;','true','right'); ?></title>

<link href="/favicon.ico" rel="shortcut icon">
<?php wp_head(); ?>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<script src="//use.typekit.net/hbv5yml.js"></script>
<script>try{Typekit.load();}catch(e){}</script>

</head>
<body>
