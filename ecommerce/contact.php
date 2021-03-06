<?php require './includes/auth.inc.php';  ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>E-Commerce</title>
        <?php include './includes/header.ext.php'; ?>
        
    </head>
    <body>
       <!-- navbar-->
       <header class="header mb-5">
       <!--
      *** TOPBAR ***
      _________________________________________________________
      -->
      <?php include './includes/topnavbar.php'; ?>
      <!--END OF TOP BAR-->
      
      <?php include './includes/topmenu.php'; ?>
      
      </header>
      
       <div id="all">
           <div id="content">
               <div class="container">
                  <div class="row">
                   <div class="col-lg-3">
                       
                       <!--
                        *** PAGES MENU ***
                        _________________________________________________________
                        -->
                        <div class="card sidebar-menu mb-4">
                          <div class="card-header">
                            <h3 class="h4 card-title">Pages</h3>
                          </div>
                          <div class="card-body">
                            <ul class="nav nav-pills flex-column">
                              <li><a href="text.html" class="nav-link">Text page</a></li>
                              <li><a href="contact.html" class="nav-link">Contact page</a></li>
                              <li><a href="faq.html" class="nav-link">FAQ</a></li>
                            </ul>
                          </div>
                        </div>
                        <!-- *** PAGES MENU END ***-->
                        <div class="banner"><a href="#"><img src="modules/distribution/img/banner.jpg" alt="sales 2014" class="img-fluid"></a></div>
                       
                       
                   </div>
                       
                      <div class="col-lg-9">
                          <div id="contact" class="box">
                            <h1>Contact</h1>
                            <p class="lead">Are you curious about something? Do you have some kind of problem with our products?</p>
                            <p>Please feel free to contact us, our customer service center is working for you 24/7.</p>
                            <hr>
                            <div class="row">
                              <div class="col-md-4">
                                <h3><i class="fa fa-map-marker"></i>Address</h3>
                                <p>13/25 New Avenue<br>New Heaven<br>45Y 73J<br>England<br><strong>Great Britain</strong></p>
                              </div>
                              <!-- /.col-sm-4-->
                              <div class="col-md-4">
                                <h3><i class="fa fa-phone"></i> Call center</h3>
                                <p class="text-muted">This number is toll free if calling from Great Britain otherwise we advise you to use the electronic form of communication.</p>
                                <p><strong>+33 555 444 333</strong></p>
                              </div>
                              <!-- /.col-sm-4-->
                              <div class="col-md-4">
                                <h3><i class="fa fa-envelope"></i> Electronic support</h3>
                                <p class="text-muted">Please feel free to write an email to us or to use our electronic ticketing system.</p>
                                <ul>
                                  <li><strong><a href="mailto:">info@fakeemail.com</a></strong></li>
                                  <li><strong><a href="#">Ticketio</a></strong> - our ticketing support platform</li>
                                </ul>
                              </div>
                              <!-- /.col-sm-4-->
                            </div>
                            <!-- /.row-->
                            <hr />  
                            
                            <h2>Contact form</h2>
                            <form>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="firstname">Firstname</label>
                                    <input id="firstname" type="text" class="form-control">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="lastname">Lastname</label>
                                    <input id="lastname" type="text" class="form-control">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="text" class="form-control">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input id="subject" type="text" class="form-control">
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea id="message" class="form-control"></textarea>
                                  </div>
                                </div>
                                <div class="col-md-12 text-center">
                                  <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send message</button>
                                </div>
                              </div>
                              <!-- /.row-->
                            </form>  
                            
                            
                            
                          </div>
                      </div>
                   
                   
                   
                   
                   </div>
               </div>
                       
         <!-- *** FOOTER ***--> 
        <?php include './includes/footer.php'; ?>
         
              
        <!--
        *** COPYRIGHT ***
        _________________________________________________________
        -->
        <?php include './includes/copyright.php'; ?>
        <!-- *** COPYRIGHT END ***-->   
               
               
               
           </div><!--END OF CONTENT-->
       </div> 
       
      
       <?php include './includes/footer.ext.php'; ?>
       <script src="pages/app.js"></script>
       <script src="pages/login-register/js_login-register.js"></script>
    </body>
</html>
