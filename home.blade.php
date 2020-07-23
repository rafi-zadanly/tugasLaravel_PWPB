<!doctype html>
<html lang="en">
<head>
    <title>Home - Zadanly</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="/css/home_style.css">
</head>
<body class="bg-light">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-5 text-center">
                <img src="/img/example.jpg" class="img-fluid rounded-circle shadow" alt="" width="200px">
            </div>
            <div class="col-3"></div>
            <div class="col-6 text-center mt-3">
                <h3>M. Rafi Zadanly</h3>
            </div>
            <div class="col-3"></div>

            <div class="col-4"></div>
            <div class="col-4 text-center mt-3">
                <div class="alert alert-dark bg-dark text-light shadow-sm" role="alert">
                    Web Developer | Back-End
                </div>
            </div>
            <div class="col-4"></div>
        </div>
        
        <div class="row">
            <div class="col-12 text-center">
                <h3>
                    <a href="#" id="down-btn">
                        <i class="fa fa-angle-double-down animate__animated animate__slideInDown" aria-hidden="true"></i>
                    </a>
                </h3>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-5">
                <div class="card-deck ml-5 mr-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50">
                    <div class="card shadow-sm">
                        <a href="/profile" class="card-link">
                            <img class="card-img-top" src="/img/profile.jpg" alt="" height="200px">
                            <div class="card-body text-center">
                                <h4 class="card-title text-dark">Profile</h4>
                            </div>
                        </a>
                        
                    </div>
                    <div class="card shadow-sm" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50">
                        <a href="/experience" class="card-link">
                            <img class="card-img-top" src="/img/experience.jpg" alt="" height="200px">
                            <div class="card-body text-center">
                                <h4 class="card-title text-dark">Experience</h4>
                            </div>
                        </a>
                    </div>
                    <div class="card shadow-sm" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50">
                        <a href="/portfolio" class="card-link">
                            <img class="card-img-top" src="/img/portfolio.jpg" alt="" height="200px">
                            <div class="card-body text-center">
                                <h4 class="card-title text-dark">Portfolio</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12 text-center">
                <h3>
                    <a href="#" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50">
                        <i class="fa fa-angle-double-up animate__animated animate__slideInUp" aria-hidden="true"></i>
                    </a>
                </h3>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
        $('#down-btn').click(function () { 
            window.scrollTo(0, $('.container-fluid').height() + 75)
        });
    </script>
</body>
</html>