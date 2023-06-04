
<?php include 'include/header.php'; ?>

    <section class="content-header">
        <h1>
            Anasayfa Ayarları
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
            <li class="active">Anasayfa Ayarlar</li>
        </ol>
    </section>

<?php

$anasayfa = $db->prepare("SELECT * FROM anasayfa WHERE id=id");
$anasayfa->execute(["id" => 1]);
$row = $anasayfa->fetch(PDO::FETCH_OBJ);

 ?>

    <section class="content">
        <div class="col-md-12">
            <div class="row">
                <div class="box">
                    <div class="box-header">
                        Mevcut Ayarlar:
                    </div>
                    <div class="box-body">

                    <?php
                        if (@$_GET["durum"] == "ok"){
                    ?>
                    <div class="alert alert-success">
                        Bilgileriniz başarıyla güncellendi
                    </div>
                    <?php
                        }if (@$_GET["durum"] == "no"){
                    ?>
                    <div class="alert alert-danger">
                        Bir HATA oluştu
                    </div>
                    <?php
                    }
                    ?>

                    <form action="" method="post">
                        <div class="form-group">
                            <label>Anasayfa açıklama</label>
                            <textarea name="yazi2" class="form-control"> <?= $row->yazi2; ?> </textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn-btn-primary">Güncelle</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php

if ($_POST) {
  $guncelle = $db->prepare("UPDATE anasayfa SET yazi1=:yazi2, yazi2=:yazi2 WHERE id=:id");
  $guncelle -> execute ([
    "yazi1" => $_POST["yazi1"],
    "yazi2" => $_POST["yazi2"],
    "id" => 1
  ]);
  if($guncelle){
    header("location:anasayfa.php?durum=ok");
  }else{
    header("location:anasayfa.php?durum=no");
  }
}

?>

<?php include 'include/footer.php'; ?>
