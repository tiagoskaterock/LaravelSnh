<?php 

define('INCLUDES', 'site/includes/');
define('TITULO', 'Início');

?>

@include(INCLUDES . 'head')

<body>
  
  <!--  page container  -->
	<div class="container">

		@include(INCLUDES . 'navbar')

		@include(INCLUDES . 'main_slider')
	  
	</div>
	<!--  end page container  -->	

@include(INCLUDES . 'footer')

		