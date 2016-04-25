<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="modele.css">
		<link rel="stylesheet" type="text/css" href="fotomodel.css">
		<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
		<link href="bootstrap-3.3.6-dist/css/bootstrap-modal-bs3patch.css" rel="stylesheet">
		<script src="jquery-2.1.4.js"></script>
		<script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
		<script src="bootstrap-3.3.6-dist/js/bootstrap-modal.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" href="styles.css">
	</head>
	<body>
		<div id="fb-root" data-adapt-container-width="true"></div>						<!-- Facebook plugin -->
		<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
			fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
		<div class="bck">
	
			<div class="log" style="align: center;  display: block;   width: 1200px;    height: 10%;    overflow: hidden;">
				
				<img src="imagini/logo.png" alt="logo">
				
				<div style="position:relative;  float: right;" >
				<!--	<span class="titlu" style="color:teal;">One Models #Desire</span> -->
				<!-- class="col-md-offset-5 col-md-6"	<div class="fb-like" data-href="https://www.facebook.com/OneModelsRomania/" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div> -->
				<div class="fb-page" data-href="https://www.facebook.com/OneModelsRomania/" data-tabs="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
				<div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/OneModelsRomania/"><a href="https://www.facebook.com/OneModelsRomania/">One Models Agency</a></blockquote></div></div>
				
				</div>
				<br></br>
				<br></br>
	
				
				<div id='cssmenu' >
					<ul>
						<li class='active'><a href='top.php'><span>Home</span></a></li>
						<li><a href='modele.php'><span>Toate modelele</span></a></li>
						<li class='last'><a href='cauta.php'><span>Cauta</span></a></li>
						
						<form name="login" action="" method="post" accept-charset="utf-8" style="position:relative; left: 33%;" >		<!-- Autentificare administrator -->				
							<input type="text" name="nume" placeholder="username" required>		
							<input type="password" name="password" placeholder="password" required>
							<input type="submit" value="Login">
						</form>
					</ul>
				</div>
			</div>
			
			
			<?php
$connection = mysqli_connect("127.0.0.1", "root", "", "agentie");

if (isset($_GET["user"])) {
    echo "<script>
					var div=document.createElement('div');
					div.style.color='white';
					div.style.float='right';
					div.innerHTML='Bine ai venit, admin!';
					var u=document.getElementById('cssmenu');
					u.appendChild(div);
					
					</script>";
}
if (isset($_POST['nume']) && isset($_POST['password'])) { 
    
    $nl = 0;
    $query1 = mysqli_query($connection, "SELECT user, password FROM user u WHERE u.user='$_POST[nume]'") or die("Eroare la conectare.." . mysqli_error($connection));
    while ($row = mysqli_fetch_assoc($query1)) {
        echo $_GET["user"];
        
        if ((($row["user"] == $_POST["nume"]) && ($row["password"] == $_POST["password"])) || (isset($_GET["user"]))) {
            $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            header('Location: ' . $actual_link . '&user=admin');
            
        }
    }
}

?>		

			<div class="container">
			
			
			<div class="row">

			<?php		/* Afisez poza reprezentativa modelului */
$connection = mysqli_connect("127.0.0.1", "root", "", "agentie");
$query      = "SELECT * FROM poze,model WHERE poze.id_model=model.id_model AND poze.id_model=" . $_GET['id'];
$image      = mysqli_query($connection, $query);
echo '<div class="div-titlu">
						<br>
						<br>
					 </div>';
