<!-- Footer -->
<footer class="page-footer font-small blue pt-4">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <a class="navbar-brand" href="">
						<?php bloginfo('name'); ?>
					</a>
        <p>Here you can use rows and columns to organize your footer content.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Links</h5>
 
        <?php
							wp_nav_menu(
								array(
									'menu'            => 'Main',
									'theme_location'  => 'menu-1',
									'container'       =>  false,
									'container_id'    => 'navbarSupportedContent',
									'container_class' => 'collapse navbar-collapse justify-content-center',
									'menu_class'      => 'navbar-nav justify-content-center',
									
										)
									  );						  
						?>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Link 1</a>
          </li>
          <li>
            <a href="#!">Link 2</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->



  <!-- Copyright -->
  <div class="footer-copyright text-center py-3"><p>Copyright &copy; <script>document.write(new Date().getFullYear())</script><a> - </a><a href="https://jdvirtual.co.uk/">jdvirtual.co.uk</a></p>
  </div>

  </footer>



<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>