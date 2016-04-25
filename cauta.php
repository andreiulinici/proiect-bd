<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="modele.css">
		<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
		<script src="jquery-2.1.4.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" href="styles.css">
		<script src="script.js"></script>
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
				<!--	<span class="titlu" style="color:teal;">One Models</span> -->
				<!-- class="col-md-offset-5 col-md-6"	<div class="fb-like" data-href="https://www.facebook.com/OneModelsRomania/" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div> -->
				<div class="fb-page" data-href="https://www.facebook.com/OneModelsRomania/" data-tabs="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
				<div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/OneModelsRomania/"><a href="https://www.facebook.com/OneModelsRomania/">One Models Agency</a></blockquote></div></div>
				
				</div>
				<br></br>
				<br></br>
				
				<div id='cssmenu' >
					<ul>
						<li><a href='top.php'><span>Home</span></a></li>
						<li><a href='modele.php'><span>Toate modelele</span></a></li>
						<li class='active'><a href='cauta.php'><span>Cauta</span></a></li>
						
						<form name="login" action="" method="post" accept-charset="utf-8" style="position:relative; left: 33%;" >		<!-- Autentificare administrator -->				
							<input type="text" name="nume" placeholder="username" required>		
							<input type="password" name="password" placeholder="password" required>
							<input type="submit" value="Login">
						</form>
					</ul>
				</div>
			</div>
		
			<br>
			<div class="container">
				<div class="row">
				
					<div class="col-md-offset-6 col-md-6" style="width: 320px;
    padding: 10px;
    border: 5px solid gray;
    margin: 0; ">
					<form method="post" action="">
						<div class="categorii">
							<span>Nume/Prenume</span>
						</div>
						<input type="text" name="select_nume" >
						<button name="cauta_nume" type="submit" class="btn btn-info" style="height:30px; width:66px">Cauta</button>
					</form>
					<br>

					<form method="post">
						<div class="categorii">
							<span>Bust</span>
							<select name="comparare_bust">
								<option value="<"><</option>
								<option value="<="><=</option>
								<option value=">">></option>
								<option value=">=">>=</option>
								<option value="=">=</option>
							</select>
						</div>
						<input type="text" name="select_bust" id="bust_text">
						<button name="cauta_bust" type="submit" class="btn btn-info" style="height:30px; width:66px">Cauta</button>
						</button>
					</form>

					<br>

					<form method="post">
						<div class="categorii">
							<span>Talie</span>
							<select name="comparare_talie">
								<option value="<"><</option>
								<option value="<="><=</option>
								<option value=">">></option>
								<option value=">=">>=</option>
								<option value="=">=</option>
							</select>
						</div>
						<input type="text" name="select_talie" id="talie_text">
						<button name="cauta_talie" type="submit" class="btn btn-info" style="height:30px; width:66px">Cauta</button>
						</button>
					</form>
					<br>

					<form method="post">
						<div class="categorii">
							<span>Sold</span>
							<select name="comparare_sold">
								<option value="<"><</option>
								<option value="<="><=</option>
								<option value=">">></option>
								<option value=">=">>=</option>
								<option value="=">=</option>
							</select>
						</div>
						<input type="text" name="select_sold" id="sold_text">
						<button name="cauta_sold" type="submit" class="btn btn-info" style="height:30px; width:66px">Cauta</button>
						</button>
					</form>
					<br>

					<form method="post">
						<div class="categorii">
							<span>Numele si prenumele modelelor ce au culoarea parului</span>
								<select name="par">
									<option value="negru">Negru</option>
									<option value="castaniu">Castaniu</option>
									<option value="castaniu">Castaniu inchis</option>
									<option value="castaniu">Castaniu deschis</option>
									<option value="saten">Saten</option>
									<option value="blond">Blond</option>
									<option value="blond">Blond cenusiu</option>
								</select><span> si au participat la un eveniment ce a inceput intr-un an</span>
								<select name="comparare_an">
									<option value="<"><</option>
									<option value="<="><=</option>
									<option value=">">></option>
									<option value=">=">>=</option>
									<option value="=">=</option>
								</select> <span>ca</span>
								<select name="selectare_an">
									<option value="2012">2012</option>
									<option value="2013">2013</option>
									<option value="2014">2014</option>
									<option value="2015">2015</option>
								</select>
							<button name="cauta_complex" type="submit" class="btn btn-info" style="height:30px; width:66px">Cauta</button>
						</div>
					</form>
					<br>

					<form method="post">
						<div class="categorii">
							<span>Afisati numele, prenumele, numarul de ore si salariul pentru orice model ce are salariul 
								  mai mare decat media salariilor, si numarul de ore lucrare la evenimente</span>
								<select name="comparare_ore">
									<option value="<"><</option>
									<option value="<="><=</option>
									<option value=">">></option>
									<option value=">=">>=</option>
									<option value="=">=</option>
								</select> <span>decat </span>
								<input type="text" name="numar_ore">
								<span>ordonate </span>
								<select name="ordonare">
									<option value="ASC">Crescator</option>
									<option value="DESC">Descrescator</option>
								</select> <span>dupa numarul de ore</span>
						</div>
						<button name="cauta_complex1" type="submit" class="btn btn-info" style="height:30px; width:66px">Cauta</button>
					</form>
					<br>

					<form method="post">
						<div>
							<span>Eveniment</span>
							<select name="comparare_eveniment">
								<option value="2012">2012</option>
								<option value="2013">2013</option>
								<option value="2014">2014</option>
								<option value="2015">2015</option>
							</select>
							<button name="cauta_eveniment" type="submit" class="btn btn-info" style="height:30px; width:66px">Cauta</button>
						</div>
					</form>
					<br>
					
					<form method="post">
						<span>Modelele, dupa numarul de evenimente la care au participat, ordonate descrescator:</span>
						<button name="even_participate" type="submit" class="btn btn-info" style="height:30px; width:66px">Cauta</button>
						</button>
					</form>
					<br />
					<form method="post">
						<span>Modelele care au participat numai la evenimente dintr-un an >= 2013:</span>
						<button name="even_participate1" type="submit" class="btn btn-info" style="height:30px; width:66px">Cauta</button>
					</form>
					</div>
					<br>
					<div style="padding:0px; position:relative; left:10%;">
					<?php
