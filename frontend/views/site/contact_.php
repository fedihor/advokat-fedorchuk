    



<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1296.9969291959678!2d32.053671911117526!3d49.446833088296906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d14c839b874bcb%3A0xca2c8f3761247622!2z0LHRg9C70YzQstCw0YAg0KjQtdCy0YfQtdC90LrQsCwgMTk0LCDQp9C10YDQutCw0YHQuCwg0KfQtdGA0LrQsNGB0YzQutCwINC-0LHQu9Cw0YHRgtGM!5e0!3m2!1suk!2sua!4v1471814176939" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>










    <!-- Start Map -->
    <div id="map" data-position-latitude="23.858092" data-position-longitude="90.262181"></div>
    <script>
      (function($) {
        $.fn.CustomMap = function(options) {

          var posLatitude = $('#map').data('position-latitude'),
            posLongitude = $('#map').data('position-longitude');

          var settings = $.extend({
            home: {
              latitude: posLatitude,
              longitude: posLongitude
            },
            text: '<div class="map-popup"><h4>Web Development | ZoOm-Arts</h4><p>A web development blog for all your HTML5 and WordPress needs.</p></div>',
            icon_url: $('#map').data('marker-img'),
            zoom: 15
          }, options);

          var coords = new google.maps.LatLng(settings.home.latitude, settings.home.longitude);

          return this.each(function() {
            var element = $(this);

            var options = {
              zoom: settings.zoom,
              center: coords,
              mapTypeId: google.maps.MapTypeId.ROADMAP,
              mapTypeControl: false,
              scaleControl: false,
              streetViewControl: false,
              panControl: true,
              disableDefaultUI: true,
              zoomControlOptions: {
                style: google.maps.ZoomControlStyle.DEFAULT
              },
              overviewMapControl: true,
            };

            var map = new google.maps.Map(element[0], options);

            var icon = {
              url: settings.icon_url,
              origin: new google.maps.Point(0, 0)
            };

            var marker = new google.maps.Marker({
              position: coords,
              map: map,
              icon: icon,
              draggable: false
            });

            var info = new google.maps.InfoWindow({
              content: settings.text
            });

            google.maps.event.addListener(marker, 'click', function() {
              info.open(map, marker);
            });

            var styles = [{
              "featureType": "landscape",
              "stylers": [{
                "saturation": -100
              }, {
                "lightness": 65
              }, {
                "visibility": "on"
              }]
            }, {
              "featureType": "poi",
              "stylers": [{
                "saturation": -100
              }, {
                "lightness": 51
              }, {
                "visibility": "simplified"
              }]
            }, {
              "featureType": "road.highway",
              "stylers": [{
                "saturation": -100
              }, {
                "visibility": "simplified"
              }]
            }, {
              "featureType": "road.arterial",
              "stylers": [{
                "saturation": -100
              }, {
                "lightness": 30
              }, {
                "visibility": "on"
              }]
            }, {
              "featureType": "road.local",
              "stylers": [{
                "saturation": -100
              }, {
                "lightness": 40
              }, {
                "visibility": "on"
              }]
            }, {
              "featureType": "transit",
              "stylers": [{
                "saturation": -100
              }, {
                "visibility": "simplified"
              }]
            }, {
              "featureType": "administrative.province",
              "stylers": [{
                "visibility": "on"
              }]
            }, {
              "featureType": "water",
              "elementType": "labels",
              "stylers": [{
                "visibility": "on"
              }, {
                "lightness": -25
              }, {
                "saturation": -100
              }]
            }, {
              "featureType": "water",
              "elementType": "geometry",
              "stylers": [{
                "hue": "#ffff00"
              }, {
                "lightness": -25
              }, {
                "saturation": -97
              }]
            }];

            map.setOptions({
              styles: styles
            });
          });

        };
      }(jQuery));

      jQuery(document).ready(function() {
        jQuery('#map').CustomMap();
      });
    </script>
    <!-- End Map -->

    <!-- Start Content -->
    <div id="content">
      <div class="container">

        <div class="row">

          <div class="col-md-8">

            <!-- Classic Heading -->
            <h4 class="classic-title"><span>Contact Us</span>   </h4>

            <!-- Start Contact Form -->
            <form role="form" class="contact-form" id="contact-form" method="post">
              <div class="form-group">
                <div class="controls">
                  <input type="text" placeholder="Name" name="name">
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <input type="email" class="email" placeholder="Email" name="email">
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <input type="text" class="requiredField" placeholder="Subject" name="subject">
                </div>
              </div>

              <div class="form-group">

                <div class="controls">
                  <textarea rows="7" placeholder="Message" name="message"></textarea>
                </div>
              </div>
              <button type="submit" id="submit" class="btn-system btn-large">Send</button>
              <div id="success" style="color:#34495e;"></div>
            </form>
            <!-- End Contact Form -->

          </div>

          <div class="col-md-4">

            <!-- Classic Heading -->
            <h4 class="classic-title"><span>Information</span></h4>

            <!-- Some Info -->
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>

            <!-- Divider -->
            <div class="hr1" style="margin-bottom:10px;"></div>

            <!-- Info - Icons List -->
            <ul class="icons-list">
              <li><i class="fa fa-globe">  </i> <strong>Address:</strong> 1234 Street Name, Bangladesh.</li>
              <li><i class="fa fa-envelope-o"></i> <strong>Email:</strong> info@yourcompany.com</li>
              <li><i class="fa fa-mobile"></i> <strong>Phone:</strong> +12 345 678 001</li>
            </ul>

            <!-- Divider -->
            <div class="hr1" style="margin-bottom:15px;"></div>

            <!-- Classic Heading -->
            <h4 class="classic-title"><span>Working Hours</span></h4>

            <!-- Info - List -->
            <ul class="list-unstyled">
              <li><strong>Monday - Friday</strong> - 9am to 5pm</li>
              <li><strong>Saturday</strong> - 9am to 2pm</li>
              <li><strong>Sunday</strong> - Closed</li>
            </ul>

          </div>

        </div>

      </div>
    </div>
    <!-- End content -->


    

