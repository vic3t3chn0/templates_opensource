<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="">

    <meta name="author" content="Lorem Ipsum">



    <title>Lorem Ipsum Official Website</title>

	   <!--[if lte IE 8]>
	   <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	   <![endif]-->    

    <!-- Bootstrap Core CSS -->

    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">



    <!-- Fonts -->

    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>



    <!-- Custom Theme CSS -->

    <link href="css/grayscale.css" rel="stylesheet" type="text/css">

    <style rel="stylesheet" type="text/css">
    nav {
    
    padding:10px 0;
}
nav ul {
    list-style-type:none;
    margin:0;
    padding:0;
}
nav ul li {
    display:inline-block;
    position:relative;
}
    
    /* sub navigation */
nav li ul {    
    
    position:absolute;
    left:0;
    top:40px; /* make this equal to the line-height of the links (specified below) */
    width:200px;
}
nav li li {
    position:relative;
    margin:0;
    display:block;
}
nav li li ul {
    position:absolute;
    top:0;
    left:200px; /* make this equal to the width of the sub nav above */
    margin:0;
}
    
    /* style all links */
nav a {
    line-height:40px;
    padding:0 12px;
    margin:0 12px;
}
nav a {
    color:#fff;
    text-decoration:none;
    display:block;
}
nav a:hover,
nav a:focus,
nav a:active {
    color:rgb(50,50,50);
}

/* style sub level links */
nav li li a {
    border-bottom:solid 1px rgb(200,50,50);
    margin:0 10px;
    padding:0;
}
nav li li:last-child a {
    border-bottom:none;
}

/* show arrows for dropdowns */
nav li.dropdown > a {
   
    background-position:right 20px;
    background-repeat:no-repeat;
}

nav li li.dropdown > a {
   
    background-position:right 16px;
    background-repeat:no-repeat;
}
    
    /* hide sub menu links */
ul.sub-menu {
    display:none;
}

</style>
    
    <script type="text/javascript">
    $(document).ready(function() {
    $( '.dropdown' ).hover(
        function(){
            $(this).children('.sub-menu').slideDown(200);
        },
        function(){
            $(this).children('.sub-menu').slideUp(200);
        }
    );
}); // end ready

    </script>
    
</head>



<body id="page-top" data-spy="scroll" data-target=".navbar-custom">



    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">

        <div class="container">

            <div class="navbar-header page-scroll">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">

                    <i class="fa fa-bars"></i>

                </button>

                <a class="navbar-brand" href="#page-top">

                    <i class="fa fa-play-circle"></i>  <span class="light">Back to </span> top

                </a>

            </div>



            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">

                <ul class="nav navbar-nav">

                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->

                    <li class="hidden">

                        <a href="#page-top"></a>

                    </li>

                    <li class="page-scroll">

                        <a href="#about">About</a>

                    </li>

                    <li class="page-scroll">
                    
						<a href="#what_we_do">What We Do?</a>
						<ul>
							<li><a href="#">Web Design/a></li>
								<li><a href="#">Store</a></li>
				        </ul>
				</li>
                </ul>
            </div>

            <!-- /.navbar-collapse -->

        </div>

        <!-- /.container -->

    </nav>



    <section class="intro">
        <div class="intro-body">

            <div class="container">

                <div class="row">

                    <div class="col-md-8 col-md-offset-2">

                        

                        <p class="intro-text">Welcome to Lorem Ipsum Portofolio</p>

                        <div class="page-scroll">

                            <a href="#about" class="btn btn-circle">

                                <i class="fa fa-angle-double-down animated"></i>

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <section id="about" class="container content-section text-center">

        <div class="row">

            <div class="col-lg-8 col-lg-offset-2">

                <h2>About Lorem</h2>

                <p></p>

                <p></p>
                <p></p>
                <div class="page-scroll">

                            <a href="#about" class="btn btn-circle">

                                <i class="fa fa-angle-double-down animated"></i>

                            </a>

                        </div>
            </div>

        </div>

    </section>



    <section id="store" class="content-section text-center">

        <div class="download-section">

            <div class="container">

                <div class="col-lg-8 col-lg-offset-2">

                    <h2>Store</h2>

                    <p>Click here to rental my services</p>

                    <a href="#" class="btn btn-default btn-lg">Visit Download Page</a>

                </div>
                <div class="page-scroll">

                            <a href="#page-top" class="btn btn-circle">

                                <i class="fa fa-angle-double-down animated"></i>

                            </a>

                        </div>

            </div>

        </div>

    </section>


    <section id="what_we_do" class="container content-section text-center">

        <div class="row">

            <div class="col-lg-8 col-lg-offset-2">
                
                <h2>What We Do</h2>
                <ul>
                    <li>
                        
                    </li>
                </ul>

            </div>
                <div class="page-scroll">

                            <a href="#page-top" class="btn btn-circle">

                                <i class="fa fa-angle-double-down animated"></i>

                            </a>

                        </div>


        </div>

    </section>

    
    


    <section id="contact" class="container content-section text-center">

        <div class="row">

            <div class="col-lg-8 col-lg-offset-2">

                <h2>Contact Myself</h2>
                
                <ul>
                    <li>
                        <p>Feel free to email me to provide some feedback on my products, send me suggestions to get better and better on it. Thank you all!</p>

                <p>pedrolvicente@gmail.com</p>

               
                    </li>

                </ul>

            </div>

        </div>
                <div class="page-scroll">

                            <a href="#about" class="btn btn-circle">

                                <i class="fa fa-angle-double-down animated"></i>

                            </a>

                        </div>

    </section>



    <!--<div id="map"></div>-->



    <!-- Core JavaScript Files -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Custom Theme JavaScript -->

    <script src="js/grayscale.js"></script>



</body>



</html>