$connection = mysqli_connect("127.0.0.1", "root", "", "agentie");
if (isset($_POST["cauta_nume"]) && (!empty($_POST['select_nume']))) {
    $nume       = $_POST['select_nume'];
    $query_nume = "SELECT `poze`.`cale_poza`, `model`.`nume`, `model`.`prenume`,`model`.`id_model` FROM `model`,`poze` 
							WHERE (`model`.`nume` like'%" . $nume . "%' OR `model`.`prenume`like'%" . $nume . "%') AND `model`.`id_model`=`poze`.`id_model`";
    $name       = mysqli_query($connection, $query_nume);
    
    while ($row = mysqli_fetch_array($name, MYSQLI_ASSOC)) {
        echo '<div class="col-md-4 grow table-hover " style="min-height:328px!important;" >
										<span class="pres-title" style="font-weight:bold;">' . $row["prenume"] . ' ' . $row["nume"] . '</span><br />
										<a href="fotomodel.php?id=' . $row["id_model"] . '"><img width="147" height="247" src="' . $row["cale_poza"] . '"/></a>
										<br /><br /><br />
									 </div>';
    }
    
}

if (isset($_POST["cauta_bust"]) && (!empty($_POST['select_bust']))) {
    $bust   = $_POST['select_bust'];
    $compar = $_POST['comparare_bust'];
    
    $query_bust = "SELECT `poze`.`cale_poza`,`model`.`bust`, `model`.`nume`, `model`.`prenume`,`model`.`id_model` FROM `model`,`poze` 
							WHERE `model`.`bust`" . $compar . $bust . " AND `model`.`id_model`=`poze`.`id_model` AND `model`.`sex`='F'";
    $bust       = mysqli_query($connection, $query_bust);
    
    while ($row = mysqli_fetch_array($bust, MYSQLI_ASSOC)) {
        echo '<div class="col-md-4 grow table-hover " style="min-height:328px!important;" >
										<span class="pres-title" style="font-weight:bold;">' . $row["prenume"] . ' ' . $row["nume"] . '</span><br />
										<span class="pres-title">Bust: ' . $row["bust"] . '</span><br />
										<a href="fotomodel.php?id=' . $row["id_model"] . '"><img width="147" height="247" src="' . $row["cale_poza"] . '"/></a>
										<br /><br /><br />
									 </div>';
    }
    
}

if (isset($_POST["cauta_talie"]) && (!empty($_POST['select_talie']))) {
    $talie  = $_POST['select_talie'];
    $compar = $_POST['comparare_talie'];
    
    $query_talie = "SELECT `poze`.`cale_poza`,`model`.`talie`, `model`.`nume`, `model`.`prenume`,`model`.`id_model` FROM `model`,`poze` 
							WHERE `model`.`talie`" . $compar . $talie . " AND `model`.`id_model`=`poze`.`id_model` AND `model`.`sex`='F'";
    $talie       = mysqli_query($connection, $query_talie);
    
    while ($row = mysqli_fetch_array($talie, MYSQLI_ASSOC)) {
        echo '<div class="col-md-4 grow table-hover " style="min-height:328px!important;" >
										<span class="pres-title" style="font-weight:bold;">' . $row["prenume"] . ' ' . $row["nume"] . '</span><br />
										<span class="pres-title">Talie: ' . $row["talie"] . '</span><br />
										<a href="fotomodel.php?id=' . $row["id_model"] . '"><img width="147" height="247" src="' . $row["cale_poza"] . '"/></a>
										<br /><br /><br />
									 </div>';
    }
    
}

