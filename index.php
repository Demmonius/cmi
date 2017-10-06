<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CMI Environnement</title>

    <!--    Stylesheet Files    -->
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/foundation.min.css" />
    <link rel="stylesheet" href="css/main.css" />

    <!--    Javascript files are placed before </body>    -->
  </head>

  <body>
    <!--  Start Hero Section  -->
    <section class="hero">
      <header>
        <div class="row">


          <nav class="top-bar" data-topbar role="navigation">

            <!--    Start Logo    -->
            <ul class="title-area">
              <li class="name">
                <a href="#" class="logo">
                  <h1>CMI<span class="tld"> Environnement</span></h1>
                </a>
              </li>
                <span class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></span>
              </li>
            </ul>
            <!--    End Logo    -->

            <!--    Start Navigation Menu    -->
            <section class="top-bar-section" id="mean_nav">
              <ul class="right">
                <li><a href="#services">services</a></li>
                <li><a href="#localisation">localisation</a></li>
                <li><a href="#contact">contact</a></li>
              </ul>
            </section>
            <!--    End Navigation Menu    -->

          </nav>
        </div>
      </header>

      <!--    Start Hero Caption    -->
      <section class="caption">
        <div class="row">
          <h1 class="mean_cap">Recyclage de cartouches d'encres</hA>
          <h2 class="sub_cap">Ventes de consommable informatique</h2>
          <a href="#services" class="btn_details"><span>More Details</span> <img src="img/btn_arrow.png" alt="" src="" class="arrow"></a>
        </div>
      </section>
      <!--    End Hero Caption    -->

    </section>
    <!--  End Hero Section  -->



    <!--  Start Services Section  -->
    <section class="services" id="services">

      <!--    Start Services Titles    -->
      <div class="row">
        <h1 class="mean_title">velit esse cillum dolore eu fugiat nulla</h1>
        <h2 class="sub_title">sunt culpa officia deserunt mollit anim id est laborum.</h2>
      </div>
      <!--    End Services Titles    -->

      <!--    Start Services List    -->
      <div class="row services_list">
        <div class="small-12 medium-3 large-3 columns">
          <img src="img/icon2.png" alt="" title="" class="serv_icon"/>
          <h2 class="title">Plan & Strategy</h2>
          <p>Ruis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </div>

        <div class="small-12 medium-3 large-3 columns">
          <img src="img/icon1.png" alt="" title="" class="serv_icon"/>
          <h2 class="title">UI/UX Design</h2>
          <p>Ruis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </div>

        <div class="small-12 medium-3 large-3 columns">
          <img src="img/icon3.png" alt="" title="" class="serv_icon"/>
          <h2 class="title">Test The App</h2>
          <p>Ruis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </div>

        <div class="small-12 medium-3 large-3 columns">
          <img src="img/icon4.png" alt="" title="" class="serv_icon"/>
          <h2 class="title">Launch The App</h2>
          <p>Ruis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </div>
      </div>
      <!--    End Services List    -->

      <!--    Start Button    -->
      <div class="btn_holder">
        <a href="#connect" class="btn_fancy">
          <div class="solid_layer"></div>
          <div class="border_layer"></div>
          <div class="text_layer">Contactez-nous !</div>
        </a>
      </div>
      <!--    End Button    -->

    </section>
    <!--  End Services Section  -->


    <!--  Start Quote Section  -->
    <!--
    <section class="quote">
        <blockquote>
          <p>Mauris semper <span class="strong">lacus nunc</span> ultrices imperdiet. </p>
          <hr/>
          <span class="author">john doe</span>
        </blockquote>
    </section>
      -->
    <!--  End Quote Section  -->

    <!--  Start Map Section  -->
    <section class="map" id="localisation">

      <!--    Start Map Shadow    -->
      <div class="shadow"></div>
      <!--    End Map Shadow    -->

      <div id="map_container"></div>

    </section>
    <!--  End Map Section  -->



    <!--  Start Footer Section  -->
    <footer>
      <!-- Container (Contact Section) -->
      <div class="contact" id="contact">
        <h1 class="title">Contactez-nous !</h1>
          <div class="col-lg-12">
            <form id="contactForm" method="post" name="sentMessage" action="send_email.php">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <p>Nom *:</p>
                    <input name="name" lass="form-control" id="name" type="text" placeholder="Nom" required data-validation-required-message="Merci de renseigner votre nom.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <p>E-mail *:</p>
                    <input name="email" class="form-control" id="email" type="email" placeholder="E-mail" required data-validation-required-message="Merci de renseigner votre adresse e-mail.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <p>Téléphone :</p>
                    <input name="telephone" class="form-control" id="phone" type="tel" placeholder="N° de téléphone">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <p>Objet :</p>
                    <input name="objet" class="form-control" id="Objet" type="text" placeholder="Objet">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <p>Votre message *:</p>
                    <textarea name="message" class="form-control" id="message" placeholder="Votre message..." required data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix form-group">*: champ obligatoire</div>
                <div class="col-lg-12 text-center">
                  <a href="#">
                    <button id="sendMessageButton" class="btn btn-xl" type="submit">Send Message</button>
                  </a>
              </div>
            </form>
          </div>
        </div>
    </footer>
    <!--  End Footer Section  -->

    <!--    Start Back To Top    -->
    <a href="#" class="btn_fancy" id="back_top">
      <div class="solid_layer"></div>
      <div class="border_layer"></div>
      <div class="text_layer"><img src="img/top_arrow.png" alt="Back to top" title="" class="top_arrow"></div>
    </a>
    <!--    End Back To Top    -->





    <!--    Javascript Files    -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/touchSwipe.min.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript" src="js/foundation.min.js"></script>
    <script type="text/javascript" src="js/foundation/foundation.topbar.js"></script>
    <script type="text/javascript" src="js/carouFredSel.js"></script>
    <script type="text/javascript" src="js/scrollTo.js"></script>
    <script type="text/javascript" src="js/map.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtWQ-tzE-ce0LpV8LeIB30IjMWWojxNOo&callback=initialize"
    async defer></script>


  </body>
</html>
