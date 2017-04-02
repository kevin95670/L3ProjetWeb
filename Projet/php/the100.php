<?php session_start();?>
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
		
		
		<div class="main-content2">
			<div class="nom-serie">
			
				<h1>The 100</h1>
		
			</div>
			
			<div  class="entete-serie">
				<div class="entete-image">
					<img src="../../Projet/images/the100-icone.jpg" alt="the100">
				</div>
				<div class="entete-synopsis">
					<p>Après une apocalypse nucléaire causée par l'Homme lors d'une troisième Guerre Mondiale, les 318 survivants recensés se réfugient dans des stations spatiales et parviennent à y vivre et à se reproduire, atteignant le nombre de 4000. Mais 97 ans plus tard, le vaisseau mère, l'Arche, est en piteux état. Une centaine de jeunes délinquants emprisonnés au fil des années pour des crimes ou des trahisons sont choisis comme cobayes par les autorités pour redescendre sur Terre et tester les chances de survie. Dès leur arrivée, ils découvrent un nouveau monde dangereux mais fascinant...</p>
					
				</div>
				<div class="entete-note">
					<h1> 7/10 </h1>
					<strong>Acteurs:</strong><a href="elisaT.php" >Elisa Taylor</a>,<a href="PaygeT.php" >Paige Turco</a></br>
					<strong>Realisateurs:</strong><a href="bharatN.php" >Bharat Nalluri</a>
				</div>
				
			
			</div>
			<div class="BA-serie"> 
				<h1>La Bande Annonce</h1>
				<!--<video controls = "controls" src="../../Projet/videos/the100BA.mp4"></video>-->
			</div>
			
			<div class= "information-serie" >
				<h1>Information</h1>
				
				<span>
			</div>
			
			
		</div>
		
		
		
		
		
		
		
		
		
		
		<?php require("right-side.php"); ?>

		<?php require("footer.php"); ?>

    </body>

</html>