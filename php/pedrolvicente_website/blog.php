<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="">

    <meta name="author" content="Lorem Ipsum">

    <title>Blog Post Template for Bootstrap 3</title>

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

    
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/blog-post.css" rel="stylesheet">
    
    
    
            <!-- Custom Theme CSS -->

    <link href="css/grayscale.css" rel="stylesheet" type="text/css">

    <style>
  body { margin:0; padding:0; }
  #map { position:absolute; top:0; bottom:0; width:100%; }
</style>
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

    
    
    <script src='https://api.tiles.mapbox.com/mapbox.js/v2.2.1/mapbox.js'></script>
<link href='https://api.tiles.mapbox.com/mapbox.js/v2.2.1/mapbox.css' rel='stylesheet' />
    
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Start Bootstrap</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#about">About</a>
                    </li>
                    <li><a href="#services">Services</a>
                    </li>
                    <li><a href="index.html">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="col-lg-8">

                <!-- the actual blog post: title/author/date/content -->
                <h1>A Simple Blog Template for Bootstrap 3</h1>
                <p class="lead">by <a href="index.php">Start Bootstrap</a>
                </p>
                <hr>
                <p>
                    <span class="glyphicon glyphicon-time"></span> Posted on August 24, 2013 at 9:00 PM</p>
                <hr>
                <img src="http://placehold.it/900x300" class="img-responsive">
                <hr>
                <p class="lead"><br />
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam nibh. Nunc varius facilisis eros. Sed erat. In in velit quis arcu ornare laoreet. Curabitur adipiscing luctus massa. Integer ut purus ac augue commodo commodo. Nunc nec mi eu justo tempor consectetuer. Etiam vitae nisl. In dignissim lacus ut ante. Cras elit lectus, bibendum a, adipiscing vitae, commodo et, dui. Ut tincidunt tortor. Donec nonummy, enim in lacinia pulvinar, velit tellus scelerisque augue, ac posuere libero urna eget neque. Cras ipsum. Vestibulum pretium, lectus nec venenatis volutpat, purus lectus ultrices risus, a condimentum risus mi et quam. Pellentesque auctor fringilla neque. Duis eu massa ut lorem iaculis vestibulum. Maecenas facilisis elit sed justo. Quisque volutpat malesuada velit. 

Nunc at velit quis lectus nonummy eleifend. Curabitur eros. Aenean ligula dolor, gravida auctor, auctor et, suscipit in, erat. Sed malesuada, enim ut congue pharetra, massa elit convallis pede, ornare scelerisque libero neque ut neque. In at libero. Curabitur molestie. Sed vel neque. Proin et dolor ac ipsum elementum malesuada. Praesent id orci. Donec hendrerit. In hac habitasse platea dictumst. Aenean sit amet arcu a turpis posuere pretium. 

Nulla mauris odio, vehicula in, condimentum sit amet, tempus id, metus. Donec at nisi sit amet felis blandit posuere. Aliquam erat volutpat. Cras lobortis orci in quam porttitor cursus. Aenean dignissim. Curabitur facilisis sem at nisi laoreet placerat. Duis sed ipsum ac nibh mattis feugiat. Proin sed purus. Vivamus lectus ipsum, rhoncus sed, scelerisque sit amet, ultrices in, dolor. Aliquam vel magna non nunc ornare bibendum. Sed libero. Maecenas at est. Vivamus ornare, felis et luctus dapibus, lacus leo convallis diam, eget dapibus augue arcu eget arcu. 

Fusce auctor, metus eu ultricies vulputate, sapien nibh faucibus ligula, eget sollicitudin augue risus et dolor. Aenean pellentesque, tortor in cursus mattis, ante diam malesuada ligula, ac vestibulum neque turpis ut enim. Cras ornare. Proin ac nisi. Praesent laoreet ante tempor urna. In imperdiet. Nam ut metus et orci fermentum nonummy. Cras vel nunc. Donec feugiat neque eget purus. Quisque rhoncus. Phasellus tempus massa aliquet urna. Integer fringilla quam eget dolor. Curabitur mattis. Aliquam ac lacus. In congue, odio ut tristique adipiscing, diam leo fermentum ipsum, nec sollicitudin dui quam et tortor. Proin id neque ac pede egestas lacinia. Curabitur non odio. 

Nullam porta urna quis mauris. Aliquam erat volutpat. Donec scelerisque quam vitae est. Aenean vitae diam at erat pellentesque condimentum. Duis pulvinar nisl sed orci. Vivamus turpis nisi, volutpat in, placerat et, pharetra nec, eros. Suspendisse tellus metus, sodales non, venenatis a, ultrices auctor, erat. In ut leo nec elit mattis pellentesque. Sed eros elit, cursus accumsan, sollicitudin a, iaculis quis, diam. Pellentesque fermentum, pede a nonummy varius, ligula velit laoreet erat, et lacinia nibh nulla sit amet nunc. Suspendisse at turpis quis augue pellentesque pretium. Nunc condimentum elit semper felis. 

