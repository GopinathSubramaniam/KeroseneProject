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
      <a class="btn btn-primary btn-lg rounded btn-border" data-toggle="modal" data-target="#exampleModal" href="#"><i
            class="fas fa-sign-in-alt"></i> Sign In</a>
   </div>
   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog container" role="document">
         <div class="modal-content container radius-0">
            <div class="modal-header">
               <h4 class="modal-title" id="exampleModalLabel"> Sign In</h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
            <br>
               <form action="#" id="registerForm">
                  <div class="form-group">
                     <!-- <label for="exampleInputEmail1">Email address</label> -->
                     <div class="input-group">
                        <div class="input-group-prepend">
                           <span class="input-group-text radius-0" id="inputGroupPrepend">
                              <i class="fas fa-envelope"></i>
                           </span>
                        </div>
                        <input type="email" class="form-control form-control-lg radius-0" id="email" name="email"
                           placeholder="Email" aria-describedby="inputGroupPrepend" required>
                     </div>
                  </div>
                  <div class="form-group">
                     <!-- <label for="exampleInputEmail1">Email address</label> -->
                     <div class="input-group">
                        <div class="input-group-prepend">
                           <span class="input-group-text radius-0" id="inputGroupPrepend">
                              <i class="fas fa-key"></i>
                           </span>
                        </div>
                        <input type="password" class="form-control form-control-lg radius-0" id="password"
                           name="password" placeholder="Password" aria-describedby="inputGroupPrepend" required>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="chkbx-container">
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                     </label>
                     <label class="form-check-label" for="exampleCheck1" style="padding-left: 30px;"><a href="#"
                           style="text-decoration: underline;">Remember Password</a></label>
                  </div>
                  <br>
                  <button type="submit" class="btn btn-primary btn-lg btn-block rounded"><i
                        class="fas fa-sign-in-alt"></i> Login</button>
               </form>
               <br>
               <hr>
               <br>
               <div align="center">
                  <h5>New to Keresone Ecommerce ?</h5>
                  <a href="/home/register" class="btn btn-outline-primary rounded">Create new account</a>
               </div>
               <br>
            </div>
         </div>
      </div>
</nav>