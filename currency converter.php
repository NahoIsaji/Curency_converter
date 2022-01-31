<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">		
		<title>Currency converter</title>
		<link rel ="stylesheet" href="currency converter.css">
	</head>
	<body>
		<div>
			<?php 
//error message
				if (!isset($_POST['into']) || (!isset($_POST['from'])) || (!isset($_POST['num']))){
					echo "Please fill up currency type and amount.";
				}
//input data into instance
				else {
					$int = $_POST['into'];
					$from = $_POST['from'];
					$num = $_POST['num'];
				}
			
//CND
				if($from == "CND"){
					if($int == "tCND"){
						echo "<img src='flag-canada.png'>";
						echo "CN$ ".$num ." is ";
						echo "<img src='flag-canada.png'>";
						echo "CN$ " .$num;
					}
					if($int == "tUSD"){
						echo "<img src='flag-canada.png'>";
						echo "CN$ ".$num ." is ";
						echo "<img src='flag-usa.png'>";
						echo "US$ " .$num*0.72;
					}
					if($int == "tEUR"){
						echo "<img src='flag-canada.png'>";
						echo "CN$ ".$num ." is ";
						echo "<img src='flag-eu.png'>";
						echo "€ " .$num*0.65;    
					}
					if($int == "tGBP"){
						echo "<img src='flag-canada.png'>";
						echo "CN$ ".$num ." is ";
						echo "<img src='flag-uk.png'>";
						echo "£ " .$num*0.59; 
					}
					if($int == "tCNY"){
						echo "<img src='flag-canada.png'>";
						echo "CN$ ".$num ." is ";
						echo "<img src='flag-china.png'>";
						echo "¥ " .$num*5.07; 
					}
				}
	//USD
				elseif($from == "USD"){
					if($int == "tCND"){
						echo "<img src='flag-usa.png'>";
						echo "US$ ".$num ." is ";
						echo "<img src='flag-canada.png'>";
						echo "CN$ " .$num*1.38;
					}
					if($int == "tUSD"){
						echo "<img src='flag-usa.png'>";
						echo "US$ ".$num ." is ";
						echo "<img src='flag-usa.png'>";
						echo "US$ " .$num;
					}
					if($int == "tEUR"){
						echo "<img src='flag-usa.png'>";
						echo "US$ ".$num ." is ";
						echo "<img src='flag-eu.png'>";
						echo "€ " .$num*0.9;
					}
					if($int == "tGBP"){
						echo "<img src='flag-usa.png'>";
						echo "US$ ".$num ." is ";
						echo "<img src='flag-uk.png'>";
						echo "£ " .$num*0.81;
					}
					if($int == "tCNY"){
						echo "<img src='flag-usa.png'>";
						echo "US$ ".$num ." is ";
						echo "<img src='flag-china.png'>";
						echo "¥ " .$num*7;
					}
				}
	//EUR
				elseif($from == "EUR"){
					if($int == "tCND"){
						echo "<img src='flag-eu.png'>";
						echo "€ ".$num ." is ";
						echo "<img src='flag-canada.png'>";
						echo "CN$ " .$num*1.53;
					}
					if($int == "tUSD"){
						echo "<img src='flag-eu.png'>";
						echo "€ ".$num ." is ";
						echo "<img src='flag-usa.png'>";
						echo "US$ " .$num*1.11;
					}
					if($int == "tEUR"){
						echo "<img src='flag-eu.png'>";
						echo "€ ".$num ." is ";
						echo "<img src='flag-eu.png'>";
						echo "€ " .$num;
					}
					if($int == "tGBP"){
						echo "<img src='flag-eu.png'>";
						echo "€ ".$num ." is ";
						echo "<img src='flag-uk.png'>";
						echo "£ " .$num*0.9;
					}
					if($int == "tCNY"){
						echo "<img src='flag-eu.png'>";
						echo "€ ".$num ." is ";
						echo "<img src='flag-china.png'>";
						echo "¥ " .$num*7.78;
					}
				}
	//GBP
				elseif($from == "GBP"){
					if($int == "tCND"){
						echo "<img src='flag-uk.png'>";
						echo "£ ".$num ." is ";
						echo "<img src='flag-canada.png'>";
						echo "CN$ " .$num*1.69;
					}
					if($int == "tUSD"){
						echo "<img src='flag-uk.png'>";
						echo "£ ".$num ." is ";
						echo "<img src='flag-usa.png'>";
						echo "US$ " .$num*1.22;
					}
					if($int == "tEUR"){
						echo "<img src='flag-uk.png'>";
						echo "£ ".$num ." is ";
						echo "<img src='flag-eu.png'>";
						echo "€ " .$num*1.1;
					}
					if($int == "tGBP"){
						echo "<img src='flag-uk.png'>";
						echo "£ ".$num ." is ";
						echo "<img src='flag-uk.png'>";
						echo "£ " .$num;
					}
					if($int == "tCNY"){
						echo "<img src='flag-uk.png'>";
						echo "£ ".$num ." is ";
						echo "<img src='flag-china.png'>";
						echo "¥ " .$num*8.6;
					}
				}
	//CNY
				elseif($from == "CNY"){
					if($int == "tCND"){
						echo "<img src='flag-china.png'>";
						echo "¥ ".$num ." is ";
						echo "<img src='flag-canada.png'>";
						echo "CN$ " .$num*0.19;
					}
					if($int == "tUSD"){
						echo "<img src='flag-china.png'>";
						echo "¥ ".$num ." is ";
						echo "<img src='flag-usa.png'>";
						echo "US$ " .$num*0.14;
					}
					if($int == "tEUR"){
						echo "<img src='flag-china.png'>";
						echo "¥ ".$num ." is ";
						echo "<img src='flag-eu.png'>";
						echo "€ " .$num*0.12;
					}
					if($int == "tGBP"){
						echo "<img src='flag-china.png'>";
						echo "¥ ".$num ." is ";
						echo "<img src='flag-uk.png'>";
						echo "£ " .$num*0.11;
					}
					if($int == "tCNY"){
						echo "<img src='flag-china.png'>";
						echo "¥ ".$num ." is ";
						echo "<img src='flag-china.png'>";
						echo "¥ " .$num;
					}
				}
			?>	
		
			<p><a href="currency converter_top.html">Back</a></p>
		</div>
	</body>
</html>
