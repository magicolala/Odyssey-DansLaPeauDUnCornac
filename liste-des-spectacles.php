<!DOCTYPE html>
<html lang="fr">

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<head>

  <meta charset="utf-8">
  <title>Liste des spectacles</title>


  

  <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arvo:400,400italic,700,700italic%7CPT+Serif:400,400italic,700,700italic&amp;subset=latin,latin-ext">
<link rel="stylesheet" href="assets/css/6cfdeaf5913a.css">
<link rel="stylesheet" href="assets/css/ff6da7aaeca2.css">
<link rel="stylesheet" href="assets/css/63766b710d0e.css">
<link rel="shortcut icon" href="assets/site/favicons/favicon-16.png" />
<link rel="apple-touch-icon" sizes="57x57" href="assets/site/favicons/favicon-57.png">
<link rel="apple-touch-icon" sizes="72x72" href="assets/site/favicons/favicon-72.png">
<link rel="apple-touch-icon" sizes="114x114" href="assets/site/favicons/favicon-114.png">

<meta name="msapplication-TileColor" content="#8d3a86"/>
<meta name="msapplication-TileImage" content="assets/site/favicons/favicon-win8.png"/>

<link href="assets/site/css/320.css" rel="stylesheet">
<link href="assets/site/css/960.css" rel="stylesheet">
<link href="assets/site/css/1220.css" rel="stylesheet">
<link href="assets/site/css/type_320.css" rel="stylesheet">
<link href="assets/site/css/type_960.css" rel="stylesheet">
<link href="assets/site/css/type_1220.css" rel="stylesheet">
<link href="assets/site/css/form.css" rel="stylesheet">
<link href="assets/site/css/hd.css" rel="stylesheet">
<style>
	.img-desc {
		height: 200px;
		width: 250px;		
	}
</style>


 
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
</head>
<body id="top" class=" ticketList">
  
<div id="wrapper">    
    <div id="container">
      	<?php include ('header.php') ?>          
      	<div id="main">
        	<div class="inside">          
				<div class="mod_article first last block" id="liste-des-spectacles">  
					<h1 class="ce_headline first">La saison 2016/17</h1>
					<h2 class="ce_headline">Consultez notre programmation</h2>
					<div class="mod_ticketsList block">    
						
						 	
							    <?php
							    include ('liste.php');
							    for ($i=0; $i<4; $i++) {
							    	echo '<div class="layout_list block first even">
							    		  <div class="left"';
							    	
							    	echo '<figure class="image_container">
							      	<a href="detail-spectacle/festival-en-pratiques.html" title="FESTIVAL EN PRATIQUES">
							        	<img src="';
									echo $programme[$i]["image_url"];
									echo '" width="270" height="270" alt="FESTIVAL EN PRATIQUES class="img-desc">
							      	</a>
							    </figure>
							    <h3>
						      		<a href="#">';
						      		echo $programme[$i]["titre_spectacle"];
						      		echo '
						      		</a>
						    	</h3>
						    	<p class="subtitle">';
						    		echo $programme[$i]["heure"];
						    		echo ' heures
						    	</p>
						    	<p class="name">';
						    		echo $programme[$i]["artiste"];
						    		echo '</p>
						  	</div>
						  	</div>';
							    	
							    } 
							    ?>       
							        
						
						<div class="layout_separator last odd"></div>  
					</div>
   				</div>
            </div>
			<div class="clear"></div>
			<?php include ('footer.php') ?>  
		</div>
	</div>
</div>     
  
</body>

</html>