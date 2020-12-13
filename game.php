<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Speedy-Pinky</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/style_game.css" type="text/css">
  </head>
  <body>
    <div class="hautFixe">
    </div>
    <div class="ecran">
      <div id='all_page'>
        <?php include("_nav.php"); ?>
        <h1>Testez-moi !</h1>

        <div id="game_content">
          <div class="top_pres">
            <p>
                Salut a toi futur gost-wilder !! <br>
                Sauras-tu ne pas te faire attraper par mon equipe et moi-meme ?<br>
                Nous commencerons doucement ... PROMIS !
            </p>
          </div>
          <div id="regles-pacman">
            <h2>Les touches utiles !</h2>
            <ul>
              <li>N : Nouvelle partie</li>
              <li>P : Pause</li>
              <li>&#x2191; &#x2192; &#x2193; &#x2190; : Deplacement</li>
            </ul>
          </div>
          <div id="pacman">
          </div>
          <div class="bloc_bot_score">
            <div class="score_registre">
              <h2>Enregistre ton score !</h2>
              <form action="game.php" method="post">
                <p>
                  <label>Pseudo</label> : <input type="text" name="pseudo" placeholder="Speedy-Pinky"></br>
                  <label>Score</label> : <input type="number" name="score">
                </p>
              </form>
            </div>
            <div class="score_results">
              <h2>Classement</h2>
              <?php

                echo "Pinky | 100000";
              
              ?>
            </div>
          </div>
        </div>
        <script src="pacman.js">
        </script>
        <script src="modernizr-1.5.min.js">
        </script>

        <script>

          var el = document.getElementById("pacman");

          if (Modernizr.canvas && Modernizr.localstorage &&
          Modernizr.audio && (Modernizr.audio.ogg || Modernizr.audio.mp3)) {
            window.setTimeout(function () { PACMAN.init(el, "./"); }, 0);
          } else {
            el.innerHTML = "Sorry, needs a decent browser<br /><small>" +
              "(firefox 3.6+, Chrome 4+, Opera 10+ and Safari 4+)</small>";
            }
        </script>

        <?php include("_footer.php"); ?>
      </div>
    </div>
  </body>
</html>
