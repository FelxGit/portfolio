
<?php session_start();//must be before html?>
<!DOCTYPE html>
<html>
 <head>
     <title>Portfolio</title>
	 
     
	 <meta name="Author" content="creator">
     <meta name="Fel Entica" content="My Portfolio">
     <meta charset="UTF-8">
     
	 <!--viewport-->
     <meta name="viewport" content="width=device-width, initial-scale=1"/> 

	 <!--Bootstrap-->
     <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css"/>
     <script src="vendor/jquery/jquery.min.js"></script>
     <script defer src="vendor/bootstrap/js/bootstrap.min.js"></script>
	 
     <!-- Custom fonts for this template -->
     <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
     
     <!--aos-->
     <link href="AOS/aos.css" rel="stylesheet">
     <script defer src="AOS/aos.js"></script>
     
     <!--pace-->
     <script defer src="pace-1.0.2/pace.js"></script>
     <link href="pace-1.0.2/themes/blue/pace-theme-barber-shop.css" rel="stylesheet" />
     <script defer src="JS/pace.js"></script>

     <!--JQuery validation-->
     <script defer src="validate/jquery-validation-1.17.0/dist/jquery.validate.js"></script>

     <!-- custom js: prevent btn rom submit multiple-times -->
     <script defer type="text/javascript" src="js/custom/multiple-submit.js"></script>
       
       <!--CSS-->
  	 <link rel="stylesheet" href="CSS/style.css"/>
	
