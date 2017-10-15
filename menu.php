<nav class="c-mega-menu c-mega-menu-onepage c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold" data-onepage-animation-speed="700">
    <ul class="nav navbar-nav c-theme-nav">
        <li class="c-onepage-link c-active active">
            <a href="home.php" class="c-link">Inicio</a>
        </li>
        <li class="c-onepage-link ">
            <a href="home.php#about" class="c-link">Quienes Somos</a>
        </li>
        <li class="c-onepage-link ">
            <a href="home.php#Contenidos" class="c-link">Contenidos</a>
        </li>
        <li class="c-onepage-link ">
            <a href="home.php#patrocinadores" class="c-link">Patrocinadores</a>
        </li>
        <li class="c-onepage-link ">
            <a href="revista/contenidos/edicion1/index.html" target="_blank" class="c-link">Revista</a>
        </li>
        <li class="c-onepage-link ">
            <a href="blog.php" class="c-link">Blog</a>
        </li>
        <li class="c-onepage-link ">
            <a href="galeria.php" class="c-link">Galeria</a>
        </li>
        <li class="c-onepage-link ">
            <a href="home.php#contact" class="c-link">Contacto</a>
        </li>
        <?php  if($_SESSION['id_tipo']==1){?>
        <li class="c-quick-sidebar-toggler-wrapper">    
            <a href="#" class="c-quick-sidebar-toggler">                    
                <span class="c-line"></span>
                <span class="c-line"></span>
                <span class="c-line"></span>
            </a>
        </li>
        <?php } ?>
    </ul>
</nav>