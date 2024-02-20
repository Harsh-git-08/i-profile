<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Iverse - IT Solutions Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{asset('resources/lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{asset('resources/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{asset('resources/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset('resources/css/style.css')}}" rel="stylesheet">
    </head>

    <body>
        <!-- Spinner Start -->
        <div id="spinner" class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        @include('layout.header')

        <!-- Navbar End -->

        
        <!-- Page Header Start -->
        
        <!-- Page Header End -->


        <!-- Fact Start -->
    
        <!-- Fact End -->


  

      
        <div class="container-fluid py-5 my-5">
            <div class="container pt-5">
                <div class="row g-5">
                    
                    <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s" id="about">
                        <h5 class="text-primary">Chatbot Development</h5>
                        <h1 class="mb-4">About Iverse Techlabs And It's Innovative IT Solutions</h1>
                        <p>We are a dynamic and innovative technology company committed to providing intelligent solutions for the digital age. Founded in 2023, Iverse has rapidly emerged as a leading player in the tech industry, specializing in chatbot development, web solutions, data analytics, WordPress development, and educational technology.</p>
                        <p class="mb-4">At Iverse, our mission is to empower businesses and individuals through cutting-edge technology, fostering efficiency, growth, and innovation. We believe in the transformative power of technology to create seamless user experiences and drive success.</p>
                        <a href="{{route('about')}}" class="btn btn-secondary rounded-pill px-5 py-3 text-white">More Details</a>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                        <div class="h-100 position-relative">
                            <img src="{{asset('resources/img/about-1.jpg')}}" class="img-fluid w-75 rounded" alt="" style="margin-bottom: 25%;">
                            <div class="position-absolute w-75" style="top: 25%; left: 25%;">
                                <img src="{{asset('resources/img/about-2.jpg')}}" class="img-fluid w-100 rounded" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
        <!-- Services End -->


        <!-- Footer Start -->
        @include('layout.footer')

        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-square rounded-circle back-to-top"><i class="fa fa-arrow-up text-white"></i></a>

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('resources/lib/wow/wow.min.js')}}"></script>
        <script src="{{asset('resources/lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('resources/lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{asset('resources/lib/owlcarousel/owl.carousel.min.js')}}"></script>

        <!-- Template Javascript -->
        <script src="{{asset('resources/js/main.js')}}"></script>
    </body>

</html>