<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<body>
  <div class="col-xs-12 intro">
    <div class="col-sm-8 col-xs-12">
      <h2 class="homepage-content">Farm Burger Wants You to Think about your Beef</h2>
      <a href="/" class="btn btn-orange">Find a Location Near You</a>
    </div>
  </div>


  <div class="row second-section text-center">
    <div class="cow-image">
      <img src="/wordpress/wp-content/themes/farm-burger/images/cows.png" alt="">
    </div>
    <div class="col-xs-12 text-center hack-box">
      <div class="col-xs-12 beef-container">
        <div class="col-md-offset-6 col-md-6 col-xs-12 beef-list">
          <h3>Genuine Grassfed Beef</h3>
          <div class="col-xs-12 beef-ul">
            <div class="col-sm-4 col-xs-12 text-center">
                <img src="/wordpress/wp-content/themes/farm-burger/images/grass-icon.png"><br>
                <p>Grassfed</p>
            </div>
            <div class="col-sm-4 col-xs-12 text-center">
                <img src="/wordpress/wp-content/themes/farm-burger/images/dry-aged-icon.png"><br>
                <p>Dry-aged</p>
            </div>
            <div class="col-sm-4 col-xs-12 text-center">
                <img src="/wordpress/wp-content/themes/farm-burger/images/ground-fresh-icon.png"><br>
                <p>Ground Fresh</p>
            </div>
          </div>
          <div class="info-content text-left">
            <p>Our cattle are fatteed and finished on sweet grass, never fed antibiotics or growth hormones, and always humanely raised and handled.</p>
            <a href="/" class="btn btn-orange">Learn More</a>
          </div>  
        </div>
      </div>
    </div>
  </div>

  <div class="col-xs-12 text-center culture-section">
    <h3>Our Culture</h3>
    <div class="culture-content col-xs-12 col-sm-offset-3 col-sm-6">
      <p>
        At Farm Buger, we feel it's important to support the local agricultural community while serving healthy, 
        fresh food. We source only the freshest, in-season ingredients from local farms near each of our locations. 
        Meet one of our partnered farmers to find out where your next meal came from.
      </p>
    </div>
  </div>
  
  <div class="local-seasonal-container col-xs-12">
    <div class="local-section text-center col-xs-12 col-sm-6">
      <div class='local-border'>
        <div class="local-content">
          <h3>Local</h3>
          <div class="local-content">
            <p>We work with local farmers near each of our locations.</p>
          </div>
          <a href="/">Graze On</a>
        </div>
      </div>
    </div>

    <div class="seasonal-section text-center col-xs-12 col-sm-6">
      <div class="local-border">
        <div class="seasonal-content">
          <h3>Seasonal</h3>
          <div class="seasonal-content">
            <p>Our menus change with the seasons, ensuring the freshest ingredients available.</p>
          </div>
          <a href="/">Dig in</a>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12 fresh-social-container">
      <div class="col-sm-6 col-xs-12 fresh-section text-center">
        <div class="fresh-content">
          <h3>Stay Fresh</h3>
          <div class="email-call-to-action col-xs-12 text-center">
            <p>Subscribers get exclusive deals, details on new openings and an inside look at Farm Burger's world.</p>
            <input class="" type="email" name="" placeholder="Email Address">
            <button class="btn btn-orange">Submit</button>
        </div>
        </div>
      </div>

      <div class="col-sm-6 col-xs-12 social-media-section text-center">
        <h3>Follow Us @FarmBurger</h3>
        <div class="col-xs-6">
          <img src="/wordpress/wp-content/themes/farm-burger/images/insta1.png" alt="">
          <img src="/wordpress/wp-content/themes/farm-burger/images/insta2.png" alt="">          
        </div>
        <div class="col-xs-6">
          <img src="/wordpress/wp-content/themes/farm-burger/images/insta4.png" alt="">
          <img src="/wordpress/wp-content/themes/farm-burger/images/insta3.png" alt="">          
        </div>
      </div>
    </div>
  </div>
</body>
