<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="modele.css">
		<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
		<script src="jquery-2.1.4.js"></script>
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
$l          = 0;
$nl         = 1;
$connection = mysqli_connect("127.0.0.1", "root", "", "agentie");
$query      = "SELECT model.id_model,cale_poza,nume,prenume FROM poze,model WHERE poze.id_model=model.id_model AND sex='F' ORDER BY model.id_model DESC LIMIT 5";
$query2     = "SELECT model.id_model,cale_poza,nume,prenume FROM poze,model WHERE poze.id_model=model.id_model AND sex='M' ORDER BY model.id_model DESC LIMIT 5";
if (isset($_POST['nume']) && isset($_POST['password'])) { // colecteaza date din formul de mai sus
    
    $nl = 0;
    $query1 = mysqli_query($connection, "SELECT user, password FROM user u WHERE u.user='$_POST[nume]'") or die("Eroare la conectare.." . mysqli_error($connection));
    while ($row = mysqli_fetch_assoc($query1)) {
        
        if ((($row["user"] == $_POST["nume"]) && ($row["password"] == $_POST["password"])) || (isset($_GET["user"]))) {
            echo "<script>
					var div=document.createElement('div');
					div.style.color='white';
					div.style.float='right';
					div.innerHTML='Bine ai venit, " . $row["user"] . "!';
					var u=document.getElementById('cssmenu');
					u.appendChild(div);
					
					</script>";
            $l = 1;
            
?>			
			
			<br>
			<div class="container">
				<div class="log1"> <span style="font-weight:bold; margin-left:32%; text-align:center; font-size:24px;">Ultimele 5 fotomodele feminine</span> </div>
				<div class="row">
				<br>
					<?php
            
            $connection = mysqli_connect("127.0.0.1", "root", "", "agentie");
            
            $image = mysqli_query($connection, $query);
            
            while ($row = mysqli_fetch_assoc($image)) {
                
                echo '<div class="col-md-4 grow table-hover" >
						<span class="pres-title">' . $row["prenume"] . ' ' . $row["nume"] . '</span><br />
						<a href="fotomodel.php?id=' . $row["id_model"] . '&user=admin"><img src="' . $row["cale_poza"] . '"/></a>
						<br /><br /><br />
						</div>';
            }
?>
				</div>
				<br>
				<div class="log1"> <span style="font-weight:bold; margin-left:32%; text-align:center; font-size:24px;">Ultimele 5 fotomodele masculine</span> </div>
				<br>
				<div class="row">
					<?php
            
            $image1 = mysqli_query($connection, $query2);
            
            while ($row1 = mysqli_fetch_assoc($image1)) {
                
                echo '<div class="col-md-4 grow table-hover " style="min-height:328px!important;" >
						<span class="pres-title">' . $row1["prenume"] . ' ' . $row1["nume"] . '</span><br />
						<a href="fotomodel.php?id=' . $row1["id_model"] . '&user=admin"><img src="' . $row1["cale_poza"] . '"/></a>
						<br /><br /><br />
						</div>';
            }
?>
				</div>
			</div>
			<?php
            
        }
    }
	/* De aici in jos sunt logat */
    
    if ($l == 0) {
?>
	
			<div class="container">
			<br>
				<div class="log1"> <span style="font-weight:bold; margin-left:32%; font-size:24px;">Ultimele 5 fotomodele feminine</span> </div>
				<br>
				<div class="row">
					<?php
        
        $image = mysqli_query($connection, $query);
        
        while ($row = mysqli_fetch_assoc($image)) {
            
            echo '<div class="col-md-4 grow table-hover">
						<span class="pres-title">' . $row["prenume"] . ' ' . $row["nume"] . '</span><br />
						<a href="fotomodel.php?id=' . $row["id_model"] . '"><img src="' . $row["cale_poza"] . '"/></a>
						<br /><br /><br />
						</div>';
        }
?>
				</div>
				<div class="log1"> <span style="font-weight:bold; margin-left:32%; font-size:24px;">Ultimele 5 fotomodele masculine</span> </div>
				<br>
				<div class="row">
					<?php
        
        $image1 = mysqli_query($connection, $query2);
        
        while ($row1 = mysqli_fetch_assoc($image1)) {
            
            echo '<div class="col-md-4 grow table-hover">
						<span class="pres-title">' . $row1["prenume"] . ' ' . $row1["nume"] . '</span><br />
						<a href="fotomodel.php?id=' . $row1["id_model"] . '"><img src="' . $row1["cale_poza"] . '"/></a>
						<br /><br /><br />
						</div>';
        }
?>
				</div>
				<p class="copy" style="text-align:center;">Copyright &copy; 2016 <strong>One Models Agency</strong> All rights reserved. Created by: <a href="mailto:andrei.ulinici@aut.pub.ro?Subject=Salut!" target="_top"><i>Andrei Ulinici</i></a></p>
                <p class="address" style="text-align:center;">Bucharest: Piata Alba Iulia, Nr.6, Bl.I5, Sc.A, Et.4, Ap.11, Sector 3, Cod:031104, Tel:+40 314 329 103 
                </p> 
			</div>
			<?php
    }
}

	/* De aici in jos NU sunt logat */

if (($l == 0) && ($nl == 1)) {
?>
			<div class="container">
			<br>	
			
			<div class="log1"> <span style="font-weight:bold; margin-left:32%; font-size:24px;">Ultimele 5 fotomodele feminine</span> </div>
			<br>
				<div class="row">
					<?php
    
    $image = mysqli_query($connection, $query);
    
    while ($row = mysqli_fetch_assoc($image)) {
        
        echo '<div class="col-md-4 grow table-hover">
						<span class="pres-title">' . $row["prenume"] . ' ' . $row["nume"] . '</span><br />
						<a href="fotomodel.php?id=' . $row["id_model"] . '"><img src="' . $row["cale_poza"] . '"/></a>
						<br /><br /><br />
						</div>';
    }
?>
				</div>
				
				<br>
				<br>
				<div class="log1"> <span style="font-weight:bold; margin-left:32%; font-size:24px;">Ultimele 5 fotomodele masculine</span> </div>
				<br>
				<div class="row">
					<?php
    
    $image1 = mysqli_query($connection, $query2);
    
    while ($row1 = mysqli_fetch_assoc($image1)) {
        
        echo '<div class="col-md-4 grow table-hover">
						<span class="pres-title">' . $row1["prenume"] . ' ' . $row1["nume"] . '</span><br />
						<a href="fotomodel.php?id=' . $row1["id_model"] . '"><img src="' . $row1["cale_poza"] . '"/></a>
						<br /><br /><br />
						</div>';
    }
?>
				</div>
				<br>

                <p class="copy" style="text-align:center;">Copyright &copy; 2016 <strong>One Models Agency</strong> All rights reserved. Created by: <a href="mailto:andrei.ulinici@aut.pub.ro?Subject=Salut!" target="_top"><i>Andrei Ulinici</i></a></p>
                <p class="address" style="text-align:center;">Bucharest: Piata Alba Iulia, Nr.6, Bl.I5, Sc.A, Et.4, Ap.11, Sector 3, Cod:031104, Tel:+40 314 329 103 
                </p> 
			</div>
			
			<?php
}
?>
    
		</div>
	</body>
	

	
</html>
