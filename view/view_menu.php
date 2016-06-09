
<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
  <div class="container-fluid">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
       <span class="sr-only">Toggle navigation</span>
   		  <span class="icon-bar"></span>
   		  <span class="icon-bar"></span>
   		  <span class="icon-bar"></span>
      </button>
    </div>
    <a class="navbar-brand glyphicon glyphicon-home" href="?choix=page_accueil"></a>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
          <li><a href="?choix=page_accueil">La page d'accueil</a></li>
          <li><a href="?choix=page_films">Les films</a></li>
          <li><a href="?choix=page_top5">Top 5</a></li>


  <?php  if (isset($_SESSION['nom'])) {
    echo "<li><a href=\"?choix=page_ajout_film\">Ajout Film</a></li>";
    echo "<li><a href=\"?choix=page_jeu\"> Petit Jeu entre ami</a></li>";

   echo    "<li><a class=\"navbar-brand navbar-right glyphicon glyphicon-log-out\" href=\"?choix=page_auth\">  ".$_SESSION['nom']."</a></li>";
   }else {
   	 echo "<li><a class=\"navbar-brand navbar-right glyphicon glyphicon-log-in\" href=\"?choix=page_auth\"> Log-in ! </a></li>";}
    ?>
  </ul>

   </div>
  </div>
 </nav>