while ($row = mysqli_fetch_assoc($image)) {
    echo '
				
				
				<div class="col-md-7" style="margin-right: 8%;" >
				
						<div id="myCarousel" class="carousel slide" data-ride="carousel" >
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox" >
    <div class="item active">
      <img src="' . $row["cale_poza"] . '" alt="First">
      <div class="carousel-caption">
        <h3>Style</h3>
      </div> 
    </div>

    <div class="item">
      <img src="' . $row["cale_poza1"] . '" alt="Second">
      <div class="carousel-caption">
        <h3>Passion</h3>
      </div> 
    </div>

    <div class="item">
      <img src="' . $row["cale_poza2"] . '" alt="Third">
      <div class="carousel-caption">
        <h3>Love</h3>
      </div> 
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
				  	 <br />
				  	 </div>
				  	 <div class="inf-model" style="margin-top: 5%;">
				  	 	<span class="cat-inf"><span style="color:black; font-weight:bold;">Nume:</span> ' . $row["prenume"] . ' ' . $row["nume"] . '</span>
				  	 	<div class="div-cat-inf sterge">
				  	 		<span class="cat-inf"><span style="color:black; font-weight:bold;">Bust:</span> ' . $row["bust"] . '</span>
				  	 	</div>
				  	 	<div class="div-cat-inf sterge" >
				  	 		<span class="cat-inf" ><span style="color:black; font-weight:bold;">Talie:</span> ' . $row["talie"] . '</span>
				  	 	</div>
				  	 	<div class="div-cat-inf sterge">
				  	 		<span class="cat-inf"><span style="color:black; font-weight:bold;">Sold:</span> ' . $row["sold"] . '</span>
				  	 	</div>
				  	 	<div class="div-cat-inf">
				  	 		<span class="cat-inf""><span style="color:black; font-weight:bold;">Inaltime:</span> ' . $row["inaltime"] . '</span>
				  	 	</div>
				  	 	<div class="div-cat-inf">
				  	 		<span class="cat-inf""><span style="color:black; font-weight:bold;">Par:</span> ' . $row["culoare_par"] . '</span>
				  	 	</div>
						<div class="div-cat-inf">
				  	 		<span class="cat-inf"><span style="color:black; font-weight:bold;">Sex:</span> ' . $row["sex"] . '</span>
				  	 	</div>
						<br>
				  	 </div>
				';

    if ($row["sex"] == "M") {
        echo "<script>$('.sterge').hide();</script>";
    }
	
	/* Poate fi implementat un buton ce afiseaza alte informatii */
	
}
?>
		</div>
		</div>
		<br><br>
					<p class="copy" style="text-align:center;">Copyright &copy; 2016 <strong>One Models Agency</strong> All rights reserved. Created by: <a href="mailto:andrei.ulinici@aut.pub.ro?Subject=Salut!" target="_top"><i>Andrei Ulinici</i></a></p>
            <p class="address" style="text-align:center;">Bucharest: Piata Alba Iulia, Nr.6, Bl.I5, Sc.A, Et.4, Ap.11, Sector 3, Cod:031104, Tel:+40 314 329 103 
            </p>
		
		<?php

$query1 = "SELECT colaborator.nume_colaborator, model_eveniment.numar_ore, eveniment.locatie, salariu.id_salariu,eveniment.data_inceput, supervizor.nume, supervizor.prenume, eveniment.tip_eveniment 
				FROM salariu, eveniment, model_eveniment, supervizor,colaborator
						WHERE 
							model_eveniment.id_salariu=salariu.id_salariu 
								AND model_eveniment.id_model=" . $_GET["id"] . " 
									AND supervizor.id_supervizor=eveniment.id_supervizor 
										AND model_eveniment.id_eveniment=eveniment.id_eveniment 
											AND colaborator.id_colaborator=model_eveniment.id_colaborator";
$img    = mysqli_query($connection, $query1);
$query2 = "SELECT salariu.id_salariu, poze.cale_poza, poze.cale_poza1, poze.cale_poza2, model.bust, model.talie,model.sex, model.sold, model.culoare_par, model.prenume AS Nume3, model.nume as Nume1 ,colaborator.nume_colaborator, model_eveniment.numar_ore, eveniment.locatie, salariu.id_salariu,eveniment.data_inceput, supervizor.nume as Nume2, supervizor.prenume AS Nume4, eveniment.tip_eveniment
					 FROM salariu, poze, eveniment,model LEFT JOIN model_eveniment  ON model.id_model = model_eveniment.id_model , supervizor,colaborator
						WHERE 
							model_eveniment.id_salariu=salariu.id_salariu 
								AND model_eveniment.id_model=" . $_GET["id"] . " 
									AND supervizor.id_supervizor=eveniment.id_supervizor 
										AND model_eveniment.id_eveniment=eveniment.id_eveniment 
											AND colaborator.id_colaborator=model_eveniment.id_colaborator
												AND model.id_model=model_eveniment.id_model
													AND poze.id_model=model.id_model";
