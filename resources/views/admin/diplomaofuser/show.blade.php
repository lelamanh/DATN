<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>CV</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('cv/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('cv/vendors/linericon/style.css') }}">
        <link rel="stylesheet" href="{{ asset('cv/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('cv/vendors/owl-carousel/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('cv/vendors/lightbox/simpleLightbox.css') }}">
        <link rel="stylesheet" href="{{ asset('cv/vendors/nice-select/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('cv/vendors/animate-css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('cv/vendors/popup/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('cv/vendors/flaticon/flaticon.css') }}">
        <!-- main css -->
        <link rel="stylesheet" href="{{ asset('cv/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('cv/css/responsive.css') }}">
        <style>
            @media print {
                #printPageButton {
                    display: none;
                }
            }
        </style>
    </head>
    <body style="background:#ebb842"> 
        <section class="home_banner_area" style="background:#ebb842">
            <button class="btn btn-primary" style="margin: 1rem;" onclick="window.print()" id="printPageButton">Print PDF</button>
           	<div class="container box_1620">
           		<div class="banner_inner d-flex align-items-center">
					<div class="banner_content">
						<div class="media">
							<div class="d-flex">
								<img src="{{asset($diplomaofuser[0]->image)}}" alt="{{$diplomaofuser[0]->name}}" width="500" height="500">
							</div>
							<div class="media-body">
								<div class="personal_text">
									<h3 style="font-size:30px;">H??? t??n: {{$diplomaofuser[0]->name}}</h3>
									<ul class="list basic_info">
										<li><a href="#"><i class="lnr lnr-calendar-full"></i> {{$diplomaofuser[0]->day_of_birth}}</a></li>
										<li><a href="#"><i class="lnr lnr-envelope"></i> {{$diplomaofuser[0]->email}}</a></li>
										<li><a href="#"><i class="lnr lnr-home"></i> {{$diplomaofuser[0]->address}}</a></li>
									</ul>
                                    <h3 class="mt-4 mb-4" style="font-size:30px;">V??n b???ng / Ch???ng ch???</h3>
                                    <ul class="list basic_info">
                                        @foreach ($diplomaofuser as $item)
                                            <li><a href="#">Lo???i: {{$item->type}}</a></li>
                                            <li><a href="#">T??n: {{$item->field}}</a></li>
                                            <li><a href="#">S??? hi???u: {{$item->user_accept}}</a></li>
                                            <li><a href="#">N??i c???p: {{$item->level_unit}}</a></li>
                                            <li><a href="#">X???p lo???i: {{$item->rating}}</a></li>
                                            <li><a href="#">Ng??y c???p: {{!is_null($item->date_issue) ? $item->date_issue : 'Ch??a c??'}}</a></li>
                                            <br>
                                        @endforeach
                                    </ul>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{ asset('cv/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('cv/js/popper.js') }}"></script>
        <script src="{{ asset('cv/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('cv/js/stellar.js') }}"></script>
        <script src="{{ asset('cv/vendors/lightbox/simpleLightbox.min.js') }}"></script>
        <script src="{{ asset('cv/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('cv/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('cv/vendors/isotope/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('cv/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('cv/vendors/popup/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('cv/js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('cv/vendors/counter-up/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('cv/vendors/counter-up/jquery.counterup.min.js')}}"></script>
        <script src="{{ asset('cv/js/mail-script.js') }}"></script>
        <script src="{{ asset('cv/js/theme.js') }}"></script>
    </body>
</html>