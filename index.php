<?php 
require_once "header.php";
require_once "menu.php";
?>

<div class="container-fluid" style="text-align: center; background: #a0afd6; color: black; text-shadow: 2px 1.5px red; width: 99%;">
	<div class="row">
		<div class="col-sm-12">
			<h1>NBA</h1>
		</div>
	</div>
</div>

<div class="container-fluid" style="background: #01579B; width: 99%;">
	<table style="margin: 0 auto;" width="67%">
		<thead>
			<br>
			<h2 style="margin-left: 17%; color: white;">Videos NBA</h2>
			<hr style="background: gray; height: 1px; width: 67%;">
		</thead>
		<tbody style="color: white; text-align: center;">
			<tr><!--Primer contenido-->
				<td width="1">
					<section>
						<video width="560" height="315" controls="" 
							src="video/NBA.mp4" 
							frameborder="0" 
							autoplay loop>
						</video>
					</section>
				</td>
				<td>The Lakers Best Plays From The 2020 NBAPlayoffs.</td>
			</tr>
			<tr><!--segundo contenido-->
				<td width="1">
					<section>
						<video width="560" height="315" controls=""
							src="video/NBA1.mp4"
							frameborder="0"
							autoplay="">							
						</video>
					</section>
				</td>
				<td>Rajon Rondo's Best Plays From NBA Restart</td>
			</tr>
			<tr><!--Tercer contenido-->
				<td width="1">
					<section>
						<video width="560" height="315" controls=""
							src="video/NBA2.mp4"
							frameborder="0"
							autoplay="">							
						</video>
					</section>
				</td>
				<td>Lakers Celebrate Their 2020 NBA Championship Final Moments Of Game 6</td>
			</tr>
		</tbody>
	</table>
	<br>
	<?php require_once "Menu2.php";?>
	<br>
</div>
<br>
<?php 
require_once "footer.php";
?>