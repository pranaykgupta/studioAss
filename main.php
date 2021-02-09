<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
    <link rel="icon" href="./images/logo.png" type="image/icon type">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/form.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function(){
    
        $('#next1').click(function () {
            $('#sec1').css({"display": "none"});
            $('#sec2').css({"display": "block"});
        });
        $('#next2').click(function () {
            $('#sec2').css({"display": "none"});
            $('#sec3').css({"display": "block"});
        });
        $('#back2').click(function () {
            $('#sec1').css({"display": "block"});
            $('#sec2').css({"display": "none"});
        });
        $('#back3').click(function () {
            $('#sec2').css({"display": "block"});
            $('#sec3').css({"display": "none"});
        });
    });
</script>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">CALCULATOR</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Link1 <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <!-- main content -->
    <div class="container">
        <form action="post.php" method="POST" id="testform">
            <div class="total">

                <section id="sec1" class="sec">
                    <div class="col-md-12">
                    <h3>What's your name? *</h3>
                    <p>We'll use this on all future communication</p>
                    </div>
                    <div class="d-flex flex-wrap col-md-12 big-box">
                        <input type="text" name="name" id="name" class="ipc">
                    </div>
                    <div class="col-md-12 bc">
                        <div class="btn bb" id="next1">Next</div>
                    </div>
                </section>

                <section id="sec2" class="sec" style="display: none;">
                    <div class="col-md-12">
                        <h3>Select type of Residential</h3>
                        <p>Please select your residential type for price estimation</p>
                    </div>
                    <div class="d-flex flex-wrap col-md-12 big-box">
                        <div class="box-wraper">
                            <input type="radio" value="app" name="typee" id="app" class="visibility">
                            <label for="app" class="box">
                                <!-- <img src="images/icon.png"> -->
                                <p>APARTMENT</p>
                            </label>
                        </div>
                        <div class="box-wraper">
                            <input type="radio" value="plot" name="typee" id="plot" class="visibility">
                            <label for="plot" class="box">
                                <!-- <img src="images/icon.png"> -->
                                <p>PLOT</p>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12 bc">
                        <div class="btn bb" id="back2">Back</div>
                        <div class="btn bb" id="next2">Next</div>
                    </div>
                </section>

                <section id="sec3" class="sec" style="display: none;">
                    <div class="col-md-12">
                        <h3>Number Of Stories</h3>
                        <p>Please select the no of floors you will like.</p>
                    </div>
                    <div class="col-md-12 d-flex flex-wrap f-custom">
                        <div class="box-wraper2">
                            <input type="radio" value="1" name="no_floors" id="stories-1" class="visibility">
                            <label for="stories-1" class="box2">
                                <p>1</p>
                            </label>

                        </div>

                        <div class="box-wraper2">
                            <input type="radio" value="2" name="no_floors" id="stories-2" class="visibility">
                            <label for="stories-2" class="box2">
                                <p>2</p>
                            </label>

                        </div>

                        <div class="box-wraper2">
                            <input type="radio" value="3" name="no_floors" id="stories-3" class="visibility">
                            <label for="stories-3" class="box2">
                                <p>3</p>
                            </label>

                        </div>

                        <div class="box-wraper2">
                            <input type="radio" value="4" name="no_floors" id="stories-4" class="visibility">
                            <label for="stories-4" class="box2">
                                <p>4</p>
                            </label>

                        </div>
                    </div>
                    <div class="col-md-12 bc">
                        <div class="btn bb" id="back3">Back</div>
                        <button class="btn bb" type="submit">Submit</button>
                    </div>
                </section>
            </div>
        </form>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    <!-- copy-paste -->
    <!-- <hr>
    <form method="post" action="new-construction.php" id="main-form">
        <div class="card main-container">
            <section id="section-1" style="display: none;">
                <div class="title col-md-12">
                    <h4>Select type of Residential</h4>
                    <p>Please select your residential type for price estimation</p>
                </div>
                <div class="d-flex flex-wrap col-md-12 big-box">
                    <div class="box-wraper">
                        <input type="radio" value="apartment" name="type" id="apartment" onchange="superNext(11,1)">
                        <label for="apartment" class="box">
                            <img src="images/apartment-icon.png">
                            <p>APARTMENT</p>
                        </label>
                    </div>
                    <div class="box-wraper">
                        <input type="radio" value="plot" name="type" id="plot" onchange="next(2)">
                        <label for="plot" class="box">
                            <img src="images/plot.png">
                            <p>PLOT</p>
                        </label>
                    </div>
                </div>
                <div class="d-flex flex-wrap col-md-12 justify-content-between">
                    <div class="form-group">
                        <button type="button" name="btn-0" id="nxt-1" class="btn btn-primary next-btn" onclick="next(2)" style="display: block;">Next</button>
                    </div>
                </div>
            </section>

            

            <section class="" id="section-3" style="">
                <div class="col-md-12 mb-3">
                    <h4>Number of Stories</h4>
                    <div class="d-flex flex-wrap f-custom">
                        <div class="box-wraper">
                            <input type="radio" value="1" name="number-of-stories" id="stories-1" onchange="next(4)">
                            <label for="stories-1" class="box">
                                <img src="images/stories-1.png">
                                <p>1</p>
                            </label>

                        </div>

                        <div class="box-wraper">
                            <input type="radio" value="2" name="number-of-stories" id="stories-2" onchange="next(4)">
                            <label for="stories-2" class="box">
                                <img src="images/stories-2.png">
                                <p>2</p>
                            </label>

                        </div>

                        <div class="box-wraper">
                            <input type="radio" value="3" name="number-of-stories" id="stories-3" onchange="next(4)">
                            <label for="stories-3" class="box">
                                <img src="images/stories-3.png">
                                <p>3</p>
                            </label>

                        </div>

                        <div class="box-wraper">
                            <input type="radio" value="4" name="number-of-stories" id="stories-4" onchange="next(4)">
                            <label for="stories-4" class="box">
                                <img src="images/stories-5.png">
                                <p>4</p>
                            </label>

                        </div>

                        <div class="box-wraper">
                            <input type="radio" value="5" name="number-of-stories" id="stories-5" onchange="next(4)">
                            <label for="stories-5" class="box">
                                <img src="images/stories-5.png">
                                <p>5</p>
                            </label>

                        </div>
                    </div>
                </div>

                <div class="d-flex flex-wrap col-md-12 justify-content-between">
                    <div class="form-group">
                        <button type="button" id="btn-3" class="btn btn-primary prev-btn" onclick="back(2)">Back</button>
                    </div>
                    <div class="form-group">
                        <button type="button" id="nxt-3" class="btn btn-primary next-btn" onclick="next(4)" style="display: block;">Next</button>
                    </div>
                </div>
            </section>

            <section class="" id="section-4" style="">
                <div class="col-md-12 mb-3">
                    <h4>Parking</h4>
                    <div class="d-flex flex-wrap f-custom">
                        <div class="box-wraper">
                            <input type="radio" value="Yes" name="parking-needed" id="parking-1" onchange="next(5)">
                            <label for="parking-1" class="box">
                                <img src="images/car-icon.png">
                                <p>Yes</p>
                            </label>

                        </div>

                        <div class="box-wraper">
                            <input type="radio" value="No" name="parking-needed" id="parking-2" onchange="next(5)">
                            <label for="parking-2" class="box">
                                <img src="images/car-icon.png">
                                <p>No</p>
                            </label>

                        </div>
                    </div>
                </div>
                <div class="d-flex flex-wrap col-md-12 justify-content-between">
                    <div class="form-group">
                        <button type="button" id="btn-4" class="btn btn-primary prev-btn" onclick="back(3)">Back</button>
                    </div>
                    <div class="form-group">
                        <button type="button" id="nxt-4" class="btn btn-primary next-btn" onclick="next(5)">Next</button>
                    </div>
                </div>
            </section>


            

            <section class="d-none" id="section-15">
                <div class="col-md-12 mb-3">
                    <h4>Choose the type of Estimation</h4>
                    <div class="d-flex flex-wrap f-custom">
                        <div class="box-wraper">
                            <input type="radio" value="Quick" name="estimation-type" id="quick" onchange="changeUrl('new-apartment.php')">
                            <label for="quick" class="box">
                                <img src="images/quick_est.png">
                                <p>Quick</p>
                            </label>
                        </div>

                        <div class="box-wraper">
                            <input type="radio" value="Detailed" name="estimation-type" id="detailed" onchange="changeUrl('apartment-detail-bedroom.php')">
                            <label for="detailed" class="box">
                                <img src="images/details.png">
                                <p>Detailed</p>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-wrap col-md-12 justify-content-between">
                    <div class="form-group">
                        <button type="button" id="btn-13" class="btn btn-primary prev-btn" onclick="back(14)">Back</button>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn-primary submit_btn btn d-none" id="nxt-14" value="Submit">
                    </div>
                </div>
            </section>
        </div>
    </form> -->
</body>
</html>
