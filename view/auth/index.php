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
        

<h1 class="text-center">Login</h1>

<div class="row">
    
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <form method="post" action="?c=Auth&a=Autenticar" role="login">
            <input type="text" name="usuario" placeholder="Usuario" required class="form-control input-lg" value="" autocomplete="off" />
            <input type="password" name="password" class="form-control input-lg" id="password" placeholder="Password" required autocomplete="off" />
            <hr />
            <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Ingresar</button>
        </form>
    </div>
</div>