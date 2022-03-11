 <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="" target="_blank">N</a> 2022</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./assets/vendor/global/global.min.js"></script>
	<script src="./assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="./assets/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="./assets/js/custom.min.js"></script>
	<script src="./assets/js/deznav-init.js"></script>
	<script src="./assets/vendor/owl-carousel/owl.carousel.js"></script>
	
	<!-- Apex Chart -->
	<script src="./assets/vendor/apexchart/apexchart.js"></script>
	
	<!-- Dashboard 1 -->
	<script src="./assets/js/dashboard/dashboard-1.js"></script>
	<script>
		function assignedDoctor()
		{
		
			/*  testimonial one function by = owl.carousel.js */
			jQuery('.assigned-doctor').owlCarousel({
				loop:false,
				margin:30,
				nav:true,
				autoplaySpeed: 3000,
				navSpeed: 3000,
				paginationSpeed: 3000,
				slideSpeed: 3000,
				smartSpeed: 3000,
				autoplay: false,
				dots: false,
				navText: ['<i class="fa fa-caret-left"></i>', '<i class="fa fa-caret-right"></i>'],
				responsive:{
					0:{
						items:1
					},
					576:{
						items:2
					},	
					767:{
						items:3
					},			
					991:{
						items:2
					},
					1200:{
						items:3
					},
					1600:{
						items:5
					}
				}
			})
		}
		
		jQuery(window).on('load',function(){
			setTimeout(function(){
				assignedDoctor();
			}, 1000); 
		});
		
	</script>
	
</body>
</html>