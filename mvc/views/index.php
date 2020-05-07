<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hotel</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../Demo/public/CSS/Home.css">
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-white bg-white" >
        
        <div class="container flex-row  _nav ">

            <a class="navbar-bran logo"  href="#">
                <div class="">
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon-light"></span>
            </button>

            
                

            <div class="collapse navbar-collapse flex-row-reverse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto " >
                    <li class="nav-item active menu-item">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item menu-item">
                        <a class="nav-link" href="#">Products</a>
                    </li>
                    <li class="nav-item menu-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item menu-item">
                        <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Contact</a>
                    </li>
                    
                    <li class="nav-item menu-item">
                        <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Rooms</a>
                    </li>
                    <?php 
                        if(isset($_SESSION['username'])){
                            ?>
                            <li class="nav-item menu-item">
                                <a class="nav-link " href="<?php echo './Admin/logout' ;?>" tabindex="-1" aria-disabled="true"><?php echo "Logout";  ?></a>
                            </li>
                            <?php

                        }
                        else{
                            ?>
                            <li class="nav-item menu-item">
                                <a class="nav-link " href="<?php echo './Admin/show' ?>" tabindex="-1" aria-disabled="true"><?php echo "Login";  ?></a>
                            </li>
                            <?php
                        }

                     ?>
                </ul>
                
            </div>
            <form class="form-inline my-2 my-lg-0 f-search" >
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">
                        <span><i class="fas fa-search"></i></span>
                    </button>
                </form>
        </div>
    </nav>

    <div class="banner">
        <div class="anh"></div>
        <div class="chu ">
            <h3>explore MY HOTEL</h3>
            <div><a href="#" class="btn btn-primary">Book room</a></div>
        </div>
    </div>

    <div class="main container">
        <div class="row icongroup text-center ">    
            <div class="icon col-sm-3 text-center" style="opacity: 0.8;">
                <div>
                    <span><i class="fas fa-shield-virus"></i></span>
                </div>
                <div style="margin-top: 15px;">
                    <span class="iconchu">Shield</span>
                </div> 
            </div>

            <div class="icon col-sm-3 text-center" style="opacity: 0.8;">
                <div>
                    <span><i class="fas fa-wifi"></i></i></span>
                </div>
                <div style="margin-top: 15px;">
                    <span class="iconchu">Free Wifi</span>
                </div>
            </div>

            <div class="icon col-sm-3 text-center" style="opacity: 0.8;">
                <div>
                    <span><i class="far fa-check-circle"></i></span>
                </div>
                <div style="margin-top: 15px;">
                    <span class="iconchu">Safe</span>
                </div>
            </div>

            <div class="icon col-sm-3 text-center" style="opacity: 0.8;">
                <div>
                    <span><i class="fas fa-procedures"></i></span>
                </div>
                <div style="margin-top: 15px;">
                    <span class="iconchu">Free nights</span>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="tieude">
                BOOKING HOTEL
            </div>

            <div class="bonanh">
                <div class="col-sm-3 tunganh">
                    <div class="motsp">
                        <div class="anhmsp"></div>
                        <div class="mieutamotsp">
                            <div style="margin:15px auto;">
                                <small style="float: right;font-weight: 900;" >$35</small>
                                <h4>Room Vip</h4>
                            </div>
                            <div>
                                <p> Day la can phong sang trong va dat gia nhatr khach san</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 tunganh">
                    <div class="motsp">
                        <div class="anhmsp"></div>
                        <div class="mieutamotsp">
                            <div style="margin:15px auto;">
                                <small style="float: right;font-weight: 900;" >$35</small>
                                <h4>Room Vip</h4>
                            </div>
                            <div>
                                <p> Day la can phong sang trong va dat gia nhatr khach san</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 tunganh">
                    <div class="motsp">
                        <div class="anhmsp"></div>
                        <div class="mieutamotsp">
                            <div style="margin:15px auto;">
                                <small style="float: right;font-weight: 900;" >$35</small>
                                <h4>Room Vip</h4>
                            </div>
                            <div>
                                <p> Day la can phong sang trong va dat gia nhatr khach san</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 tunganh">
                    <div class="motsp">
                        <div class="anhmsp"></div>
                        <div class="mieutamotsp">
                            <div style="margin:15px auto;">
                                <small style="float: right;font-weight: 900;" >$35</small>
                                <h4>Room Vip</h4>
                            </div>
                            <div>
                                <p> Day la can phong sang trong va dat gia nhatr khach san</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 tunganh">
                    <div class="motsp">
                        <div class="anhmsp"></div>
                        <div class="mieutamotsp">
                            <div style="margin:15px auto;">
                                <small style="float: right;font-weight: 900;" >$35</small>
                                <h4>Room Vip</h4>
                            </div>
                            <div>
                                <p> Day la can phong sang trong va dat gia nhatr khach san</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 tunganh">
                    <div class="motsp">
                        <div class="anhmsp"></div>
                        <div class="mieutamotsp">
                            <div style="margin:15px auto;">
                                <small style="float: right;font-weight: 900;" >$35</small>
                                <h4>Room Vip</h4>
                            </div>
                            <div>
                                <p> Day la can phong sang trong va dat gia nhatr khach san</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 tunganh">
                    <div class="motsp">
                        <div class="anhmsp"></div>
                        <div class="mieutamotsp">
                            <div style="margin:15px auto;">
                                <small style="float: right;font-weight: 900;" >$35</small>
                                <h4>Room Vip</h4>
                            </div>
                            <div>
                                <p> Day la can phong sang trong va dat gia nhatr khach san</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 tunganh">
                    <div class="motsp">
                        <div class="anhmsp"></div>
                        <div class="mieutamotsp">
                            <div style="margin:15px auto;">
                                <small style="float: right;font-weight: 900;" >$35</small>
                                <h4>Room Vip</h4>
                            </div>
                            <div>
                                <p> Day la can phong sang trong va dat gia nhatr khach san</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


         <div class="row">
            <div class="tieude">
                Beautiful Views
            </div>
            <div class="views">
                <div class="col-sm-6 " style="float: left; margin:15px auto;">
                    <div class="view">  
                        <div class="layer1"></div>
                        <div class="layer2">
                            <h4>Luxury hotel</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit amet ab consectetur aperiam!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 " style="float: left; margin:15px auto;">
                    <div class="view">  
                        <div class="layer1"></div>
                        <div class="layer2">
                            <h4>Luxury hotel</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit amet ab consectetur aperiam!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 " style="float: left; margin:15px auto;">
                    <div class="view">  
                        <div class="layer1"></div>
                        <div class="layer2">
                            <h4>Luxury hotel</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit amet ab consectetur aperiam!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 " style="float: left; margin:15px auto;">
                    <div class="view">  
                        <div class="layer1"></div>
                        <div class="layer2">
                            <h4>Luxury hotel</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit amet ab consectetur aperiam!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 " style="float: left; margin:15px auto;">
                    <div class="view">  
                        <div class="layer1"></div>
                        <div class="layer2">
                            <h4>Luxury hotel</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit amet ab consectetur aperiam!
                            </p>
                        </div>
                    </div>
                </div>
                
            </div>          
            
        </div>
    </div>

    
    <!-- Footer -->
