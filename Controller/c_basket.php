<?php
session_start();
include('../View/v_basket.php');
$line = $_GET['line'];
$op = $_GET['op'];
if(isset($line) && isset($op))
{   
	if($op == "+" && $_SESSION['basket'][$line]['quantity'] < 20)
	{
		$_SESSION['basket'][$line]['quantity']++;
	}
	else if($op == "-" && $_SESSION['basket'][$line]['quantity'] > 0)
	{
		$_SESSION['basket'][$line]['quantity']--;
		if($_SESSION['basket'][$line]['quantity'] == 0)
		{
			array_splice($_SESSION['basket'],$line);
		}
	}	
}
var_dump($_SESSION['basket']);
if(empty($_SESSION['basket']))
{
	echo("<h3>Votre panier est vide ;(</h3>");
}
else
{
	$order = $_SESSION['basket'];
	echo("<table class=\"tab_center\">
		<tr>
		<th>Nom</th>
		<th>Prix</th>
		<th>Quantité</th>
		</tr>
		");
	for($i=0;$i<count($order);$i++)
	{
		echo("<tr><td>".$order[$i]['name']."</td>");
		echo("<td>".$order[$i]['price_tot']."</td>");
		echo("<td>".$order[$i]['quantity']."</td>");
		echo("<td><form action=\"c_basket.php\" method=\"get\">
			<input type=\"hidden\" name=\"line\" value=\"$i\">
			<input type=\"submit\" name=\"op\" value=\"+\"></form></td>");
		echo("<td><form action=\"c_basket.php\" method=\"get\">
			<input type=\"hidden\" name=\"line\" value=\"$i\">
			<input type=\"submit\" name=\"op\" value=\"-\"></form></td></tr>");
	}
}
echo("
</table>
</div>
</body>
</html>
");

?>