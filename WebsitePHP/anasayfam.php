<?php include 'include/header.php'; ?>

<?php
$anasayfa = $db->prepare("SELECT * FROM anasayfa WHERE id=:iddd");
$anasayfa->execute(["iddd" => 1]);
$anasayfaRow = $anasayfa->fetch(PDO::FETCH_OBJ);
 ?>

					<section id="top" class="one dark cover">
						<div class="container">

							<header>
								<h2 class="alt"> HOŞGELDİNİZ </h2>
								<p> <?= $anasayfaRow->yazi2 ?> </p>
							</header>

							<footer>
								<a href="#portfolio" class="button scrolly">Çalışmalarım</a>
							</footer>

						</div>
					</section>

					<section id="portfolio" class="two">
						<div class="container">

							<header>
								<h2>Çalışmalarım</h2>
							</header>

							<p>Çalışmalarım özenle yapılmış tasarımlar bütünü büyük bir ekip çalışmasıdır. Emeği geçen herkese teşekkür ederim
              </p>

<?php

$calismalarim = $db->query("SELECT * FROM calismalar")->fetchAll(PDO::FETCH_OBJ);

 ?>

				    <div class="row">

                <?php
                foreach ($calismalarim as $row) {
                 ?>

								<div class="4u 12u$(mobile)">
									<article class="item">
										<a href="detay.php?id=<?= $row->id ?>" class="image fit"><img src="assets/<?= $row->resim ?>" alt="" height="200" /></a>
										<header>
											<h3><?= $row->baslik ?></h3>
										</header>
									</article>
                </div>
                <?php } ?>

						</div>
					</section>

					<section id="about" class="three">
						<div class="container">

							<header>
								<h2>Hakkımda</h2>
							</header>

							<a href="#" class="image featured"><img src="images/banner1.jpg" alt="" /></a>

							<p>Ekip çalışması halinde ortaya sunduğumuz ürünlerin bir sonraki site E-Ticaret sitesi olarak satışı yapılması planlanmaktadır.</p>

						</div>
					</section>

					<section id="contact" class="four">
						<div class="container">
							<header>
								<h2>İletişim</h2>
							</header>
							<p>Her türlü konuda lütfen danışmayı ihmal etmeyiniz.</p>
							<form method="post" action="#">
								<div class="row">
									<div class="6u 12u$(mobile)"><input type="text" name="name" placeholder="İsim" /></div>
									<div class="6u$ 12u$(mobile)"><input type="text" name="email" placeholder="E mail" /></div>
									<div class="12u$">
										<textarea name="message" placeholder="Mesaj"></textarea>
									</div>
									<div class="12u$">
										<input type="submit" value="Mesajı Gönder" />
									</div>
								</div>
							</form>

						</div>
					</section>

		<?php include 'include/footer.php'; ?>
