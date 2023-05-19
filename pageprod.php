
<?php
include "connection.php";
session_start();
   
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper {
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    
    <?php


	$id=$_GET['idprod'];
	$sql = "SELECT * FROM prodotto WHERE ID=$id";
	$result = $conn->query($sql);
	$dollaro='$';
	echo '<div class="row isotope-grid">';
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$imma=$row["image"];
			
	   echo '<div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
				<div class="overlay-modal1 js-hide-modal1"></div>

					<div class="container">
						<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
							

							<div class="row">
								<div class="col-md-6 col-lg-7 p-b-30">
									<div class="p-l-25 p-r-30 p-lr-0-lg">
										<div class="wrap-slick3 flex-sb flex-w">
											<div class="wrap-slick3-dots"></div>
												<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
													<div class="slick3 gallery-lb">
														
														<div class="wrap-pic-w pos-relative">
															<img src="'.$row["image"].'" alt="IMG-PRODUCT" width="300" height="400">

																
														</div>
													
													</div>
												</div>
											</div>
										</div>
					
										<div class="col-md-6 col-lg-5 p-b-30">
											<div class="p-r-50 p-t-5 p-lr-0-lg">
												<h4 class="mtext-105 cl2 js-name-detail p-b-14">
													'. $row["Nome"].'
												</h4>

												<span class="mtext-106 cl2">
													'.$dollaro.''. $row["prezzo"].'
												</span>

												<p class="stext-102 cl3 p-t-23">
													'. $row["descrizione"].'
												</p>
							
							<!--  -->
												<div class="p-t-33">
													
													
													<div class="flex-w flex-r-m p-b-10">
														<div class="size-204 flex-w flex-m respon6-next">
															<form action="aggiungiacart.php?IDogg='.$id.' &imma='.$imma.' &prezzo='.$row["prezzo"].' &nome='.$row["Nome"].' &IDUtente='.$_SESSION["ID"].'" method="post">

																<div class="wrap-num-product flex-w m-r-20 m-tb-10">
																	<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
																		<i class="fs-16 zmdi zmdi-minus"></i>
																	</div>
																	<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">

																	<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
																		<i class="fs-16 zmdi zmdi-plus"></i>
																	</div>
																</div>
											
																<input class="btn btn-success" type="submit"  value="Add to cart">
															</form><br>
														</div>
														<div>
															<form action="postcommento.php?IDogg='.$id.' &nome='.$row["Nome"].' &IDUtente='.$_SESSION["ID"].'" method="post">
																<input class="mtext-104 cl3 txt-center num-product" type="text" name="commento" size"30">
																<input class="btn btn-success" type="submit"  value="send">
															</form>';
															$sql1 = "SELECT * FROM commenti WHERE idprod=$id";															
															$result1 = $conn->query($sql1);
															if ($result1->num_rows > 0) {
																// output data of each row
																while($row1 = $result1->fetch_assoc()) {
																	$sql2 = 'SELECT * FROM utente WHERE ID = '.$row1["idutente"].'';															
																	$result2 = $conn->query($sql2);
																	if ($result2->num_rows > 0) {
																		// output data of each row
																		while($row2 = $result2->fetch_assoc()) {
																			echo '<div class="col-md-6 col-lg-5 p-b-30">
																				<div class="p-r-50 p-t-5 p-lr-0-lg">
																					<p class="stext-102 cl3 p-t-23">
																						'.$row2["username"].": ".$row1["contenutocomm"].'
																					</p><br>
																				</div>
																			</div>';
																		}}
																}}

														echo'</div>
													</div>	
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>';
		}	
	}
	
	$sql = "SELECT * FROM commenti WHERE idprod=$id";
	
	$result = $conn->query($sql);
	echo '<div class="row isotope-grid">';
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo '<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
						<p class="stext-102 cl3 p-t-23">
							'. $row["contenutocomm"].'
						</p><br>
					</div>
				</div>';
		}}
	
	?>
	
</div>
	<p class="stext-107 cl6 txt-center">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> &amp; distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

				</p>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/slick/slick.min.js"></script>
	<script src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	
	</script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
             
</body>

</html>

