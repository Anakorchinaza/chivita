@if (!session()->has('user_id'))
    <script>
        // Redirect user to the main page if user data does not exist
        window.location.href = "{{ url('/') }}";
    </script>
@endif
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Chivita Polls</title>
	<link rel="icon" type="image/png" href="{{ asset('assets/logo/chivita-logo-white.png') }}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <!-- Open Graph Meta Tags -->
	<meta property="og:title" content="Chivita Polls">
	<meta property="og:description" content="{{ session('description') }}">
	<meta property="og:image" content="{{ session('image') }}">
	<meta property="og:url" content="{{ request()->fullUrl() }}">
	<meta property="og:type" content="website">
 
	 <!-- Twitter Card Meta Tags -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="Chivita Polls">
	<meta name="twitter:description" content="{{ session('description') }}">
	<meta name="twitter:image" content="{{ session('image') }}">
	<meta name="twitter:url" content="{{ request()->fullUrl() }}">

	<link rel="stylesheet" href="{{ asset("assets/css/bootstrap.min.css") }}">
	<link rel="stylesheet" href="{{ asset("assets/css/owl.carousel.css") }}">
	<link rel="stylesheet" href="{{ asset("../../../../../../cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css") }}">
	<link rel="stylesheet" href="{{ asset("assets/css/animate.min.css") }}">
	<link rel="stylesheet" href="{{ asset("assets/css/fontawesome-all.css") }}">
	<link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">

	<body>
		<div class="wrapper">
			<div class="wizard-content-1 clearfix">
				<div class="steps d-none clearfix">
					<ul class="tablist multisteps-form__progress">
						<li class="multisteps-form__progress-btn "></li>
						<li class="multisteps-form__progress-btn js-active current"></li>
						<li class="multisteps-form__progress-btn"></li>
					</ul>
				</div>
				<div class="step-inner-content clearfix position-relative">
					<div class="form-area position-relative">
						<div class="wizard-forms">
							<div class="survey-content-area survey-content-two">
								<div class="survey-top-title text-center position-relative">
									<h2>{{ session('variant') }} is THE ONE FOR YOU</h2>
								</div>
								<div class="survey-form-area clearfix">
									<div class="survey-form-content">
										<div class="survey-form-img">
											<img src="{{ asset("assets/img/wine-pana.png") }}" alt="">
										</div>
										<div class="survey-form-field">
											<div class="survey-thankyou">
												<div class="col-md-4 offset-md-4">
													<img src="{{ session('image') }}" class="img-fluid" alt="" style="margin-top: -100px">
												</div>
												
												<p class="mt-3"> {{ session('description') }}</p>
												<div class="share-result mt-4">
													<h4>Share your result:</h4>
													<a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" target="_blank" class="btn btn-social-icon btn-facebook">
														<i class="fab fa-facebook-f"></i>
													</a>
													<a href="https://twitter.com/intent/tweet?text=Check+out+my+result&url={{ urlencode(request()->fullUrl()) }}" target="_blank" class="btn btn-social-icon btn-twitter">
														<i class="fab fa-twitter"></i>
													</a>
													<a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->fullUrl()) }}" target="_blank" class="btn btn-social-icon btn-linkedin">
														<i class="fab fa-linkedin-in"></i>
													</a>
													<a href="https://api.whatsapp.com/send?text=Check+out+my+result+{{ urlencode(request()->fullUrl()) }}" target="_blank" class="btn btn-social-icon btn-whatsapp">
														<i class="fab fa-whatsapp"></i>
													</a>
												</div>												
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="wizard-progress">
								<span>9 of 9 Completed</span>
								<div class="progress">
									<div class="progress-bar" style="width: 100%">
									</div>
								</div>
							</div>
							<div class="actions">
								<ul>
									<li><span class="js-btn-prev" title="Previous"><a href="{{ url("/") }}">Take Again</a></span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

		<script src="{{ asset("assets/js/jquery-3.3.1.min.js") }}"></script>
		<script src="{{ asset("assets/js/bootstrap.min.js") }}"></script>
		<script src="{{ asset("assets/js/popper.min.js") }}"></script>
		<script src="{{ asset("assets/js/owl.carousel.min.js") }}"></script>
		<script src="{{ asset("../../../../../../cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js") }}"></script>
		<script src="{{ asset("assets/js/form-step.js") }}"></script>
		<script src="{{ asset("assets/js/jquery.validate.min.js") }}"></script>
		<script src="{{ asset("assets/js/main.js") }}"></script>
		<!-- <script src="assets/js/switch.js"></script> -->
		<script>
			$("#customFile").change(function() {
				filename = this.files[0].name
			});
			$(".custom-file-input").on("change", function() {
				var fileName = $(this).val().split("\\").pop();
				$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
			});
		</script>

	</body>

	
<!-- Mirrored from jthemes.net/themes/html/BeWizard/Survey/Survey.V1/thank-you.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 May 2024 02:03:08 GMT -->
</html>
