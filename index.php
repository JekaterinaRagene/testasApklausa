<?php
$checked = 0; // joks atsakymas nepazymetas
//$klausimas1 = 1;
//$klausimas2 = 2;
//$klausimas3 = 3;

if (isset ($_POST['klausimas1'])){
    $klausimas1 = $_POST['klausimas1'];
    $checked = $klausimas1;
    }
if (isset ($_POST['klausimas2'])){
    $klausimas2 = $_POST['klausimas2'];
    $checked = $klausimas2;
}
if (isset ($_POST['klausimas3'])){
    $klausimas3 = $_POST['klausimas3'];
    $checked = $klausimas3;
}
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Namu darbas 2</title>
  </head>
  <body>
    <h3> Apklausa</h3>
    <main role='main' class='container'>
          <div>
              <h2>Klausimynas</h2>
              
              <?php
              if (isset($klausimas1) && $klausimas1 == 1) { ?>
                  <div class="alert alert-success" role="alert">
                    <h4>
                        Jusu atsakymas teisingas, tai yra Elnias
                    </h4>
                  </div>
              <?php } ?>
               
                <?php 
                if (isset ($klausimas1) && $klausimas1 != 1) { ?> 
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <strong>Jusu atsakymas neteisingas</strong> 
                    </div>
                <?php } ?>
                <form action="" method="post">  
                    <div class="row">
                        <div class="col-md-6 col-xs-6">
                            <img src="elnias.jpg" class="img-fluid">
                        </div>
                        <div class="col-md-6 col-xs-6" >                        
                            <h4>Koks tai gyvūnas? </h4> 
                            <input type="radio" name="klausimas1" value="1" <?php if ($checked == 1) { echo 'checked'; } ?>> 
                            Elnias <br>
                            <input type="radio" name="klausimas1" value="2" <?php if ($checked == 2) { echo 'checked'; } ?>> 
                            Šuo <br>
                            <input type="radio" name="klausimas1" value="3" <?php if ($checked == 3) { echo 'checked'; } ?>> 
                            Katinas <br>
                            <input type="radio" name="klausimas1" value="4" <?php if ($checked == 4) { echo 'checked'; } ?>> 
                            Begemotas <br><br>
                            <br>
                            <br>
                        </div>
                    </div>
      
                    <?php
                        if (isset($klausimas2) && $klausimas2 == 2) { ?>
                            <div class="alert alert-success" role="alert">
                              <h4 class="alert-heading">
                                  Jusu atsakymas teisingas, tai yra Šuo
                              </h4>
                            </div>
                        <?php } ?>
               
                    <?php 
                    if (isset ($klausimas2) && $klausimas2 != 2) { ?> 
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                          <strong>Jusu atsakymas neteisingas</strong> 
                        </div>
                    <?php } ?>
                 
                    <div class="row">
                        <div class="col-md-6 col-xs-6">
                            <img src="suo.jpg" class="img-fluid">
                        </div>
                        <div class="col-md-6 col-xs-6" >
                            <h4>Koks tai gyvūnas? </h4> 
                            <input type="radio" name="klausimas2" value="1" <?php if ($checked == 1) { echo 'checked'; } ?>> 
                            Elnias <br>
                            <input type="radio" name="klausimas2" value="2" <?php if ($checked == 2) { echo 'checked'; } ?>> 
                            Šuo <br>
                            <input type="radio" name="klausimas2" value="3" <?php if ($checked == 3) { echo 'checked'; } ?>> 
                            Katinas <br>
                            <input type="radio" name="klausimas2" value="4" <?php if ($checked == 4) { echo 'checked'; } ?>> 
                            Begemotas <br><br>
                            <br>
                            <br>
                        </div>
                    </div> 
                    
                    <?php
                        if (isset($klausimas3) && $klausimas3 == 3) { ?>
                            <div class="alert alert-success" role="alert">
                              <h4 class="alert-heading">
                                  Jusu atsakymas teisingas, tai yra Katinas
                              </h4>
                            </div>
                    <?php } ?>
               
                    <?php 
                    if (isset ($klausimas3) && $klausimas3 != 3) { ?> 
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                          <strong>Jusu atsakymas neteisingas</strong> 
                        </div>
                    <?php } ?>
                 
                    <div class="row">
                        <div class="col-md-6 col-xs-6">
                            <img src="katinas.jpg" class="img-fluid">
                        </div>
                        <div class="col-md-6 col-xs-6" >
                            <h4>Koks tai gyvūnas? </h4> 
                            <input type="radio" name="klausimas3" value="1" <?php if ($checked == 1) { echo 'checked'; } ?>> 
                            Elnias <br>
                            <input type="radio" name="klausimas3" value="2" <?php if ($checked == 2) { echo 'checked'; } ?>> 
                            Šuo <br>
                            <input type="radio" name="klausimas3" value="3" <?php if ($checked == 3) { echo 'checked'; } ?>> 
                            Katinas <br>
                            <input type="radio" name="klausimas3" value="4" <?php if ($checked == 4) { echo 'checked'; } ?>> 
                            Begemotas <br><br>
                            <input type="submit" class="btn btn-lg btn-primary btn-block" value="Atsakyti"> <br>                             
                        </div>
                    </div>
                </form>
            </div>
    </main>      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>              
      
      
      
      