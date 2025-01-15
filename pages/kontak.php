<?php
include("../template/header.php");
?>

<main>
    <!-- Carousel Section -->
    <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-pause="false">
        <div class="carousel-inner cover">
            <div class="carousel-caption text-center cover">
                <h3>Contact</h3>
                <p>MADRASAH ALIYAH UNWANUL FALAH</p>
            </div>
            <div class="overlay"></div>
            <div class="carousel-item active">
                <img src="../assets/img/elgato1.png" class="d-block w-100" alt="elg">
            </div>
            <div class="carousel-item">
                <img src="../assets/img/elgato2.png" class="d-block w-100" alt="elg">
            </div>
            <div class="carousel-item">
                <img src="../assets/img/elgato1.png" class="d-block w-100" alt="elg">
            </div>
            <div class="carousel-item">
                <img src="../assets/img/elgato2.png" class="d-block w-100" alt="elg">
            </div>
        </div>
    </div>

    <!-- Contact Section -->
<div class="container py-5" data-aos="fade-up">
    <div class="section">
        <div class="kontak">
            <h2>Contact</h2>
            <div class="row align-items-left mb-3">
                <div class="col-md-6">
                    <div class="row align-items-left mb-3">
                        <div class="col-auto">
                            <i class="fa-solid fa-map-location-dot custom-icon"></i>
                        </div>
                        <div class="col">
                            <p class="text-dark mb-0">Jl. Sirkuit Sentul Km. 02 RT 02 RW 02 Desa Sentul Kecamatan Babakan Madang Kabupaten Bogor</p>
                        </div>
                    </div>
                    <div class="row align-items-left mb-3">
                        <div class="col-auto">
                            <i class="fa-solid fa-phone custom-icon"></i>
                        </div>
                        <div class="col">
                            <p class="text-dark mb-0">(021) 87953825</p>
                        </div>
                    </div>
                    <div class="row align-items-left">
                        <div class="col-auto">
                            <i class="fa-solid fa-envelope custom-icon"></i>
                        </div>
                        <div class="col">
                            <p class="mb-0">
                                <a href="mailto:info@daaruttaqwa.sch.id" class="text-decoration-none">
                                    info@daaruttaqwa.sch.id
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Map Section -->
                <div class="col-md-6">
                    <div class="map-responsive shadow rounded">
                        <iframe 
                            src="https://maps.google.com/maps?q=MAS+Unwanul+Falah+Sentul&z=17&output=embed&#038;iwloc=near" 
                            loading="lazy" 
                            allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</main>
<?php
include "../template/footer.php";
?>