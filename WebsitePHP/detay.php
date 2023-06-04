<?php include 'include/header.php'; ?>

<?php
  if($_GET["id"]){
    $detay = $db->prepare("SELECT * FROM calismalar id=:gelenid");
    $row = $detay->fetch(PDO::FETCH_OBJ);
  }
 ?>
					<section id="about" class="three">
						<div class="container">
							<a href="anasayfam.php" class="image featured"><img src="assets/<?= $row->resim ?>" alt="" /></a>
						</div>
					</section>

		<?php include 'include/footer.php'; ?>
