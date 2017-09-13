<!-- header -->
<header>

<div class="header-main clearfix edge-padding header-narrow">
  <div class="header-main-inside">
    <div class="container clearfix">
    
      <div class="medium-header-container">
        <!-- Site logo -->
        <a href="index.php" id="site-logo"></a>
        <!-- Mobile burger icon -->
        <div id="mobile-nav-button">
          <div id="mobile-nav-icon">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
      
      <!-- header nav menu -->
      <nav id="header-nav">
      
        <h1 class="menu font-reg clearfix">ACTIVIDAD IV</h1>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <?php echo $this->auth->usuario()->Usuario; ?> <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="?c=auth&a=desconectarse">Desconectarse</a></li>
          </ul>
          </li>
        </ul>
      
      </nav>

    </div>
  </div>
</div>

</header>

<div id="main-content" class="edge-padding">

<!-- contenido de la pagina -->
<div class="page-section single-blog">
  <section class="single-blog-main">
    <div class="container">
      
      <div class="row font-light">
      
        <div class="col-xlarge-12 col-medium-12">
        
