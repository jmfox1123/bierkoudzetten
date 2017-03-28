<?php
include('../assets/src/header.php')
?>
<body style='margin: 0;'>
	<div id='body'>
		<div style='background-color:<?php echo $color;?>; width: 100%; height: 100%;'>
		<div style="font-size: 90px; text-align: center;">Gaan we bier drinken?</div>
		<center>
			<?php
				echo "<div style='text-align: center; font-size: 200px; margin-top: -20px;'>";
				$t = date("l");
				$h = date("H");
				echo "<div id='bierkoudzetten'>";
				if ($h >= "12") {
				echo "<span style='color: green;'> JAAA!!!</span> " ;
				} else {
				echo "<span style='color: red;'>Nee</span>";
				}
				echo "</div></div>";
				echo "<div style= color:white; padding-top: 80%;>Copyright &copy; Jurre van de Gruiter - All rights reserved.</div>"
			?>
		</center>
		</div>
	</div>
<?php
	include('assets/src/footer.php')
?>
