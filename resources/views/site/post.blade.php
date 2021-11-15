<?php 

define('INCLUDES', 'site/includes/');
define('TITULO', 'Post');

?>

@include(INCLUDES . 'header')

@include(INCLUDES . 'post_breadcrumbs')


<!--  Conteúdo  -->
<div class="row" style="margin: 0 !important">







	<!--  SIngle Post  -->
	<div class="col-md-8">

		<div class="col-sm-12 mt-5 mb-5">

			<h2 class="text-center mb-5">
				<a href="{{ route('post') }}" class="post-titulo">
					Lorem Ipsum
				</a>
			</h2>													

			
			<img src="https://loremflickr.com/320/240/skate" alt="imagem" class="w-100 mb-3 post-image">						


			<div class="mt-3">
			  <p>
			    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at maximus libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas consectetur tempus velit, a tincidunt ligula ultricies vitae. Mauris vel rutrum sapien. Suspendisse ultricies dictum fringilla. Curabitur non posuere urna, ac lobortis lacus. Aliquam ac laoreet felis. Etiam nunc erat, mattis vitae volutpat in, volutpat vitae magna. Pellentesque quis libero vitae turpis feugiat mattis a ut urna. Etiam gravida tellus erat, eget placerat velit aliquam a. Phasellus sed erat sodales nisl consequat sollicitudin. Nunc tempus diam nulla, a ornare lectus venenatis ultrices. Praesent id metus id lacus posuere volutpat vel a turpis. In dapibus lorem nisi, eu rhoncus augue sollicitudin gravida. Phasellus vitae tortor tincidunt, iaculis diam a, luctus purus. Nullam ut libero eu arcu finibus tristique vitae eu nulla.
			  </p>
			  
			  <p>
			    Pellentesque venenatis a nisl quis consequat. Praesent pretium pulvinar dui, sed malesuada ante ultricies in. Phasellus ornare mi ac efficitur tincidunt. Morbi lacinia ut est ac ultrices. Aenean nec neque ut massa posuere vehicula eget eget nibh. Fusce nec ex sed erat convallis euismod. Pellentesque gravida convallis erat quis interdum.
			  </p>
			  
			  <p>
			    hasellus facilisis leo eu vulputate fringilla. Ut erat lectus, vestibulum sed tortor vel, vulputate euismod arcu. Suspendisse vitae metus vehicula, auctor nibh consequat, auctor enim. Vivamus congue ac quam sed dapibus. In eros diam, consectetur eu ultricies ut, dignissim eget odio. Aenean ante mauris, aliquam sit amet orci ac, auctor ultricies eros. Donec lectus urna, tempus sit amet porta a, ullamcorper eget nunc. Etiam eu rutrum turpis, sed tempor eros. Nunc tempus ullamcorper ultrices. Phasellus luctus iaculis arcu. Phasellus dictum odio magna, sit amet mattis odio dapibus in. Sed odio turpis, sagittis quis finibus sollicitudin, blandit eget nisl.
			  </p>
			  
			  		
			</div>			


		</div>

	</div>
	<!--  Postagens fim  -->	











	<!--  Sidebar  -->
	<div class="col-md-4">

		@include(INCLUDES . 'blog_sidebar')
		
	</div>
	<!--  End Sidebar  -->


</div>
<!--  Conteúdo  -->

@include(INCLUDES . 'footer')