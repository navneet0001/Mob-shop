<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Mobile Shopee </title>

        <!--Bootstrap CDN-->
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"  integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


        <!--owl CDN-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" >
        
        <!--font Awesome icons-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" >

        <!--Custom CSS file-->
        <link rel="stylesheet" href="style.css" >


        <?php
          //require functions.php file
          require('functions.php');
        ?>

    </head>
    <body>
        
        <!-- start #header-->
        
        <header id="header">
            <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
                <p class="font-rale font-size-20 text-black-50 m-0">distinctio necessitatibus xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx eligendi endis aliquid?</p>
                <div class="font-rale font-size-14">
                    <a href="#" class="px-3 border-right border-left text-dark">login</a>
                    <a href="#" class="px-3 border-right border-left text-dark">Wishlist(O)</a>
                </div>
            </div>        
                
                    <!-- Primary Navigation-->
                    <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
                        <div class="container-fluid">
                          <a class="navbar-brand" href="#">Mobile Shopee</a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav m-auto font-rubik">
                              <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">On Sale</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">Category</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">Products<i class="fas fa-chevron-down"></i></a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">Blog</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">Category</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">Comming Soon</a>
                              </li>
                            </ul>
                            <form action="cart.php" class="font-size-14 font-rale"></form>
                            <a href="#" class="py-2 rounded-pill color-primary-bg">
                              <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                              <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart')); ?></span>
                            </a>
                          </div>
                        </div>
                      </nav>
                    <!-- !Primary Navigation-->

               
        </header>
        
        <!-- !start #header-->

        <!-- start #main-site-->
        <main id="main-site">