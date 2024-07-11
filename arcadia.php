<?php
include_once('templets/header.php');

?>

  <main>
<!--section1 description du zoo-->  
    <section>
        <div class="opacity-75">
            <img class="bd-placeholder-img rounded" width="100%" height="100%" src="assets/images/imageDescription_écolo.webp" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <div class="container">
              <div class=" carousel-caption text-start">
              <h1 class="text-uppercase">zoo arcadia</h1>
                <p class="">Situé en France près de la forêt de Brocéliande, en Bretagne depuis 1960, ARCADIA</p>
                
              </div>
            </div>
    </section>
<!--fin section1 -->

<!--section2 habitas-->

        <section>
            <div class= 'my-5 mx-4'>
                <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
                      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
                    </div>
                    <div class="carousel-inner ">
                      <div class="carousel-item">
                        <img class="bd-placeholder-img rounded" width="100%" height="100%" src="uploads/habitats/savaneAnimeaux.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>
                        <div class="container">
                          <div class="carousel-caption text-start">
                            <h1 class="text-uppercase">savane</h1>
                            <p class="opacity-75">meilleur service pour une remise a neuf de votre voiture</p>
                            <p><a class="btn btn-lg btn-primary" href="services.php">visite des animeaux</a></p>
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item active">
                        <img class="bd-placeholder-img rounded" width="100%" height="100%" src="uploads/habitats/jungleAnimaux.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>
                        <div class="container">
                          <div class="carousel-caption">
                            <h1 class="text-uppercase">jungle</h1>
                            <p>notre garage vous offre le meilleur entretien pour vos voirure</p>
                            <p><a class="btn btn-lg btn-primary" href="services.php">visite des animeaux</a></p>
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img class="bd-placeholder-img rounded" width="100%" height="100%" src="uploads/habitats/animeauMarais.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>
                        <div class="container">
                          <div class="carousel-caption text-end">
                            <h1 class="text-uppercase">marais</h1>
                            <p>pieces de qualité et employé qualifier pour la reparation de vos voiture</p>
                            <p><a class="btn btn-lg btn-primary" href="">visite des animeaux</a></p>
                          </div>
                        </div>
                      </div>
                    
                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
        </section>

<!-- fin section2-->
       
   
 <!--fin des habitas-->

    <!--section images animals-->
    <section>
       <h1 class="my=5">mettre des cartes pour quelque animeau</h1>
  <div class="album py-5 bg-body-tertiary">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    </section>
    <!--fin section fin images animals-->

    <!--section services-->
    <section>
        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row">
              <div class="col-lg-4">
                <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="uploads/services/restauration.webp" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
                <h2 class="fw-normal">restauration</h2>
                <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
                <p><a class="btn btn-secondary" href="#">View details »</a></p>
              </div><!-- /.col-lg-4 -->
              <div class="col-lg-4">
                <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="uploads/services/visite-guidee.jpg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
                <h2 class="fw-normal">visite habitats</h2>
                <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
                <p><a class="btn btn-secondary" href="#">View details »</a></p>
              </div><!-- /.col-lg-4 -->
              <div class="col-lg-4">
                <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="uploads/services/visiteTrain.jpg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
                <h2 class="fw-normal">visite zoo</h2>
                <p>And lastly this, the third column of representative placeholder content.</p>
                <p><a class="btn btn-secondary" href="#">View details »</a></p>
              </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        
        
            
          </div>
    </section>
    <!--fin section services-->

 

    <!--section avis-->
    <section>
        <div class="container mb-5 pt-5">
            <div class="row">
              <div class="col-12 col-sm-7 col-md-12 m-auto">
                <div class="card border-0 shadow">
                  <div class="card-body container">
                    <div class="mx-4 text-center ">
                      <h3>laissez nous votre avis</h3>
                      <b><h5>votre satisfaction et notres objectif veuiller nous laisser votre avis sur votre experience dans notre zoo</h5>
                    </div>
                    <div >  
                      <div class="text-center my-4 " >
                        <a href="formulaireAvis.php"><button class="btn btn-primary " type="button">poster votre avis</button></a>
                      </div>
                    </div>  
                  </div>
                </div>
              </div>
            </div>
    </div>           
    

    </section>
    <!--fin section avis-->



  </main>

<!--footer -->

<?php

include_once('templets/footer.php');

?>
<!--fin footer-->
      
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>