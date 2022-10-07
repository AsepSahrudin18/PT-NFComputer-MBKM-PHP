<!-- ======= Services Section ======= -->
<section id="tasks" class="services-mf pt-5 route">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box text-center">
                    <h3 class="title-a">TASKS</h3>
                    <p class="subtitle-a">
                        Ini merupakan kumpulan tugas MBKM Full Stack Web Developer di PT Nurul Fikri Cipta Inovasi |
                        Kampus Merdeka
                    </p>
                    <div class="line-mf"></div>
                </div>
            </div>
        </div>
        <div class="row">

            <!-- file php -->
            <?php 
                $d1 = ['title'=>'Web Design','icon'=>'<i class="bi bi-briefcase"></i>','keterangan'=>'HTML5, CSS3 dan Bootstrap5'];
                $d2 = ['title'=>'Javascript','icon'=>'<i class="bi bi-card-checklist"></i>','keterangan'=>'Kumpulan tugas materi Javascript'];
                $d3 = ['title'=>'design ui/ux','icon'=>'<i class="bi bi-bar-chart"></i>','keterangan'=>'Kumpulan tugas materi Design UI UX'];
                $d4 = ['title'=>'PHP PROGRAMMING','icon'=>'<i class="bi bi-binoculars"></i>','keterangan'=>'Tugas tentang bahasa pemrograman PHP'];
                $d5 = ['title'=>'MYSQL DATABASE','icon'=>'<i class="bi bi-brightness-high"></i>','keterangan'=>'Kumpulan tugas materi tentang Database'];
                $d6 = ['title'=>'GIT/GITHUB','icon'=>'<i class="bi bi-calendar4-week"></i>','keterangan'=>'Tugas tentang GIT Version Control System'];

                // data array scalar
                $data_card = [$d1, $d2, $d3, $d4, $d5, $d6];

                foreach($data_card as $dc){
                    ?>
            <div class="col-md-4">
                <div class="service-box">
                    <a href="https://github.com/AsepSahrudin18" target="_blank">
                        <div class="service-ico">
                            <span class="ico-circle"><?= $dc['icon']?></span>
                        </div>
                        <div class="service-content">
                            <h2 class="s-title"><?= $dc['title']?></h2>
                            <p class="s-description text-center">
                                <?= $dc['keterangan']?>
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <?php
                }
                ?>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>
<!-- End Services Section -->