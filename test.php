
<html>

<body>
<?php
			mysql_connect("127.0.0.1", "root", "");
			mysql_select_db("agentie");
			$sql1 = "SELECT * FROM model";
			$resursa1 = mysql_query($sql1);
			$nr = mysql_num_rows($resursa1);
			
			print "<p>Exista $nr modele</p>";
			
			echo 'Salut';			
			
			mysql_close();
			
?>
</body>

</html>