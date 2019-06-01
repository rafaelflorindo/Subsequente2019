
 <!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="programacao1" >
    <meta name="generator" content="Bluefish 2.2.7" >
    <title>Blog Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/blog/">

    <!-- Bootstrap core CSS
<link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 <!doctype html>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="text-muted" href="#">Subscribe</a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="#">Large</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="text-muted" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
        </a>
        <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 text-muted" href="#">World</a>
      <a class="p-2 text-muted" href="#">U.S.</a>
      <a class="p-2 text-muted" href="#">Technology</a>
      <a class="p-2 text-muted" href="#">Design</a>
      <a class="p-2 text-muted" href="#">Culture</a>
      <a class="p-2 text-muted" href="#">Business</a>
      <a class="p-2 text-muted" href="#">Politics</a>
      <a class="p-2 text-muted" href="#">Opinion</a>
      <a class="p-2 text-muted" href="#">Science</a>
      <a class="p-2 text-muted" href="#">Health</a>
      <a class="p-2 text-muted" href="#">Style</a>
      <a class="p-2 text-muted" href="#">Travel</a>
    </nav>
  </div>
<!--
 <iframe width="360" height="315" src="https://www.youtube.com/embed/7jftKK-3L54" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
 <iframe width="360" height="315" src="https://www.youtube.com/embed/7jftKK-3L54" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
 
 <?php
include("dep.php");
?>
 
<!-- Grid row -->
<div class="row">


<div class="col-lg-4 col-md-6 mb-4">

    <!--Modal: Name-->
    <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">

          <!--Body-->
          <div class="modal-body mb-0 p-0">

            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vlDzYIIOYmM"
                allowfullscreen></iframe>
            </div>

          </div>

          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <span class="mr-4">Spread the word!</span>
            <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
            <!--Twitter-->
            <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
            <!--Google +-->
            <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
            <!--Linkedin-->
            <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

          </div>

        </div>
        <!--/.Content-->

      </div>
    </div>
    <!--Modal: Name-->

    <a><img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-3.jpg" alt="video"
        data-toggle="modal" data-target="#modal4"></a>

  </div>



<?php
foreach($depoimentos as $value){
?>
<div class="col-lg-4 col-md-6 mb-4">

    <!--Modal: Name--><?php echo $value["id"];?>
    <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">

          <!--Body-->
          <div class="modal-body mb-0 p-0">

            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <!--<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vlDzYIIOYmM"
                allowfullscreen></iframe>-->
                <iframe class="embed-responsive-item" src="<?php echo '$valor[url]';?>"
                allowfullscreen></iframe>
                <!--https://www.youtube.com/embed/vlDzYIIOYmM-->
            </div>

          </div>

          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <span class="mr-4">Spread the word!</span>
            <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
            <!--Twitter-->
            <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
            <!--Google +-->
            <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
            <!--Linkedin-->
            <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

          </div>

        </div>
        <!--/.Content-->

      </div>
    </div>
    <!--Modal: Name-->

    <a><img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-3.jpg" alt="video"
        data-toggle="modal" data-target="#modal4"></a>
			<span><?php echo $value["nome"]; ?></span>
  </div>
<?php
}
?>
  
</div>
<!-- Grid row --> 
 
</body>
</html>
