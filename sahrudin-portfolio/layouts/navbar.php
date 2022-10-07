<div class="container d-flex align-items-center justify-content-between">
    <h1 class="logo"><a href="index.php">Sahrudin-PortFolio</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav id="navbar" class="navbar">
        <ul>
            <!-- looping navbar -->
            <?php 
            $item1 = ['path'=> '#hero', 'item'=>'Home'];
            $item2 = ['path'=> '#about', 'item'=>'About'];
            $item3 = ['path'=> '#tasks', 'item'=>'Task'];
            $item4 = ['path'=> '#portfolio', 'item'=>'PortFolio'];
            $item5 = ['path'=> '#study', 'item'=>'Study'];
            $item6 = ['path'=> '#contact', 'item'=>'Contact'];

            $menu_item = [$item1, $item2, $item3, $item4, $item5, $item6];
            foreach($menu_item as $mi){ ?>

            <li><a class="nav-link scrollto active" href="<?= $mi['path']?>"><?= $mi['item']?></a></li>

            <?php } ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
    <!-- .navbar -->
</div>