<!--Footer-->
</main>

<footer>
	<div class="row container m-auto py-4">
		<div class="col-6 col-sm-4">
			<p><?php echo date("Y"); ?> <?php echo get_bloginfo('name'); ?></p>
		</div>
		<div class="col-6 col-sm-4 d-flex justify-content-center">
			<!-- Menu goes here -->
			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'footer_menu',
					'container_class' => '',
					'container_id'    => 'navbarNavDropdown',
					'menu_class'      => 'navbar-nav m-auto mb-2 mb-lg-0',
					'fallback_cb'     => '',
					'menu_id'         => 'main-left',
					'depth'           => 2,
					'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
				)
			);
			?>
		</div>
		<div class="col-12 col-sm-4 d-flex justify-content-center justify-content-md-end">
			<ul class="d-flex">
				<li class="me-2">
					<a href=""><i class="fab fa-instagram"></i></a>
				</li>
				<li class="me-2">
					<a href=""><i class="fab fa-facebook"></i></a>
				</li>
				<li class="me-2">
					<a href=""><i class="fab fa-twitter"></i></a>
				</li>
			</ul>
		</div>
	</div>
</footer>
<!--/Footer-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

<?php wp_footer(); ?>

</body>

</html>