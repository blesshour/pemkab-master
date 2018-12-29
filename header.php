<header id="header">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="<?=$this->asset('/images/logominahasa.png')?>" alt="logo"></a>
            </div>

            <div class="collapse navbar-collapse navbar-center">
                <?php
                    echo $this->menu()->getFrontMenu(WEB_LANG, 'class="nav navbar-nav"', 'class="dropdown"', 'class="dropdown-menu"');
                ?>
            </div>
        </div>
        <!--/.container-->
    </nav>
    <!--/nav-->

</header>
<!--/header-->
