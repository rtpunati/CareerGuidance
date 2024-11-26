        <section class="footer-bottom-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-bottom">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                       <!-- <p>Copyright © <?= date('Y') ?> <span style="color: #29aafe; font-weight: bold;"><?= $details['business_name']; ?>.</span>. All Right Reserved.</p>-->
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

		
    </div>
    
    <a href="#" class="scrollup"><i class="fa fa-chevron-up"></i></a>

    <!-- JAVASCRIPT JS  --> 
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script> 
 
    <!-- BOOTSTRAP CORE JS --> 
    <script type="text/javascript" src="js/bootstrap.min.js"></script> 
    
    <!-- JQUERY SELECT --> 
    <script type="text/javascript" src="js/select2.min.js"></script> 
    
    <!-- MEGA MENU --> 
    <script type="text/javascript" src="js/mega_menu.min.js"></script> 
    
    <!-- JQUERY EASING --> 
    <script type="text/javascript" src="js/easing.js"></script> 
    
    <!-- JQUERY COUNTERUP --> 
    <script type="text/javascript" src="js/counterup.js"></script> 
    
    <!-- JQUERY WAYPOINT --> 
    <script type="text/javascript" src="js/waypoints.min.js"></script> 
    
    <!-- JQUERY REVEAL --> 
    <script type="text/javascript" src="js/footer-reveal.min.js"></script> 
    
    <!-- Owl Carousel --> 
    <script type="text/javascript" src="js/owl-carousel.js"></script> 
    
    <!-- CORE JS --> 
    <script type="text/javascript" src="js/custom.js"></script>
	
	 <!-- FOR THIS PAGE ONLY -->

        <script src="js/imagesloaded.js"></script>
        <script src="js/isotope.min.js"></script>
    
    <script>
	
		$(window).scroll(function() {

			var scrollTop = $(window).scrollTop();
			if (scrollTop > 300) {
				$(".mega-menu").addClass("navbar-fixed-top");
	
			} else if (scrollTop < 300) {
				$(".mega-menu").removeClass("navbar-fixed-top");
			}
	
		});

    </script> 
	
	 <script type="text/javascript">
            (function($) {
                "use strict";
                $('#posts-masonry').imagesLoaded(function() {
                    $('#posts-masonry').isotope({
                        layoutMode: 'masonry',
                        transitionDuration: '0.3s'
                    });
                });
            })(jQuery);
        </script>
	
	 <!-- jQuery REVOLUTION Slider  -->
        <script src="js/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="js/revolution/js/jquery.themepunch.revolution.min.js"></script>

        <!-- CORE JS -->
        <script type="text/javascript" src="js/custom.js"></script>
		
        <script type="text/javascript">
            /* ======= Revolution slider  Home Page Cleaning ======= */
            if ($('.slider-grid-3').length > 0) {
                jQuery(".slider-grid-3").revolution({
                    delay: 9000,
                    startwidth: 1170,
                    startheight: 620,
                    onHoverStop: "off",
                    hideThumbs: 1,
                    hideTimerBar: "on",
                    navigationType: "none",
                    navigationStyle: "preview3",
                    fullWidth: "off",
                    dottedOverlay: "custom",
                    fullScreen: "on",
                    fullScreenOffsetContainer: ""
                });
            }
        </script>

        <script type="text/javascript">
            (function($) {
                "use strict";
                $('#posts-masonry').imagesLoaded(function() {
                    $('#posts-masonry').isotope({
                        layoutMode: 'masonry',
                        transitionDuration: '0.3s'
                    });
                });
            })(jQuery);
        </script>
		
		
		
		<!-- FOR THIS PAGE ONLY THAT IS FOR WIZARD -->
        <script type="text/javascript" src="js/jquery.tagsinput.min.js"></script>
        <script type="text/javascript">
            $(".questions-category").select2({
                placeholder: "Select Post Category",
                allowClear: true,
                maximumSelectionLength: 3,
                /*width: "50%",*/
            });
            $('#tags').tagsInput({
                width: 'auto'
            });
        </script>
        <!-- CK-EDITOR -->
        <script src="../../../cdn.ckeditor.com/4.5.10/standard/ckeditor.js"></script>
        <script type="text/javascript">
            CKEDITOR.replace('ckeditor.html');
        </script>
        <!-- WIZARD -->
        <script src="js/jquery-wizard.min.js" type="text/javascript"></script>
        <script>
            $('#exampleBasic').wizard({
                onFinish: function() {
                    alert('finish');
                }
            });

       
        </script>
</div>
</body>
<!---<script>
var isNS = (navigator.appName == "Netscape") ? 1 : 0;
if(navigator.appName == "Netscape") document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);
function mischandler(){
return false;
}
function mousehandler(e){
var myevent = (isNS) ? e : event;
var eventbutton = (isNS) ? myevent.which : myevent.button;
if((eventbutton==2)||(eventbutton==3)) return false;
}
document.oncontextmenu = mischandler;
document.onmousedown = mousehandler;
document.onmouseup = mousehandler;
</script>-->
</html>