<footer  class="footer-inverse">
  <div class="container">
    <form action="index.php?choix=page_search" method="post" class="navbar-brand" >
       <div class="form-field">

         <input type="text" name="search_term" placeholder="Enter your search term...">
         <input type="submit" value="Search">
       </div>
    </form>
    <?php

    if (isset($_SESSION['nom'])) {
        ?>

        <h3>login:<?php echo $_SESSION['nom']; ?>)</h3>
        <a href="index.php?choix=action_deconnexion">Déconnexion</a>
                  <?php
    } else {

      include('view/view_authentification_form.php');
    }
    ?>
          <p class="text-muted">Cinema MVC by G. Kosmopoulos</p>
  </div>
</footer>
