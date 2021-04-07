 <!-- jQuery first, then Tether, then Bootstrap JS. -->
 <script src="{{asset('front-end/js/plugins/plugins.js')}}"></script> 
        <script src="{{asset('front-end/js/restaurant.custom.js')}}"></script>

        <!--revolution slider-->
        <script type="text/javascript" src="{{asset('front-end/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front-end/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front-end/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front-end/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front-end/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front-end/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front-end/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
        <script>
            jQuery(document).ready(function () {
                jQuery("#slider1").revolution({
                    sliderType: "standard",
                    jsFileLocation: "../revolution/js/",
                    sliderLayout: "fullscreen",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        arrows: {enable: true}
                    },
                    parallax: {
                        type: "on",
                        levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80, 85],
                        origo: "enterpoint",
                        speed: 400,
                        bgparallax: "on",
                        disable_onmobile: "off"
                    },
                    gridwidth: 1140,
                    gridheight: 600
                });
            });
        </script>
        <!--google map-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMwVpUj3-oHHW8N21819BhKttOga2Rj2s"></script>
        <script src="{{asset('front-end/js/jquery.gmap.min.js')}}"></script> 
        <script>
            // Marker Map
            $(document).ready(function () {
                map = new GMaps({
                    scrollwheel: false,
                    el: '#markermap',
                    lat: 26.981942,
                    lng: 75.684486

                });
                map.addMarker({
                    lat: 26.981942,
                    lng: 75.684486,
                    title: 'Marker with InfoWindow',
                    infoWindow: {
                        content: '<h4>Assan Restaurant</h4><p>Classic foods & drinks</p>'
                    }
                });
            });
        </script> 
        <!--sky form plugin js-->
        <script type="text/javascript" src="{{asset('front-end/smart-form/contact-recaptcha/js/jquery.form.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front-end/smart-form/contact-recaptcha/js/jquery.validate.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front-end/smart-form/contact-recaptcha/js/additional-methods.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front-end/smart-form/contact-recaptcha/js/smart-form.js')}}"></script> 
        <script src='https://www.google.com/recaptcha/api.js'></script>