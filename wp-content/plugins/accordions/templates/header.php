<?php

/*
* @Author 		pickplugins
* Copyright: 	2015 pickplugins
*/

if ( ! defined('ABSPATH')) exit;  // if direct access 
		
	$accordions_title = apply_filters( 'accordions_filter_title', $accordions_title );

	$html.= '<div class="accordions-head">'.$accordions_title;

	$html.= '<i class="accordion-icons accordion-plus '.$accordions_icons.'"></i>';
	$html.= '<i class="accordion-icons accordion-minus '.$accordions_icons.'"></i>';		

	$html.= '</div>'; //accordions-head