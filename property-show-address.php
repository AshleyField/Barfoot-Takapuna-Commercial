<?php 

if(get_field('unit')){
	echo get_field('unit').',&nbsp;';
}

if(get_field('street_number')){
	echo get_field('street_number').'&nbsp;';
}

if(get_field('street_name')){
	echo get_field('street_name').',&nbsp;';
}

if(get_field('suburb')){
	echo get_field('suburb');
} ?>
