<?php 

define('INCLUDES', 'site/includes/');
define('TITULO', 'Blog');

?>

@include(INCLUDES . 'header')

<br>
<div class="mt-5 jumbotron">
	<!--  Breadcrumbs  -->
	<nav aria-label="breadcrumb">
	  <div class="migalhas">
	  	<a class="bread_link text-muted mr-3" href="{{ route('inicio') }}">Início </a>
	  	<span class="text-muted mr-3"> // </span>
	  	<span class="text-muted">Blog </span>
	  </div>
	</nav>
</div>
<!--  Breadcrumbs end  -->

@include(INCLUDES . 'footer')

		