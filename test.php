<?php
include('assets/src/header.php')
?>
<body style='margin: 0;'>
	<div id='body'>
		<div style='background-color:<?php echo $color;?>; width: 100%; height: 100%;'>
		<?php
		if (!empty($_GET['naam'])){
			$naam = $_GET['naam'];
			echo "<div style='font-size: 90px; text-align: center;'>Moet $naam het bier koud zetten?</div>";
		} else {
			echo "<div style='font-size: 90px; text-align: center;'>Moet het bier koud gezet worden?</div>";
		}
		?>
			<?php
				echo "<div style='text-align: center; font-size: 200px; margin-top: -20px;'>";
				$d = date("l");
				$h = date("H");
				echo "<div id='bierkoudzetten'>";
				if ($d == "Thursday" || $d == "Friday" && $h < "14") {
					if (strtolower($naam) == "Jurre`"){
						echo "<span style='color: red;'>Nee</span>";
					} else {
						echo "<span style='color: green;'>Jah!</span>";
					}
				} else if ($d == "Friday" && $h >= "14"){
					echo "<span style='color: red';>Te laat</span>";
				} else {
					echo "<span style='color: red;'>Nee</span>";
				}
				echo "</div></div>";
				echo "<div style= color:white; padding-top: 80%;>Copyright &copy; Mick de Jong - All rights reserved.</div>"
			?>
		</div>
	</div>
<?php
if (h == "16")
include('assets/src/footer.php')
?>