$imag1  = mysqli_query($connection, $query2);
$imag2  = mysqli_query($connection, $query2);
if (isset($_GET["user"])) {
    
    echo '		
				<a href="#openModal">
					<div id="test1" class="button btn1"  style="display: table-cell; text-align:center;">
				  		<span style="color:#fff;" >Alte informatii</span>
				  	</div>
				</a>
				<div id="openModal" class="modalDialog">
					<div>
						<a href="#close" title="Close" class="close">X</a>
						';
    while ($row = mysqli_fetch_assoc($img)) {
        echo '
						<div class="div-cat-inf">
				  	 		<span class="cat-inf"">Eveniment: ' . $row["tip_eveniment"] . '</span><br/>
				  	 		<span class="cat-inf" style="margin-left:50px;">Supervizor: ' . $row["nume"] . ' ' . $row["prenume"] . '</span><br/>
				  	 		<span class="cat-inf" style="margin-left:50px;">Data inceput: ' . $row["data_inceput"] . '</span><br/>
				  	 		<span class="cat-inf" style="margin-left:50px;">Salariu: ' . (2600 * $row["id_salariu"]) . '</span><br/>
				  	 		<span class="cat-inf" style="margin-left:50px;">Locatie: ' . $row["locatie"] . '</span><br/>
				  	 		<span class="cat-inf" style="margin-left:50px;">Ore lucrate: ' . $row["numar_ore"] . '</span><br/>
				  	 		<span class="cat-inf" style="margin-left:50px;">Colaborator: ' . $row["nume_colaborator"] . '</span><br/>
				  	 	</div>
				  	 	';
    }
    echo '
					</div>
				</div>
				<a href="#openModal1">
				  	<div class="button btn2" style="display: table-cell; text-align:center;">
				  		<span style="color:#fff;" >Updateaza</span>
				  	</div>
				</a>
				<div id="openModal1" class="modalDialog">
					<div>
						<a href="#close" title="Close" class="close">X</a>
						';
    
    if ($row1 = mysqli_fetch_assoc($imag2)) {
        echo '
								<form action="" method="post"  >
										<div class="row">
											<div class="col-md-6">
												<div class="div-cat-inf">
										  	 		<span>Nume</span>
										  	 		<div>
										  	 			<input type="text" name="nume" value="' . $row1["Nume1"] . '"/>
										  	 		</div>
										  	 	</div>
										  	 </div>
										  	 <div class="col-md-6">
										  	 	<div class="div-cat-inf">
										  	 		<span>Prenume</span>
										  	 		<div>
										  	 			<input type="text" name="prenume" value="' . $row1["Nume3"] . '"/>
										  	 		</div>
										  	 	</div>
										  	 </div>
										  	 <div class="col-md-6">
										  	 	<div class="div-cat-inf">
										  	 		<span>Bust</span>
										  	 		<div>
										  	 			<input type="text" name="bust" value="' . $row1["bust"] . '"/>
										  	 		</div>
										  	 	</div>
										  	 </div>
											 <div class="col-md-6">
										  	 	<div class="div-cat-inf">
										  	 		<span>Sex</span>
										  	 		<div>
										  	 			<input type="text" name="sex" value="' . $row1["sex"] . '"/>
										  	 		</div>
										  	 	</div>
										  	 </div>
										  	 <div class="col-md-6">
										  	 	<div class="div-cat-inf">
										  	 		<span>Talie</span>
										  	 		<div>
										  	 			<input type="text" name="talie" value="' . $row1["talie"] . '"/>
										  	 		</div>
										  	 	</div>
										  	 </div>
										  	 <div class="col-md-6">
										  	 	<div class="div-cat-inf">
										  	 		<span>Sold</span>
										  	 		<div>
										  	 			<input type="text" name="sold" value="' . $row1["sold"] . '"/>
										  	 		</div>
										  	 	</div>
										  	 </div>
										  	 <div class="col-md-6">
										  	 	<div class="div-cat-inf">
										  	 		<span>Culoare par</span>
										  	 		<div>
										  	 			<input type="text" name="par" value="' . $row1["culoare_par"] . '"/>
										  	 		</div>
										  	 	</div>
										  	 </div>
										  	 <div class="col-md-6">
										  	 	<div class="div-cat-inf">
										  	 		<span>Imagine1</span>
										  	 		<div>
										  	 			<input type="text" name="imagine1" value="' . $row1["cale_poza"] . '"/>
										  	 		</div>
										  	 	</div>
										  	 </div>
										  	 <div class="col-md-6">
										  	 	<div class="div-cat-inf">
										  	 		<span>Imagine2</span>
										  	 		<div>
										  	 			<input type="text" name="imagine2" value="' . $row1["cale_poza1"] . '"/>
										  	 		</div>
										  	 	</div>
										  	 </div>
										  	 <div class="col-md-6">
										  	 	<div class="div-cat-inf">
										  	 		<span>Imagine3</span>
										  	 		<div>
										  	 			<input type="text" name="imagine3" value="' . $row1["cale_poza2"] . '"/>
										  	 		</div>
										  	 	</div>
										  	 </div>
										  	 <div class="col-md-6">
										  	 	<div class="div-cat-inf">
										  	 		<span>ID salariu</span>
										  	 		<div>
										  	 			<input type="text" name="id_salariu" value="' . $row1["id_salariu"] . '"/>
										  	 		</div>
										  	 	</div>
										  	 </div>
										  	 <div class="col-md-offset-6">
										  	 	<div class="div-cat-inf" style="position:relative; top:15px;left:30px;">
										  	 		<div>
										  	 			<input type="submit" name="trimite" value="Updateaza" />
										  	 		</div>
										  	 	</div>
										  	 </div>
							  			</div>
							  		</form>';
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST["trimite"])) {
            $nume    = $_POST["nume"];
            $prenume = $_POST["prenume"];
            $bust    = $_POST["bust"];
            $talie   = $_POST["talie"];
            $sold    = $_POST["sold"];
            $par     = $_POST["par"];
            $sex     = $_POST["sex"];
            $img1    = addslashes($_POST["imagine1"]);
            $img2    = addslashes($_POST["imagine2"]);
            $img3    = addslashes($_POST["imagine3"]);
            $idsal   = $_POST["id_salariu"];
            $id      = $_GET["id"];
            
            $update_query = "UPDATE `model` 
                                    SET `nume` = '" . $nume . "'
                                    ,`prenume` = '$prenume'
                                    ,`bust` = $bust
                                    ,`talie` = $talie
                                    ,`sold` = $sold
                                    ,`culoare_par` = '$par'
									,`sex` = '$sex'
                                        WHERE 
                                            `id_model`=$id";
            
            $update_query1 = "UPDATE `poze` 
                                    SET `cale_poza` = '$img1'
                                        ,`cale_poza1` = '$img2'
                                        ,`cale_poza2` = '$img3'
                                            WHERE 
                                                `id_model`=$id";
            $update_query2 = "UPDATE `model_eveniment` 
															SET `id_salariu` =$idsal
																	WHERE 
																		`id_model`=$id";
            $update        = mysqli_query($connection, $update_query);
            $update1       = mysqli_query($connection, $update_query1);
            $update2       = mysqli_query($connection, $update_query2);
        }
    }
    echo '
				  	 </div>
				  	</div>
				<a href="#openModal2">
				  	<div class="button btn3" style="display: table-cell; text-align:center;">
				  		<span style="color:#fff;" >Sterge</span>
				  	</div>
				</a>
				<div id="openModal" class="modalDialog">
					<div>
						<a href="#close" title="Close" class="close">X</a>
						';
    while ($row = mysqli_fetch_assoc($img)) {
        echo '
						<div class="div-cat-inf">
				  	 		<span class="cat-inf"">Eveniment: ' . $row["tip_eveniment"] . '</span><br/>
				  	 		<span class="cat-inf" style="margin-left:50px;">Supervizor: ' . $row["nume"] . ' ' . $row["prenume"] . '</span><br/>
				  	 		<span class="cat-inf" style="margin-left:50px;">Data inceput: ' . $row["data_inceput"] . '</span><br/>
				  	 		<span class="cat-inf" style="margin-left:50px;">Salariu: ' . (2600 * $row["id_salariu"]) . '</span><br/>
				  	 		<span class="cat-inf" style="margin-left:50px;">Locatie: ' . $row["locatie"] . '</span><br/>
				  	 		<span class="cat-inf" style="margin-left:50px;">Ore lucrate: ' . $row["numar_ore"] . '</span><br/>
				  	 		<span class="cat-inf" style="margin-left:50px;">Colaborator: ' . $row["nume_colaborator"] . '</span><br/>
				  	 	</div>
				  	 	';
    }
    echo '
					</div>
				</div>
				<div id="openModal2" class="modalDialog">
					<div>
						<a href="#close" title="Close" class="close">X</a>
						<div class="div-cat-inf">
							<div class="dltTxt">
				  	 			<span class="dltTxt">Sunteti sigur ca doriti sa stergeti acest model?</span>
				  	 		</div>
				  	 		<a href="http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . '&action=delete" name="sters">
					  	 		<div class="button btnDelete" style="display: table-cell; text-align:center;">
					  				<span style="color:#fff;" >Delete</span>
					  			</div>
					  		</a>
					  		<a href="#close">
					  			<div class="button btnCancel" style="display: table-cell; text-align:center;">
					  				<span style="color:#fff;" >Cancel</span>
					  			</div>
					  		</a>
				  	 	</div>

					</div>
				</div>';
    
    if (isset($_GET["action"])) {
        $id           = $_GET["id"];
        $deleteQuery  = "DELETE FROM `poze` WHERE `id_model`=$id";
        $deleteQuery1 = "DELETE FROM `model` WHERE `id_model`=$id";
        mysqli_query($connection, $deleteQuery);
        mysqli_query($connection, $deleteQuery1);
        
    }
    
    echo '
				<a href="#openModal3">
				  	<div class="button btn4" style="display: table-cell; text-align:center;">
				  		<span style="color:#fff;" >Adauga model</span>
				  	</div>
				</a>
				';
    echo '<div id="openModal3" class="modalDialog">
					<div>
						<a href="#close" title="Close" class="close">X</a>
						';
    
    if ($row1 = mysqli_fetch_assoc($imag1)) {
        echo '
								<form action="" method="post"  >
										<div class="row">
											<div class="col-md-6">
												<div class="div-cat-inf">
										  	 		<span>Nume</span>
										  	 		<div>
										  	 			<input type="text" name="nume"/>
										  	 		</div>
										  	 	</div>
										  	 </div>
										  	 <div class="col-md-6">
										  	 	<div class="div-cat-inf">
										  	 		<span>Prenume</span>
										  	 		<div>
										  	 			<input type="text" name="prenume"/>
										  	 		</div>
										  	 	</div>
										  	 </div>
										  	 <div class="col-md-6">
										  	 	<div class="div-cat-inf">
										  	 		<span>Bust</span>
										  	 		<div>
										  	 			<input type="text" name="bust"/>
										  	 		</div>
										  	 	</div>
										  	 </div>
											 <div class="col-md-6">
										  	 	<div class="div-cat-inf">
										  	 		<span>Sex</span>
										  	 		<div>
										  	 			<input type="text" name="sex"/>
										  	 		</div>
										  	 	</div>
										  	 </div>
										  	 <div class="col-md-6">
										  	 	<div class="div-cat-inf">
										  	 		<span>Talie</span>
										  	 		<div>
										  	 			<input type="text" name="talie"/>
										  	 		</div>
										  	 	</div>
										  	 </div>
										  	 <div class="col-md-6">
										  	 	<div class="div-cat-inf">
										  	 		<span>Sold</span>
										  	 		<div>
										  	 			<input type="text" name="sold"/>
										  	 		</div>
										  	 	</div>
										  	 </div>
										  	 <div class="col-md-6">
										  	 	<div class="div-cat-inf">
										  	 		<span>Culoare par</span>
										  	 		<div>
										  	 			<input type="text" name="par"/>
										  	 		</div>
										  	 	</div>
										  	 </div>
										  	 <div class="col-md-6">
										  	 	<div class="div-cat-inf">
										  	 		<span>Culoare piele</span>
										  	 		<div>
										  	 			<input type="text" name="piele"/>
										  	 		</div>
										  	 	</div>
										  	 </div>
										  	 <div class="col-md-6">
										  	 	<div class="div-cat-inf">
										  	 		<span>Inaltime</span>
										  	 		<div>
										  	 			<input type="text" name="inaltime"/>
										  	 		</div>
										  	 	</div>
										  	 </div>
										  	 <div class="col-md-6">
										  	 	<div class="div-cat-inf">
										  	 		<span>Telefon</span>
										  	 		<div>
										  	 			<input type="text" name="telefon"/>
										  	 		</div>
										  	 	</div>
										  	 </div>
										  	 <div class="col-md-6">
										  	 	<div class="div-cat-inf">
										  	 		<span>Varsta</span>
										  	 		<div>
										  	 			<input type="text" name="varsta"/>
										  	 		</div>
										  	 	</div>
										  	 </div>
										  	 <div class="col-md-6">
										  	 	<div class="div-cat-inf">
										  	 		<span>Imagine1</span>
										  	 		<div>
										  	 			<input type="text" name="imagine1"/>
										  	 		</div>
										  	 	</div>
										  	 </div>
										  	 <div class="col-md-6">
										  	 	<div class="div-cat-inf">
										  	 		<span>Imagine2</span>
										  	 		<div>
										  	 			<input type="text" name="imagine2"/>
										  	 		</div>
										  	 	</div>
										  	 </div>
										  	 <div class="col-md-6">
										  	 	<div class="div-cat-inf">
										  	 		<span>Imagine3</span>
										  	 		<div>
										  	 			<input type="text" name="imagine3"/>
										  	 		</div>
										  	 	</div>
										  	 </div>
										  	 
										  	 <div class="col-md-offset-4">
										  	 	<div class="div-cat-inf">
										  	 		<div class="btn-adauga">
										  	 			<input type="submit" name="trimite1" value="Adauga"/>
										  	 		</div>
										  	 	</div>
										  	 </div>
							  			</div>
							  		</form>';
    }
    if (isset($_POST["trimite1"])) {
        $nume          = $_POST["nume"];
        $prenume       = $_POST["prenume"];
        $bust          = $_POST["bust"];
        $talie         = $_POST["talie"];
        $sold          = $_POST["sold"];
        $par           = $_POST["par"];
        $varsta        = $_POST["varsta"];
        $telefon       = $_POST["telefon"];
        $inaltime      = $_POST["inaltime"];
        $img1          = addslashes($_POST["imagine1"]);
        $piele         = $_POST["piele"];
        $sex           = $_POST["sex"];
        $img2          = addslashes($_POST["imagine2"]);
        $img3          = addslashes($_POST["imagine3"]);
        $insert_query  = "INSERT INTO `model`(`nume`,`prenume`,`varsta`,`telefon`,`inaltime`,`culoare_piele`,`culoare_par`,`bust`,`talie`,`sold`,`sex`) VALUES('$nume','$prenume',$varsta,'$telefon',$inaltime,'$piele','$par','$bust','$talie','$sold','$sex')";
        $insert_query1 = "INSERT INTO `poze`(`id_model`,`cale_poza`,`cale_poza1`,`cale_poza2`)
										VALUES(
											(SELECT `id_model` FROM `model` WHERE `nume`='$nume' AND `prenume`='$prenume' AND `talie`='$talie')
											,'$img1'
											,'$img2'
											,'$img3')";
        mysqli_query($connection, $insert_query);
        mysqli_query($connection, $insert_query1);
    }
}
?>
		</div>

	</body>

</html>