Duis imperdiet diam pharetra nisi. Fusce accumsan. Fusce adipiscing, felis non ornare egestas, risus elit placerat mauris, in mollis ante erat quis nisi. Quisque sed ipsum. Nulla facilisi. Donec arcu erat, sodales quis, cursus eget, posuere eget, tellus. Vestibulum eu risus. Curabitur adipiscing, odio in pretium feugiat, nulla magna vehicula lorem, at placerat tortor nisl eget velit. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse mollis fermentum massa. 

Pellentesque vulputate bibendum lorem. Nunc lobortis. Vestibulum aliquam fringilla mauris. Vivamus dolor est, eleifend id, varius id, suscipit at, felis. Nulla mattis cursus neque. Nam lobortis mi vitae sem vehicula accumsan. Integer vitae odio in felis facilisis cursus. Sed bibendum mauris a justo. Integer ut mi. Maecenas quis mauris. Integer non lectus at magna elementum posuere. 

Vestibulum et urna. Aliquam pretium, urna nec dapibus vehicula, tellus nulla pretium dolor, vitae gravida massa erat non mauris. Aenean non erat. Nam non leo. Fusce sed erat. Maecenas id odio vehicula eros elementum congue. Donec feugiat orci in lectus. Vestibulum mattis justo eget justo. Aenean eu nisl. Phasellus non ipsum non nisi fringilla cursus. Integer condimentum porta arcu. Quisque faucibus. Quisque mattis, tellus eu auctor pulvinar, nulla dui sagittis elit, vel ultricies mauris lectus tempus magna. Donec auctor facilisis lorem. Ut pharetra pellentesque nulla. Phasellus libero metus, commodo sit amet, ullamcorper sit amet, euismod et, tortor. Sed nec arcu et felis vulputate venenatis. 

Praesent sagittis, justo id malesuada tincidunt, ipsum leo elementum risus, at pulvinar ante urna et sem. Proin posuere metus sed tellus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Vivamus eros. Mauris tincidunt congue nunc. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porttitor ante vitae ligula. Duis mattis diam id mi. Nulla sed mi ut elit bibendum pharetra. Aenean eu nunc. Integer lacus sem, feugiat nec, lacinia non, adipiscing sit amet, odio. Etiam odio. Maecenas placerat placerat libero. Donec ultricies erat vitae tellus volutpat fringilla. Phasellus urna est, tincidunt at, porta vitae, viverra ut, lacus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Cras non odio viverra libero eleifend sagittis. 

Aliquam dictum lectus. Morbi pulvinar lacus et diam. Maecenas nunc massa, ultrices eget, nonummy nec, condimentum et, risus. Proin convallis dapibus nisi. Maecenas porta, augue quis porttitor consectetuer, felis odio blandit orci, in elementum pede lacus egestas mi. Etiam auctor, mauris eget lobortis blandit, tellus nisl convallis turpis, non auctor ante nisl eget eros. Donec rhoncus purus nec nunc. Suspendisse eros. Fusce et nisl. Morbi condimentum enim sed ipsum. Aliquam mi. Duis sit amet sapien. Nullam sed purus. Aliquam fringilla sagittis neque. Fusce eget risus. Donec bibendum, purus id bibendum sagittis, mauris est tincidunt risus, nec fermentum diam velit pellentesque dolor. Vestibulum quis libero eget arcu vestibulum auctor. Donec sit amet erat. Maecenas sit amet ipsum. Pellentesque sapien pede, mollis a, consectetuer sit amet, consectetuer nec, tellus. 

Duis ac est rutrum urna venenatis auctor. Sed quis ante. Nullam urna lorem, tempus eget, sollicitudin vitae, porta pharetra, eros. Aliquam sit amet eros. Curabitur ultricies imperdiet elit. Aenean lectus justo, eleifend bibendum, convallis eu, fermentum eu, magna. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. In odio leo, adipiscing a, pellentesque ac, aliquam sed, diam. Cras convallis rhoncus metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi convallis massa quis justo. Nam sollicitudin ipsum eu justo. Suspendisse libero risus, ornare non, ultricies ac, mattis eget, dolor. In dignissim orci ut lectus. 

