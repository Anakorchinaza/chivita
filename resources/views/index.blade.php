<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Chivita Polls</title>
	<link rel="icon" type="image/png" href="{{ asset('assets/logo/chivita-logo-white.png') }}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{ asset("assets/css/bootstrap.min.css") }}">
	<link rel="stylesheet" href="{{ asset("assets/css/owl.carousel.css") }}">
	<link rel="stylesheet" href="{{ asset("../../../../../../cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css") }}">
	<link rel="stylesheet" href="{{ asset("assets/css/animate.min.css") }}">
	<link rel="stylesheet" href="{{ asset("assets/css/fontawesome-all.css") }}">
	<link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">
	<style>
        .error {
            color: red;
        }
    </style>
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
					<form class="multisteps-form__form" action="" id="wizard" method="POST">
						<div class="form-area position-relative">                            
                            <!-- question 1 -->
							<div class="multisteps-form__panel  js-active" data-animation="scaleIn">
								<div class="wizard-forms position-relative">                                    
									<div class="survey-content-area">
										<div class="survey-top-title text-center position-relative">
											<h2>Which activity sounds most appealing to you?</h2>
										</div>
										<div class="survey-form-area clearfix">
											<div class="survey-form-content">
												<div class="survey-form-img">
													<img src="{{ asset("assets/img/Relaxation-pana.png") }}" alt="">
												</div>
												<div class="survey-form-field">													
													<ul>
														<li>
															<label>
																<input type="radio" name="1" value="1" class="exp-option-box" required>
																<span class="checkmark-border position-relative"></span>
																<span class="exp-label">Exploring a new hiking trail</span>
															</label>
														</li>
														<li>
															<label>
																<input type="radio" name="1" value="2" class="exp-option-box" required>
																<span class="checkmark-border position-relative"></span>
																<span class="exp-label">Hosting a party with friends</span>
															</label>
														</li>
														<li>
															<label>
																<input type="radio" name="1" value="3" class="exp-option-box" required>
																<span class="checkmark-border position-relative"></span>
																<span class="exp-label">Relaxing on a beach</span>
															</label>
														</li>
														<li>
															<label>
																<input type="radio" name="1" value="4" class="exp-option-box" required>
																<span class="checkmark-border position-relative"></span>
																<span class="exp-label">Trying a new adventure sport</span>
															</label>
														</li>														
													</ul>
												</div>
											</div>
										</div>
									</div>

									<div class="wizard-progress">
										<span>1 of 9 Completed</span>
										<div class="progress">
											<div class="progress-bar">
											</div>
										</div>
									</div>
									<div class="actions">
										<ul>
											<li><span class="js-btn-next" title="NEXT">NEXT Question</span></li>
										</ul>
									</div>
								</div>
							</div>

							<!-- question 2 -->
							<div class="multisteps-form__panel" data-animation="scaleIn">
								<div class="wizard-forms">
									<div class="survey-content-area">
										<div class="survey-top-title text-center position-relative">
											<h2>How would you describe your ideal weekend?</h2>
										</div>
										<div class="survey-form-area clearfix">
											<div class="survey-form-content">
												<div class="survey-form-img">
													<img src="{{ asset("assets/img/Sport family-pana.png") }}" alt="">
												</div>
												<div class="survey-form-field">													
													<ul>
														<li>
															<label>
																<input type="radio" name="2" value="5" class="exp-option-box">
																<span class="checkmark-border position-relative"></span>
																<span class="exp-label">Active and outdoors</span>
															</label>
														</li>
														<li>
															<label>
																<input type="radio" name="2" value="6" class="exp-option-box">
																<span class="checkmark-border position-relative"></span>
																<span class="exp-label">Social and lively</span>
															</label>
														</li>
														<li>
															<label>
																<input type="radio" name="2" value="7" class="exp-option-box">
																<span class="checkmark-border position-relative"></span>
																<span class="exp-label">Relaxed and rejuvenating</span>
															</label>
														</li>
														<li>
															<label>
																<input type="radio" name="2" value="8" class="exp-option-box">
																<span class="checkmark-border position-relative"></span>
																<span class="exp-label">Cultural and exploratory</span>
															</label>
														</li>														
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="wizard-progress">
										<span>2 of 9 Completed</span>
										<div class="progress">
											<div class="progress-bar" style="width: 12.5%">
											</div>
										</div>
									</div>
									<div class="actions">
										<ul>
											<li><span class="js-btn-prev" title="prev">Previous Question</span></li>
											<li><span class="js-btn-next" title="NEXT">NEXT Question</span></li>
										</ul>
									</div>
								</div>
							</div>

                            <!-- question 3 -->
							<div class="multisteps-form__panel" data-animation="scaleIn">
								<div class="wizard-forms">
									<div class="survey-content-area">
										<div class="survey-top-title text-center position-relative">
											<h2>Which flavor profile do you prefer?</h2>
										</div>
										<div class="survey-form-area clearfix">
											<div class="survey-form-content">
												<div class="survey-form-img">
													<img src="{{ asset("assets/img/Pina-colada-pana.png") }}" alt="">
												</div>
												<div class="survey-form-field">													
													<ul>
														<li>
															<label>
																<input type="radio" name="3" value="9" class="exp-option-box">
																<span class="checkmark-border position-relative"></span>
																<span class="exp-label">Sweet and tangy</span>
															</label>
														</li>
														<li>
															<label>
																<input type="radio" name="3" value="10" class="exp-option-box">
																<span class="checkmark-border position-relative"></span>
																<span class="exp-label">Fruity and tropical</span>
															</label>
														</li>
														<li>
															<label>
																<input type="radio" name="3" value="11" class="exp-option-box">
																<span class="checkmark-border position-relative"></span>
																<span class="exp-label">Crisp and refreshing</span>
															</label>
														</li>
														<li>
															<label>
																<input type="radio" name="3" value="12" class="exp-option-box">
																<span class="checkmark-border position-relative"></span>
																<span class="exp-label">Bold and zesty</span>
															</label>
														</li>														
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="wizard-progress">
										<span>3 of 9 Completed</span>
										<div class="progress">
											<div class="progress-bar" style="width: 25%">
											</div>
										</div>
									</div>
									<div class="actions">
										<ul>
											<li><span class="js-btn-prev" title="prev">Previous Question</span></li>
											<li><span class="js-btn-next" title="NEXT">NEXT Question</span></li>
										</ul>
									</div>
								</div>
							</div>

                            <!-- question 4 -->
							<div class="multisteps-form__panel" data-animation="scaleIn">
								<div class="wizard-forms">
									<div class="survey-content-area">
										<div class="survey-top-title text-center position-relative">
											<h2>How do you approach new experiences?</h2>
										</div>
										<div class="survey-form-area clearfix">
											<div class="survey-form-content">
												<div class="survey-form-img">
													<img src="{{ asset("assets/img/Cheer-up-pana.png") }}" alt="">
												</div>
												<div class="survey-form-field">													
													<ul>
														<li>
															<label>
																<input type="radio" name="4" value="13" class="exp-option-box">
																<span class="checkmark-border position-relative"></span>
																<span class="exp-label">With excitement and enthusiasm</span>
															</label>
														</li>
														<li>
															<label>
																<input type="radio" name="4" value="14" class="exp-option-box">
																<span class="checkmark-border position-relative"></span>
																<span class="exp-label">With caution and consideration</span>
															</label>
														</li>
														<li>
															<label>
																<input type="radio" name="4" value="15" class="exp-option-box">
																<span class="checkmark-border position-relative"></span>
																<span class="exp-label">With curiosity and openness</span>
															</label>
														</li>
														<li>
															<label>
																<input type="radio" name="4" value="16" class="exp-option-box">
																<span class="checkmark-border position-relative"></span>
																<span class="exp-label">With skepticism and analysis</span>
															</label>
														</li>														
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="wizard-progress">
										<span>4 of 9 Completed</span>
										<div class="progress">
											<div class="progress-bar" style="width: 37.5%">
											</div>
										</div>
									</div>
									<div class="actions">
										<ul>
											<li><span class="js-btn-prev" title="prev">Previous Question</span></li>
											<li><span class="js-btn-next" title="NEXT">NEXT Question</span></li>
										</ul>
									</div>
								</div>
							</div>

                            <!-- question 5 -->
							<div class="multisteps-form__panel" data-animation="scaleIn">
								<div class="wizard-forms">
									<div class="survey-content-area">
										<div class="survey-top-title text-center position-relative">
											<h2>What gives you the happy dance?	</h2>
										</div>
										<div class="survey-form-area clearfix">
											<div class="survey-form-content">
												<div class="survey-form-img">
													<img src="{{ asset("assets/img/motivation-pana.png") }}" alt="">
												</div>
												<div class="survey-form-field">													
													<ul>
														<li>
															<label>
																<input type="radio" name="5" value="17" class="exp-option-box">
																<span class="checkmark-border position-relative"></span>
																<span class="exp-label">Trying new things</span>
															</label>
														</li>
														<li>
															<label>
																<input type="radio" name="5" value="18" class="exp-option-box">
																<span class="checkmark-border position-relative"></span>
																<span class="exp-label">Spending time with friends and family</span>
															</label>
														</li>
														<li>
															<label>
																<input type="radio" name="5" value="19" class="exp-option-box">
																<span class="checkmark-border position-relative"></span>
																<span class="exp-label">Achieving personal goals</span>
															</label>
														</li>
														<li>
															<label>
																<input type="radio" name="5" value="20" class="exp-option-box">
																<span class="checkmark-border position-relative"></span>
																<span class="exp-label">Relaxing and unwinding</span>
															</label>
														</li>														
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="wizard-progress">
										<span>5 of 9 Completed</span>
										<div class="progress">
											<div class="progress-bar" style="width: 50%">
											</div>
										</div>
									</div>
									<div class="actions">
										<ul>
											<li><span class="js-btn-prev" title="prev">Previous Question</span></li>
											<li><span class="js-btn-next" title="NEXT">NEXT Question</span></li>
										</ul>
									</div>
								</div>
							</div>

                            <!-- question 6 -->
							<div class="multisteps-form__panel" data-animation="scaleIn">
								<div class="wizard-forms">
									<div class="survey-content-area">
										<div class="survey-top-title text-center position-relative">
											<h2>How would you describe your personality?</h2>
										</div>
										<div class="survey-form-area clearfix">
											<div class="survey-form-content">
												<div class="survey-form-img">
													<img src="{{ asset("assets/img/people-pana.png") }}" alt="">
												</div>
												<div class="survey-form-field">													
													<ul>
														<li>
															<label>
																<input type="radio" name="6" value="21" class="exp-option-box">
																<span class="checkmark-border position-relative"></span>
																<span class="exp-label">Adventurous and spontaneous</span>
															</label>
														</li>
														<li>
															<label>
																<input type="radio" name="6" value="22" class="exp-option-box">
																<span class="checkmark-border position-relative"></span>
																<span class="exp-label">Social and outgoing</span>
															</label>
														</li>
														<li>
															<label>
																<input type="radio" name="6" value="23" class="exp-option-box">
																<span class="checkmark-border position-relative"></span>
																<span class="exp-label">Calm and reflective</span>
															</label>
														</li>
														<li>
															<label>
																<input type="radio" name="6" value="24" class="exp-option-box">
																<span class="checkmark-border position-relative"></span>
																<span class="exp-label">Confident and assertive</span>
															</label>
														</li>														
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="wizard-progress">
										<span>6 of 9 Completed</span>
										<div class="progress">
											<div class="progress-bar" style="width: 62.5%">
											</div>
										</div>
									</div>
									<div class="actions">
										<ul>
											<li><span class="js-btn-prev" title="prev">Previous Question</span></li>
											<li><span class="js-btn-next" title="NEXT">NEXT Question</span></li>
										</ul>
									</div>
								</div>
							</div>

                            <!-- question 7 -->
							<div class="multisteps-form__panel" data-animation="scaleIn">
								<div class="wizard-forms">
									<div class="survey-content-area">
										<div class="survey-top-title text-center position-relative">
											<h2>When working on a project, I usually</h2>
										</div>
										<div class="survey-form-area clearfix">
											<div class="survey-form-content">
												<div class="survey-form-img">
													<img src="{{ asset("assets/img/remotely-pana.png") }}" alt="">
												</div>
												<div class="survey-form-field">													
													<ul>
														<li>
															<label>
																<input type="radio" name="7" value="25" class="exp-option-box">
																<span class="checkmark-border position-relative"></span>
																<span class="exp-label">Dive right in and figure it out as I go</span>
															</label>
														</li>
														<li>
															<label>
																<input type="radio" name="7" value="26" class="exp-option-box">
																<span class="checkmark-border position-relative"></span>
																<span class="exp-label">Take a step back, plan, and prioritize tasks</span>
															</label>
														</li>
														<li>
															<label>
																<input type="radio" name="7" value="27" class="exp-option-box">
																<span class="checkmark-border position-relative"></span>
																<span class="exp-label">Collaborate with others to get multiple perspectives</span>
															</label>
														</li>
														<li>
															<label>
																<input type="radio" name="7" value="28" class="exp-option-box">
																<span class="checkmark-border position-relative"></span>
																<span class="exp-label">Break it down into smaller, manageable tasks</span>
															</label>
														</li>
                                                        <li>
															<label>
																<input type="radio" name="7" value="29" class="exp-option-box">
																<span class="checkmark-border position-relative"></span>
																<span class="exp-label">Research and gather information before starting</span>
															</label>
														</li>
                                                        <li>
															<label>
																<input type="radio" name="7" value="30" class="exp-option-box">
																<span class="checkmark-border position-relative"></span>
																<span class="exp-label">Seek guidance and feedback from experts</span>
															</label>
														</li>														
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="wizard-progress">
										<span>7 of 9 Completed</span>
										<div class="progress">
											<div class="progress-bar" style="width: 75%">
											</div>
										</div>
									</div>
									<div class="actions">
										<ul>
											<li><span class="js-btn-prev" title="prev">Previous Question</span></li>
											<li><span class="js-btn-next" title="NEXT">NEXT Question</span></li>
										</ul>
									</div>
								</div>
							</div>

							 <!-- question 8 -->
							<div class="multisteps-form__panel" data-animation="scaleIn">
								<div class="wizard-forms">
									<div class="survey-content-area">
										<div class="survey-top-title text-center position-relative">
											<h2>In my free time, I enjoy?</h2>
										</div>
										<div class="survey-form-area clearfix">
											<div class="survey-form-content">
												<div class="survey-form-img">
													<img src="{{ asset("assets/img/leisure.png") }}" alt="">
												</div>
												<div class="survey-form-field">													
													<ul>
														<li>
															<label>
																<input type="radio" name="8" value="31" class="exp-option-box">
																<span class="checkmark-border position-relative"></span>
																<span class="exp-label">Trying new adventures and taking risks</span>
															</label>
														</li>
														<li>
															<label>
																<input type="radio" name="8" value="32" class="exp-option-box">
																<span class="checkmark-border position-relative"></span>
																<span class="exp-label">Relaxing and unwinding with a good book</span>
															</label>
														</li>
														<li>
															<label>
																<input type="radio" name="8" value="33" class="exp-option-box">
																<span class="checkmark-border position-relative"></span>
																<span class="exp-label">Creating art or expressing myself creatively</span>
															</label>
														</li>
														<li>
															<label>
																<input type="radio" name="8" value="34" class="exp-option-box">
																<span class="checkmark-border position-relative"></span>
																<span class="exp-label">Exploring new places and experiencing different cultures</span>
															</label>
														</li>
                                                        <li>
															<label>
																<input type="radio" name="8" value="35" class="exp-option-box">
																<span class="checkmark-border position-relative"></span>
																<span class="exp-label">Solving puzzles and playing strategic games</span>
															</label>
														</li>
                                                        <li>
															<label>
																<input type="radio" name="8" value="36" class="exp-option-box">
																<span class="checkmark-border position-relative"></span>
																<span class="exp-label">Hosting gatherings and bringing people together</span>
															</label>
														</li>														
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="wizard-progress">
										<span>8 of 9 Completed</span>
										<div class="progress">
											<div class="progress-bar" style="width: 87.5%">
											</div>
										</div>
									</div>
									<div class="actions">
										<ul>
											<li><span class="js-btn-prev" title="Previous">Previous Question</span></li>
											<li><button type="submit" class="js-btn-next" title="NEXT">Submit Question</button></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>


              <!-- Modal HTML -->
			@if (!session()->has('user_id'))
				<div class="modal fade modal-friendly" id="userDetailsModal" tabindex="-1" role="dialog" aria-labelledby="userDetailsModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="userDetailsModalLabel">Find Your Chivita!</h5>
							</div>
							<div class="modal-body">
								<p class="friendly-message">To help you find your perfect Chivita match, please tell us a bit about yourself.</p>
								<form id="userDetailsForm" method="POST" action="{{ route('user.details.submit') }}" >
									@csrf									
									<div class="form-group">
										<label for="userEmail" class="sr-only">Email</label>
										<input type="email" class="form-control" id="userEmail" name="email" placeholder="Your email" required>
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button type="submit" form="userDetailsForm" class="btn btn-primary" style="background-color: #EB0010">Start the Quiz!</button>
							</div>
						</div>
					</div>
				</div>
			@endif


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

        <script>
            $(document).ready(function() {
                // Show the modal when the page loads
                $('#userDetailsModal').modal('show');

                // Validate the form
                $('#userDetailsForm').validate({
                    rules: {                       
                        email: {
                            required: true,
                            email: true
                        }
                    },
                    messages: {                     
                        email: {
                            required: "Please enter your email",
                            email: "Please enter a valid email address"
                        }
                    },
					errorClass: "error",
					errorPlacement: function(error, element) {
						error.insertAfter(element);
					},
                    submitHandler: function(form) {
                           // Use AJAX to submit the form
						 $.ajax({
							url: '{{ route("user.details.submit") }}',
							type: 'POST',
							data: $(form).serialize(),
							success: function(response) {

								//On successful response, hide the modal
								$('#userDetailsModal').modal('hide'); 	

								// Display the success message
								if (response.message) {
									alert(response.message);
								} else {
									alert("Details submitted successfully!");
								}					
														
							},
							error: function(response) {
								if(response.status === 422) { // Laravel validation error status code
									var errors = response.responseJSON.errors;
									if(errors.email) {
										$('#userEmail').after('<label id="userEmail-error" class="error" for="userEmail">' + errors.email[0] + '</label>');
									}
								} else {
									console.error('Error response:', response);
								}
							}
						});
                    }
                });
            });
        </script>

        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>

		{{-- <script>
			$(document).ready(function() {
				$('#wizard').submit(function(event) {
					event.preventDefault(); // Prevent default form submission
					
					// Serialize form data
					var formData = $(this).serialize();

					// Send Ajax request
					$.ajax({
						url: "{{ route('save.answers') }}",
						type: "POST",
						data: formData,
						success: function(response) {							
							// Handle success response
							window.location.href = '{{ route("thank.you") }}';
						},
						error: function(xhr, status, error) {
							// Handle error response
							console.error(error); // Log error message
							alert("An error occurred. Please try again."); // Show error message or perform other actions
						}
					});
				});
			});
		</script> --}}

		<script>
			$(document).ready(function() {
				$('.js-btn-next').click(function() {
					var currentPanel = $('.multisteps-form__panel.js-active');
					var radios = currentPanel.find('input[type="radio"]');
					var isChecked = false;
			
					radios.each(function() {
						if ($(this).prop('checked')) {
							isChecked = true;
							return false; // exit the loop if at least one radio button is checked
						}
					});
			
					if (!isChecked) {
						alert('Please select an option.');
						return false; // prevent moving to the next panel if no option is selected
					}
			
					// Move to the next panel
					var nextPanel = currentPanel.next('.multisteps-form__panel');
					currentPanel.removeClass('js-active');
					nextPanel.addClass('js-active');
			
					// Update progress bar
					var currentStep = parseInt(nextPanel.find('.wizard-progress span').text().split(' ')[0]);
					var progressBar = nextPanel.find('.progress-bar');
					progressBar.width(((currentStep - 1) / 9) * 100 + '%');
				});
			
				$('#wizard').submit(function(event) {
					event.preventDefault(); // Prevent default form submission
					
					// Validate form
					var lastPanel = $('.multisteps-form__panel').last();
					var radios = lastPanel.find('input[type="radio"]');
					var isChecked = false;
			
					radios.each(function() {
						if ($(this).prop('checked')) {
							isChecked = true;
							return false; // exit the loop if at least one radio button is checked
						}
					});
			
					if (!isChecked) {
						alert('Please select an option.');
						return false; // prevent form submission if not all questions are answered
					}
			
					// Serialize form data
					var formData = $(this).serialize();
			
					// Send Ajax request
					$.ajax({
						url: "{{ route('save.answers') }}",
						type: "POST",
						data: formData,
						success: function(response) {                           
							// Handle success response
							//window.location.href = '{{ route("thank.you") }}';
							//console.log(response);

							if (response.success) {
								window.location.href = '{{ route("thank.you") }}';
							} else {
								alert('Error: ' + response.message);
							}
												},
						error: function(xhr, status, error) {
							// Handle error response
							console.error(error); // Log error message
							alert("An error occurred. Please try again."); // Show error message or perform other actions
						}
					});
				});
			});
		</script>
			


	</body>
</html>
