<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Victoria Lee Music</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <style>

    /* GLOBAL STYLES
    -------------------------------------------------- */
    /* Padding below the footer and lighter body text */

    body {
      padding-bottom: 40px;
      color: #5a5a5a;
    }



    /* CUSTOMIZE THE NAVBAR
    -------------------------------------------------- */

    /* Special class on .container surrounding .navbar, used for positioning it into place. */
    .navbar-wrapper {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      z-index: 10;
      margin-top: 20px;
      margin-bottom: -90px; /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
    }
    .navbar-wrapper .navbar {

    }

    /* Remove border and change up box shadow for more contrast */
    .navbar .navbar-inner {
      border: 0;
      -webkit-box-shadow: 0 2px 10px rgba(0,0,0,.25);
         -moz-box-shadow: 0 2px 10px rgba(0,0,0,.25);
              box-shadow: 0 2px 10px rgba(0,0,0,.25);
    }

    /* Downsize the brand/project name a bit */
    .navbar .brand {
      padding: 14px 20px 16px; /* Increase vertical padding to match navbar links */
      font-size: 16px;
      font-weight: bold;
      text-shadow: 0 -1px 0 rgba(0,0,0,.5);
    }

    /* Navbar links: increase padding for taller navbar */
    .navbar .nav > li > a {
      padding: 15px 20px;
    }

    /* Offset the responsive button for proper vertical alignment */
    .navbar .btn-navbar {
      margin-top: 10px;
    }



    /* CUSTOMIZE THE NAVBAR
    -------------------------------------------------- */

    /* Carousel base class */
    .carousel {
      margin-bottom: 60px;
    }

    .carousel .container {
      position: relative;
      z-index: 10;
    }

    .carousel-control {
      height: 80px;
      margin-top: 0;
      font-size: 120px;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
      background-color: transparent;
      border: 0;
    }

    .carousel .item {
      height: 500px;
      background: url(images/carousel_bg.png) 0px -40px no-repeat;
    }
    .carousel img {
      position: absolute;
      top: 0;
      left: 0;
      height: 500px;
      margin-left: 750px;
    }

    .carousel-caption {
      background-color: transparent;
      position: static;
      max-width: 550px;
      padding: 0 20px;
      margin-top: 200px;
    }
    .carousel-caption h1,
    .carousel-caption .lead {
      margin: 0;
      line-height: 1.25;
      color: #fff;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
    }
    .carousel-caption .btn {
      margin-top: 10px;
    }

    #ajax-spinner {
      display: none;
    }

    .form-result {
      display: none;      
    }

    .form-result-nojs {
      position: absolute;
      margin-top: 60px;
      margin-left: 30%;
      z-index: 99;
    }

    /* MARKETING CONTENT
    -------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
    .marketing .span4 {
      text-align: center;
    }
    .marketing h2 {
      font-weight: normal;
    }
    .marketing .span4 p {
      margin-left: 10px;
      margin-right: 10px;
    }


    /* Featurettes
    ------------------------- */

    .featurette-divider {
      margin: 80px 0; /* Space out the Bootstrap <hr> more */
    }
    .featurette {
      padding-top: 0px; /* Vertically center images part 1: add padding above and below text. */
      overflow: hidden; /* Vertically center images part 2: clear their floats. */
    }
    .featurette-image {
      margin-top: 0px; /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
      border: 7px solid #f5f5f5; 
      margin-bottom: 30px;
    }

    /* Give some space on the sides of the floated elements so text doesn't run right into it. */
    .featurette-image.pull-left {
      margin-right: 40px;
    }
    .featurette-image.pull-right {
      margin-left: 40px;
    }

    /* Thin out the marketing headings */
    .featurette-heading {
      font-size: 50px;
      font-weight: 300;
      line-height: 1;
      letter-spacing: -1px;
    }



    /* RESPONSIVE CSS
    -------------------------------------------------- */
    @media (max-width: 1024px) {  
      .carousel img {
        width: auto;
        height: 500px;
        margin-left: 500px;
      }
    }


    @media (max-width: 979px) {      

      .container.navbar-wrapper {
        margin-bottom: 0;
        width: auto;
      }
      .navbar-inner {
        border-radius: 0;
        margin: -20px 0;
      }

      .carousel .item {
        height: 500px;
      }
      .carousel img {
        width: auto;
        height: 500px;
        margin-left: 500px;
      }

    /*  .carousel img {
        position: absolute;
        top: 0;
        left: 0;
        height: 500px;
        margin-left: 750px;
      }*/


      .featurette {
        height: auto;
        padding: 0;
      }
      .featurette-image.pull-left,
      .featurette-image.pull-right {
        display: block;
        float: none;
        max-width: 40%;
        margin: 0 auto 20px;
      }
    }


    @media (max-width: 767px) {

      .featurette { padding: 0 10px;}

      .featurette-divider { margin: 40px 0;}

      .navbar-inner {
        margin: -20px;
      }

      .carousel {
        margin-left: -20px;
        margin-right: -20px;
      }
      .carousel .container {

      }
      .carousel .item {
        height: 300px;
      }
      .carousel img {        
        height: 300px;
      }
      .carousel-caption {
        width: 65%;
        padding: 0 70px;
        margin-top: 100px;
      }
      .carousel-caption h1 {
        font-size: 30px;
      }
      .carousel-caption .lead,
      .carousel-caption .btn {
        font-size: 18px;
      }

      .marketing .span4 + .span4 {
        margin-top: 40px;
      }

      .featurette-heading {
        font-size: 30px;
      }
      .featurette .lead {
        font-size: 18px;
        line-height: 1.5;
      }

    }
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


  </head>

  <body data-spy="scroll" data-target=".navbar">



    <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar-inverse navbar-fixed-top hidden-phone">
          <div class="navbar-inner">

            <div class="container">

              <a class="brand" href="#">&nbsp;Victoria Lee Music</a>

              <ul class="nav">                              
                <li><a href="#weddings">Weddings</a></li>
                <li><a href="#events">Events</a></li>
                <li><a href="#lessons">Lessons</a></li>                
                <li class="divider-vertical"></li>       
                <li><a href="#contact">Contact</a></li>            
              </ul>
            
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->

   <?php if (isset($_GET['q'])): ?>
      <style type="text/css">
      #form-result-nojs-<?php print $_GET['q'];?> { display: block; }
      </style>

      <div id="form-result-nojs-email" class="alert form-result form-result-nojs"> 
        <button type="button" class="close" data-dismiss="alert">&times;</button>           
        <strong>Is that email right?</strong> Its formatting doesn't seem to be correct.
      </div>

      <div id="form-result-nojs-incomplete" class="alert form-result form-result-nojs">    
        <button type="button" class="close" data-dismiss="alert">&times;</button>        
        <strong>Oops!</strong> Please be sure you've filled out all of the form's fields.
      </div>

      <div id="form-result-nojs-thanks" class="alert alert-success form-result form-result-nojs">     
        <button type="button" class="close" data-dismiss="alert">&times;</button>       
        Thank you very much for reaching out to me. I'll be in touch as soon as I can.
      </div>    
    <?php endif;?>


    <div class="featurette visible-phone" id="welcome-phone">
      <img class="featurette-image pull-left" src="images/carousel_victoria.jpg" alt="Victoria Lee">
      <h2 class="featurette-heading">Welcome.</h2>
      <p class="lead">I am a musician and teacher based in Charlottesville, Virginia. Whether through instruction or performance, I hope I can share my love of music with you.</p>
    </div>

    <hr class="featurette-divider">

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide hidden-phone">
      <div class="carousel-inner">
        <div class="item active">
          <img src="images/carousel_victoria.jpg" alt="Victoria Lee, at home with her harp">
          <div class="container">
            <div class="carousel-caption">
              <h1>Welcome.</h1>
              <p class="lead">I am a musician and teacher based in Charlottesville, Virginia. Whether through instruction or performance, I hope I can share my love of music with you.</p>              
            </div>
          </div>
        </div>
        <div class="item">
          <img src="images/carousel_piano.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Piano</h1>
              <p class="lead">I have been playing piano since the age of seven, when I fell in love with the instrument.</p>              
            </div>
          </div>
        </div>
        <div class="item">
          <img src="images/carousel_harp.jpg" alt="celtic harp">
          <div class="container">
            <div class="carousel-caption">
              <h1>Celtic Harp</h1>
              <p class="lead">My passion for the celtic harp is newer: I've been playing this lovely instrument for over a decade.</p>
            </div>
          </div>
        </div>        
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2>Weddings</h2>
          <p>It's always a tremendous joy for me to bring my repertoire of traditional and contemporary selections to couples' Big Days.</p>
          <p><a class="btn" href="#weddings">Find out more &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2>Lessons</h2>
          <p>Sharing my love of the piano and celtic harp is is a source of both satisfaction and pride. I can teach students as young as seven.</p>
          <p><a class="btn" href="#lessons">Get details &raquo;</a></p>          
        </div><!-- /.span4 -->
        <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2>Events</h2>
          <p>Whether a holiday party, workplace gathering or community celebration, I'm delighted to provide a performance or crowdpleasing ambience.</p>
          <p><a class="btn" href="#events">Hear more &raquo;</a></p>
        </div><!-- /.span4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="featurette" id="weddings">        
        <img class="featurette-image pull-right" src="images/rings.jpg" alt="wedding rings">
        
        <h2 class="featurette-heading">Weddings. <span class="muted">Something old, something new.</span></h2>
        
        <p class="lead">
          I strive to deliver a memorable musical experience that reflects a couple's tastes and ideas 
        </p>

        <p>
          I'll be pleased to work with you to select a program of music that is well-suited to the occasion and the attributes of my instruments. The piano and celtic harp are beautiful and adaptable wedding instruments. With amplification, my Salvi Egan harp is a perfect choice for outdoor weddings, with a clear, expansive sound. I'm also happy to perform with a flutist or other instrumentalist.
        </p>

        <p>
          My music can also be used for the reception or cocktail hour prior to dinner, for
          example. However, most wedding couples favor my playing for the gathering of the guests through the processionals, and then again for the post-ceremony recessional. This is what my standard rates are based upon.
        </p>

        <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F71053063&amp;color=768e48&amp;show_artwork=false"></iframe>
      </div>

      <hr class="featurette-divider">

      <div class="featurette" id="events">
        <img class="featurette-image pull-left" src="images/party.jpg" alt="a holiday party">
        <h2 class="featurette-heading">Events. <span class="muted">Celebrations aren't meant to be quiet.</span></h2>
        <p class="lead">The list of events enhanced by the Celtic harp and piano goes on and on. Holidays are always more festive with music!
        <p>

        <p>
          I’ve been called upon to play New Year’s Eve, Christmas, Valentine’s Day, St. Patrick’s Day, birthday celebrations, Spring garden parties, store openings, open houses, historical milestones, wine tastings, bed &amp; breakfast cocktail hours, socials and thematic events at retirement communities. And I'm sure my clients will continue to surprise me with new celebrations that music can help make memorable.
        </p>

        <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F71340016&amp;color=768e48&amp;auto_play=false&amp;show_artwork=false"></iframe>
        
      </div>

      <hr class="featurette-divider">

      <div class="featurette" id="lessons">
        <img class="featurette-image pull-right" src="images/music.jpg" alt="sheet music">
        <h2 class="featurette-heading">Lessons. <span class="muted">The gift of music can last a lifetime.</span></h2>
        
        <h2>Piano</h2>

        <p>The piano is my first love, and I can say without hesitation that it is the "Gateway Instrument": once a student has a firm foundation at the piano and can read music, the musical directions available to them are limitless. I prefer starting children at age 7, when most children are capable of paying attention for a 30-minute span without difficulty.
        Occasionally, however, I will take on a student younger than this, depending on the circumstances.</p>

        <p>Every student has a different style of learning. Those who study with me can count on patient instruction that adapts to their needs. Most of my students benefit
        from the Michael Aaron method of Grades 1 through 5, which gives them a broad, firm
        background, taking them from beginning through intermediate levels of skill. After that, we work on a more advanced repertoire while incorporating Hanon and Czerny studies.</p>

        <p>It is very important to acquire the correct hand position early on in one’s piano career; bad habits are hard to break. This is main reason I sincerely ask my students to make time for weekly lessons, and to take at least 15-30 minutes daily to practice.</p>

        <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F71053081&amp;color=768e48&amp;show_artwork=false"></iframe>

        <h2>Celtic Harp</h2>

        <p>The Celtic harp’s qualities are akin to taking strings out of the piano and plucking them directly: direct action of ones fingers on strings is different from the hammers of the piano intervening between you and the string! Again, proper hand position and finger utilization are
        essential to moving forward with your playing of Celtic harp music. It is a very accessible instrument to learn to play and to play well. I utilize the Sylvia Woods method, augmented by the Deborah Friou exercises, or an alternate curriculum if my student does not already read music.</p>

        <p>Again, I try to discover how best to reach the pedagogical heart of a student; by this I mean how best to teach this individual to acquire the most benefit within the shortest timeframe. It still takes time to form a Celtic harper, but commitment will yield a lovely skill with which you will surely delight countless others.</p>

        <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F71053067&amp;color=768e48&amp;show_artwork=false"></iframe>

      </div>

      <hr class="featurette-divider">

      <div class="row">
        <div class="span7">

          <div class="featurette" id="contact">        
            <h2 class="featurette-heading">Contact me.</h2>
            
            <p class="lead">I'll be happy to answer any questions you might have.</p>

            <form class="form-horizontal" action="contact.php" id="contact-form" method="post">
              <div class="control-group">
                <label class="control-label" for="inputName">Name</label>
                <div class="controls">
                  <input type="text" name="inputName" id="inputName" class="input-xlarge">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="inputEmail">Email</label>
                <div class="controls">
                  <input type="email" name="inputEmail" id="inputEmail" class="input-xlarge">
                </div>
              </div>          
              <div class="control-group">
                <label class="control-label" for="inputMessage">Your Message</label>
                <div class="controls">
                  <textarea id="inputMessage" name="inputMessage" class="input-xlarge" rows="5"></textarea>
                </div>
              </div>          
              <div class="control-group">
                <div class="controls">     
                  <input type="hidden" name="nojs" value="true" />         
                  <button type="submit" id="contact-send" class="btn">Send</button>
                  <img src="images/ajax-loader.gif" id="ajax-spinner" alt="spinner" />
                </div>
              </div>

              <div id="form-result-email" class="alert form-result">            
                <strong>Is that email right?</strong> Its formatting doesn't seem to be correct.
              </div>

              <div id="form-result-incomplete" class="alert form-result">            
                <strong>Oops!</strong> Please be sure you've filled out all of the form's fields.
              </div>

              <div id="form-result-thanks" class="alert alert-success form-result">            
                Thank you very much for reaching out to me. I'll be in touch as soon as I can.
              </div>

            </form>
            
          </div>
          
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2012 Victoria Lee &middot; Celtic Harp photo by <a href="http://www.flickr.com/photos/flowers-of-the-sea/7071089977/">Eric C Bryan</a></p>
      </footer>

    </div><!-- /.container -->



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script>
      !function ($) {
        $(function(){
          // carousel 
          $('#myCarousel').carousel();

          // contact form          
          $('#contact-form').submit(function(){
            $('.form-result').fadeOut();
            $('#ajax-spinner').show();
            $.post('contact.php', {
              inputName: $('#inputName').val(),
              inputEmail: $('#inputEmail').val(),
              inputMessage: $('#inputMessage').val(),              
            }, function(data) {              
              $('#ajax-spinner').hide();              
              $('#form-result-' + data.result).fadeIn();              
            });
            return false;
          });

        })
      }(window.jQuery)
    </script>
  </body>
</html>
