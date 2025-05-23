<?php 
    require 'includes/db_connect.php';
    include 'includes/header.php';

?>
<style>
.introduction {
    color: #444245
}
</style>

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/header/animation1.jpg" class="d-block w-100" alt="Image 1">
            <div class="carousel-content">
                <h1>Pleated Perfection</h1>
                <p>NEW 52" sweep pleated blades + 12" light kit for TriAire™</p>
                <a href="#" class="btn">Learn More</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/header/animation2.jpg" class="d-block w-100" alt="Image 2">
            <div class="carousel-content">
                <h1>Pleated</h1>
                <p>NEW 52" sweep pleated blades + 12" light kit for TriAire™</p>
                <a href="#" class="btn">Learn More</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/header/animation3.jpg" class="d-block w-100" alt="Image 3">
            <div class="carousel-content">
                <h1>Pleated Perfection</h1>
                <p>NEW 52" sweep pleated blades + 12" light kit for TriAire™</p>
                <a href="#" class="btn ">Learn More</a>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>


    <div class="introduction justify-content-center mx-auto w-50 fs-5 fw-bold mt-3">
        Fanimation fans are the perfect fusion of beauty and functionality. With designs for every style and
        technology-driven controls for your convenience, Fanimation fans inspire your home. They integrate into any
        space and allow you to make a statement that is all your own.
    </div>
</div>

<?php 
    include 'includes/footer.php'
?>
