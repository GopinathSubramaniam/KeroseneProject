<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;
?>
<!DOCTYPE html>
<html>

<head>
   <?= $this->Html->charset() ?>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>
      Register
   </title>
</head>

<body>

   <?= $this->element('header') ?>
   <!-- Icons Grid -->
   <section style="padding-top: 2rem;">
      <div class="container">
         <div class="row">
            <div class="col-lg-3">
               &nbsp;
            </div>
            <div class="col-lg-6">
               <div class="card">
                  <div class="card-body">
                     <h3 class="card-subtitle mb-2 text-muted text-center">Register</h3>
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
                                    <i class="fas fa-user"></i>
                                 </span>
                              </div>
                              <input type="text" class="form-control form-control-lg radius-0" id="name" name="name"
                                 placeholder="Name" aria-describedby="inputGroupPrepend" required>
                           </div>
                        </div>
                        <div class="form-group">
                           <!-- <label for="exampleInputEmail1">Email address</label> -->
                           <div class="input-group">
                              <div class="input-group-prepend">
                                 <span class="input-group-text radius-0" id="inputGroupPrepend">
                                    <i class="fas fa-mobile-alt"></i>
                                 </span>
                              </div>
                              <input type="text" class="form-control form-control-lg radius-0" id="mobile" name="mobile"
                                 placeholder="Mobile" aria-describedby="inputGroupPrepend" required>
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
                           <!-- <label for="exampleInputEmail1">Email address</label> -->
                           <div class="input-group">
                              <div class="input-group-prepend">
                                 <span class="input-group-text radius-0" id="inputGroupPrepend">
                                    <i class="fas fa-lock"></i>
                                 </span>
                              </div>
                              <input type="password" class="form-control form-control-lg radius-0" id="confirmPassword"
                                 name="confirmPassword" placeholder="Confirm Password"
                                 aria-describedby="inputGroupPrepend" required>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="chkbx-container">
                              <input type="checkbox" checked="checked">
                              <span class="checkmark"></span>
                           </label>
                           <label class="form-check-label" for="exampleCheck1" style="padding-left: 30px;"><a href="#"
                                 style="text-decoration: underline;">Agree Terms And Conditions</a></label>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary btn-lg btn-block rounded"><i
                              class="fas fa-user-plus"></i> Register</button>
                     </form>
                     <hr>
                     <div align="center">
                        <a href="/" class="btn btn-outline-primary rounded">Already have an account</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3">
               &nbsp;
            </div>
         </div>
      </div>
   </section>

   <section class="features-icons text-center">
      <div class="container">
         <div class="row">
            &nbsp;
         </div>
      </div>
   </section>
   <!-- Footer -->
   <?= $this->element('footer') ?>
   <?= $this->Html->script("jquery.min.js"); ?>
   <?= $this->Html->script("bootstrap.bundle.min.js"); ?>
   <?= $this->Html->script("scripts/register.js"); ?>
</body>

</html>