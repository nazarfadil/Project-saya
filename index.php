<?php include 'header.php';

$Packages = [
    ["title" => "Tour Paket 2 Hari", "description" => "Tour Paket 2 Hari Include Pelayanan, Penginapan dan Transoprtasi", "image" => "paket1.jpg"],
    ["title" => "Tour Paket 2 Hari", "description" => "Tour Paket 2 Hari Include Pelayanan, Penginapan dan Transoprtasi", "image" => "paket1.jpg"],
    ["title" => "Tour Paket 2 Hari", "description" => "Tour Paket 2 Hari Include Pelayanan, Penginapan dan Transoprtasi", "image" => "paket3.jpg"],
    ["title" => "Tour Paket 2 Hari", "description" => "Tour Paket 2 Hari Include Pelayanan, Penginapan dan Transoprtasi", "image" => "1.jpg"],
    ["title" => "Tour Paket 2 Hari", "description" => "Tour Paket 2 Hari Include Pelayanan, Penginapan dan Transoprtasi", "image" => "paket4.jpg"],
];
$Video = [
    ["title" => "Video 1", "link" => "https://www.youtube.com/embed/tnjxdlcNgjc?si=axmjEZ5LTeL16bnU"],
    ["title" => "Video 1", "link" => "https://www.youtube.com/embed/tnjxdlcNgjc?si=axmjEZ5LTeL16bnU"],
    ["title" => "Video 1", "link" => "https://www.youtube.com/embed/tnjxdlcNgjc?si=axmjEZ5LTeL16bnU"],
];
?>
<div class="row">
    <div class="col-md-8">
        <div class="row">
            <?php foreach ($Packages as $package) : ?>
                <div class="col-md-6 mb-3">
                    <div class="card" style="width: 22rem">
                        <img class="card-img-top" src="<?= $package['image']; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?= $package['title']; ?></h5>
                            <p class="card-text"><?= $package['description']; ?></p>
                            <a href="#" class="btn btn-primary">Daftar Paket</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
        <div class="col-md-4 d-flex justify-content-end">
            <div class="card mb-3" style="width: 23rem;"> 
                <div class="card-body">
                    <?php foreach ($Video as $video) : ?>
                        <h5 class="card-title"> <?= $video['title']; ?> </h5>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="<?= $video['link'] ?>" allowfullscreen></iframe>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; 
    ?>

