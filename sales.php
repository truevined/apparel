<?php 
	if($_POST['Submit']){
		$open = fopen("sales.txt","w+");
		$text = $_POST['update'];
		fwrite($open, $text);
		fclose($open);
		echo "<br /><center><h1>T-shirt Sales updated!<br /><br />"; 
		echo "Number of Sales: ";
		$file = file("sales.txt");
		foreach($file as $text) {
		echo $text."<br /></h1>";
		echo "<h2><a href=\"http://www.5kco.com/\">View Updated 5kco.com</a></h2></center>";
		}
	}
	
	else{
		$file = file("sales.txt");
		
		echo "<br /><center><h1>T-shirt Sales Number</h1><br /><br /><form action=\"".$PHP_SELF."\" method=\"post\">";
		echo "<textarea Name=\"update\" cols=\"50\" rows=\"2\">";
		foreach($file as $text) {
		echo $text;
		} 
		echo "</textarea>";
		echo "<br /><br /><input name=\"Submit\" type=\"submit\" value=\"Update Number of Sales\" /></form></center>";
		echo "<br /><br />";
	}
?>