</head>
 <body>
    <nav class="navbar navbar-inverse navbar-expand-md navbar-dark" data-aos="fade-down" data-aos-duration="1000" data-aos-anchor="#page-header" data-aos-anchor-placement="top-top">
        <div class="container-fluid">            
          <a class="navbar-brand" href="#">Fel's</a>
            <div class="navbar-header">
          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myNavbar">
              <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#portfolio">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
          </ul>
        </div>
      </div>
    </nav>
    <header>
      <div class="container">
        <div id="intro">
            <div id="greeting">
                    <small style="display: block;" data-aos="fade-up" data-aos-offset="200" data-aos-duration="3000" id="forexp">Glad to make you here!</small>
            </div>
            <div id="page-image">
                 <img alt="profile" class="img-thumbnail" data-aos="zoom-in-up" data-aos-duration="1000" src="Images/profile.png"/>
                      <h2><b>Fel Reind Entica</b></h2>
                          <h3>Web Developer | Web Designer</h3>
            </div>   
        </div>
        <div id="services" data-aos="fade-up"
                           data-aos-duration="1500"
                           data-aos-anchor="#forexp"
                           data-aos-anchor-placement="top-top">
            <h2>This is what I can do for you.</h2>
            <div class="row">
               <div class="col-md-4">
                     <img src="Images/html5.png" alt="HTML5">
                      <p class="serve-header">HTML5</p>
                       <p>Hypertext Markup Language, a standardized system for tagging text files to achieve font, color, graphic, and hyperlink effects on World Wide Web pages. <a href="#">Wiki</a></p>
                </div>
                <div class="col-md-4">
                     <img src="Images/css3.png" alt="CSS3">
                      <p class="serve-header">CSS3</p>
                       <p>Cascading Style Sheets is a style sheet language used for describing the presentation of a document written in a markup language like HTML. CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript. <a href="#">Wiki</a></p>
                </div>
                <div class="col-md-4">
                     <img src="Images/js.png" alt="Javascript">
                     <p class="serve-header">JS</p>
                       <p>An object-oriented computer programming language commonly used to create interactive effects within web browsers. <a href="#">Wiki</a></p>
                </div>
            </div>
        </div>    
        <div id="services" data-aos="fade-up" data-aos-duration="1500">
            <div class="row">
               <div class="col-md-6">
                     <img src="Images/f-tools.png" alt="Web Tools">
                      <p class="serve-header">Git/Bootstrap/JQuery/AJAX</p>
                       <p>Bootstrap is a free and open-source CSS framework directed at responsive, mobile-first front-end web development.
                        jQuery - Ajax - AJAX is an acronym standing for Asynchronous JavaScript and XML and this technology helps us to load data from the server without a browser page refresh.<a href="#">Wiki</a></p>
                </div>
                <div class="col-md-6">
                     <img src="Images/rwd.jpg" alt="Devices">
                      <p class="serve-header">RESTful & Responsive Web Service</p>
                       <p>Responsive web design is an approach to web design that makes web pages render well on a variety of devices and window or screen sizes. A RESTful API is an application program interface that uses HTTP requests to GET, PUT, POST and DELETE data. An API for a website is code that allows two software programs to communicate with each other<a href="#">Wiki</a></p>
                </div>
            </div>
        </div>
        <div id="services">
            <div class="row">
               <div class="col-md-6" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="500">
                     <img src="Images/php-mysql.jpg" alt="PHP">
                      <p class="serve-header">PHP+MySQL</p>
                       <p>PHP is a fast and feature-rich open source scripting language used to develop Web Applications or Internet / Intranet Applications. MySQL is a powerful open source database server built based on a relational database management system (RDBMS) and is capable of handling a large concurrent database connection. <a href="#">Wiki</a></p>
                </div>
                <div class="col-md-6" data-aos="flip-right" data-aos-duration="1000">
                     <img src="Images/laravelvue.png" alt="Laravel">
                      <p class="serve-header">Laravel+Vue</p>
                       <p>Laravel currently owns the market in terms of back-end frameworks. This is where I prefer to code my projects. With Laravel, I can build you a much awesome application with user authentication including security and authorization. Vue is a modern front-end framework that can help anybody build a website or web app.<i class="fa fa-medal"></i></p>
                </div>
            </div>
        </div>

  <!-- achievement -->
        <div id="services">
            <h2>Achievement <i class="fa fa-trophy" id="fa-throphy"></i></h2>
            <div class="row">
               <div class="col-md">
                     <img src="Images/html5.png" alt="HTML5">
                      <p class="serve-header">300+ hrs Certification</p>
                       <p>I have this amount in terms of coding practice. </p>
                        <center>>> <a href="#">Link here</a>. << </center>
                        <center>Visit freecodecamp for profile achievements</center>
                </div>
            </div>
        </div>    
     </header>
     
    <div id="about">
        <h1>About</h1>
            <div data-aos="fade-right" data-aos-duration="1000">
                <p>Fel, knowledgeable in HTML,CSS, Javascript and PHP.</p>
            </div>
            <div data-aos="fade-left" data-aos-duration="1000">
                <p>I am capable of welding website that is friendly to other devices, use frameworks such as Bootstrap & Laravel, JQuery, or today's plugins. I've been working really hard to get much and much better than I currently am, and my goal is to get recognise as a well known web developer.</p>
            </div>
        ...
    </div>
    <div id="portfolio">
      <h1 id="portfolio-head" data-aos="fade-down" data-aos-duration="3000" data-anchor="#portfolio-image" data-anchor-placement="top-top">Portfolio</h1>


        <div id="portfolio-layout">
            <!--PROJECT 1-->
            <div class="portfolio-image">
                <h2>1</h2>
                <div  data-aos="flip-right" data-aos-delay="1000" data-aos-duration="500" data-aos-anchor="#portfolio-head">
                <a href="#" data-toggle="modal" data-target="#myModal"><img src="Images/encyclopedia.png"></a>
                </div>
              <!-- The Modal -->
              <div class="modal" id="myModal">
                <div class="modal-dialog">
                  <div class="modal-content"> 

                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class='col-12 modal-title'>Project 1</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="container">
                          <h1>Enyclopedia of Animals(with Bootstrap & JQuery)</h1>
                          <img src="Images/encyclopedia.png">
                          <br/><br/><br/>
                          <p>This project was made from a book Encyclopedia of Animals. All the images here are filtered free to use and modified. Only I did was weld the application with clean intent :) .</p>
                          <a href="https://felxgit.github.io/encyclopedia2"  target="_blank">Link here</a><br/>
                          <b><i>Date: </i></b>
                        </div>
                      <hr/>
                        <div class="container">
                          <h1>Encyclopedia of Animals(HTML,CSS and JS)</h1>
                          <img src="Images/ency2.png">
                          <br/><br/><br/>
                          <p>The only possible reason for this is to test my ability without bootstrap.</p>
                          <a href="https://felxgit.github.io/encyclopedia"  target="_blank">Link here</a>
                        </div>
                        
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-caret-up"></i></button>
                </div>

              </div>
            </div>
          </div>

            <!--PROJECT 2-->
          <div class="portfolio-image">
              <h2>2</h2>
                <a href="#" data-toggle="modal" data-target="#myModal2"><img src="Images/blog.png"></a>

              <!-- The Modal -->
              <div class="modal" id="myModal2">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Project 2</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">

                        <h1>Blog with Laravel</h1>
                        <a href="https://youtu.be/lJTkC9jclAQ"  target="_blank">Watch on Youtube</a><br/>
                        <img src="Images/blog.png"><br/>
                        <p>Both user and admin panel are free to use templates that's broke-apart, modified, server implemented and assembled in my style of work.</p>

                        <h1>Laravel+Vue</h1>
                        <a href="https://youtu.be/VOH0VQlBGRk"  target="_blank">Watch on Youtube</a><br/>
                        <img src="Images/ecommerce.png">
                        <p>Laravel+Vuejs single page application(spa) e-commerce website</p>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" id="modal-footer" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-caret-up"></i></button>
                </div>

              </div>
            </div>
          </div>

            <!--PROJECT 3-->
          <div class="portfolio-image">    
              <h2>3</h2>
                <a href="#" data-toggle="modal" data-target="#myModal3"><img src="Images/replica.png"></a>

              <!-- The Modal -->
              <div class="modal" id="myModal3">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Project 3</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <h1>Building Practices</h1>
                        <img src="Images/replica.png">
                        <p>This includes replicating other websites for educational purpose only.<br/><br/><br/>
                            <a href="https://felxgit.github.io/practica/"  target="_blank">Link here</a>
                        </p>

                        <p>Replica from Aakash Japish.<br/><br/><br/>
                            <a href="sample-pages/Aakash-Japish/site1.html"  target="_blank">Link here</a>
                        </p>

                        <p>PSPMMDIM(WebDev class)<br/><br/><br/>
                            <a href="sample-pages/crud-js/final2.html"  target="_blank">Link here</a>
                        </p>

                        <p>Calculator(WebDev class)<br/><br/><br/>
                            <a href="sample-pages/calculator/calculator.html" target="_blank">Link here</a>
                        </p>

                        <p>Unit Converter(WebDev class)<br/><br/><br/>
                            <a href="sample-pages/unit-converter/unitconverter.html" target="_blank">Link here</a>
                        </p>
                        <small><i>Note 2: I also like to apply DATES in here but I come to know copying files will alter them. This is due to several file migrations.</i></small>
                    </div>
                  </div>
                    
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-caret-up"></i></button>
                </div>

                </div>
              </div>
            </div>
        </div>
    </div>
    <div id="contact">   
        <h1 data-aos="fade-down" data-aos-duration="3000">Contact Me</h1>
        <form id="contactform" href="#error" name="contactform" method="post" action="mail/contact_me.php"> 
            <table>
              <tr>              
                 <td>
                     <div class="<?php 

                     if(!empty($_SESSION['message'])){ //check session
                      if($_SESSION['message'] === 'Message sent.'){ //check value 
                        echo 'alert alert-success';
                      }else{
                        echo 'alert alert-danger';
                      }
                     }
                      ?>"><b><iz><?php  //display value
                                  $message = !empty($_SESSION['message'])? $_SESSION['message'] : '';
                                  echo $message; 
                                  session_destroy()?></i></b>
                     </div>
                 </td>
              </tr>
              <tr>              
                 <td>
                     <input type="text" placeholder="Name" class="form-control" name="username" maxlength="50">
                     <hr/>
                 </td>
              </tr>
              <tr>
                 <td>
                     <input type="email" placeholder="Email" class="form-control" name="email" maxlength="80">
                     <hr/>
                 </td>
              </tr>
              <tr>
                 <td>
                     <textarea class="form-control" placeholder="Message" name="comments" maxlength="1000" cols="25" rows="6"></textarea>
                     <hr/>
                 </td>
              </tr>
              <tr>
                 <td style="text-align:center">
                     <input type="submit" href="#contact" name="submit" value="Submit" class="btn btn-primary">
                     <hr/>
                 </td>
              </tr>
            </table>
      </form>
    </div> 
     
    <!-- Footer -->
     <footer>
      <div class="container">
        <div id="location" class="row">
          <div class="col-md-3">
            <h4>Location</h4>
            <p>Philippines,
              <br>Mandaue City, Pakna-an, 6014</p>
          </div>
          <div id="accounts" class="col-md-6">
            <h4>Around the Web</h4>
            <ul>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social rounded-circle" targer="_blank" href="https://www.facebook.com/fel.entica">
                  <i class="fab fa-fw fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://plus.google.com/u/1/113575789893792394299" targer="_blank">
                  <i class="fab fa-fw fa-google-plus-g"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social rounded-circle" href="https://www.linkedin.com/in/fel-entica-a80934176/">
                  <i class="fab fa-fw fa-linkedin-in"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social rounded-circle" href="https://github.com/felxgit">
                  <i class="fab fa-fw fa-github"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social rounded-circle" href="#">
                  <i class="fab fa-fw fa-codepen"></i>
                </a>
              </li>
            </ul>
          </div>
          <div id="info" class="col-md-3">
            <h4>My E-mail</h4>
              <p><mark>entica.fel@gmail.com</mark></p>
            <h4>Phone</h4>
              <p><mark>+63 927 640 2050</mark></p>  
            </div>
        </div>
      </div>
    </footer>

    <!--aos initiazation-->
     <script defer src="JS/aos.js"></script>
    
    <!--validation.js-->
     <script defer src="JS/validate.js"></script>
 </body>
    
</html>
