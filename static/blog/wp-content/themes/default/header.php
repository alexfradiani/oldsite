<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!--Fuente UBUNTU-->
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu">

<link rel="stylesheet" type="text/css" href="../../../../custom_stilo.css" />

<style type="text/css" media="screen">

<?php
// Checks to see whether it needs a sidebar or not
if ( empty($withcomments) && !is_single() ) {
?>
	#page { background: url("<?php bloginfo('stylesheet_directory'); ?>/images/kubrickbg-<?php bloginfo('text_direction'); ?>.jpg") repeat-y top; border: none; }
<?php } else { // No sidebar ?>
	#page { background: url("<?php bloginfo('stylesheet_directory'); ?>/images/kubrickbgwide.jpg") repeat-y top; border: none; }
<?php } ?>

</style>

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Agregado- header general de la pag. -->
<div align="center" id="custom_area">
  <div style="width:1000px; margin-top: 7px solid #000000;">
      <div id="cabezal">
        mis proyectos:&nbsp; <a href="/software">Software</a>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;<a href="../musica">Música</a>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;<a href="../blog/">Blog</a> <span style="margin-left:60px;"><a href="../contacto/">cont&aacute;ctame</a></span>
      </div>
    <div id="div_nombre">
            <div style="float:left; margin-left:10px; margin-top:15px;"><a href="../index.html"><img src="../../../../images/nombre.png" /></a></div>
            <div id="subtx_1"><strong>   -   P&aacute;gina personal</strong></div>
   	  </div>
      <div id="div_barratop">
        <div style="float:left; padding:5px 10px;"> <img src="/images/enso_white_small.png" width="28px;" height="28px;" style="border:0px;"/> </div>
        <h1 class="titulo_seccion">BLOG</h1>
      </div>
    </div>
 </div>


<div id="page">


<div id="header" role="banner">
	<div id="headerimg">
		<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
		<div class="description"><?php bloginfo('description'); ?></div>
	</div>
</div>
<hr />
