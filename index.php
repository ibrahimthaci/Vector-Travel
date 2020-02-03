<!doctype html>
<html lang="en">
<head>
    <title>Tour Company</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/main.css">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
			<link rel="icon"   href="icon.png">
		  </head>
<body>
<nav class="navbar sticky-top navbar-expand-lg navbar-light" style="background-color: rgba(249, 251, 251, 0.92)">
    <a class="navbar-brand" href="#">Sunhill Hotel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#RM">Rooms</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#AB">About Us</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#OH">Our Hotels</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#CU">Contact Us</a>
            </li>


        </ul>
        <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="RGS.php">Register</a>
            </li>


        </ul>
    </div>
</nav>

<div class="container-fluid">


    <div id="boxShadow" class="row">
        <div id="BallinaSllajdet" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">
                <div id="carouselText" class="carousel-caption d-none d-md-block">
                    <h1 class="display-4">Travel Like Never Before</h1>
                    <h4 class="font-weight-light">Whether you're looking for adventure or luxury, let us help you plan your perfect getaway.</h4>
                </div>
                <div class="carousel-item active">
                    <img id="carouselImage" class="d-block w-100" width="100 px" src="images/background1.jpg" alt="First slide">

                </div>
                <div class="carousel-item">
                    <img id="carouselImage" class="d-block w-100" src="images/background2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img id="carouselImage" class="d-block w-100" src="images/background3.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img id="carouselImage" class="d-block w-100" src="images/background4.jpg" alt="Fourth slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#BallinaSllajdet" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#BallinaSllajdet" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div id="roomSection" class="row mt-5">
        <div class="col-md-12">
            <div class="container">
                <form>
                    <div class="form-row">
                        <div class="col-md-2">
                            <label for="checkInDate">Check in date</label>
                            <input id="checkInDate" type="date" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label for="checkOutDate">Check out date</label>
                            <input id="checkOutDate" type="date" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control" placeholder="example@mail.com">
                        </div>
                        <div class="col-md-2">
                            <label for="roomType">Room</label><br>
                            <select id="roomType" class="form-control custom-select">
                                <option selected>Select One</option>
                                <option value="1">Single</option>
                                <option value="2">Double</option>
                                <option value="3">Deluxe</option>
                                <option value="3">Royal</option>
                                <option value="3">King</option>
                            </select>
                        </div>
                        <div class="col-md-1">
                            <label for="nGuests">Guests</label> <br>
                            <select id="nGuests" class="form-control custom-select">
                                <option selected>Select One</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="3">4</option>
                                <option value="3">5</option>
                                <option value="3">6+</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="submit">&nbsp</label>
                            <input id="submit" type="submit" class="form-control btn btn-outline-primary">
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>


    <div class="row mt-5">
        <div class="col-md-12 text-center">
            <h3><a name = "RM">Rooms</h3>
            <p><cite>"Make yourself at home"</cite> is our slogan. We offer the best beds in the industry. Sleep well
                and rest well.</p>
        </div>
        <div class="col-md-12 pt-3">
            <div class="container">
                <div class="row">

                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="images/room1.jpeg" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Single Room</h4>
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <p>From $99</p>
                                    </div>
                                    <div class="col-md-4">
                                        <p>Single Bed</p>
                                    </div>
                                    <div class="col-md-4">
                                        <p>15m2</p>
                                    </div>

                                </div>
                                <div class="row py-3">
                                    <div class="col-md-2">
                                        <i class="fa fa-shower fa-2x"></i>
                                    </div>
                                    <div class="col-md-2">
                                        <i class="fa fa-phone fa-2x"></i>
                                    </div>
                                </div>

                                <a href="#" class="btn btn-outline-dark w-100">Choose Room</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="images/room2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Double Room</h4>
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <p>From $149</p>
                                    </div>
                                    <div class="col-md-5">
                                        <p>Queen size bed</p>
                                    </div>
                                    <div class="col-md-3">
                                        <p>25m2</p>
                                    </div>

                                </div>
                                <div class="row py-3">
                                    <div class="col-md-2">
                                        <i class="fa fa-shower fa-2x"></i>
                                    </div>
                                    <div class="col-md-2">
                                        <i class="fa fa-phone fa-2x"></i>
                                    </div>
                                </div>

                                <a href="#" class="btn btn-outline-dark w-100">Choose Room</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="images/room3.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Deluxe Room</h4>
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <p>From $199</p>
                                    </div>
                                    <div class="col-md-5">
                                        <p>King-Size Bed</p>
                                    </div>
                                    <div class="col-md-3">
                                        <p>40m2</p>
                                    </div>

                                </div>
                                <div class="row py-3">
                                    <div class="col-md-2">
                                        <i class="fa fa-shower fa-2x"></i>
                                    </div>
                                    <div class="col-md-2">
                                        <i class="fa fa-phone fa-2x"></i>
                                    </div>
                                    <div class="col-md-2">
                                        <i class="fa fa-wifi fa-2x"></i>
                                    </div>
                                    <div class="col-md-2">
                                        <i class="fa fa-television fa-2x"></i>
                                    </div>
                                    <div class="col-md-2">
                                        <i class="fa fa-cutlery fa-2x"></i>
                                    </div>
                                    <div class="col-md-2">
                                        <i class="fa fa-glass fa-2x"></i>
                                    </div>
                                </div>

                                <a href="#" class="btn btn-outline-dark w-100">Choose Room</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="container">
                <h3 class=" text-center"><a name = "AB">About Us</h3>
                <p>Welcome to Orchard Park hotel bar + grill. Orchard Park is a small independent family run hotel in
                    Giffnock, Glasgow. We aim to offer you comfortable surroundings, great food and excellent service to
                    make your stay truly enjoyable. Please take a look through our web site where you will find most of
                    the information you need. Call us to discuss your hotel reservation, dining plans or function
                    requirements. We look forward to welcoming you soon. Christopher and Peter Capaldi Proprietors.
                    elcome to Orchard Park hotel bar + grill. Orchard Park is a small independent family run hotel in
                    Giffnock, Glasgow. We aim to offer you comfortable surroundings, great food and excellent service to
                    make your stay truly enjoyable. lcoming you soon. Christopher and Peter Capaldi Proprietors.</p>
                <p>On demand, we can offer playstation, babycall, children care, dog equipment, etc.</p>

                <p class="text-center">We accept payment from: </p>
                <p class="text-center"><i class="fa fa-paypal fa-2x"></i>       <i class="fa fa-cc-mastercard fa-2x"></i></p>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-12">

            <div class="container">

                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <p class="nav-link"><i class="fa fa-map-marker fa-2x" ></i>221b Baker St, Marylebone, London</p>
                    </li>
                    <li class="nav-item">
                        <p class="nav-link"><i class="fa fa-phone-square fa-2x" ></i>+00 15 15 155</p>
                    </li>
                    <li class="nav-item">
                        <p class="nav-link"><i class="fa fa-envelope-o fa-2x" ></i>email@example.com</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">

        <iframe id="boxShadow" style="width: 100vw; height: 70vh"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4964.8463029899995!2d-0.16255108654708347!3d51.523798181141046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761acf33628211%3A0x445d7677a88322e1!2s221B+Baker+St%2C+Marylebone%2C+London+NW1+6XE%2C+UK!5e0!3m2!1sen!2s!4v1514061029332"
                frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    <div class="row mt-5">
        <div class="col-md-12">
            <div class="container">

                <h3 class=" text-center"><a name = "OH">Our Hotels</h3>
                <p>You can find our hotels anywhere in the world</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <img style="height: 63vh" class="card-img-top" src="images/hotel1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Cinque Tere</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="card">
                                    <img style="height: 25vh" class="card-img-top" src="images/hotel2.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">New York</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <img style="height: 25vh" class="card-img-top" src="images/hotel3.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">San Francsico</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <img style="height: 25vh" class="card-img-top" src="images/hotel4.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">Paris</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <img style="height: 25vh" class="card-img-top" src="images/hotel5.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">Pisa</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
    <div id="boxShadow" class="row mt-5 py-5   " style=" background: linear-gradient(to right, #360033, #0b8793);">
        <div class="col-md-12">
            <div class="container text-white">

                        <h3 class=" text-center pb-2"><a name = "RM">Get the best offers first!</h3>
                        <h5>Join our newsletter</h5>
                        <form>
                            <div class="form-row">
                                <div class="col-md-10">
                                    <label class="text-light" for="email">Email</label>
                                    <input id="subEmail" type="email" class="form-control" placeholder="email@example.com">
                                </div>

                                <div class="col-md-2">
                                    <label for="submit">&nbsp</label>
                                    <input id="submit" type="submit" class="form-control btn btn-outline-light">
                                </div>
                            </div>
                        </form>


            </div>
        </div>
    </div>
    <div class="row mt-4 mb-5">
        <div class="col-md-12">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <h3 class="text-center pb-2">Or contact us!</h3>
                    </div>
                <div class="col-md-6">


                    <form>
                        <div class="form-row pb-3">
                            <div class="col-md-10">
                                <label for="email"> Email</label>
                                <input id="subEmail" type="email" class="form-control" placeholder="email@example.com">
                            </div>
                        </div>
                        <div class="form-row pb-3">
                            <div class="col-md-10">
                                <label for="name">Name</label>
                                <input id="name" type="text" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-row pb-3">
                            <div class="col-md-10">
                                <label for="message">Message</label>
                                <input id="message" type="text" class="form-control p-3 " placeholder="What do you think?">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-10">
                                <input id="submit" type="submit" class="form-control btn btn-outline-dark w-100">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 mt-4">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <p class="nav-link"><i class="fa fa-map-marker fa-2x" ></i>221b Baker St, Marylebone, London</p>
                        </li>
                        <li class="nav-item">
                            <p class="nav-link"><i class="fa fa-phone-square fa-2x" ></i>+00 15 15 155</p>
                        </li>
                        <li class="nav-item">
                            <p class="nav-link"><i class="fa fa-envelope-o fa-2x" ></i>email@example.com</p>
                        </li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div>

</div>
<footer class="container-fluid">
    <div class="row bg-dark py-5    " style="min-height: 30vh">
        <div class="col-md-12">
            <div class="container text-light">
                <h4 class="text-center">Find us on</h4>

                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light"><i class="fa fa-facebook-official fa-2x" ></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light"><i class="fa fa-twitter-square fa-2x" ></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light"><i class="fa fa-instagram fa-2x" ></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light"><i class="fa fa-google-plus-square fa-2x" ></i></a>
                    </li>
                </ul>

                <p class="text-uppercase text-center mt-5">Copyright &copy Ibrahim Thaqi</p>

            </div>
        </div>


    </div>


</footer>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
        integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
        integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous"></script>
</body>
</html>