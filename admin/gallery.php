<?php
//include: error op de pagina,php genereert een waarschuwing,
//maar: de pagina zal wel verder uitgevoerd worden.
//require: hetzelfde als include: php genereert een fatale fout
//en stop de pagina van uitvoering
//include_once
//require_once
include("includes/header.php");
if(!$session->is_signed_in()){
    header("location:login.php");
}
//$message = "";
//$photo = new Photo();
//if(isset($_POST['submit'])){
//    $photo->title = $_POST['title'];
//    $photo->description = $_POST['description'];
//    $photo->set_file($_FILES['file']);
//}
//if($photo->save()){
//    $message = "Foto succesvol opgeladen!";
//}else{
//    $message = join("<br>", $photo->errors);
//}

include("includes/sidebar.php");
include("includes/content-top.php");
?>

    <h4>Hier komt de Gallery</h4>
    under construction


    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Stored Images</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Deleted Images</button>
        </li>

    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        1 of 2
                    </div>
                    <div class="col">
                        2 of 2
                    </div>
                    <div class="col">
                        3 of 3
                    </div>
                </div>
            </div>

        </div>
        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">


        </div>

    </div>



<?php
include("includes/footer.php");
?>