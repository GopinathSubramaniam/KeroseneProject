<?= $this->Html->meta('icon') ?>
<?= $this->Html->css("bootstrap.min.css"); ?>
<?= $this->Html->css("fontawesome-free/css/all.min.css"); ?>
<?= $this->Html->css("simple-line-icons/css/simple-line-icons.css"); ?>
<?= $this->Html->css("https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic"); ?>
<?= $this->Html->css("landing-page.css"); ?>
<?= $this->Html->css('style.css') ?>
<nav class="navbar navbar-dark navbar-expand-lg bg-primary static-top">
   <div class="container">
      <a class="navbar-brand" href="#">Kerosene Ecommerce</a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
            <li class="nav-item">
               <a class="nav-link" href="/"> <i class="fas fa-home"></i> Home</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#"><i class="fas fa-cogs"></i> Services</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="/home/productdetail"><i class="fas fa-burn"></i> Product</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#"><i class="fas fa-mobile-alt"></i> Contact Us</a>
            </li>
         </ul>
      </div>
      <a class="btn btn-primary btn-lg rounded btn-border" href="#"><i class="fas fa-sign-in-alt"></i> Sign In</a>
   </div>
</nav>