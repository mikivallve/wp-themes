   </main>
   <footer>
   	<div class="sponsor bg-primary py-5">
   		<div class="container m-auto">
   			<h4 class="text-center text-secondary fs-6 mb-5">Sponsors</h4>
   			<div class="row">
   				<ul class="d-flex flex-wrap">
   					<li><a href=""><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/sponsors/bbva.webp" alt="bbva logo"></a></li>
   					<li><a href=""><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/sponsors/renault.webp" alt="renault logo"></a></li>
   					<li><a href=""><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/sponsors/puma.webp" alt="puma logo"></a></li>
   					<li><a href=""><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/sponsors/antel.webp" alt="antel logo"></a></li>
   					<li><a href=""><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/sponsors/cds.webp" alt="campeón del siglo logo"></a></li>
   					<li><a href=""><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/sponsors/futboluy.webp" alt="futboluy logo"></a></li>
   					<li><a href=""><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/sponsors/nativa.webp" alt="nativa logo"></a></li>
   					<li><a href=""><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/sponsors/pilsen.webp" alt="pilsen logo"></a></li>
   					<li><a href=""><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/sponsors/suat.webp" alt="suat logo"></a></li>
   					<li><a href=""><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/sponsors/gatorade.webp" alt="gatorade logo"></a></li>
   					<li><a href=""><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/sponsors/española.webp" alt="española logo"></a></li>
   					<li><a href=""><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/sponsors/nuñez.webp" alt="nuñez logo"></a></li>
   				</ul>
   			</div>
   		</div>
   	</div>
   	<div class="bg-primary pb-5">
   		<div class="container m-auto">
   			<div class="row mb-4">
   				<div class="col-12 text-center">
   					<img class="marca-penarol" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/marca.svg" alt="">
   				</div>
   			</div>
   			<div class="row">
   				<ul class="d-flex flex-wrap justify-content-center">
   					<li class="px-1"><a class="fs-7" href=""><i class="fab fa-spotify "></i></a></li>
   					<li class="px-1"><a class="fs-7" href=""><i class="fab fa-facebook-f"></i></a></li>
   					<li class="px-1"><a class="fs-7" href=""><i class="fab fa-twitter"></i></a></li>
   					<li class="px-1"><a class="fs-7" href=""><i class="fab fa-instagram"></i></a></li>
   					<li class="px-1"><a class="fs-7" href=""><i class="fab fa-youtube"></i></a></li>
   					<li class="px-1"><a class="fs-7" href=""><i class="fab fa-whatsapp"></i></a></li>
   					<li>
   						<!-- Left Menu goes here -->
   						<?php
							wp_nav_menu(
								array(
									'theme_location'  => '',
									'container_class' => '',
									'container_id'    => '',
									'menu_class'      => '',
									'fallback_cb'     => '',
									'menu_id'         => 'menu-legal',
									'depth'           => 2,
									'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
								)
							);
							?>
   					</li>
   				</ul>

   			</div>
   			<div class="row">
   				<p class="fs-8 text-center text-white">Club Atlético Peñarol, fundado el 28 de setiembre de 1891. Cr
   					Gastón Güelfi Tel: 2401 1891. Dirección Magallanes 1721. C.P.:11200.</p>
   			</div>
   		</div>
   	</div>
   </footer>
   <!--Bootstrap-->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

   <?php wp_footer(); ?>

   </body>

   </html>