


<!-- Footer -->
<footer class="page-footer footer-bg-custom">

  <!-- Footer Links -->
  <div class="footer-custom container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

  <!-- Footer Links -->
  <div class="col-md-3 mb-md-0 mb-3">
  <?php
            wp_nav_menu(
              array(
                'menu'            => 'Sale',
                'theme_location'  => 'menu-1',
                'container'       =>  false,
                'container_id'    => 'navbarSupportedContent navbar-collapse',
                'container_class' => 'navbar-collapse justify-content-center',
                'menu_class'      => 'navbar-menu justify-content-center',
                'before'          => '<button class="footer-button" type="button">',
                'after'			  => '</button>',
              
                  )
                );						  
        ?>
        </div>								
        <div class="col-md-6 mt-md-0 mt-3">
          <?php
            wp_nav_menu(
              array(
                'menu'            => 'Main',
                'theme_location'  => 'menu-1',
                'container'       =>  false,
                'container_id'    => 'navbarSupportedContent navbar-collapse',
                'container_class' => 'navbar-collapse justify-content-center',
                'menu_class'      => 'navbar-menu justify-content-center',
                'before'          => '<button class="footer-button" type="button">',
                'after'			  => '</button>',
              
                  )
                );						  
        ?>
    </div>
    <div class="col-md-3 mb-md-0 mb-3 d-flex justify-content-end">
    <?php
            wp_nav_menu(
              array(
                'menu'            => 'Admin',
                'theme_location'  => 'menu-1',
                'container'       =>  false,
                'container_id'    => 'navbarSupportedContent navbar-collapse',
                'container_class' => 'navbar-collapse justify-content-center',
                'menu_class'      => 'navbar-menu justify-content-center',
                'before'          => '<button class="footer-button" type="button">',
                'after'			  => '</button>',
              
                  )
                );						  
        ?>
    </div>
              </div>
  </div>
  
    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->



  <!-- Copyright -->
  <div class="footer-custom-copyright text-center py-3"><p>Copyright &copy; <script>document.write(new Date().getFullYear())</script><a> - </a><a href="https://jdvirtual.co.uk/">jdvirtual.co.uk</a></p>
  </div>

  </footer>
     

  
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>