if (isset($_POST["cauta_sold"]) && (!empty($_POST['select_sold']))) {
    $sold       = $_POST['select_sold'];
    $compar     = $_POST['comparare_sold'];
    $query_sold = "SELECT `poze`.`cale_poza`,`model`.`sold`, `model`.`nume`, `model`.`prenume`,`model`.`id_model` FROM `model`,`poze` 
							WHERE `model`.`sold`" . $compar . $sold . " AND `model`.`id_model`=`poze`.`id_model` AND `model`.`sex`='F'";
    $sold1      = mysqli_query($connection, $query_sold);
    
    while ($row = mysqli_fetch_array($sold1, MYSQLI_ASSOC)) {
        echo '<div class="col-md-4 grow table-hover " style="min-height:328px!important;" >
										<span class="pres-title" style="font-weight:bold;">' . $row["prenume"] . ' ' . $row["nume"] . '</span><br />
										<span class="pres-title">Sold: ' . $row["sold"] . '</span><br />
										<a href="fotomodel.php?id=' . $row["id_model"] . '"><img width="147" height="247" src="' . $row["cale_poza"] . '"/></a>
										<br /><br /><br />
									 </div>';
    }
}
/*Interogare complexa*/
if (isset($_POST["cauta_complex"])) {
    $par      = $_POST['par'];
    $compar   = $_POST['comparare_an'];
    $an       = $_POST['selectare_an'];
    $queryy   = "SELECT DISTINCT `poze`.`cale_poza`, `model`.`nume`, `model`.`prenume`,`EV`.`tip_eveniment`,`model`.`id_model` 
									FROM `model`,`poze`,`model_eveniment`, (SELECT DISTINCT * FROM `eveniment` HAVING YEAR(`data_inceput`)" . $compar . $an . ") EV
										WHERE `model`.`id_model`=`poze`.`id_model` 
									    	AND `model`.`id_model`=`model_eveniment`.`id_model`
											AND `model_eveniment`.`id_eveniment`=`EV`.`id_eveniment`
											AND `model`.`culoare_par`='$par'";
    $queryy_1 = mysqli_query($connection, $queryy);
    
    while ($row = mysqli_fetch_array($queryy_1, MYSQLI_ASSOC)) {
        echo '<div class="col-md-4 grow table-hover " style="min-height:328px!important;" >
										<span class="pres-title" style="font-weight:bold;">' . $row["prenume"] . ' ' . $row["nume"] . '</span><br />
										<span class="pres-title">Eveniment: ' . $row["tip_eveniment"] . '</span><br />
										<a href="fotomodel.php?id=' . $row["id_model"] . '"><img width="147" height="247" src="' . $row["cale_poza"] . '"/></a>
										<br /><br /><br />
									 </div>';
    }
}
/*Interogare complexa*/
if (isset($_POST["cauta_complex1"]) && (!empty($_POST['numar_ore']))) {
    
    $compar    = $_POST['comparare_ore'];
    $numar_ore = $_POST['numar_ore'];
    $ordonare  = $_POST['ordonare'];
    $queryy    = "SELECT `model`.`nume`, `model`.`prenume`,`model_eveniment`.`id_salariu`,`model`.`id_model`,SUM(`model_eveniment`.`numar_ore`),`poze`.`cale_poza` 
								FROM `model`,`model_eveniment`,`poze`
									WHERE `model`.`id_model`=`model_eveniment`.`id_model` 
									AND `id_salariu`>(SELECT AVG(`me`.`id_salariu`) FROM `model_eveniment` `me`) 
									AND `model`.`id_model`=`poze`.`id_model`
										GROUP BY `model`.`id_model` 
							              HAVING SUM(`model_eveniment`.`numar_ore`)$compar$numar_ore 
											ORDER BY SUM(`model_eveniment`.`numar_ore`) $ordonare";
    $queryy_1  = mysqli_query($connection, $queryy);
    
    while ($row = mysqli_fetch_array($queryy_1, MYSQLI_ASSOC)) {
        echo '<div class="col-md-4 grow table-hover " style="min-height:328px!important;" >
										<span class="pres-title" style="font-weight:bold;">' . $row["prenume"] . ' ' . $row["nume"] . '</span><br />
										<span class="pres-title">Numar ore: ' . $row["SUM(`model_eveniment`.`numar_ore`)"] . '</span><br />
										<span class="pres-title">Salariu: ' . 2600 * $row["id_salariu"] . '</span><br />
										<a href="fotomodel.php?id=' . $row["id_model"] . '"><img width="147" height="247" src="' . $row["cale_poza"] . '"/></a>
										<br /><br /><br />
									 </div>';
    }
}
/*Interogare complexa*/
if (isset($_POST["cauta_eveniment"])) {
    $compar   = $_POST["comparare_eveniment"];
    $query_an = "SELECT `poze`.`cale_poza`, `model`.`nume`, `model`.`prenume`,`EV`.`tip_eveniment`,`model`.`id_model` 
									FROM `model`,`poze`,`model_eveniment`, (SELECT DISTINCT * FROM `eveniment`HAVING YEAR(`data_inceput`)=$compar) EV
										WHERE `model`.`id_model`=`poze`.`id_model` 
									    	AND `model`.`id_model`=`model_eveniment`.`id_model`
											AND `model_eveniment`.`id_eveniment`=`EV`.`id_eveniment`";
    $an       = mysqli_query($connection, $query_an);
    
    while ($row = mysqli_fetch_array($an, MYSQLI_ASSOC)) {
        echo '<div class="col-md-4 grow table-hover " style="min-height:328px!important;" >
										<span class="pres-title" style="font-weight:bold;">' . $row["prenume"] . ' ' . $row["nume"] . '</span><br />
										<span class="pres-title">Eveniment: ' . $row["tip_eveniment"] . '</span><br />
										<a href="fotomodel.php?id=' . $row["id_model"] . '"><img width="147" height="247" src="' . $row["cale_poza"] . '"/></a>
										<br /><br /><br />
									 </div>';
    }
}
/*Interogare complexa*/
if (isset($_POST["even_participate"])) {
    
    $query_even = "SELECT `poze`.`cale_poza`,`model`.`nume`,`model`.`prenume`,`model`.`id_model`, (SELECT COUNT(*) FROM `model_eveniment` `mv` WHERE `mv`.`id_model`=`model`.`id_model`) AS `EV` 
										FROM `model`,`poze` WHERE `poze`.`id_model`=`model`.`id_model` ORDER BY `EV` DESC";
    $even       = mysqli_query($connection, $query_even);
    
    while ($row = mysqli_fetch_array($even, MYSQLI_ASSOC)) {
        echo '<div class="col-md-4 grow table-hover " style="min-height:328px!important;" >
										<span class="pres-title" style="font-weight:bold;">' . $row["prenume"] . ' ' . $row["nume"] . '</span><br />
										<span class="pres-title">Numar de evenimente: ' . $row["EV"] . '</span><br />
										<a href="fotomodel.php?id=' . $row["id_model"] . '"><img width="147" height="247" src="' . $row["cale_poza"] . '"/></a>
										<br /><br /><br />
									 </div>';
    }
    
}

