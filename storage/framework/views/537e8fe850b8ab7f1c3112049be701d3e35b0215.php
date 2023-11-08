    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js" ></script>

    <!----OWl Carousal----->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script src="frontAssets/vendor/wow/wow.min.js"></script>

    <script src="frontAssets/js/theme.js"></script>



    <!-- Custom Javascript -->
    <script>
        $(document).ready(function () {
            $(".owl-places").owlCarousel({
                items:1,
                loop:true,
                nav:true,
                dots:true,
                animateOut: 'fadeOut',
                autoplay:true,
                autoplaySpeed:1000,
                smartSpeed:1500,
                autoplayHoverPause:true
            });
        });
    </script>

    <script>
        $('.owl-bd').owlCarousel({
            loop:true,
            nav:true,
            dots:false,
            animateOut:'fadeOut',
            autoplay:true,
            autoplaySpeed:1000,
            smartSpeed:1500,
            margin:10,
            autoplayHoverPause:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        });


    </script>



    <script type="text/javascript">

            $('#datepicker').datetimepicker({
                timepicker: true,
                datepicker: true,
                format : 'Y-m-d',
                value: '21-02-1',
                weeks : true,
            });

		/*------Sticky Navbar--------*/
		$(document).ready(function(){
			$(window).scroll(function(){

				if(this.scrollY > 1){
					$('.navbar').addClass("sticky");
				}
				else{
					$('.navbar').removeClass("sticky");
				}
			})
		});

		/*-------End sticky Navbar--------*/

		var typed = new Typed(".typing",{
			strings : ["Web Designer." , "Web Developer." , "Freelancer."],
			typeSpeed : 70,
			backSpeed : 50,
			loop:true
		});


    </script>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/WorldTravel/resources/views/frontend/script.blade.php ENDPATH**/ ?>