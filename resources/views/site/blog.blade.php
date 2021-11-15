<?php 

define('INCLUDES', 'site/includes/');
define('TITULO', 'Blog');

?>

@include(INCLUDES . 'header')

@include(INCLUDES . 'blog_breadcrumbs')


<!--  Conteúdo  -->
<div class="row" style="margin: 0 !important">


	<!--  Postagens  -->
	<div class="col-md-8">

		@include(INCLUDES . 'postagens')

	</div>
	<!--  Postagens fim  -->	


	<!--  Sidebar  -->
	<div class="col-md-4">

		
		
	</div>
	<!--  End Sidebar  -->


</div>
<!--  Conteúdo  -->

@include(INCLUDES . 'footer')

		