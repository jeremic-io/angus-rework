<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Angus Termite and Pest Control</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <header class="main-header">
    <div class="container">
      <div class="logo-container pull-left">
        <img src="images/logo.png" class="logo img img-responsive" alt="Logo">
      </div>
      <div class="info-social pull-right hidden-xs">
        <div class="info pull-left">
          6330 SW Gator Trail<br>
          Palm City, FL 34990<br>
          (772) 223-9891
        </div>
        <div class="social pull-right">
          <a href="#"><img src="images/fb.png" alt="Facebook"></a>
          <a href="#"><img src="images/twitter.png" alt="Facebook"></a>
        </div>
      </div>
    </div>
  </header>


  <div class="intro">
      <div class="intro-text">
        <h1 class="text-center">Welcome to Angus Pest Control</h1>
        <p>
          Angus Pest Control offers a variety of professional pest control services including the following: ant control, rodent control, termite control, automated fly misting, mosquito control, and fertilization for both residential and commercial customers.
        </p>
        <button class="btn btn-default btn-new" data-toggle="modal" data-target=".about-modal">Read more</button>
      </div>
  </div>

  <!-- Contact for small screens -->
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="info-social-small visible-xs">
          <div class="info pull-left">
            6330 SW Gator Trail<br>
            Palm City, FL 34990<br>
            (772) 223-9891
          </div>
          <div class="social pull-right">
            <a href="#"><img src="images/fb.png" alt="Facebook"></a>
            <a href="#"><img src="images/twitter.png" alt="Facebook"></a>
          </div>
          <span class="clearfix"></span>
        </div>
      </div>
    </div>
  </div>

  <!-- Our Services -->
  <section class="module">
    <div class="container">
      <h2 class="module-h2 text-center">Our Services</h2>
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
          <img src="images/pest_control.jpg" class="img img-responsive" alt="Pest Control">
          <button class="btn btn-primary btn-new" data-toggle="modal" data-target=".pest-control-modal">Pest Control</button>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
          <img src="images/fire_ant_control.jpg" class="img img-responsive" alt="Fire Ant Control">
          <button class="btn btn-primary btn-new" data-toggle="modal" data-target=".fire-ant-modal">Fire Ant Control</button>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
          <img src="images/rodent_control.jpg" class="img img-responsive" alt="Rodent Control">
          <button class="btn btn-primary btn-new" data-toggle="modal" data-target=".rodent-modal">Rodent Control</button>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
          <img src="images/termite_control.jpg" class="img img-responsive" alt="Termite Control">
          <button class="btn btn-primary btn-new" data-toggle="modal" data-target=".termite-modal">Termite Control</button>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
          <img src="images/mosqitecontrol.jpg" class="img img-responsive" alt="Mosqite Control">
          <button class="btn btn-primary btn-new" data-toggle="modal" data-target=".mosqite-modal">Mosqite Control</button>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
          <img src="images/fertilization.jpg" class="img img-responsive" alt="Fertilization">
          <button class="btn btn-primary btn-new" data-toggle="modal" data-target=".fertilization-modal">Fertilization</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Modals -->
  <!-- Pest Control Modal -->
  <div class="modal fade pest-control-modal custom" tabindex="-1" role="dialog" aria-labelledby="Pest Control">
    <div class="modal-dialog modal-lg custom-modal-dialog" role="document">
      <div class="modal-content">
        <h3 class="modal-h3 text-center">Pest Control</h3>
        <div class="modal-body">
            <div class="row">
              <div class="col-lg-8 col-md-8 col-sm-8">
                <h4 class="modal-h4">Quarterly Service</h4>
                <p>Our Pest Control Treatment is designed with our customers in mind. Our quarterly service is our signature service that includes:</p>
                <ul>
                  <li>Pest treatment for the perimeter of your home up to 10 feet</li>
                  <li>Spider web removal for home exterior</li>
                  <li>Crack & crevice treatment home exterior doors and windows</li>
                  <li>Interior crack & crevice treatment for interior home doors and windows</li>
                  <li>24 hour response time</li>
                </ul>
                <h4 class="modal-h4">Bi-Monthly Outdoor Service</h4>
                <p>We also offer pest control service that occurs on a bi-monthly period (every other month) for outside service. This service is designed for the customer for whom it may be difficult to be home at the time of service. Our Bi-Monthly Outdoor Service includes:</p>
                <ul>
                  <li>Pest treatment for the perimeter of your home up to 10 feet</li>
                  <li>Spider web removal around the exterior</li>
                  <li>Crack & crevice treatment home exterior doors and windows</li>
                  <li>24 hour response time</li>
                </ul>
                <h4 class="modal-h4">No contracts</h4>
                <p>With our no contract policy, you will continue using our services out of choice rather than obligation.</p>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <img src="images/photo-pest-infected-plant.jpg" class="img img-responsive img-full-width" alt="Pest Infected Plant">
                <img src="images/photo-family.jpg" class="img img-responsive img-full-width" alt="Family">
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary btn-new" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Fire Ant Control Modal -->
  <div class="modal fade fire-ant-modal custom" tabindex="-2" role="dialog" aria-labelledby="Fire Ant Control">
    <div class="modal-dialog modal-lg custom-modal-dialog" role="document">
      <div class="modal-content">
        <h3 class="modal-h3 text-center">Fire Ant Control</h3>
        <div class="modal-body">
            <div class="row">
              <div class="col-lg-8 col-md-8 col-sm-8">
                <p>
                  <strong>We offer a several methods of fire ant treatment in order to meet your specific need:</strong>
                </p>
                <ul>
                  <li>Top Choice is a fire ant pesticide which covers the entire lawn. Top Choice is perhaps the best product for fire ant treatment on the market. After just one treatment with Top Choice, you can expect your lawn to be fire ant free for an entire year. Top Choice is a pesticide options that is higher in price that is generally recommended for customers with a larger budget or smaller area requiring treatment.</li>
                  <li>Our fire ant control service involving the use of fire ant bait is a great choice for those with larger properties in need of fire ant control. At the cost of $40.00 an acre, this fire ant program comes at an affordable price for any budget. Fire ant bait must be applied twice a year and require approximately 4 months for noticeable results. This is a great solution for horse farms.</li>
                </ul>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <img src="images/photo-fire-ants.jpg" class="img img-responsive img-full-width" alt="Fire Ants">
                <img src="images/photo-family-yard.jpg" class="img img-responsive img-full-width" alt="Family">
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary btn-new" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Rodent Control Modal -->
  <div class="modal fade rodent-modal custom" tabindex="-3" role="dialog" aria-labelledby="Rodent Control">
    <div class="modal-dialog modal-lg custom-modal-dialog" role="document">
      <div class="modal-content">
        <h3 class="modal-h3 text-center">Rodent Control</h3>
        <div class="modal-body">
            <div class="row">
              <div class="col-lg-8 col-md-8 col-sm-8">
                <p>
                    Rodents can become a big problem for homeowners, particularly when they find their way into the interior of your home. Angus Pest Control offers several strategies for rodent control. In most cases rodents find a way into your attic through holes in the eaves. In other cases, mice or rats can climb through the pipes of your home.
                </p>
                <p>
                  Our first step is to seal all openings that could serve as entry ways for rodents. Once we effectively sealed your home, we place traps in attics to catch any rodents that may have already entered your home. We then place bait stations on the outside the home to help eliminate the population of rodents around your property.
                </p>
                <p>
                  It is usually necessary for us to check traps three to four times in order to verify that rodents have been eliminated. Because rodents can gain new access to your home by chewing holes through the eaves, ongoing maintenance through the use of bait boxes is an essential for effective rodent control.
                </p>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <img src="images/photo-mice.jpg" class="img img-responsive img-full-width" alt="Mice">
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary btn-new" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Termite Control Modal -->
  <div class="modal fade termite-modal custom" tabindex="-4" role="dialog" aria-labelledby="Termite Control">
    <div class="modal-dialog modal-lg custom-modal-dialog" role="document">
      <div class="modal-content">
        <h3 class="modal-h3 text-center">Termite Control</h3>
        <div class="modal-body">
            <div class="row">
              <div class="col-lg-8 col-md-8 col-sm-8">
                <p>
                  Subterranean termites can cause devastating damage to your home in a short amount of time. For this reason, regular inspection of your home is crucial to the preservation of your home. In the case that you already have termites, we can eliminate termites from your home. Of course preventing the access of termites to your home before damage can occur is recommended. Unfortunately, many people believe the misnomer that termite problems do not apply to block homes. However, termites can in some cases gain access to a block home as quickly as a frame home. Block homes, with their inner wood frame structures, also pose as an attraction for termites.
                </p>
                <p>
                  We exclusively use Termidor termiticide as the pesticide of choice for termite prevention. Termidor is proven to be the most effective and the longest residual termiticide on the market today. We are so confident in our termite control services that we offer a $500,000 dollar repair guarantee on your home in the case that termites do appear. If termites cause any damage to your property upon using our termite control service, Angus Pest Control will pay for the repairs of your home while offering ongoing treatment at no charge. Early detection is the key to the damage control so call our office for a free inspection.
                </p>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <img src="images/termite_control.jpg" class="img img-responsive img-full-width" alt="Termite 1">
                <img src="images/photo-termite.jpg" class="img img-responsive img-full-width" alt="Termite 2">
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary btn-new" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Mosqite Control Modal -->
  <div class="modal fade mosqite-modal custom" tabindex="-5" role="dialog" aria-labelledby="Mosqite Control">
    <div class="modal-dialog modal-lg custom-modal-dialog" role="document">
      <div class="modal-content">
        <h3 class="modal-h3 text-center">Mosquite Control</h3>
        <div class="modal-body">
            <div class="row">
              <div class="col-lg-8 col-md-8 col-sm-8">
                <h4 class="modal-h4">Mosquite Control Program</h4>
                <p>
                  Our mosquito control program starts with a free inspection of your property to find all the breeding and harboring sites. Then with the use of insect growth regulators in standing water and fogging shaded low ventilated areas we can maintain an area of reduced population and you can go back to enjoying your yard again.
                  <ul>
                    <li>Our most popular program is a monthly treatment that controls mosquitos all season long.</li>
                    <li>We also offer a one time treatment for outdoor events.</li>
                  </ul>
                </p>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <img src="images/mosquit2.jpg" class="img img-responsive img-full-width" alt="mosquit2">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-8 col-md-8 col-sm-8">
                <h4 class="modal-h4">Fly Control Misting System</h4>
                <p>
                  We install and maintain state of the art misting systems. Although we primarily install fly misting systems for horse barns, we also install these same systems in backyards, patios and swimming pools areas for mosquito-free and fly-free zones. Enjoy your back yard once again!
                </p>
                <p>
                  Our system includes a 50 gallon drum containing a solution that effectively eliminates flies and mosquitoes. Results can last anywhere from two to four months depending the number of nozzles installed for your particular area. The system itself is completely digital, allowing us to program the times and duration of the mists according to your needs.
                </p>
                <p>
                  We take pride in the professional installation of the nozzles. Unlike some companies who will drape the tubing over the barn rafters, we take the time to secure them in a way that is inconspicuous. No more hanging lines!
                </p>
                <p>
                  Our system also comes with your personal remote control so that you have ultimate control over when and how long your property is sprayed. This particular system is the perfect solution during the spontaneous arrival of visitors, for example.
                </p>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <img src="images/photo-horse.jpg" class="img img-responsive img-full-width" alt="photo-horse">
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary btn-new" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Control Modal -->
  <div class="modal fade fertilization-modal custom" tabindex="-6" role="dialog" aria-labelledby="Fertilization Control">
    <div class="modal-dialog modal-lg custom-modal-dialog" role="document">
      <div class="modal-content">
        <h3 class="modal-h3 text-center">Fertilization</h3>
        <div class="modal-body">
            <div class="row">
              <div class="col-lg-8 col-md-8 col-sm-8">
                <h4 class="modal-h4">Landscape Program</h4>
                <p>
                  Angus Termite and Pest Control’s Landscape Program ensures your landscape stays strong and healthy: Spring, Summer, Fall and Winter. Our Program includes:
                  <ul>
                    <li>Fertilization</li>
                    <li>Weed Control in Lawns</li>
                    <li>Pest Control for Lawns, Trees and Shrubs</li>
                    <li>Recommendations on Watering, Mowing, and Pruning</li>
                  </ul>
                </p>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <img src="images/fertilization.jpg" class="img img-responsive img-full-width" alt="Fertilization">
                <img src="images/mosquit2.jpg" class="img img-responsive img-full-width" alt="Mosquit2">
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary btn-new" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- About Us Modal -->
  <div class="modal fade about-modal custom" tabindex="-7" role="dialog" aria-labelledby="About Us">
    <div class="modal-dialog modal-lg custom-modal-dialog" role="document">
      <div class="modal-content">
        <h3 class="modal-h3 text-center">About Us</h3>
        <div class="modal-body">
            <div class="row">
              <div class="col-lg-8 col-md-8 col-sm-8">
                <p>
                  Since 2001, Angus Pest Control has serviced the pest control needs of Palm City, Stuart, Port St Lucie, Hobe Sound, Tequesta, and Jupiter, FL. We take pride in being a local, family owned business. We are licensed and insured for your peace of mind.
                </p>
                <p>
                  No matter where you live on the Treasure Coast we can meet your pest control needs with speedy response, friendly staff, and effective pest control techniques. When you chose Angus Pest Control, you receive great service at an affordable price.
                </p>
                <p>
                  If you have any questions, please do not hesitate to call me personally (Shawn Mosley) and I will work to address any and all concerns to your satisfaction. At Angus Pest Control, we value our relationships with each and every customer.
                </p>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <img src="images/manicured-lawn.jpg" class="img img-responsive img-full-width" alt="manicured-lawn">
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary btn-new" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>







  <!-- JavaScript -->
  <script src="js/jquery-1.12.4.js"></script>
  <script src="js/bootstrap.min.js"></script>


</body>
</html>
