<?php
/**
 * Template Name: Home
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
 ?>
<!--Built with jQuerin Grid Builder-->
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>
            Melange 2013 | Festival Of Vit
        </title>
        <meta http-equiv="cleartype" content="on">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/home.css" type="text/css">
        <?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
    </head>
    <body>
        <div class="row" id="megamenu">
            <div class="col span_1_of_1 unhidden">
                <h2 id="hiddenlogo"><a href="#">Melange</a></h2>
            </div>
            <div class="col span_1_of_5 hidden">
                <div class="menutag" >
                    <a href="#" >MELange</a>
                </div>
                <div id="menuimage"></div>
                <div id="menudescription">
                    The hovered Menu Items Description here
                </div>
            </div>
            <div class="col span_1_of_5">
                <div class="menutag">
                    <a href="#">Electronics</a>
                </div>
                <ul>
                    <li><a href="#">Microcontroller</a></li>
                    <li><a href="#">PCB Designing</a></li>
                    <li><a href="#">Circuit Debugging</a></li>
                    <li><a href="#">Network Treasure Hunt</a></li>
                    <li><a href="#">Signals & Systems</a></li>
                </ul>
            </div>
            <div class="col span_1_of_5">
                <div class="menutag">
                    <a href="#">Computer</a>
                </div>
                <ul>
                    <li><a href="#">Microcontroller</a></li>
                    <li><a href="#">PCB Designing</a></li>
                    <li><a href="#">Circuit Debugging</a></li>
                    <li><a href="#">Network Treasure Hunt</a></li>
                    <li><a href="#">Signals & Systems</a></li>
                </ul>
            </div>
            <div class="col span_1_of_5">
                <div class="menutag">
                    <a href="#">Chemical</a>
                </div>
                <ul>
                    <li><a href="#">Microcontroller</a></li>
                    <li><a href="#">PCB Designing</a></li>
                    <li><a href="#">Circuit Debugging</a></li>
                    <li><a href="#">Network Treasure Hunt</a></li>
                    <li><a href="#">Signals & Systems</a></li>
                </ul>
            </div>
            <div class="col span_1_of_5">
                <div class="menutag">
                    <a href="#">Cultural</a>
                </div>
                <ul>
                    <li><a href="#">Microcontroller</a></li>
                    <li><a href="#">PCB Designing</a></li>
                    <li><a href="#">Circuit Debugging</a></li>
                    <li><a href="#">Network Treasure Hunt</a></li>
                    <li><a href="#">Signals & Systems</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="row">
            <div class="col span_2_of_5 hidden" ></div>
            <div class="col span_1_of_5" id="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/melange.png" alt="melange">
            </div>

            <div class="clearfix"></div>
        </div>
        <div class="row">
            <div class="col span_1_of_1" id="logotext">
                <h3>
                    13th Feb
                </h3>
            </div>
            <div class="clearfix"></div>
        </div>
        <!--<div class="row">
            <div class="col span_1_of_1" id="maincta">
                <div id="cta">
                    <button id="registercta">Register</button>
                </div>
                <div id="thegraphic">
                    <div class="sigma-expand" id="mouselayer-sigma-1"></div>
                </div>
            </div>
        </div>-->
        <a href="#menuopen" id="menuicon">
                
        </a>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.8.2.min.js"></script>
    </body>
</html>
<?php get_footer(); ?>