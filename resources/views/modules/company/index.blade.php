<div id="company" class="col-md-12 col-sm-12 col-xs-12 clear-pads" ng-controller="CompanyController">
        <div class="light-blue">

                <div class="container ">
                        <div class="title center">Who we are</div>
                        <div class="center short-text">
                                MS-IDI has combined experience in software development
                                and IT support since 2009
                        </div>

                        <div class="col-md-12">
                                <div class="col-md-4">
                                        <div class="team">
                                                <div class="valery"></div>
                                        </div>

                                </div>
                                <div class="col-md-4">
                                        <div class="team">
                                                <div class="nicolay"></div>
                                        </div>
                                </div>
                                <div class="col-md-4">
                                        <div class="team">
                                                <div class="edgar"></div>
                                        </div>
                                </div>
                        </div>
                </div>


        </div>


        <div class="container">
                <div class="title center">Let's get in touch</div>
                <div class="col-md-offset-2 col-md-8 contact-info">
                        <div class="col-md-6 right">
                                <div class="pin">SIA MS-IDI Maskavas iela 22,</div>
                                <div class="pin2">Rēzekne, LV-4604, Latvija</div>
                        </div>
                        <div class="col-md-6">
                                <div class="email">Email: info@ms-idi.eu</div>
                                <div class="phone">Telephone: +371 278257 77</div>
                                <div class="fax">Fax: +371 64605888</div>
                        </div>
                </div>

                <div class="col-md-12">
                        <form name="contactForm" id="contact-form" ng-submit="send()"  novalidate ng-init="setFormScope( this )">
                                <div class="col-md-4 contact-form-input form-group">
                                        <input class="form-control"
                                               id="cfsender"
                                               name="cfsender"
                                               ng-blur="blurByKey( 'cfsender' )"
                                               required
                                               ng-model="cfsender"
                                               type="text"
                                               placeholder="Your name">
                                        <div ng-show="showErrorByKey( 'cfsender' )">Required</div>
                                </div>

                                <div class="col-md-4 contact-form-input form-group">
                                        <input class="form-control"
                                               id="cfemail"
                                               name="cfemail"
                                               required
                                               type="text"
                                               ng-model="cfemail"
                                               placeholder="Email address">
                                </div>
                                <div class="col-md-4 contact-form-input form-group">
                                        <input class="form-control"
                                               type="text"
                                               id="cfsubject"
                                               name="cfsubject"
                                               required
                                               ng-model="cfsubject"
                                               placeholder="Subject">
                                </div>

                                <div class="col-md-12 contact-form-input form-group">
                                        <textarea rows="10" class="form-control"
                                                  id="cftext"
                                                  name="cftext"
                                                  required
                                                  ng-model="cftext"
                                                  placeholder="Message">
                                        </textarea>
                                </div>
                                <button class="form-control send" type="submit" value="">
                                        <div class="more-txt">Send message</div>
                                        <div class="more-btn circle"></div>
                                        <div class="more-btn-pressed circle"></div>
                                        <div class="more-btn-hover circle"></div>
                                </button>
                        </form>
                </div>
        </div>

        <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'>

        </script>
        <div style='overflow:hidden;height:405px;width:100%;'>
                <div id='gmap_canvas' style='height:405px;width:100%;'></div>


                <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
        </div>

        <script type='text/javascript'>
                function init_map(){
                        var myOptions = {
                                zoom:14,
                                center:new google.maps.LatLng(56.526248,27.357412599999975),
                                mapTypeId: google.maps.MapTypeId.ROADMAP};
                                map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                                marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(56.526248,27.357412599999975)});
                                infowindow = new google.maps.InfoWindow({content:'<strong> </strong><br>Rēzekne, Maskavas 22<br>'});
                                google.maps.event.addListener(marker, 'click', function(){
                                        infowindow.open(map,marker);
                                });
                                //infowindow.open(map,marker);
                }
                google.maps.event.addDomListener(window, 'load', init_map);

        </script>



        <div class="col-md-12">Map</div>
</div>
