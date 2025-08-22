<!DOCTYPE html>
<html lang="en">
<head>
    <title>index / Página 1</title>
    <!---------------HEAD---------------> 
    <?php include 'includes/head.php';?>
</head>
<body>
    <header>
        <!---------------HEADER---------------> 
        <?php include 'includes/header.php';?>
    </header>

    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="midias/img/img01.jpg" height="500px" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>melhores planos de internet </h5>
                    <p>foto 01.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="midias/img/img01.jpg" height="500px" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>A MELHOR ASSISTENCIA E SUPORTE DO BRASIL</h5>
                    <p>com velocidade em resolve seus problemas </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="midias/img/img01.jpg" height="500px" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>BEM VINDO AO MELHOR PROVEDOR DO BRASIL</h5>
                    <a href="planos.php"><button type="button" class="btn btn-dark">conheça nossos planos</button></a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container">
    </div>
<footer>
    <!---------------footer---------------> 
    <?php include 'includes/footer.php';?>
</footer>
</body>
</html>