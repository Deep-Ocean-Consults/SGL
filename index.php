<!DOCTYPE html>
<html lang="en">
<head>
	<title> SGL | HOMEPAGE</title>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content=""> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<script src="js/jquery-2.2.3.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mediaquery.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://use.fontawesome.com/d2cd2acddf.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } 
	</script>
	<script src="js/bootstrap.js"></script>
	<script src="js/header.js"></script>
	<script type="text/javascript" src="js/responsiveslides.min.js"></script>
</head>
<body>
    <?php $page = 'home'; include 'header.php';?>
    
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 img-resize" src="images/SGL-OIL.jpg" alt="SGL">
                <div class="carousel-caption d-none d-md-block">
                    <h5></h5>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 img-resize" src="images/SGL-ESTATE.jpg" alt="SGL">
                <div class="carousel-caption d-none d-md-block">
                    <h5></h5>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 img-resize" src="images/SGL-AGRIC.jpg" alt="SGL">
                <div class="carousel-caption d-none d-md-block">
                    <h5></h5>
                    <p></p>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="about-skylar">
        <div class="container">
            <p>
                Skylar 28 Global Limited is a brokerage company with affiliates  in various sectors such as natural resources, agricultural and real estate, with a growing clientele list of companies globally.
            </p>
        </div>
    </div>
    
    <div class="image-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                   <div class="menu-container">
                        <div class="menu">
                            <img src="images/natural.jpg" alt="Avatar" class="image">
                            <div class="overlay">
                                <div class="text">
                                    Our job is to gather information of real time prices of petroleum products across Nigeria, including imported oil products into Nigeria and take it live on our online platform whilst getting information directly from the importer and independent oil companies.
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>

                <div class="col-md-4">
                   <div class="menu-container">
                        <div class="menu">
                            <img src="images/agric.jpg" alt="Avatar" class="image">
                            <div class="overlay">
                                <div class="text">
                                    We are a world class online platform focused on facilitating the display and overseeing the exchange of products between consumers and suppliers. The platform represents a marketplace that matches supply and demand of goods and services by bringing together professional consumers and suppliers.
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>

                <div class="col-md-4">
                   <div class="menu-container">
                        <div class="menu">
                            <img src="images/real-estate.jpg" alt="Avatar" class="image">
                            <div class="overlay">
                                <div class="text">
                                    SGL28 focuses on our platform being used as an intermediry between buyers, sellers and developers. This is done by providing transparency in the real estate sector and matching client need with available equity.
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            
        </div> 
    </div>                                                                              
    
    <?php include 'footer.php';?>
</body>
</html>