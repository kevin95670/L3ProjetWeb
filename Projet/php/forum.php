<?php require("../../Projet/html/headerHTML.html"); ?>

    <?php if (!empty($_SESSION['connecte']))
        {
            require("headerConnected.php");
        }
        else
        {
            require("headerDisconnected.php");
        }
        ?>

        <div class="main-content">
            <div class="forum">
                <h1>Forum</h1>
                <ul class="list-forum">
                    <li class="header-list">
                        <span class="subject">Sujet</span>
                        <span class="author">Auteur</span>
                        <span class="messages">Messages</span>
                        <span class="name-serie">Série</span>
                    </li>
                    <li class="topic-list">
                        <span class="subject"><a href="#">Avez-vous aimé?</a></span>
                        <span class="author"><a href="#">Jean</a></span>
                        <span class="messages">1</span>
                        <span class="name-serie"><a href="#">Breaking bad</a></span>
                    </li>
                    <li class="topic-list">
                        <span class="subject"><a href="#">J'ai pas compris</a></span>
                        <span class="author"><a href="#">Victor</a></span>
                        <span class="messages">5</span>
                        <span class="name-serie"><a href="#">Malcolm</a></span>
                    </li>
                    <li class="topic-list">
                        <span class="subject"><a href="#">Votre perso préféré?</a></span>
                        <span class="author"><a href="#">Julien</a></span>
                        <span class="messages">12</span>
                        <span class="name-serie"><a href="#">Malcolm</a></span>
                    </li>
                </ul>
                
            </div>
        </div>
        <?php require("right-side.php"); ?>

            <?php require("footer.php"); ?>

    </body>

</html>