<?php
require_once 'admin/includes/Photo.php';

// Een instantie maken van de Photo-klasse om foto's te beheren
$photo = new Photo();

// Controleren of er een afbeelding is geüpload
if (isset($_FILES['image'])) {
    $photo->upload($_FILES['image']); // Methode om de afbeelding naar de server te uploaden
}

// Foto's ophalen uit de database
$photos = $photo->find_all();

// HTML-generatie voor de foto's
foreach ($photos as $photo) {
    $imagePath = 'uploads/' . $photo->filename;
    echo '<div class="image-wrapper">';
    echo '<img src="' . $imagePath . '" alt="' . $photo->alt . '">';
    echo '</div>';
}
?>

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