Aliquam tincidunt justo tempor enim. Phasellus ac urna. Phasellus tortor. Morbi sit amet nibh. Pellentesque rutrum. Duis metus sem, posuere eget, feugiat ac, nonummy in, magna. Aliquam sit amet leo in nunc laoreet laoreet. Aenean ultrices. Donec tellus diam, sodales lacinia, facilisis vel, accumsan vel, sapien. Aliquam erat volutpat. Cras augue. Donec facilisis lorem ac ligula. Phasellus sed magna vitae nulla nonummy feugiat. Aenean et erat. Nulla sollicitudin interdum nibh. 

Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam ultricies justo non leo venenatis accumsan. Sed eget leo. Etiam vel odio quis ligula imperdiet viverra. Fusce congue orci nec leo. Morbi pede sem, facilisis a, egestas nec, faucibus a, quam. Praesent lacus. Sed vel urna. Vestibulum tincidunt libero in justo. Donec non velit eget felis consequat congue. Donec id urna. Fusce dapibus consectetuer velit. 

Ut metus. Maecenas dapibus nibh eu est. Proin faucibus pharetra nibh. Integer aliquet tellus in felis. Quisque mi pede, imperdiet a, dapibus vel, bibendum rhoncus, nulla. Sed eu velit. Maecenas molestie, ipsum nec nonummy mattis, ipsum lectus imperdiet nibh, sit amet accumsan nunc nunc et lorem. Quisque at augue. Donec elit ligula, pellentesque id, feugiat sed, malesuada a, turpis. Donec nunc quam, commodo ut, venenatis ut, feugiat quis, tortor. Nunc id risus vestibulum turpis facilisis fringilla. Pellentesque turpis ipsum, ultrices at, consequat sit amet, sollicitudin at, pede. Suspendisse potenti. Fusce eu ante sit amet lacus cursus tempor. Donec bibendum, metus nec tristique mollis, metus felis pellentesque sapien, eu mattis turpis lorem quis quam. In ligula nibh, varius quis, elementum sed, pellentesque vel, lectus. Praesent erat orci, hendrerit bibendum, tristique et, consectetuer eget, elit. Mauris vel mi at dui commodo elementum. 

Cras ut ante et est elementum tristique. Curabitur pulvinar massa in tellus. Nullam eu massa. Etiam nulla. Sed in dui. Curabitur eleifend leo sit amet lorem vehicula venenatis. Mauris suscipit purus vitae dui. Suspendisse augue nunc, pellentesque id, euismod nec, elementum ut, arcu. Etiam ipsum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas a est sed justo porttitor fringilla. Pellentesque facilisis. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 

Morbi lectus quam, sollicitudin eget, pretium nec, consectetuer posuere, tellus. Nullam et diam. Mauris aliquam mollis est. Nullam egestas odio in sapien. Etiam leo tellus, vulputate sed, imperdiet vitae, faucibus vitae, sem. In ut elit non ante volutpat fermentum. Sed tempor sapien quis arcu. Praesent in lectus ultricies massa scelerisque convallis. Suspendisse a ante. Cras commodo, sem ac ullamcorper ornare, nibh diam placerat turpis, vitae faucibus dui orci ac ante. Curabitur orci ipsum, luctus at, scelerisque id, ultrices tempus, augue. Ut ut metus. Vivamus sed quam. Quisque augue nibh, rutrum quis, adipiscing quis, tincidunt ac, ligula. Integer vel pede sit amet nulla cursus ultricies. 

Vestibulum tincidunt. Nam varius. Cras eros. Suspendisse vestibulum, leo eu tincidunt faucibus, nibh turpis cursus dui, eget mollis dui lacus quis diam. Quisque ultrices vehicula felis. Vivamus nec felis dapibus eros ultricies volutpat. Curabitur enim nisi, lobortis a, imperdiet ac, imperdiet quis, purus. Donec rhoncus lorem at eros. Nulla placerat nibh. Duis commodo odio a nunc. Donec congue. Phasellus quam magna, eleifend sed, pharetra non, vehicula eget, leo. Morbi vitae est id erat blandit fringilla. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 

Aenean eget justo eget mi facilisis tempor. Aliquam libero quam, facilisis eu, eleifend nec, congue in, turpis. Nulla vestibulum, est et commodo dapibus, eros risus pulvinar diam, sed accumsan dolor pede porta diam. Vivamus iaculis metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed lacus. Sed vel mi. Vestibulum eget massa. Pellentesque libero justo, consequat nec, sodales vel, fringilla semper, diam. Donec at est. Cras dictum enim posuere tellus. Integer pharetra nulla non sapien. Maecenas sem velit, feugiat at, fermentum nec, pretium ac, lorem. Duis luctus, risus non sollicitudin gravida, felis quam pharetra tellus, in pellentesque dui ante at magna. Cras non diam et tortor ultricies pharetra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean rutrum mauris et dolor. Etiam turpis sapien, fermentum et, auctor vel, elementum eu, leo. 