/*Interogare complexa*/
if (isset($_POST["even_participate1"])) {
    
    $query_even = "SELECT `poze`.`cale_poza`, `model`.`nume`, `model`.`prenume`,`model`.`id_model` 
										FROM `model`,`model_eveniment`,`poze` 
											WHERE `model`.`id_model`=`model_eveniment`.`id_model` 
											AND `poze`.`id_model`=`model`.`id_model` 
											AND (SELECT COUNT(*) FROM `model_eveniment` `mv` WHERE `mv`.`id_model`=`model_eveniment`.`id_model`)= 
												(SELECT COUNT(*) FROM `model_eveniment` `mv1` 
														WHERE `mv1`.`id_model`=`model_eveniment`.`id_model` 
														AND `mv1`.`id_eveniment` IN
															 (SELECT `mv2`.`id_eveniment` 
															 	FROM `eveniment` `mv2` WHERE 
															 		YEAR(`mv2`.`data_inceput`)>=2013)) GROUP BY `model_eveniment`.`id_model`";
    $even       = mysqli_query($connection, $query_even);
    
    while ($row = mysqli_fetch_array($even, MYSQLI_ASSOC)) {
        echo '<div class="col-md-4 grow table-hover " style="min-height:328px!important;" >
										<span class="pres-title" style="font-weight:bold;">' . $row["prenume"] . ' ' . $row["nume"] . '</span><br />
										
										<a href="fotomodel.php?id=' . $row["id_model"] . '"><img width="147" height="247" src="' . $row["cale_poza"] . '"/></a>
										<br /><br /><br />
									 </div>';
    }
}
?>
					</div>
				</div>
			</div>
			<br>
			<p class="copy" style="text-align:center;">Copyright &copy; 2016 <strong>One Models Agency</strong> All rights reserved. Created by: <a href="mailto:andrei.ulinici@aut.pub.ro?Subject=Salut!" target="_top"><i>Andrei Ulinici</i></a></p>
                <p class="address" style="text-align:center;">Bucharest: Piata Alba Iulia, Nr.6, Bl.I5, Sc.A, Et.4, Ap.11, Sector 3, Cod:031104, Tel:+40 314 329 103 
                </p> 
		</div>
	</body>
</html>