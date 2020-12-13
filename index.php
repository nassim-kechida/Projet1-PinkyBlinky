<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Speedy-Pinky</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_index.css">
  </head>

  <body>
    <div class="hautFixe">
    </div>
    <div class="ecran">
	    <?php include("_nav.php"); ?>
        <main>	
        <h1>Speedy - Pinky</h1>
	    <!-- les blocs sont contenus dans des div avec classes blocsDroit et BlocsGauche -->
	    <div class="tram">
		    <div class="blocs">
			    <!-- ici le bloc présentation -->
			    <h2>Mes competences</h2>
			    <ul>
				    <li>chasseuse d'intrus</li>
				    <li>coach en tracking</li>
				    <li>maitre d'armes</li>
				    <li>membre de la ligue des fantomes historique</li>
				    <li>star du retro-gaming</li>
			    </ul>	
		    </div>

		    <div class="blocs">
			    <!-- ici le bloc dernière expériences -->
			    <h2>Mon parcours</h2>
			    <p>Je suis connu de tous dans mon role dans Pac-Man (qui appartient a l'histoire),
			    vous pouvez decouvrir mon parcour un peu plus en detaille, ainsi que mes roles caches 
			    dans les coulisses de ce jeu, c'est ici: </p>
			    <a href="experience.php" class="bouton1">Voir +</a>	
		    </div>
		    
		    <div class="blocs">
			    <!-- ici le bloc testez moi, ou, me voir en action -->
			    <h2>Me voir en action</h2>
			    <img class="anime" src="img/giphy.gif" alt="animation de Pinky attrapant pacman">
			    <a href="game.php" class="bouton1">Testez-moi</a>
		    </div>
		    
		    <div class="blocs">
			    <!-- ici le bloc contactez moi -->
			    <h2>Contactez moi</h2>
			    <p>Si ca vous a plu, et que vous voulez me proposer du travail, il vous suffit de me contacter
			    </p>
			    <a href="contact.php" class="bouton1">contactez-moi</a>
		    </div>
	    </div>
        </main>			
	    <?php include("_footer.php"); ?>
    </div>
  </body>
</html>
