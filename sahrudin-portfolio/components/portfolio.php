<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio-mf sect-pt4 route">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box text-center">
                    <h3 class="title-a">Portfolio</h3>
                    <p class="subtitle-a">
                        Ini merupakan hasil dari PortFolio yang pernah saya kerjakan
                    </p>
                    <div class="line-mf"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- awal looping portfolio -->
            <?php 
                $card1 = ['poster'=>'work-3.svg', 'title'=>'Data Covid Dashboard', 'kategori'=> 'Reactjs Developer', 'date'=>'','path'=>'./data-covid.php'];
                $card2 = ['poster'=>'work-2.svg', 'title'=>'Movie App', 'kategori'=> 'Reactjs Developer', 'date'=>'','path'=>'./movie-app.php'];
                $card3 = ['poster'=>'work-1.svg', 'title'=>'Movie-Wiki', 'kategori'=> 'Reactjs Developer', 'date'=>'','path'=>'./movie-wiki.php'];
                $card4 = ['poster'=>'work-4.svg', 'title'=>'ETL Data Engineer', 'kategori'=> 'Data Engineer', 'date'=>'','path'=>'./data-engineer.php'];
                $card5 = ['poster'=>'work-5.svg', 'title'=>'RestFull API Covid', 'kategori'=> 'Backend Engineer', 'date'=>'','path'=>'./restfull.php'];
                
                // array scalar
                $portolios = [$card1, $card2, $card3, $card4, $card5];
                foreach($portolios as $pt){ ?>
            <div class="col-md-4">
                <div class="work-box">
                    <a href="./assets/img/<?= $pt['poster']?>" data-gallery="portfolioGallery"
                        class="portfolio-lightbox">
                        <div class="work-img">
                            <img src="assets/img/<?= $pt['poster']?>" alt="" class="img-fluid" />
                        </div>
                    </a>
                    <div class="work-content">
                        <div class="row">
                            <div class="col-sm-8">
                                <h2 class="w-title"><?= $pt['title']?></h2>
                                <div class="w-more">
                                    <span class="w-ctegory"><?= $pt['kategori']?></span> /
                                    <span class="w-date"><?= $pt['date']?></span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="w-like">
                                    <a href="<?= $pt['path']?>">
                                        <span class="bi bi-plus-circle"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <!-- akhir looping portfolio -->
        </div>
    </div>
</section>
<!-- End Portfolio Section -->