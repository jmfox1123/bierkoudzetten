<?php
include('assets/src/header.php')
?>
<body style='margin: 0;'>
	<div id='body'>
		<div style='background-color:<?php echo $color;?>; width: 100%; height: 100%;'>
		<div style="font-size: 90px; text-align: center;">Moet het bier koud gezet worden?</div>
		<center>
			<?php
				echo "<div style='text-align: center; font-size: 200px; margin-top: -20px;'>";
				$t = date("l");
				echo "<div id='bierkoudzetten'>";
				if ($t == "Thursday" || $t == "Friday" || $t == "Saturday") {
				echo "<span style='color: green;'> JAAAAA!!!!!!/oudesite</span> " ;
				} else {
				echo "<span style='color: red;'>Nee/Oudesite</span>";
				}
				echo "</div></div>";	
			?>
		</center>
		</div>
	</div>
<?php
	include('assets/src/footer.php')
?>
