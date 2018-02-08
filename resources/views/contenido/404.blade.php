<!DOCTYPE html>
<html class="no-js">
<head>
   @include('contenido.head')
</head>

<body>

    <!--Header-->
    <header class="navbar navbar-fixed-top">
        @include('contenido.menu')    
    </header>
    <!-- /header -->

    <!-- 404 error -->
    <section id="error" class="container">
        <h1>404, Page not found</h1>
        <p>The Page you are looking for doesn't exist or an other error occurred.</p>
        <a class="btn btn-success" href="index.php">GO BACK TO THE HOMEPAGE</a>
    </section>
    <!-- /404 error -->

<!--Bottom-->
<section id="bottom" class="main">
<!--Container-->
    @include('contenido.footerseccion')
<!--/container-->
</section>
<!--/bottom-->

<!--Footer-->
<footer id="footer">
   @include('contenido.footer')
</footer>
<!--/Footer-->

<!--  Login form -->
<div class="modal hide fade in" id="loginForm" aria-hidden="false">
    @include('contenido.login')
</div>
<!--  /Login form -->

<script src="web/js/vendor/jquery-1.9.1.min.js"></script>
<script src="web/js/vendor/bootstrap.min.js"></script>
<script src="web/js/main.js"></script>

</body>
</html>
