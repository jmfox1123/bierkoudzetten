
<?php
include('assets/src/header.php')
?>
<div id='body'>
	<div style='background-color:<?php echo $color;?>; width: 100%; height: 100%;'>
	<div style="font-size: 90px; text-align: center;">Moet het bier koud gezet worden?</div>
	<center>
		<?php
			echo "<div style='text-align: center; font-size: 200px; margin-top: -20px;'>";
			$t = date("l");
			$h = date("H");
				echo "<div id='bierkoudzetten'>";
			if ($t == "Thursday" && $h >= "16" || $t == "Friday" && $h <  "10" || $t == "Friday" && $h >= "17" || $t == "Saturday" ) {
				echo "<span style='color: green;'> JAAAAA!!!</span> " ;
			} else if ($t == "Friday" && $h >= "10" && $h < "16" ){
				echo "<span style='color: orange;'>TE LAAT</span>";
			}else {
				echo "<span style='color: Red;'>Nee</span>";
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