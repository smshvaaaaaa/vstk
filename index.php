<?php
include "menu.php";
?>

<html>

<div class="container">
    <div id="carouselExample" class="carousel slide" style="border: 1px solid;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="1.png" class="d-block w-100" alt="1">
            </div>
            <div class="carousel-item">
                <img src="2.png" class="d-block w-100" alt="2">
            </div>
            <div class="carousel-item">
                <img src="3.png" class="d-block w-100" alt="3">
            </div>
            <div class="carousel-item">
                <img src="4.png" class="d-block w-100" alt="4">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Предыдущий</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Следующий</span>
        </button>
    </div>
</div>

</html>