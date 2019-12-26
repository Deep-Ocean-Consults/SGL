<div class="top-bar">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="images/SGL.png" alt="SGL LOGO">
        </a>
        <p class="working-hours">
            Monday-Friday 8AM-5PM
            <a href="contact.php">
                <button type="button" class="btn btn-warning">Enquire here</button> 
            </a>
        </p>
    </div>
</div>
    
<div class="clearfix"></div>

    <div class="navbar navbar-expand-md navbar-dark background-style mb-4" role="navigation" id="myHeader">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php"> Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown1">
                        <li class="dropdown-item"><a href="company-profile.php">Company Profile</a></li>
                        <li class="dropdown-item"><a href="terms-conditions.php">Terms & Conditions</a></li>
                        <li class="dropdown-item"><a href="our-team.php">Our Team</a></li>
                        <li class="dropdown-item"><a href="mission.php">mission</a></li>
                        <li class="dropdown-item"><a href="vision.php">vision</a></li>
                        <li class="dropdown-item"><a href="core-value.php">Core values</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Natural resources</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown1">
                        <li class="dropdown-item"><a href="petroleum-products.php">Petroleum products</a></li>
                        <li class="dropdown-item"><a href="Ago.php">ago</a></li>
                        <li class="dropdown-item"><a href="pms.php">pms</a></li>
                        <li class="dropdown-item"><a href="dpk.php">dpk</a></li>
                        <li class="dropdown-item"><a href="bitumen.php">bitumen</a></li>
                        <li class="dropdown-item"><a href="base-oil.php">base oil</a></li>
                    </ul>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">real estate</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown1">
                        <li class="dropdown-item"><a href="Homes.php">homes</a></li>
                        <li class="dropdown-item"><a href="joint-venture.php">joint venture</a></li>
                        <li class="dropdown-item"><a href="properties-for-sale.php">properties for sale</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Agriculture</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown1">
                        <li class="dropdown-item"><a href="agro.php">Agro</a></li>
                        <li class="dropdown-item"><a href="Ago.php">fruits</a></li>
                        <li class="dropdown-item"><a href="pms.php">vegetables</a></li>
                        <li class="dropdown-item"><a href="dpk.php">dairy</a></li>
                        <li class="dropdown-item"><a href="bitumen.php">protein</a></li>
                        <li class="dropdown-item"><a href="grains.php">grains</a></li>
                         <li class="dropdown-item"><a href="oil.php">oils</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="contact.php"> Contact Us </a>
                </li>
            </ul>
        </div>
    </div>

    <script>
        window.onscroll = function() {
            myFunction()
        };

        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;

        function myFunction() {
          if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
          } else {
            header.classList.remove("sticky");
          }
        }
    </script>