<footer class="page-footer font-small stylish-color-dark pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 mx-auto">

        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Footer Content</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque suscipit dicta sunt enim laudantium nisi esse, itaque qui! Dolor numquam labore eveniet quo minima, deserunt quisquam libero, iste veritatis consectetur.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-1" style="width: 100%"></div>
      <div class="col-md-2 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Male members</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Manh Pham</a>
          </li>
          <li>
            <a href="#!">Nha Pham</a>
          </li>
          <li>
            <a href="#!">Khai Nguyen</a>
          </li>
          
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Female members</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Quynh Anh </a>
          </li>
          <li>
            <a href="#!">Nhu Quynh</a>
          </li>
          
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">
      

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <hr>

  <!-- Call to action -->
  <ul class="list-unstyled list-inline text-center py-2">
    <li class="list-inline-item">
      <h5 class="mb-1">Register for free</h5>
    </li>
    <li class="list-inline-item">
      <a href="./Home/Show2" class="btn btn-danger btn-rounded">Sign up!</a>
    </li>
  </ul>
  <!-- Call to action -->

  <hr>

  <!-- Social buttons -->
  <ul class="list-unstyled list-inline text-center">
    <li class="list-inline-item">
      <a class="btn-floating btn-fb mx-1">
        <i class="fab fa-facebook-f"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-tw mx-1">
        <i class="fab fa-twitter"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-gplus mx-1">
        <i class="fab fa-google-plus-g"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-li mx-1">
        <i class="fab fa-linkedin-in"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-dribbble mx-1">
        <i class="fab fa-dribbble"> </i>
      </a>
    </li>
  </ul>
  <!-- Social buttons -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://kit.fontawesome.com/bf01806b7b.js"></script> 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../Demo/public/JS/home.js" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>