Proin at ipsum tincidunt odio faucibus rutrum. Vestibulum tincidunt magna ut est. Mauris sollicitudin dignissim ligula. Quisque tortor orci, ullamcorper sit amet, rhoncus a, ultricies nec, nunc. Mauris molestie nunc vitae neque. Integer nulla. Proin vel eros. Suspendisse sed mi. Sed bibendum, sem in vehicula pellentesque, nulla leo tempus enim, at fringilla orci lacus in lorem. Vestibulum ante felis, pretium ut, condimentum sed, condimentum sagittis, libero. Curabitur vehicula. Aenean iaculis, ipsum quis ullamcorper facilisis, justo nisl sodales felis, eu dictum felis metus quis nunc. Cras imperdiet pede sed mi. Sed nisl magna, pellentesque sed, consequat et, suscipit ac, nisl. Quisque lectus ante, congue sed, viverra nec, scelerisque vel, lorem. Ut ac nisl ut mi congue interdum. Morbi eget risus. Nullam cursus. Maecenas volutpat, est ut adipiscing pretium, dolor velit nonummy ligula, at venenatis risus metus luctus elit. 

Suspendisse congue nunc nec tortor. Suspendisse consectetuer. Pellentesque eros augue, consequat ac, tristique non, adipiscing vitae, sapien. Aenean fermentum convallis elit. In hac habitasse platea dictumst. Vivamus sodales dolor nec enim molestie dictum. Cras lobortis, urna suscipit mattis ultricies, quam massa auctor augue, et ullamcorper diam augue at eros. Donec pharetra purus eget ante. Morbi nisl. Curabitur vestibulum ipsum. Fusce arcu. Nunc tempor placerat nunc. Cras sed tortor. 

</p>
                <p><strong>Placeholder text by:</strong>
                </p>
                <ul>
                    <li><a href="http://spaceipsum.com/">Space Ipsum</a>
                    </li>
                    <li><a href="http://cupcakeipsum.com/">Cupcake Ipsum</a>
                    </li>
                    <li><a href="http://tunaipsum.com/">Tuna Ipsum</a>
                    </li>
                </ul>

                <hr>

                <!-- the comment box -->
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <hr>

                <!-- the comments -->
                <h3>Start Bootstrap
                    <small>9:41 PM on August 24, 2013</small>
                </h3>
                <p>This has to be the worst blog post I have ever read. It simply makes no sense. You start off by talking about space or something, then you randomly start babbling about cupcakes, and you end off with random fish names.</p>

                <h3>Start Bootstrap
                    <small>9:47 PM on August 24, 2013</small>
                </h3>
                <p>Don't listen to this guy, any blog with the categories 'dinosaurs, spaceships, fried foods, wild animals, alien abductions, business casual, robots, and fireworks' has true potential.</p>

            </div>
               <div id='map'></div>
                        <script>
        L.mapbox.accessToken = 'pk.eyJ1IjoicGx2aWNlbnRlIiwiYSI6IjM0Mjc3ZmQzMGE4Mjk1YWRlNTA2NmJkOTFiMWUzZDkzIn0.67d00u3kavXMy-6fb6CbDw';
// Create a map in the div #map
L.mapbox.map('map', 'plvicente.mk8i493d');
L.geoJson(geoJson, {
    pointToLayer: L.mapbox.marker.style,
});
            </script>
            
            <div class="col-lg-4">
                <div class="well">
                    <h4>Blog Search</h4>
                 
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div>
                    <!-- /input-group -->
                    
                </div>
                <!-- /well -->
                <div class="well">
                    <h4>Popular Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#dinosaurs">Dinosaurs</a>
                                </li>
                                <li><a href="#spaceships">Spaceships</a>
                                </li>
                                <li><a href="#fried-foods">Fried Foods</a>
                                </li>
                                <li><a href="#wild-animals">Wild Animals</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#alien-abductions">Alien Abductions</a>
                                </li>
                                <li><a href="#business-casual">Business Casual</a>
                                </li>
                                <li><a href="#robots">Robots</a>
                                </li>
                                <li><a href="#fireworks">Fireworks</a>
                                </li>
                            </ul>
                            
                        </div>
                        
                </div>
                <!-- /well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Bootstrap's default wells work great for side widgets! What is a widget anyways...?</p>
              </div>
                <div class="well">
                    <h5>Map div</h5>
                    
                </div>
                <!-- /well -->
            <div>
                
            </div>
            
              
        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Company 2013</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    
    <!-- Core JavaScript Files -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Custom Theme JavaScript -->

    <script src="js/grayscale.js"></script>

</body>
</html>