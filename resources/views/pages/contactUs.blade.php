@extends('candidate.layouts.master')
@section('content')
<!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb bgc-f0 pt30 pb30" aria-label="breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h4 class="breadcrumb_title float-left">Contact Us</h4>
					<ol class="breadcrumb float-right">
					    <li class="breadcrumb-item"><a href="#">Home</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
					</ol>
				</div>
			</div>
		</div>
    </section>
    
<!-- How It's Work -->
	<section class="our-contact bgc-fa pt0">
		<div class="container-fluid p0">
			<div class="row">
				<div class="col-lg-12">
				    <div class="h800 w100" id="map-canvas"></div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row contact_form_grid">
				<div class="col-lg-5 contact_details">
					<h4>Contact Information</h4>
					<p>Ducimus qui blanditiis praesentium voluptatum delenitiatque corrupti quos...</p>
					<ul class="address_list">
						<li><a><span class="flaticon-marker"></span> Careerdoctor Inc. 555 Madison Avenue, Suite F-2 Manhattan, New York 10282</a></li>
						<li><a><span class="flaticon-open-envelope-with-letter"></span> Email: info@careerdoctor.com</a></li>
						<li><a><span class="flaticon-call"></span> Call: 0934 343 343</a></li>
						<li><a><span class="flaticon-fax"></span> Fax: 0934 343 343</a></li>
					</ul>
					<ul class="social_list">
						<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
				<div class="col-lg-7 form_grid">
					<h4 class="mb25">We want to hear form you!</h4>
		            <form class="contact_form" id="contact_form" name="contact_form" action="#" method="post" novalidate="novalidate">
						<div class="row">
			                <div class="col-sm-6">
			                    <div class="form-group">
									<input id="form_name" name="form_name" class="form-control" placeholder="Your Name" required="required" type="text">
								</div>
			                </div>
			                <div class="col-sm-6">
			                    <div class="form-group">
			                    	<input id="form_email" name="form_email" class="form-control required email" placeholder="Email Address" required="required" type="email">
			                    </div>
			                </div>
			                <div class="col-sm-12">
			                    <div class="form-group">
				                    <input id="form_subject" name="form_subject" class="form-control required" placeholder="Subject" required="required" type="text">
								</div>
			                </div>
			                <div class="col-sm-12">
	                            <div class="form-group">
	                                <textarea id="form_message" name="form_message" class="form-control required" placeholder="Message" rows="8" required="required"></textarea>
	                            </div>
			                    <div class="form-group text-right">
				                    <button type="submit" class="btn btn-lg btn-thm">Submit</button>
			                    </div>
			                </div>
		                </div>
		            </form>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-lg-4 prpl5">
					<div class="icon_box_hiw home3 contact_page">
						<div class="icon"><div class="list_tag float-right"></div><span class="flaticon-career"></span></div>
						<div class="details">
							<h4>Want to join us?</h4>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4 prpl5 mt20-xxsd">
					<div class="icon_box_hiw home3 contact_page">
						<div class="icon middle"><div class="list_tag float-right"></div><span class="flaticon-newspaper"></span></div>
						<div class="details">
							<h4>Read our latest news</h4>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4 prpl5 mt20-xxsd">
					<div class="icon_box_hiw home3 contact_page">
						<div class="icon"><div class="list_tag float-right"></div><span class="flaticon-application"></span></div>
						<div class="details">
							<h4>Have questions?</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>
@section('myJs')
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyABqK-5ngi3F1hrEsk7-mCcBPsjHM5_Gj0"></script>
<script type="text/javascript" src="{{asset('candidate_company/assets/js/googlemaps2.js')}}"></script>
<script>
(function(window, $) {  
  var $mapster = $('#map-canvas').mapster(Mapster.MAP_OPTIONS);  
  // if (navigator.geolocation) {
  //   navigator.geolocation.getCurrentPosition(function(position) {
  //     $mapster.mapster('addMarker', {
  //       lat: position.coords.latitude,
  //       lng: position.coords.longitude
  //     });
  //   });
  // }
  
  $mapster.mapster('getCurrentPosition', function(position) {
      $mapster.mapster('addMarker', {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      });    
  });
 
}(window, jQuery));
</script>
@endsection
@endsection