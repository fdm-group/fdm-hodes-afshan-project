<style>
	.sk-circle {
	display: none;
	position: absolute;
	width: 30px;
	height: 30px;
	top: 50%;
	right: 10px;
	transform: translateY(-50%);
	}
	.sk-circle .sk-child {
	width: 100%;
	height: 100%;
	position: absolute;
	left: 0;
	top: 0;
	}
	.sk-circle .sk-child:before {
	content: '';
	display: block;
	margin: 0 auto;
	width: 15%;
	height: 15%;
	background-color: #1daded;
	border-radius: 100%;
	-webkit-animation: sk-circleBounceDelay 1.2s infinite ease-in-out both;
		  animation: sk-circleBounceDelay 1.2s infinite ease-in-out both;
	}
	.sk-circle .sk-circle2 {
	-webkit-transform: rotate(30deg);
	  -ms-transform: rotate(30deg);
		  transform: rotate(30deg); }
	.sk-circle .sk-circle3 {
	-webkit-transform: rotate(60deg);
	  -ms-transform: rotate(60deg);
		  transform: rotate(60deg); }
	.sk-circle .sk-circle4 {
	-webkit-transform: rotate(90deg);
	  -ms-transform: rotate(90deg);
		  transform: rotate(90deg); }
	.sk-circle .sk-circle5 {
	-webkit-transform: rotate(120deg);
	  -ms-transform: rotate(120deg);
		  transform: rotate(120deg); }
	.sk-circle .sk-circle6 {
	-webkit-transform: rotate(150deg);
	  -ms-transform: rotate(150deg);
		  transform: rotate(150deg); }
	.sk-circle .sk-circle7 {
	-webkit-transform: rotate(180deg);
	  -ms-transform: rotate(180deg);
		  transform: rotate(180deg); }
	.sk-circle .sk-circle8 {
	-webkit-transform: rotate(210deg);
	  -ms-transform: rotate(210deg);
		  transform: rotate(210deg); }
	.sk-circle .sk-circle9 {
	-webkit-transform: rotate(240deg);
	  -ms-transform: rotate(240deg);
		  transform: rotate(240deg); }
	.sk-circle .sk-circle10 {
	-webkit-transform: rotate(270deg);
	  -ms-transform: rotate(270deg);
		  transform: rotate(270deg); }
	.sk-circle .sk-circle11 {
	-webkit-transform: rotate(300deg);
	  -ms-transform: rotate(300deg);
		  transform: rotate(300deg); }
	.sk-circle .sk-circle12 {
	-webkit-transform: rotate(330deg);
	  -ms-transform: rotate(330deg);
		  transform: rotate(330deg); }
	.sk-circle .sk-circle2:before {
	-webkit-animation-delay: -1.1s;
		  animation-delay: -1.1s; }
	.sk-circle .sk-circle3:before {
	-webkit-animation-delay: -1s;
		  animation-delay: -1s; }
	.sk-circle .sk-circle4:before {
	-webkit-animation-delay: -0.9s;
		  animation-delay: -0.9s; }
	.sk-circle .sk-circle5:before {
	-webkit-animation-delay: -0.8s;
		  animation-delay: -0.8s; }
	.sk-circle .sk-circle6:before {
	-webkit-animation-delay: -0.7s;
		  animation-delay: -0.7s; }
	.sk-circle .sk-circle7:before {
	-webkit-animation-delay: -0.6s;
		  animation-delay: -0.6s; }
	.sk-circle .sk-circle8:before {
	-webkit-animation-delay: -0.5s;
		  animation-delay: -0.5s; }
	.sk-circle .sk-circle9:before {
	-webkit-animation-delay: -0.4s;
		  animation-delay: -0.4s; }
	.sk-circle .sk-circle10:before {
	-webkit-animation-delay: -0.3s;
		  animation-delay: -0.3s; }
	.sk-circle .sk-circle11:before {
	-webkit-animation-delay: -0.2s;
		  animation-delay: -0.2s; }
	.sk-circle .sk-circle12:before {
	-webkit-animation-delay: -0.1s;
		  animation-delay: -0.1s; }

	@-webkit-keyframes sk-circleBounceDelay {
	0%, 80%, 100% {
	-webkit-transform: scale(0);
			transform: scale(0);
	} 40% {
	-webkit-transform: scale(1);
			transform: scale(1);
	}
	}

	@keyframes sk-circleBounceDelay {
		0%, 80%, 100% {
		-webkit-transform: scale(0);
			transform: scale(0);
	} 40% {
		-webkit-transform: scale(1);
				transform: scale(1);
		}
	}

	.fdm-application-form-component button {
		position: relative;
	}

</style>

<div class="fdm-application-form-component" data-default-region="<?= $default_region ?>">
	<div class="help--hide js-wrapper">
		<header>
		
			<ul class="progress-bar" data-region="ENG">
				<li class="js-progress" data-section-id="0">
					<span class="progress-icon"></span>
					<span data-region="ENG-GB ENG-AUS ENG-CN ENG-HK ENG-IRL ENG-SGP  ENG-ZAF">Select a Programme</span>
					<span data-region="ENG-CA ENG-USA">Select a Program</span>
				</li><li class="js-progress" data-section-id="1">
					<span class="progress-icon"></span>
					<span>Your Details</span>
				</li><li class="js-specific-field  js-progress" data-pathway="graduate b2b" data-section-id="2" data-region="DE UK Australia Canada China HK Ireland Singapore SA USA">
					<span class="progress-icon"></span>
					<span>Education</span>
				</li><li class="js-progress" data-section-id="3">
					<span class="progress-icon"></span>
					<span data-region="ENG-USA ENG-CA">Self-Identification</span>
					<span data-region="ENG-GB ENG-AUS ENG-CN ENG-HK ENG-IRL ENG-SGP  ENG-ZAF">Location Details</span>
				</li><li class="js-progress" data-section-id="4">
					<span class="progress-icon"></span>
					<span>
						<span data-region="ENG-CN ENG-USA">Regional</span>
						<span data-region="ENG-GB ENG-HK ENG-AUS ENG-IRL ENG-SGP ENG-ZAF">Selection</span> Criteria
					</span>
				</li>
			</ul>
			
			<ul class="progress-bar" data-region="DE">
				<li class="js-progress" data-section-id="0">
					<span class="progress-icon"></span>
					<span>Trainee Programmm</span>
				</li>
				<li class="js-progress" data-section-id="1">
					<span class="progress-icon"></span>
					<span>Persönliche Informationen</span>
				</li>
				<li class="js-progress" data-section-id="2">
					<span class="progress-icon"></span>
					<span>Ausbildung</span>
				</li>
				<li class="js-progress" data-section-id="4">
					<span class="progress-icon"></span>
					<span>Dokumenten Upload</span>
				</li>
			</ul>
		</header>

	<!-- ####### Select a Programme ####### -->
		<section class="[ js-section ]	[ -help--hide ]" data-section="0">
			<h1>
				<span data-region="ENG-GB  ENG-HK  ENG-SGP">Select a Programme</span>
				<span data-region="ENG-CA">FDM Careers Programme</span>
				<span data-region="ENG-USA">Select a Program</span>
				<span data-region="ENG-AUS	ENG-CN	ENG-IRL	 ENG-ZAF">FDM Graduate Programme</span>
				<span data-region="DE" >Starten Sie Ihre Karriere in der IT</span>
			</h1>
			<form class="[ js-form ]" data-section="0">
				<label>Please select a location<span class="required">*</span></label>
				<select name="ApplyingTo" class="js-region">
					<option selected="selected" value="UK">UK</option>
					<option value="Ireland">Ireland</option>
					<option value="USA">USA</option>
					<option value="Canada">Canada</option>
					<option value="Deutschland">Deutschland</option>
					<option value="Hong Kong">Hong Kong</option>
					<option value="Singapore">Singapore</option>
					<option value="China">China</option>
					<option value="Australia">Australia</option>
					<option value="South Africa">South Africa</option>
				</select>

				<label data-region="ENG">
					<span data-region="ENG-GB	ENG-HK	ENG-SGP">Please select a programme you want to apply to</span>
					<span data-region="ENG-USA">Please select a program you want to apply</span>
					<span data-region="ENG-CA	ENG-CN	ENG-IRL	 ENG-ZAF">To apply, please tick box below<span class="required">*</span></span>
				</label>
				<label class="help--hide" data-region="DE">Bewerben Sie sich jetzt für das FDM Traineeprogramm*</label>
				<div class="program-type-boxes">
					<div data-region="ENG-GB  ENG-USA	ENG-AUS	 ENG-CA	 ENG-CN	 ENG-HK	 ENG-IRL  ENG-SGP  ENG-ZAF	DE">
						<img src="<?= Hodes\FDM\asset_url('img/graduates.svg') ?>" />
						<label data-region="ENG">Graduate</label>
						<label data-region="DE">Traineeprogramm</label>
						
						<input type="radio" name="RecruitmentType" value="graduate"
								  data-validation="required"
								  data-validation-error-msg-container="#programme-form__pathway-err"/>
						<p data-region="ENG">For graduates looking to launch their careers as an IT or business consultant</p>
					</div>
					<div data-region="ENG-GB  ENG-USA">
						<img src="<?= Hodes\FDM\asset_url('img/exforces.svg') ?>" />
						<label data-region="ENG-GB">Ex-Forces</label>
						<label data-region="ENG-USA">Veterans</label>
						<input type="radio" name="RecruitmentType" value="exforces" />
						<p>For those with military experience looking to transition to a civilian career</p>
					</div>
					<div data-region="ENG-GB  ENG-USA	ENG-HK	ENG-SGP">
						<img src="<?= Hodes\FDM\asset_url('img/b2b.svg') ?>" />
						<label>Getting Back to Business</label>
						<input type="radio" name="RecruitmentType" value="b2b" />
						<p>For individuals returning to work after a career break</p>
					</div>
				</div>
				<div class="" id="programme-form__pathway-err"></div>

			</form>
		</section>

	<!-- ####### Your Details ####### -->
		<section class="[ js-section ]	[ help--hide ]" data-section="1">
			<h1>
				<span data-region="ENG">Your Details</span>
				<span data-region="DE">Persönliche Informationen</span>
			</h1>
			<form class="[ apply-form ]	 [ js-form ]" data-section="1">
				<ul>
					<li class="js-specific-field" data-pathway="graduate exforces b2b" data-region="DE UK Australia Canada China HK Ireland Singapore SA USA">
						<label for="details-form__title">Title</label>
						<label data-region="DE" for="details-form__title">Anrede</label>
						<select id="details-form__title" name="Title">
							<option class="js-default-select" value="" disabled selected hidden>Please select one</option>	
							<option class="js-specific-field" data-pathway="graduate exforces b2b" data-region="DE UK Australia Canada China HK Ireland Singapore SA"  value="None">None</option>
							<option value="Mr.">Mr.</option>
							<option value="Mrs.">Mrs.</option>
							<option value="Miss.">Miss.</option>
							<option class="js-specific-field" data-pathway="graduate exforces b2b" data-region="USA" value="Mx">Mx.</option>
							<option value="Ms.">Ms.</option>
							<option value="Dr.">Dr.</option>
							<option class="js-specific-field" data-pathway="graduate exforces b2b" data-region="DE UK Australia Canada China HK Ireland Singapore SA" value="Prof.">Prof.</option>
						</select>
					</li>
					<li class="js-specific-field" data-pathway="graduate exforces b2b" data-region="DE UK Australia Canada China HK Ireland Singapore SA USA">
						<label for="details-form__first-name">First Name<span class="apply-form__required">*</span></label>
						<label data-region="DE" for="details-form__first-name">Vorname<span class="apply-form__required">*</span></label>
						<input id="details-form__first-name" type="text" name="FirstName"
								  data-validation="required"
								  data-validation-error-msg-container="#details-form__first-name-err"/>
						<div class="apply-form__val-msg" id="details-form__first-name-err"></div>
					</li>
					<li class="js-specific-field" data-pathway="graduate exforces b2b" data-region="DE UK Australia Canada China HK Ireland Singapore SA USA">
						<label for="details-form__last-name">Last Name<span class="apply-form__required">*</span></label>
						<label data-region="DE" for="details-form__last-name">Nachname<span class="apply-form__required">*</span></label>
						<input id="details-form__last-name" type="text" name="LastName"
								  data-validation="required"
								  data-validation-error-msg-container="#details-form__last-name-err"/>
						<div class="apply-form__val-msg" id="details-form__last-name-err"></div>
					</li>
					<li class="js-specific-field" data-pathway="graduate exforces b2b" data-region="DE UK Australia Canada China HK Ireland Singapore SA USA">
						<label for="details-form__email">Email<span class="apply-form__required">*</span></label>
						<label data-region="DE" for="details-form__email">E-Mail-Adresse<span class="apply-form__required">*</span></label>
						<span class="js-specific-field	apply-form__info" data-pathway="graduate exforces b2b" data-region="UK Australia Canada China HK Ireland Singapore SA USA">E.g. youremail@email.com</span>
						<span class="js-specific-field	apply-form__info" data-pathway="graduate" data-region="DE" >z.B. deinemail@email.com</span>
						<input id="details-form__email" type="text" name="Email"
								  data-validation="email"
								  data-validation-error-msg-container="#details-form__email-err"/>
						<div class="apply-form__val-msg" id="details-form__email-err"></div>
					</li>
					<li class="js-specific-field" data-pathway="graduate exforces b2b" data-region="DE UK Australia Canada China HK Ireland Singapore SA USA">
						<label for="details-form__phone">Phone<span class="apply-form__required">*</span></label>
						<label data-region="DE" for="details-form__phone">Telefonnummer<span class="apply-form__required">*</span></label>
						<span class="[ apply-form__info ]	 [ js-specific-field ]" data-pathway="graduate" data-region="Australia">E.g. +61 123 456 7891</span>
						<span class="[ apply-form__info ]	 [ js-specific-field ]" data-pathway="graduate exforces b2b" data-region="UK">E.g. +44 123 456 7891</span>
						<span class="[ apply-form__info ]	 [ js-specific-field ]" data-pathway="graduate" data-region="Canada">E.g. +1 647 693 9302</span>
						<span class="[ apply-form__info ]	 [ js-specific-field ]" data-pathway="graduate" data-region="China">E.g. +86 647 693 9302</span>
						<span class="[ apply-form__info ]	 [ js-specific-field ]" data-pathway="graduate" data-region="Ireland">E.g. +353 1 234 5678</span>
						<span class="[ apply-form__info ]	 [ js-specific-field ]" data-pathway="graduate b2b" data-region="HK Singapore">E.g. +65 1234 5678</span>
						<span class="[ apply-form__info ]	 [ js-specific-field ]" data-pathway="graduate" data-region="SA">E.g. +27 12 345 6789</span>
						<span class="[ apply-form__info ]	 [ js-specific-field ]" data-pathway="graduate exforces b2b" data-region="USA">E.g. +1 917 789 1053</span>
						<span class="[ apply-form__info ]	 [ js-specific-field ]" data-pathway="graduate" data-region="DE">z.B +49(0) 69 9675 9281</span>
						<input id="details-form__phone" type="text" name="Phone"
								  data-validation="required"
								  data-validation-error-msg-container="#details-form__phone-err"/>
						<div class="apply-form__val-msg" id="details-form__phone-err"></div>
					</li>
					<li class="js-specific-field" data-pathway="graduate exforces b2b" data-region="DE UK Australia Canada China HK Ireland Singapore SA USA">
						<label for="details-form__address-one">Address<span class="apply-form__required">*</span></label>
						<label data-region="DE" for="details-form__address-one">Adresse<span class="apply-form__required">*</span></label>
						<input id="details-form__address-one" type="text" name="Street1"
								  data-validation="required"
								  data-validation-error-msg-container="#details-form__address-err"/>
						<div class="apply-form__val-msg" id="details-form__address-err"></div>
					</li>
					<li class="js-specific-field" data-pathway="graduate exforces b2b" data-region="DE UK Australia Canada China HK Ireland Singapore SA USA">
						<label></label>
						<input id="details-form__address-two" type="text" name="Street2"/>
					</li>
					<li class="js-specific-field" data-pathway="graduate exforces b2b" data-region="DE UK Australia China Canada HK Ireland Singapore SA USA">
						<label class="js-specific-field" data-pathway="graduate exforces b2b" data-region="UK Canada China HK Singapore SA USA" for="details-form__city">City<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="graduate" data-region="Ireland" for="details-form__city">Town<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="graduate" data-region="Australia" for="details-form__city">City/Town<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="graduate" data-region="DE" for="details-form__city">Stadt<span class="apply-form__required">*</span></label>
						<input id="details-form__city" type="text" name="City"
								  data-validation="required"
								  data-validation-error-msg-container="#details-form__city-err"/>
						<div class="apply-form__val-msg" id="details-form__city-err"></div>
					</li>

					<li class="js-specific-field" data-pathway="graduate exforces b2b" data-region="Ireland UK Australia Canada China HK Singapore SA USA">
						<label class="js-specific-field" data-pathway="graduate exforces b2b" data-region="UK China" for="details-form__county">County<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="graduate b2b" data-region="Singapore HK" for="details-form__county">County/State/Province<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="graduate exforces b2b" data-region="SA Ireland" for="details-form__county">County/Province<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="graduate exforces b2b" data-region="USA" for="details-form__county">State/Province<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="graduate" data-region="Canada" for="details-form__county">Province<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="graduate" data-region="Australia" for="details-form__city">State<span class="apply-form__required">*</span></label>
						<input id="details-form__county" type="text" name="County"
								  data-validation="required"
								  data-validation-error-msg-container="#details-form__county-err"/>
						<div class="apply-form__val-msg" id="details-form__county-err"></div>
					</li>
					<li class="js-specific-field" data-pathway="graduate exforces b2b" data-region="DE UK Australia Canada China HK Singapore SA USA">
						<label class="js-specific-field" data-pathway="graduate exforces b2b" data-region="UK China" for="details-form__postcode">Postcode<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="graduate" data-region="Canada SA" for="details-form__postcode">Postal Code<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="graduate b2b" data-region="Singapore HK" for="details-form__postcode">Postal Code/Zip<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="graduate exforces b2b" data-region="USA" for="details-form__postcode">Zip Code<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="graduate" data-region="Australia" for="details-form__city">Zip/Postcode<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="graduate" data-region="DE" for="details-form__postcode">PLZ<span class="apply-form__required">*</span></label>
						<input id="details-form__postcode" type="text" name="postcode"
								  data-validation="required"
								  data-validation-error-msg-container="#details-form__postcode-err"/>
						<div class="apply-form__val-msg" id="details-form__postcode-err"></div>
					</li>
					<li class="js-specific-field" data-pathway="graduate" data-region="Ireland">
						<label>Eircode (if applicable)</label>
						<input id="details-form__postcode" type="text" name="postcode"/>
					</li>
					<li class="js-specific-field" data-pathway="graduate exforces b2b" data-region="DE UK Australia Canada China HK Ireland Singapore SA USA">
						<label for="details-form__country">Country<span class="apply-form__required">*</span></label>
						<label data-region="DE" for="details-form__country">Land<span class="apply-form__required">*</span></label>
						<input id="details-form__country" type="text" name="Country"
								  data-validation="required"
								  data-validation-error-msg-container="#details-form__country-err"/>
						<div class="apply-form__val-msg" id="details-form__country-err"></div>
					</li>
					<li class="js-specific-field" data-pathway="graduate exforces b2b" data-region="DE UK Australia Canada China HK Ireland Singapore SA USA">
						<label for="details-form__hear-about">Where did you hear about us?<span class="apply-form__required">*</span></label>
						<label data-region="DE" for="details-form__hear-about">Wie haben Sie von uns erfahren?<span class="apply-form__required">*</span></label>
						<select id="details-form__hear-about" name="OnlineSource"
								data-validation="required"
								data-validation-error-msg-container="#details-form__hear-about-err">
							<option class="js-default-select" value="" disabled selected hidden>Please select one</option>  
							<!-- AUS - Grad -->
							<option class="js-specific-field" data-pathway="graduate" data-region="Australia" value="Alumni University Careers Service">Alumni University Careers Service</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Australia" value="Careers Group">Careers Group</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Australia" value="Career Hub">Career Hub</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Australia" value="CV Library">CV Library</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Australia" value="Facebook">Facebook</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Australia" value="GradAustralia">GradAustralia</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Australia" value="Glassdoor">Glassdoor</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Australia" value="Google">Google</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Australia" value="Careers Fairs">Careers Fairs</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Australia" value="Seek">Seek</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Australia" value="Indeed">Indeed</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Australia" value="Instagram">Instagram</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Australia" value="LinkedIn">LinkedIn</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Australia" value="News Article/Press">News Article/Press</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Australia" value="Other">Other</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Australia" value="Other Job Board">Other Job Board</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Australia" value="Twitter">Twitter</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Australia" value="University Careers Service">University Careers Service</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Australia" value="University Website">University Website</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Australia" value="YouTube">YouTube</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Australia" value="Referral">Referral</option>
							<!-- CA - Grad -->
							<option class="js-specific-field" data-pathway="graduate" data-region="Canada" value="CareerBuilder.ca">CareerBuilder.ca</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Canada" value="Career Fair / Campus Event">Career Fair / Campus Event</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Canada" value="Facebook">Facebook</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Canada" value="FDM Blog">FDM Blog</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Canada" value="Glassdoor">Glassdoor</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Canada" value="Google">Google</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Canada" value="Indeed">Indeed</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Canada" value="Instagram">Instagram</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Canada" value="Job Board - Other">Job Board - Other</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Canada" value="LinkedIn">LinkedIn</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Canada" value="Monster.ca">Monster.ca</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Canada" value="News Article/Press">News Article/Press</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Canada" value="Referral">Referral</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Canada" value="Twitter">Twitter</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Canada" value="University Job Board">University Job Board</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Canada" value="Workopolis">Workopolis</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Canada" value="YouTube">YouTube</option>
							<!-- China - Grad -->
							<option class="js-specific-field" data-pathway="graduate" data-region="China" value="Alumni University Careers Service">Alumni University Careers Service</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="China" value="Careers Group">Careers Group</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="China" value="CV Library">CV Library</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="China" value="Best Jobs Canada">Best Jobs Canada</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="China" value="Canada IT">Canada IT</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="China" value="CareerBuilder">CareerBuilder</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="China" value="Chinamerica Hit Radio">Chinamerica Hit Radio</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="China" value="Dice">Dice</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="China" value="Experience">Experience</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="China" value="FDM Blog">FDM Blog</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="China" value="Facebook">Facebook</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="China" value="Glassdoor">Glassdoor</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="China" value="Google">Google</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="China" value="Careers Fairs">Careers Fairs</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="China" value="Indeed">Indeed</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="China" value="Instagram">Instagram</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="China" value="JobsDB">JobsDB</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="China" value="Jobstreet">Jobstreet</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="China" value="GradSingapore">GradSingapore</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="China" value="Gradconnection">Gradconnection</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="China" value="Jobsbank">Jobsbank</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="China" value="Jobs.ie">Jobs.ie</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="China" value="LinkedIn">LinkedIn</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="China" value="News Article/Press">News Article/Press</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="China" value="Other">Other</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="China" value="Other Job Board">Other Job Board</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="China" value="Prospects">Prospects</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="China" value="Twitter">Twitter</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="China" value="University Careers Service">University Careers Service</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="China" value="University Website">University Website</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="China" value="Monster">Monster</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="China" value="TargetJobs">TargetJobs</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="China" value="Workopolis">Workopolis</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="China" value="YouTube">YouTube</option>
							<!-- DE - Grad -->
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="-Keine-">-Keine-</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="Absolventa">Absolventa</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="Campus Tours">Campus Tours</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="CareerBuilder">CareerBuilder</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="Empfehlung durch Bekannte">Empfehlung durch Bekannte</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="Facebook">Facebook</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="FDM Blog">FDM Blog</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="Get in IT">Get in IT</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="Glassdoor">Glassdoor</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="Goethe Universität Frankfurt">Goethe Universität Frankfurt</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="Google">Google</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="Hochschule">Hochschule</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="Indeed">Indeed</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="JobScout24">JobScout24</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="Jobware">Jobware</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="Karrieremesse">Karrieremesse</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="Karriereseite der Universität">Karriereseite der Universität</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="Komm mach MINT">Komm mach MINT</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="LinkedIn">LinkedIn</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="matching box">matching box</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="Monster">Monster</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="Presse/Nachrichten">Presse/Nachrichten</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="Sonstige">Sonstige</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="Staufenbiel">Staufenbiel</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="StepStone">StepStone</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="Talents-Connect">Talents-Connect</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="Trainee Geflüster">Trainee Geflüster</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="Truffls">Truffls</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="Twitter">Twitter</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="Unicum">Unicum</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="Xing">Xing</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="YouTube">YouTube</option>
							<!-- HK - b2b -->
							<option class="js-specific-field" data-pathway="b2b" data-region="HK" value="Facebook">Facebook</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="HK" value="Glassdoor">Glassdoor</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="HK" value="Google">Google</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="HK" value="Careers Fairs">Careers Fairs</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="HK" value="FreshLinker">FreshLinker</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="HK" value="Indeed">Indeed</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="HK" value="Instagram">Instagram</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="HK" value="JobsDB">JobsDB</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="HK" value="LinkedIn">LinkedIn</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="HK" value="News Article/Press">News Article/Press</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="HK" value="Other">Other</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="HK" value="Other Job Board">Other Job Board</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="HK" value="Referral">Referral</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="HK" value="Twitter">Twitter</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="HK" value="YouTube">YouTube</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="HK" value="Andere Stellenbörse">Andere Stellenbörse</option>
							<!-- HK - Grad -->
							<option class="js-specific-field" data-pathway="graduate" data-region="HK" value="Alumni University Careers Service">Alumni University Careers Service</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="HK" value="Careers Group">Careers Group</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="HK" value="CV Library Facebook">CV Library Facebook</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="HK" value="Glassdoor">Glassdoor</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="HK" value="Google">Google</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="HK" value="Careers Fairs">Careers Fairs</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="HK" value="Freshlinker">Freshlinker</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="HK" value="Indeed">Indeed</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="HK" value="Instragram">Instragram</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="HK" value="JobsDB">JobsDB</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="HK" value="LinkedIn">LinkedIn</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="HK" value="News Article/Press">News Article/Press</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="HK" value="Other">Other</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="HK" value="Other Job Board">Other Job Board</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="HK" value="Twitter">Twitter</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="HK" value="University Careers Service">University Careers Service</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="HK" value="University Website">University Website</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="HK" value="YouTube">YouTube</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="HK" value="Referral">Referral</option>
							
							<!-- Ireland - Grad -->
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Alumni University Careers Service">Alumni University Careers Service</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Careers Group">Careers Group</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="CV Library">CV Library</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Debut">Debut</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Facebook">Facebook</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Glassdoor">Glassdoor</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Google">Google</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Gradcracker">Gradcracker</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="GradIreland">GradIreland</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="GradJobs">GradJobs</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="GradTouch">GradTouch</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Gareers Fairs">Gareers Fairs</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Graduate-Jobs">Graduate-Jobs</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Guardian Jobs">Guardian Jobs</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Indeed">Indeed</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Instagram">Instagram</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Jobs.ie">Jobs.ie</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="LinkedIn">LinkedIn</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Milkround">Milkround</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Magazine/Newspaper Article">Magazine/Newspaper Article</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Other">Other</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Other Job Board">Other Job Board</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Prospects">Prospects</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Reed">Reed</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Employee Referral">Employee Referral</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="S1 Jobs">S1 Jobs</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Student Brand Ambassador">Student Brand Ambassador</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="TARGETJobs">TARGETJobs</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="TechnoJobs">TechnoJobs</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="TheJobCrowd">TheJobCrowd</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Total Jobs">Total Jobs</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Twitter">Twitter</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="University Careers Service">University Careers Service</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="University Website">University Website</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="YouTube">YouTube</option>
							<!-- Singapore - b2b -->
							<option class="js-specific-field" data-pathway="b2b" data-region="Singapore" value="Facebook">Facebook</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="Singapore" value="Glassdoor">Glassdoor</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="Singapore" value="Google">Google</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="Singapore" value="Careers Fairs">Careers Fairs</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="Singapore" value="Indeed">Indeed</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="Singapore" value="Instagram">Instagram</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="Singapore" value="JobsDB">JobsDB</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="Singapore" value="Jobstreet">Jobstreet</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="Singapore" value="GradSingapore">GradSingapore</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="Singapore" value="Gradconnection">Gradconnection</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="Singapore" value="Jobsbank">Jobsbank</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="Singapore" value="Jobs.ie">Jobs.ie</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="Singapore" value="LinkedIn">LinkedIn</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="Singapore" value="News Article/Press">News Article/Press</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="Singapore" value="Other">Other</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="Singapore" value="Other Job Board">Other Job Board</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="Singapore" value="Referral">Referral</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="Singapore" value="Twitter">Twitter</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="Singapore" value="YouTube">YouTube</option>
							<!-- Singapore - Grad -->
							<option class="js-specific-field" data-pathway="graduate" data-region="Singapore" value="Alumni University Careers Service">Alumni University Careers Service</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Singapore" value="Careers Group">Careers Group</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Singapore" value="CV Library Facebook">CV Library Facebook</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Singapore" value="Glassdoor">Glassdoor</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Singapore" value="Google">Google</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Singapore" value="Careers Fairs">Careers Fairs</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Singapore" value="Indeed">Indeed</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Singapore" value="Instragram">Instragram</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Singapore" value="JobsDB">JobsDB</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Singapore" value="Jobstreet">Jobstreet</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Singapore" value="GradSingapore">GradSingapore</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Singapore" value="Gradconnection">Gradconnection</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Singapore" value="Jobsbank">Jobsbank</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Singapore" value="LinkedIn">LinkedIn</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Singapore" value="News Article/Press">News Article/Press</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Singapore" value="Other">Other</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Singapore" value="Other Job Board">Other Job Board</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Singapore" value="Referral">Referral</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Singapore" value="Twitter">Twitter</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Singapore" value="University Careers Service">University Careers Service</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Singapore" value="University Website">University Website</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Singapore" value="YouTube">YouTube</option>
							<!-- SA - Grad -->
							<option class="js-specific-field" data-pathway="graduate" data-region="SA" value="Careers24">Careers24</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="SA" value="CareerJunction">CareerJunction</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="SA" value="Indeed">Indeed</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="SA" value="JobVine">JobVine</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="SA" value="LinkedIn">LinkedIn</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="SA" value="Other">Other</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="SA" value="Other Job Board">Other Job Board</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="SA" value="TheJobsPortal">TheJobsPortal</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="SA" value="University Careers">University Careers</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="SA" value="Service">Service</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="SA" value="Referral">Referral</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="SA" value="University Job Board">University Job Board</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="SA" value="PNet">PNet</option>
							<!-- UK - Ex-forces -->
							<option class="js-specific-field" data-pathway="exforces" data-region="UK" value="Careers Fair">Careers Fair</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="UK" value="CivvyStreet">CivvyStreet</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="UK" value="CTP">CTP</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="UK" value="CV Library">CV Library</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="UK" value="Employee Referral">Employee Referral</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="UK" value="Facebook">Facebook</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="UK" value="FDM Blog">FDM Blog</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="UK" value="LinkedIn">LinkedIn</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="UK" value="Magazine/Newspaper Article">Magazine/Newspaper Article</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="UK" value="Officers Association">Officers Association</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="UK" value="Other">Other</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="UK" value="Other Job Board">Other Job Board</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="UK" value="Twitter">Twitter</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="UK" value="White Ensign Association">White Ensign Association</option>
							<!-- UK - b2b -->
							<option class="js-specific-field" data-pathway="b2b" data-region="UK" value="Employee Referral">Employee Referral</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="UK" value="Facebook">Facebook</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="UK" value="FDM Blog">FDM Blog</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="UK" value="Instagram">Instagram</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="UK" value="LinkedIn">LinkedIn</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="UK" value="Mumsnet">Mumsnet</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="UK" value="Magazine/Newspaper Article">Magazine/Newspaper Article</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="UK" value="Other">Other</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="UK" value="Other Job Board">Other Job Board</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="UK" value="TechUK">TechUK</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="UK" value="Twitter">Twitter</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="UK" value="WeAreTheCity">WeAreTheCity</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="UK" value="Women Returners">Women Returners</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="UK" value="Working Mums">Working Mums</option>
							<!-- UK - Grad -->
							<option class="js-specific-field" data-pathway="graduate" data-region="UK" value="Alumni University Careers Service">Alumni University Careers Service</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="UK" value="Careers Group">Careers Group</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="UK" value="CV Library">CV Library</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="UK" value="Debut">Debut</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="UK" value="Facebook">Facebook</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="UK" value="Glassdoor">Glassdoor</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="UK" value="Google">Google</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="UK" value="Gradcracker">Gradcracker</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="UK" value="GradIreland">GradIreland</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="UK" value="GradJobs">GradJobs</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="UK" value="GradTouch">GradTouch</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="UK" value="Careers Fairs">Careers Fairs</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="UK" value="Graduate-Jobs">Graduate-Jobs</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="UK" value="Guardian Jobs">Guardian Jobs</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="UK" value="Indeed">Indeed</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="UK" value="Instagram">Instagram</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="UK" value="Jobs.ie">Jobs.ie</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="UK" value="LinkedIn">LinkedIn</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="UK" value="Milkround">Milkround</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="UK" value="Magazine/Newspaper Article">Magazine/Newspaper Article</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="UK" value="Other">Other</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="UK" value="Other Job Board">Other Job Board</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="UK" value="Prospects">Prospects</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="UK" value="Reed">Reed</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="UK" value="Employee Referral">Employee Referral</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="UK" value="S1 Jobs">S1 Jobs</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="UK" value="Student Brand Ambassador">Student Brand Ambassador</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="UK" value="TARGETJobs">TARGETJobs</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="UK" value="TechnoJobs">TechnoJobs</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="UK" value="TheJobCrowd">TheJobCrowd</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="UK" value="Total Jobs">Total Jobs</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="UK" value="Twitter">Twitter</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="UK" value="University Careers Service">University Careers Service</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="UK" value="University Website">University Website</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="UK" value="YouTube">YouTube</option>
							<!-- US - b2b -->
							<option class="js-specific-field" data-pathway="b2b" data-region="USA" value="CareerBuilder">CareerBuilder</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="USA" value="Career FaAair/Event">Career FaAair/Event</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="USA" value="Facebook">Facebook</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="USA" value="FDM Blog">FDM Blog</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="USA" value="Glassdoor">Glassdoor</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="USA" value="Google">Google</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="USA" value="Government Agency">Government Agency</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="USA" value="Indeed">Indeed</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="USA" value="Instagram">Instagram</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="USA" value="Job Board - Other">Job Board - Other</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="USA" value="LinkedIn">LinkedIn</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="USA" value="Local Networking/Meetup Group">Local Networking/Meetup Group</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="USA" value="Monster">Monster</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="USA" value="News Article/Press">News Article/Press</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="USA" value="NY State Job Bank">NY State Job Bank</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="USA" value="Referral">Referral</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="USA" value="The Muse">The Muse</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="USA" value="Twitter">Twitter</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="USA" value="Women’s Job List">Women’s Job List</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="USA" value="Women For Hire">Women For Hire</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="USA" value="Women Who Code">Women Who Code</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="USA" value="YouTube">YouTube</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="USA" value="ZipRecuiter">ZipRecuiter</option>
							<!-- US - Grad -->
							<option class="js-specific-field" data-pathway="graduate" data-region="USA" value="CareerBuilder">CareerBuilder</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="USA" value="Career Fair / Campus Event">Career Fair / Campus Event</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="USA" value="CollegeRecruiter.com">CollegeRecruiter.com</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="USA" value="Facebook">Facebook</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="USA" value="FDM Blog">FDM Blog</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="USA" value="Glassdoor">Glassdoor</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="USA" value="Google">Google</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="USA" value="Indeed">Indeed</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="USA" value="Instagram">Instagram</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="USA" value="Job Board - Other">Job Board - Other</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="USA" value="LinkedIn">LinkedIn</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="USA" value="Monster">Monster</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="USA" value="News Article/Press">News Article/Press</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="USA" value="Referral">Referral</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="USA" value="The Muse">The Muse</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="USA" value="Twitter">Twitter</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="USA" value="University Job Board">University Job Board</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="USA" value="YouTube">YouTube</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="USA" value="ZipRecruiter">ZipRecruiter</option>
							<!-- US - Exforces -->
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="Army CSP Program">Army CSP Program</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="Army PaYS Program">Army PaYS Program</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="CareerBuilder">CareerBuilder</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="Career Fair/Veteran Event">Career Fair/Veteran Event</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="Facebook">Facebook</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="FDM Blog">FDM Blog</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="Glassdoor">Glassdoor</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="Google">Google</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="Government Agency">Government Agency</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="Indeed">Indeed</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="Instagram">Instagram</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="Job Board - Other">Job Board - Other</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="LinkedIn">LinkedIn</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="Military Times">Military Times</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="Monster">Monster</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="News Article/Press">News Article/Press</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="NY State Job Bank">NY State Job Bank</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="RecruitMilitary">RecruitMilitary</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="Referral">Referral</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="The Muse">The Muse</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="Twitter">Twitter</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="University Job Board">University Job Board</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="YouTube">YouTube</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="ZipRecruiter">ZipRecruiter</option>
						</select>
						<div class="apply-form__val-msg" id="details-form__hear-about-err"></div>
					</li>
					<li class="js-specific-field" data-pathway="graduate" data-region="DE UK Australia Canada China HK Ireland Singapore">
						<label class="js-specific-field" data-pathway="graduate" data-region="UK Australia China HK Ireland Singapore" for="details-form__pathway ">Preferred learning pathway<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="graduate" data-region="Canada USA" for="details-form__pathway">Preferred entry-level program<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="graduate" data-region="DE" for="details-form__pathway">Bevorzugter Trainingsbereich<span class="apply-form__required">*</span></label>
						<select id="details-form__pathway" type="text" name="Pathway"
								data-validation="required"
								data-validation-error-msg-container="#details-form__pathway-err">
							<option class="js-default-select" value="" selected disabled hidden>Please select one</option>
							<option data-region="DE" value="Business Analyse">Business Analyse</option>
							<option data-region="DE" value="Business Intelligence">Business Intelligence</option>
							<option data-region="DE" value="Financial Application Management">Financial Application Management</option>
							<option data-region="DE" value="IT Service Management">IT Service Management</option>
							<option data-region="DE" value="Projekt Management">Projekt Management</option>
							<option data-region="DE" value="Projeckt Management/Business Analyst">Projeckt Management/Business Analyst</option>
							<option data-region="DE" value="Software Entwicklung">Software Entwicklung</option>
							<option data-region="DE" value="Software Testing">Software Testing</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="UK China Ireland" value="Business">Business</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="UK China Ireland" value="Technical">Technical</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="UK China Ireland" value="No preferance">No preferance</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Canada Singapore HK" value="IT Service Management (ITSM)">IT Service Management (ITSM)</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Canada Singapore HK" value="Project Management (PMO)">Project Management (PMO)</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Canada Singapore HK" value="Software Development">Software Development</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Canada" value="No preference">No preference</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Australia HK" value="Business Analysis">Business Analysis</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Australia" value="Software Development">Software Development</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Australia Singapore" value="Mx.3 Support">Mx.3 Support</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Singapore" value="Testing">Testing</option>
						</select>
						<div class="apply-form__val-msg" id="details-form__pathway-err"></div>
					</li>
					
					<li class="js-specific-field" data-pathway="graduate exforces b2b" data-region="USA">
						<label>Preferred entry-level program<span class="apply-form__required">*</span></label>
						<select id="details-form__pathway" type="text" name="Pathway"
								data-validation="required"
								data-validation-error-msg-container="#details-form__pathway-err">
							<option class="js-default-select" value="" selected disabled hidden>Please select one</option>
							<option value="IT Service Management (ITSM)">IT Service Management (ITSM)</option>
							<option value="Project Management (PMO)">Project Management (PMO)</option>
							<option value="Software Development">Software Development</option>
							<option value="No preference">No preference</option>
						</select>
						<div class="apply-form__val-msg" id="details-form__pathway-err"></div>
					</li>

					<li class="[ js-specific-field ]" data-pathway="graduate" data-region="DE">
						<label data-region="DE" for="selection-form__geoflex-commit">Sind Sie deutschlandweit geographisch flexibel<span class="apply-form__required">*</span></label>
						<div class="radio-group">
							<input id="selection-form__geoflex-commit"
								   type="radio"
								   value="yes"
								   name="GeographicalFlexibility"
								   data-validation="required"
								   data-validation-error-msg-container="#selection-form__geoflex-commit-err"/>
							<span>Ja</span>
							<input id="selection-form__geoflex-commit"
								   type="radio"
								   value="no"
								   name="GeographicalFlexibility"/>
							<span>Nein</span>
						</div>
						<div class="apply-form__val-msg" id="selection-form__geoflex-commit-err"></div>
					</li>

					<li class="js-specific-field" data-pathway="exforces" data-pathway="exforces" data-region="UK">
						<label for="details-form__rank">Rank<span class="apply-form__required">*</span></label>
						<input id="details-form__rank" type="text" name="Rank"
								  data-validation="required"
								  data-validation-error-msg-container="#details-form__rank-err"/>
						<div class="apply-form__val-msg" id="details-form__rank-err"></div>
					</li>
					<li class="js-specific-field" data-pathway="exforces" data-region="UK">
						<label for="details-form__service">Service<span class="apply-form__required">*</span></label>
						<select id="details-form__service" type="text" name="Service"
								data-validation="required"
								data-validation-error-msg-container="#details-form__service-err">
							<option class="js-default-select" value="" disabled selected hidden>Please select one</option>	
							<option value="British Army">British Army</option>
							<option value="Royal Navy/Royal Marines">Royal Navy/Royal Marines</option>
							<option value="Royal Airforce">Royal Airforce</option>
							<option value="Other">Other</option>
						</select>
						<div class="apply-form__val-msg" id="details-form__service-err"></div>
					</li>
					<li class="js-specific-field" data-pathway="exforces" data-region="UK">
						<label for="details-form__service-length">Length of Service</label>
						<input id="details-form__service-length" type="text" name="LengthOfService"/>
					</li>
					<li class="js-specific-field" data-pathway="exforces" data-region="UK">
						<label for="details-form__availability">Availability</label>
						<input id="details-form__availability" type="date" name="AvailabilityDate"/>
					</li>
					<li class="js-specific-field" data-pathway="exforces" data-region="UK">
						<label for="details-form__route">Route you are applying for</label>
						<select id="details-form__service" type="text" name="Pathway">
							<option class="js-default-select" value="" disabled selected hidden>Please select one</option>	
							<option value="Traditional">Traditional</option>
							<option value="Advanced">Advanced</option>
							<option value="Don't know">Don't know</option>
						</select>
					</li>
					<li class="js-specific-field" data-pathway="exforces" data-region="UK">
						<label for="details-form__personal">Why do you think you would be a good candidate for FDM's Ex-Forces Programme?</label>
						<textarea id="details-form__personal" rows="11" name="PersonalStatement"
								  data-validation="length"
								  data-validation-length="max750"							 
								  data-validation-error-msg-container="#details-form__personal-err"></textarea>
						<div class="apply-form__val-msg" id="details-form__personal-err"></div>
						<span><span id="details-form__personal-max-length">750</span> characters left</span>
					</li>
				</ul>
				<p class="[ js-specific-field ]" data-pathway="graduate b2b exforces" data-region="China Australia Ireland">Please note: We provide our trainees with individual learning pathways to suit their specific skill sets. Due to this, we cannot guarantee that you will be trained in your preferred learning pathway. If you are interested in more than one career path you do not need to submit multiple applications, we will discuss all the options with you once we have reviewed your submission.</p>
				<p class="[ js-specific-field ]" data-pathway="graduate" data-region="UK">Please note: We provide our trainees with individual learning pathways to suit their specific skill sets. Due to this, we cannot guarantee that you will be trained in your preferred learning pathway. If you are interested in more than one career path you do not need to submit multiple applications, we will discuss all the options with you once we have reviewed your submission.</p>
				<p class="[ js-specific-field ]" data-pathway="graduate" data-region="HK Singapore">Please note: We provide our trainees with individual learning pathways to suit their specific skill sets. Due to this, we cannot guarantee that you will be trained in your preferred learning pathway. If you are interested in more than one career path you do not need to submit multiple applications, we will discuss all the options with you once we have reviewed your submission.</p>
				<p class="[ js-specific-field ]" data-pathway="graduate b2b exforces" data-region="Canada">Please note: If you are interested in more than one career path, please only submit one application. We will review your submission and discuss the options available to you.</p>
				<p class="[ js-specific-field ]" data-pathway="graduate b2b exforces" data-region="USA">Please note: If you are interested in more than one career path, please only submit one application. We will review your submission and discuss the options available to you.</p>
				<p class="[ js-specific-field ]" data-pathway="graduate" data-region="DE">Sollten Sie sich für mehr als einen Trainingsbereich interessieren, genügt eine einzige Bewerbung. Nach Durchsicht Ihrer Unterlagen besprechen wir mögliche Optionen gerne persönlich mit Ihnen</p>
			</form>
		</section>

	<!-- ####### Education ####### -->
		<section class="[ js-section ]	[ help--hide ]" data-section="2">
			<h1>
				<span data-region="ENG-GB">Education</span>
				<span data-region="ENG-USA">Experience and Education</span>
				<span data-region="ENG-CA">Education and Experience</span>
				<span data-region="DE">Ausbildung</span>
			</h1>
			<form class="[ apply-form ]	 [ js-form ]" data-section="2">
				<ul>
					<li class="[ js-specific-field ]" data-pathway="graduate" data-region="UK Australia Canada HK Ireland Singapore">
						<label for="education-form__app-status">Applicant status<span class="apply-form__required">*</span></label>
						<input id="education-form__app-status"
								  type="radio"
								  value="graduated"
								  name="ApplicationStatus"
								  data-validation="required"
								  data-validation-error-msg-container="#education-form__app-status-err"/>
						<span>Graduated and looking to launch my career</span><br />
						<input id="education-form__app-status"
								  type="radio"
								  value="studying"
								  name="ApplicationStatus"/>
						<span>Currently studying and looking for future start</span>
						<div class="apply-form__val-msg" id="education-form__app-status-err"></div>
					</li>
					<li class="[ js-specific-field ]" data-pathway="graduate b2b exforces" data-region="USA China">
						<label for="education-form__app-status">Applicant status<span class="apply-form__required">*</span></label>
						<input id="education-form__app-status"
								  type="radio"
								  value="immediate within 6 months"
								  name="ApplicationStatus"
								  data-validation="required"
								  data-validation-error-msg-container="#education-form__app-status-err"/>
						<span>Applying for immediate start date within 6 months</span>
						<input id="education-form__app-status"
								  type="radio"
								  value="6+ months"
								  name="ApplicationStatus"/>
						<span>Applying for deferred start date in 6+ months</span>
						<div class="apply-form__val-msg" id="education-form__app-status-err"></div>
					</li>
					
					<li class="[ js-specific-field ]" data-pathway="exforces" data-region="USA">
						<label for="education-form__served">Have you served in the US Military<span class="apply-form__required">*</span></label>
						<div class="radio-group">
							<input id="education-form__served" type="radio" value="yes" name="ArmedforcesVeteran"/>
							<span>yes</span>
							<input id="education-form__served" type="radio" value="no" name="ArmedforcesVeteran"/>
							<span>No</span>
						</div>
					</li>

					<li class="js-specific-field" data-pathway="exforces" data-region="USA">
						<label for="education-form__service">Military Affiliation</label>
						<select id="education-form__service" type="text" name="Service">
							<option class="js-default-select" value="" disabled selected hidden>Please select one</option>	
							<option value="Army">Army</option>
							<option value="Navy">Navy</option>
							<option value="Marines">Marines</option>
							<option value="Air Force">Air Force</option>
							<option value="Coast Guard">Coast Guard</option>
							<option value="Military Spouse">Military Spouse</option>
						</select>
					</li>


					<li class="js-specific-field" data-pathway="exforces" data-region="USA">
						<label for="details-form__availability">If you are currently serving on active duty, when is your expected EAS/ETS?</label>
						<input id="details-form__availability" type="date" name="AvailabilityDate"/>
					</li>


					<li class="js-specific-field" data-pathway="exforces" data-pathway="exforces" data-region="USA">
						<label for="education-form__rank">Rank</label>
						<select id="education-form__rank" type="text" name="Rank">
							<option class="js-default-select" value="" disabled selected hidden>Please select one</option>	
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="E1">E1</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="E2">E2</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="E3">E3</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="E4">E4</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="E5">E5</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="E6">E6</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="E7">E7</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="E8">E8</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="E9">E9</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="W1">W1</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="W2">W2</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="W3">W3</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="W4">W4</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="01">01</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="02">02</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="03">03</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="04">04</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="05">05</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="06">06</option>
						</select>
					</li>

					<li class="[ js-specific-field ]" data-pathway="exforces" data-region="USA">
						<label for="education-form__reserves">Are you a current member of the National Guard or Reserves?</label>
						<div class="radio-group">
							<input id="education-form__reserves" type="radio" value="yes" name="IsInReserves"/>
							<span>Yes</span>
							<input id="education-form__reserves" type="radio" value="no" name="IsInReserves"/>
							<span>No</span>
						</div>
					</li>

					<li class="[ js-specific-field ]" data-pathway="graduate b2b" data-region="DE UK Australia China HK Ireland SA Singapore">
						<label for="education-form__uni">University<span class="apply-form__required">*</span></label>
						<label data-region="DE" for="education-form__uni">Universität<span class="apply-form__required">*</span></label>
						<span class="apply-form__info" data-region="ENG">As specified on degree certificate</span>
						<span class="apply-form__info" data-region="DE">Name der Universität wir auf Ihren Zeugnissen angegeben</span>
						<input id="education-form__uni" type="text" name="University"
								  data-validation="required"
								  data-validation-error-msg-container="#education-form__uni-err"/>
						<div class="apply-form__val-msg" id="education-form__uni-err"></div>
					</li>
					<li class="[ js-specific-field ]" data-pathway="graduate" data-region="DE UK Australia USA Canada China HK Ireland SA Singapore">
						<label for="education-form__grad-yr">Graduation Year<span class="apply-form__required">*</span></label>
						<label data-region="DE" for="education-form__grad-yr">Abschlussjahr<span class="apply-form__required">*</span></label>
						<select id="education-form__grad-yr" type="text" name="GraduationYear"
								data-validation="required"
								data-validation-error-msg-container="#education-form__grad-yr-err">
							<option class="js-default-select" value="" disabled selected hidden>Please select one</option>	
							<option value="2018">2018</option>
							<option valie="2019">2019</option>
							<option valie="2020">2020</option>
							<option valie="2021">2021</option>
							<option valie="2022">2022</option>
							<option valie="2023">2023</option>
							<option data-region="ENG" value="Already graduated">Already graduated</option>
							<option data-region="DE" value="Already graduated">bereits abgeschlossen haben</option>
						</select>
						<div class="apply-form__val-msg" id="education-form__grad-yr-err"></div>
					</li>

					<li class="[ js-specific-field ]" data-pathway="b2b" data-region="HK Singapore">
						<label for="education-form__grad-yr">Graduation Year<span class="apply-form__required">*</span></label>
						<input id="education-form__grad-yr-hk" type="text" name="GraduationYear"
								data-validation="required"
								data-validation-error-msg-container="#education-form__grad-yr-hk-err" />

						<div class="apply-form__val-msg" id="education-form__grad-yr-hk-err"></div>
					</li>

					<li class="[ js-specific-field ]" data-pathway="graduate b2b exforces" data-region="Ireland DE UK Australia USA Canada China HK Singapore SA">
						<label for="education-form__edu-level">Education Level<span class="apply-form__required">*</span></label>
						<label data-region="DE" for="education-form__edu-level">Höchster erwobener Abschluss<span class="apply-form__required">*</span></label>
						<select id="education-form__edu-level" type="text" name="EducationLevel"
								data-validation="required"
								data-validation-error-msg-container="#education-form__edu-level-err">
							<option class="js-default-select" value="" disabled selected hidden>Please select one</option>  
							<option class="[ js-specific-field ]" data-pathway="graduate b2b" data-region="UK China Singapore" value="None">None</option>
							<option class="[ js-specific-field ]" data-pathway="graduate b2b" data-region="UK China" value="O - Level/GCSE">O - Level/GCSE</option>
							<option class="[ js-specific-field ]" data-pathway="graduate b2b" data-region="UK China" value="BTEC">BTEC</option>
							<option class="[ js-specific-field ]" data-pathway="graduate b2b" data-region="UK China" value="AS - Level">AS - Level</option>
							<option class="[ js-specific-field ]" data-pathway="graduate b2b" data-region="UK China" value="A - Level/Baccalaureate/Scottish Higher/Irish Leaving">A - Level/Baccalaureate/Scottish Higher/Irish Leaving</option>
							<option class="[ js-specific-field ]" data-pathway="graduate b2b" data-region="UK China" value="Certificate">Certificate</option>
							<option class="[ js-specific-field ]" data-pathway="graduate b2b" data-region="UK China" value="Foundation Course/Other Non-degree Programme">Foundation Course/Other Non-degree Programme</option>
							<option class="[ js-specific-field ]" data-pathway="graduate b2b" data-region="UK China Singapore" value="Bachelor's Degree">Bachelor's Degree</option>
							<option class="[ js-specific-field ]" data-pathway="graduate b2b" data-region="UK China Singapore" value="Master's Degree/Post Graduate Qualification/MBA">Master's Degree/Post Graduate Qualification/MBA</option>
							<option class="[ js-specific-field ]" data-pathway="graduate b2b" data-region="UK China Singapore" value="Doctorate Degree">Doctorate Degree</option>
							<option class="[ js-specific-field ]" data-pathway="graduate b2b" data-region="UK China Singapore" value="Higher Degree">Higher Degree</option>
							<option class="[ js-specific-field ]" data-pathway="graduate b2b" data-region="UK China Singapore" value="Other">Other</option>
							<option class="[ js-specific-field ]" data-pathway="graduate" data-region="Australia" value="None">None</option>
							<option class="[ js-specific-field ]" data-pathway="graduate" data-region="Australia" value="Diploma">Diploma</option>
							<option class="[ js-specific-field ]" data-pathway="graduate" data-region="Australia" value="Advanced Diploma">Advanced Diploma</option>
							<option class="[ js-specific-field ]" data-pathway="graduate" data-region="Australia" value="Ordinary Bachelor">Ordinary Bachelor</option>
							<option class="[ js-specific-field ]" data-pathway="graduate" data-region="Australia" value="Graduate Diploma">Graduate Diploma</option>
							<option class="[ js-specific-field ]" data-pathway="graduate" data-region="Australia" value="Bachelor Honours">Bachelor Honours</option>
							<option class="[ js-specific-field ]" data-pathway="graduate" data-region="Australia" value="Master’s Degree">Master’s Degree</option>
							<option class="[ js-specific-field ]" data-pathway="graduate" data-region="Australia" value="Doctorate Degree">Doctorate Degree</option>
							<option class="[ js-specific-field ]" data-pathway="graduate" data-region="Australia" value="Other">Other</option>
							<option class="js-specific-field" data-pathway="graduate b2b exforces" data-region="USA Canada" value="High school degree or equivalent (e.g. GED)">High school degree or equivalent (e.g. GED)</option>
							<option class="js-specific-field" data-pathway="graduate b2b exforces" data-region="USA Canada" value="Some college">Some college</option>
							<option class="js-specific-field" data-pathway="graduate b2b exforces" data-region="USA Canada" value="No degree">No degree</option>
							<option class="js-specific-field" data-pathway="graduate b2b exforces" data-region="USA Canada" value="Associate degree (e.g. AA, AS)">Associate degree (e.g. AA, AS)</option>
							<option class="js-specific-field" data-pathway="graduate b2b exforces" data-region="USA Canada" value="Bachelor’s degree (e.g. BA, BS)">Bachelor’s degree (e.g. BA, BS)</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Canada" value="Postgraduate diploma">Postgraduate diploma</option>
							<option class="js-specific-field" data-pathway="graduate b2b exforces" data-region="USA Canada" value="Master’s degree (e.g. MA, MS, MEd)">Master’s degree (e.g. MA, MS, MEd)</option>
							<option class="js-specific-field" data-pathway="graduate b2b exforces" data-region="USA Canada" value="Professional degree (e.g. MD, DDS">Professional degree (e.g. MD, DDS)</option>
							<option class="js-specific-field" data-pathway="graduate b2b exforces" data-region="Canada USA" value="Doctorate(e.g PhD, EdD)">Doctorate(e.g PhD, EdD)</option>
							<option class="js-specific-field" data-pathway="b2b graduate" data-region="HK" value="None">None</option>
							<option class="js-specific-field" data-pathway="b2b graduate" data-region="HK" value="IB / GCE">IB / GCE</option>
							<option class="js-specific-field" data-pathway="b2b graduate" data-region="HK" value="HKAL">HKAL</option>
							<option class="js-specific-field" data-pathway="b2b graduate" data-region="HK" value="HKDSE">HKDSE</option>
							<option class="js-specific-field" data-pathway="b2b graduate" data-region="HK" value="Higher Diploma / Associate Degree">Higher Diploma / Associate Degree</option>
							<option class="js-specific-field" data-pathway="b2b graduate" data-region="HK" value="Bachelor’s Degree">Bachelor’s Degree</option>
							<option class="js-specific-field" data-pathway="b2b graduate" data-region="HK" value="Master’s Degree/Post Graduate Qualification/MBA">Master’s Degree/Post Graduate Qualification/MBA</option>
							<option class="js-specific-field" data-pathway="b2b graduate" data-region="HK" value="Doctorate Degree">Doctorate Degree</option>
							<option class="js-specific-field" data-pathway="b2b graduate" data-region="HK" value="Other">Other</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="SA" value="None">None</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="SA" value="High School (&lt;Grade 12)">High School (&lt;Grade 12)</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="SA" value="High School Matric">High School Matric</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="SA" value="Trade School">Trade School</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="SA" value="Professional Qualification">Professional Qualification</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="SA" value="Certificate">Certificate</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="SA" value="Diploma">Diploma</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="SA" value="National Diploma">National Diploma</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="SA" value="Degree">Degree</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="SA" value="Honours">Honours</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="SA" value="Masters">Masters</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="SA" value="Doctorate">Doctorate</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="SA" value="Other">Other</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="None">None</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="O-Level/GCSE's/Junior Certificate">O-Level/GCSE's/Junior Certificate</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="BTEC">BTEC</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="AS – Level">AS – Level</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="A – Level/Baccalaureate/Scottish Higher/Irish Leaving">A – Level/Baccalaureate/Scottish Higher/Irish Leaving</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Certificate">Certificate</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Foundation Course/Other Non-degree Programme/">Foundation Course/Other Non-degree Programme/</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Diploma">Diploma</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Bachelor's Degree Ordinary (Level 7)">Bachelor's Degree Ordinary (Level 7)</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Bachelor’s Degree Honours (Level 8)">Bachelor’s Degree Honours (Level 8)</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Master’s Degree/Post Graduate Qualification/MBA">Master’s Degree/Post Graduate Qualification/MBA</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Doctorate Degree">Doctorate Degree</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Higher Degree">Higher Degree</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Other">Other</option>
							<option data-region="DE" value="Keine">Keine</option>
							<option data-region="DE" value="Ausbildung">Ausbildung</option>
							<option data-region="DE" value="Bachelor’s Degree">Bachelor’s Degree</option>
							<option data-region="DE" value="Master’s Degree/MBA">Master’s Degree/MBA</option>
							<option data-region="DE" value="Diplom">Diplom</option>
							<option data-region="DE" value="Promotion">Promotion</option>
						</select>
						<div class="apply-form__val-msg" id="education-form__edu-level-err"></div>
					</li>
					<li class="[ js-specific-field ]" data-pathway="graduate"	data-region="DE UK Australia China HK">
						<label for="education-form__grade">Grade</label>
						<label data-region="DE" for="education-form__grade">Note/Voraussichtliche Note</label>
						<span data-region="ENG" class="apply-form__info">If already graduated, please specify grade achieved</span>
						<span data-region="DE" class="apply-form__info">Wenn Sie bereits abgeschlossen haben, geben Sie bitte Ihre erreichte Note an</span>
						<select id="education-form__grade" type="text" name="Grade">
							<option class="js-default-select" value="" disabled selected hidden>Please select one</option>	
							<option class="[ js-specific-field ]" data-pathway="graduate" data-region="UK China" value="1st">1st</option>
							<option class="[ js-specific-field ]" data-pathway="graduate" data-region="UK China" value="2:1">2:1</option>
							<option class="[ js-specific-field ]" data-pathway="graduate" data-region="UK China" value="2:2">2:2</option>
							<option class="[ js-specific-field ]" data-pathway="graduate" data-region="UK China" value="3rd">3rd</option>
							<option class="[ js-specific-field ]" data-pathway="graduate" data-region="UK China" value="Pass">Pass</option>
							<option class="[ js-specific-field ]" data-pathway="graduate" data-region="UK China" value="Fail">Fail</option>
							<option class="[ js-specific-field ]" data-pathway="graduate" data-region="UK China" value="Merit">Merit</option>
							<option class="[ js-specific-field ]" data-pathway="graduate" data-region="UK China" value="Distinction">Distinction</option>
							<option class="[ js-specific-field ]" data-pathway="graduate" data-region="UK" value="Other">Other</option>
							<option class="[ js-specific-field ]" data-pathway="graduate" data-region="Australia" value="High Distinction (A+)">High Distinction (A+)</option>
							<option class="[ js-specific-field ]" data-pathway="graduate" data-region="Australia" value="Distinction (A)">Distinction (A)</option>
							<option class="[ js-specific-field ]" data-pathway="graduate" data-region="Australia" value="Credit (B)">Credit (B)</option>
							<option class="[ js-specific-field ]" data-pathway="graduate" data-region="Australia" value="Pass (C)">Pass (C)</option>
							<option class="[ js-specific-field ]" data-pathway="graduate" data-region="Australia" value="Fail">Fail</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="HK" value="3.5 or above">3.5 or above</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="HK" value="3.0 – 3.5">3.0 – 3.5</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="HK" value="2.5 – 3.0">2.5 – 3.0</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="HK" value="2.0 - 2.5">2.0 - 2.5</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="HK" value="2.0 or below">2.0 or below</option>
							<option data-region="DE" value="-keine-">-keine-</option>
							<option data-region="DE" value="sehr gut">sehr gut</option>
							<option data-region="DE" value="gut">gut</option>
							<option data-region="DE" value="befriedigend">befriedigend</option>
							<option data-region="DE" value="ausreichend">ausreichend</option>
						</select>
					</li>
					<li class="[ js-specific-field ]" data-pathway="graduate"	data-region="USA Canada">
						<label for="education-form__grade">Cumulative GPA</label>
						<input id="education-form__grade" type="text" name="Grade" />
					</li>

					<li class="[ js-specific-field ]" data-pathway="graduate"	data-region="Ireland SA">
						<label for="education-form__grade-ire">Grade</label>
						<span class="apply-form__info">If already graduated, please specify grade achieved</span>
						<input id="education-form__grade-ire" type="text" name="Grade" />
					</li>
					<li class="js-specific-field" data-pathway="graduate"	data-region="Ireland SA">
						<label for="education-form__exp-grade-ire">Expected Grade</label>
						<span class="apply-form__info">If not graduated, please specify expected grade</span>
						<input id="education-form__exp-grade-ire" type="text" name="ExpectedGrade" />
					</li>

					<li class="[ js-specific-field ]" data-pathway="graduate" data-region="UK Australia China HK">
						<label for="education-form__exp-grade">Expected Grade</label>
						<span class="apply-form__info">If not graduated, please specify expected grade</span>
						<select id="education-form__exp-grade" type="text" name="ExpectedGrade">
							<option class="js-default-select" value="" disabled selected hidden>Please select one</option>	
							<option class="[ js-specific-field ]" data-pathway="graduate" data-region="UK China" value="1st">1st</option>
							<option class="[ js-specific-field ]" data-pathway="graduate" data-region="UK China" value="2:1">2:1</option>
							<option class="[ js-specific-field ]" data-pathway="graduate" data-region="UK China" value="2:2">2:2</option>
							<option class="[ js-specific-field ]" data-pathway="graduate" data-region="UK China" value="3rd">3rd</option>
							<option class="[ js-specific-field ]" data-pathway="graduate" data-region="UK China" value="Pass">Pass</option>
							<option class="[ js-specific-field ]" data-pathway="graduate" data-region="UK China" value="Fail">Fail</option>
							<option class="[ js-specific-field ]" data-pathway="graduate" data-region="UK China" value="Merit">Merit</option>
							<option class="[ js-specific-field ]" data-pathway="graduate" data-region="UK China" value="Distinction">Distinction</option>
							<option class="[ js-specific-field ]" data-pathway="graduate" data-region="UK" value="Other">Other</option>
							<option class="[ js-specific-field ]" data-pathway="graduate" data-region="Australia" value="High Distinction (A+)">High Distinction (A+)</option>
							<option class="[ js-specific-field ]" data-pathway="graduate" data-region="Australia" value="Distinction (A)">Distinction (A)</option>
							<option class="[ js-specific-field ]" data-pathway="graduate" data-region="Australia" value="Credit (B)">Credit (B)</option>
							<option class="[ js-specific-field ]" data-pathway="graduate" data-region="Australia" value="Pass (C)">Pass (C)</option>
							<option class="[ js-specific-field ]" data-pathway="graduate" data-region="Australia" value="Fail">Fail</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="HK" value="3.5 or above">3.5 or above</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="HK" value="3.0 – 3.5">3.0 – 3.5</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="HK" value="2.5 – 3.0">2.5 – 3.0</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="HK" value="2.0 - 2.5">2.0 - 2.5</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="HK" value="2.0 or below">2.0 or below</option>
						</select>
					</li>
					<li class="[ js-specific-field ]" data-pathway="graduate"	data-region="UK Australia China HK Ireland SA Singapore">
						<label for="education-form__clubs">Please list any clubs or societies you have been a part of</label>
						<textarea id="education-form__clubs" rows="10" name="Clubs"
								  data-validation="length"
								  data-validation-length="max300"							 
								  data-validation-error-msg-container="#education-form__clubs-err"></textarea>
						<div class="apply-form__val-msg" id="education-form__clubs-err"></div>
						<span><span id="education-form__clubs-max-length">300</span> characters left</span>
					</li>
					<li class="[ js-specific-field ]" data-pathway="graduate b2b"	data-region="UK Australia USA Canada China HK SA Ireland Singapore">
						<label class="[ js-specific-field ]" data-pathway="graduate b2b" data-region="UK Australia China Ireland SA" for="education-form__personal">Why do you think you would be a good fit for FDM's Careers Programme?</label>
						<label class="[ js-specific-field ]" data-pathway="b2b" data-region="USA" for="education-form__personal">Please tell us a bit about your past experience. Why do you think you’re well suited to FDM’s Getting Back to Business Programme?</label>
						<label class="[ js-specific-field ]" data-pathway="b2b" data-region="HK Singapore" for="education-form__personal">Why do you think you would be a good fit for FDM’s Getting Back to Business Programme?</label>
						<label class="[ js-specific-field ]" data-pathway="graduate" data-region="HK Singapore" for="education-form__personal">Why do you think you would be a good fit for FDM's Careers Programme?</label>
						<label class="[ js-specific-field ]" data-pathway="graduate" data-region="USA Canada" for="education-form__personal">Please list any clubs, student organizations or volunteer involvement you have been a part of and any leadership roles held</label>
						<textarea id="education-form__personal" rows="10" name="PersonalStatement"
								  data-validation="length"
								  data-validation-length="max700"							 
								  data-validation-error-msg-container="#education-form__personal-err"></textarea>
						<div class="apply-form__val-msg" id="education-form__personal-err"></div>
						<span><span id="education-form__personal-max-length">700</span> characters left</span>
					</li>

					<li class="[ js-specific-field ]" data-pathway="exforces"	data-region="USA">
						<label for="education-form__leadership">Please list any leadership roles held</label>
						<textarea id="education-form__leadership" rows="10" name="Clubs"></textarea>
						<span><span id="education-form__leadership-max-length">700</span> characters left</span>
					</li>
				</ul>
			</form>
		</section>

	<!-- ####### Location Details ####### -->
		<section class="[ js-section ]	[ help--hide ]" data-section="3">
			<h1 class="[ js-specific-field ]" data-pathway="graduate b2b exforces"  data-region="UK Australia Canada China HK SA Ireland Singapore">Location Details</h1>
			<h1 class="[ js-specific-field ]" data-pathway="graduate b2b exforces"  data-region="USA">Self-Identification</h1>
			<form class="[ apply-form ]	 [ js-form ]" data-section="3">
				<ul>
					<li class="[ js-specific-field ]" data-pathway="graduate" data-region="Australia">
						<label for="location-form__aus-cit">Do you currently have Australian citizenship?<span class="apply-form__required">*</span></label>
						<div class="radio-group">
							<span>Yes</span>
							<input id="location-form__aus-cit"
								   name="AustralianStatus"
								   type="radio"
								   value="Australian citizenship"
								   data-validation="required"
								   data-validation-error-msg-container="#location-form__aus-cit-err"/>
							<span>No</span>
							<input id="location-form__aus-cit"
								   type="radio"
								   value="no Australian citizenship"
								   name=""/>
						</div>
						<div class="apply-form__val-msg" id="location-form__aus-cit-err"></div>
					</li>

					<li class="[ js-specific-field ]" data-pathway="graduate" data-region="Australia">
						<label for="location-form__nz-cit">Do you currently have New Zealand citizenship?<span class="apply-form__required">*</span></label>
						<div class="radio-group">
							<span>Yes</span>
							<input id="location-form__nz-cit"
								   name="AustralianStatus"
								   type="radio"
								   value="NZ citizenship"
								   data-validation="required"
								   data-validation-error-msg-container="#location-form__nz-cit-err"/>
							<span>No</span>
							<input id="location-form__nz-cit"
								   type="radio"
								   value="no NZ citizenship"
								   name="AustralianStatus"/>
						</div>
						<div class="apply-form__val-msg" id="location-form__aus-nz-err"></div>
					</li>

					<li class="[ js-specific-field ]" data-pathway="graduate" data-region="Australia">
						<label for="location-form__aus-perm">Are you currently an Australian Permanent Resident?<span class="apply-form__required">*</span></label>
						<div class="radio-group">
							<span>Yes</span>
							<input id="location-form__aus-perm"
								   name="AustralianStatus"
								   type="radio"
								   value="Australian Permanent Resident"
								   data-validation="required"
								   data-validation-error-msg-container="#location-form__aus-perm-err"/>
							<span>No</span>
							<input id="location-form__aus-perm"
								   type="radio"
								   value="not Australian Permanent Resident"
								   name="AustralianStatus"/>
						</div>
						<div class="apply-form__val-msg" id="location-form__aus-perm-err"></div>
					</li>

					<li class="[ js-specific-field ]" data-pathway="graduate exforces b2b" data-region="UK China Ireland">
						<label for="location-form__training-loc">Preferred training location<span class="apply-form__required">*</span></label>
						<select id="location-form__training-loc" name="PreferredTrainingLocation"
								data-validation="required"
								data-validation-error-msg-container="#location-form__training-loc-err">
							<option class="js-default-select" value="" disabled selected hidden>Please select one</option>	
							<option value="London">London</option>
							<option value="Leeds">Leeds</option>
							<option value="Glasgow">Glasgow</option>
							<option class="[ js-specific-field ]" data-pathway="graduate b2b" data-region="China" value="New York">New York</option>
							<option value="Flexible">Flexible</option>
							<option value="Don't know">Don't know</option>
						</select>
						<div class="apply-form__val-msg" id="location-form__training-loc-err"></div>
					</li>
					<li class="[ js-specific-field ]" data-pathway="graduate exforces b2b" data-region="UK China SA Ireland HK Singapore">
						<label class="[ js-specific-field ]" data-pathway="graduate exforces b2b" data-region="UK" for="location-form__eligible">Are you eligible to work in the UK?<span class="apply-form__required">*</span></label>
						<label class="[ js-specific-field ]" data-pathway="graduate" data-region="Ireland" for="location-form__eligible">Are you eligible to work in the UK/Ireland?<span class="apply-form__required">*</span></label>
						<label class="[ js-specific-field ]" data-pathway="graduate" data-region="SA" for="location-form__eligible">Are you eligible to work in South Africa?<span class="apply-form__required">*</span></label>
						<label class="[ js-specific-field ]" data-pathway="graduate" data-region="China" for="location-form__eligible">Are you eligible to work in China?<span class="apply-form__required">*</span></label>
						<label class="[ js-specific-field ]" data-pathway="graduate b2b" data-region="HK" for="location-form__eligible">Are you eligible to work in Hong Kong?<span class="apply-form__required">*</span></label>
						<label class="[ js-specific-field ]" data-pathway="graduate b2b" data-region="Singapore" for="location-form__eligible">Are you eligible to work in Singapore?<span class="apply-form__required">*</span></label>
						<select id="location-form__eligible" name="EligibleToWork"
								data-validation="required"
								data-validation-error-msg-container="#location-form__eligible-err">
							<option class="js-default-select" value="" disabled selected hidden>Please select one</option>	
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
						<div class="apply-form__val-msg" id="location-form__eligible-err"></div>
					</li>
					<li class="[ js-specific-field ]" data-pathway="graduate exforces b2b" data-region="UK China SA Ireland HK Singapore">
						<label class="[ js-specific-field ]" data-pathway="graduate exforces b2b" data-region="UK" for="location-form__visa">Do you require a visa to work in the UK?<span class="apply-form__required">*</span></label>
						<label class="[ js-specific-field ]" data-pathway="graduate" data-region="China" for="location-form__visa">Do you require a visa to work in China?<span class="apply-form__required">*</span></label>
						<label class="[ js-specific-field ]" data-pathway="graduate" data-region="SA" for="location-form__visa">Do you require a visa to work in South Africa?<span class="apply-form__required">*</span></label>
						<label class="[ js-specific-field ]" data-pathway="graduate" data-region="Ireland" for="location-form__visa">Do you require a visa to work in the UK/Ireland?<span class="apply-form__required">*</span></label>
						<label class="[ js-specific-field ]" data-pathway="graduate b2b" data-region="HK" for="location-form__visa">Do you require a visa to work in Hong Kong?<span class="apply-form__required">*</span></label>
						<label class="[ js-specific-field ]" data-pathway="graduate b2b" data-region="Singapore" for="location-form__visa">Do you require a visa to work in Singapore?<span class="apply-form__required">*</span></label>
						<select id="location-form__visa" name="RequireVisa"
								data-validation="required"
								data-validation-error-msg-container="#location-form__visa-err">
							<option class="js-default-select" value="" disabled selected hidden>Please select one</option>	
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
						<div class="apply-form__val-msg" id="location-form__visa-err"></div>
					</li>
					<li class="[ js-specific-field ]" data-pathway="graduate exforces b2b" data-region="Australia">

						<label class="[ js-specific-field ]" data-pathway="graduate" data-region="Australia" for="location-form__aus-visa-err">Do you require a visa to work in Australia?<span class="apply-form__required">*</span></label>
						
						<div class="radio-group">
							<span>Yes</span>
							<input id="location-form__aus-visa-err"
								   name="RequireVisa"
								   type="radio"
								   value="yes"
								   data-validation="required"
								   data-validation-error-msg-container="#location-form__aus-visa-err"/>
							<span>No</span>
							<input id="location-form__aus-visa-err"
								   type="radio"
								   value="no"
								   name="RequireVisa"/>
						</div>

						<div class="apply-form__val-msg" id="location-form__aus-visa-err"></div>
					</li>
					<li class="[ js-specific-field ]" data-pathway="graduate exforces b2b" data-region="UK SA Ireland HK Singapore Australia">
						<label for="location-form__visa-type">If yes, what type of visa do you currently hold?</label>
						<select id="location-form__visa-type" name="VisaType">
							<option class="js-default-select" value="" disabled selected hidden>Please select one</option>	
							<option class="js-specific-field" data-pathway="graduate exforces b2b" data-region="UK SA" value="Student">Student</option>
							<option class="js-specific-field" data-pathway="graduate exforces b2b" data-region="UK" value="Tier 1 General">Tier 1 General</option>
							<option class="js-specific-field" data-pathway="graduate exforces b2b" data-region="UK" value="Tier 2 General">Tier 2 General</option>
							<option class="js-specific-field" data-pathway="graduate exforces b2b" data-region="UK" value="Indefinite Leave to Remain">Indefinite Leave to Remain</option>
							<option class="js-specific-field" data-pathway="graduate exforces b2b" data-region="UK" value="Settlement">Settlement</option>
							<option class="js-specific-field" data-pathway="graduate exforces b2b" data-region="UK" value="Right of Abode">Right of Abode</option>
							<option class="js-specific-field" data-pathway="graduate exforces b2b" data-region="UK" value="Dependant">Dependant</option>
							<option class="js-specific-field" data-pathway="graduate exforces b2b" data-region="UK" value="Refugee/Asylum">Refugee/Asylum</option>
							<option class="js-specific-field" data-pathway="graduate exforces b2b" data-region="UK" value="Ancestry">Ancestry</option>
							<option class="js-specific-field" data-pathway="graduate exforces b2b" data-region="UK" value="Other">Other</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Australia" value="Australian citizenship certificate & photo ID">Australian citizenship certificate & photo ID</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Australia" value="Australian full birth certificate & photo ID">Australian full birth certificate & photo ID</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Australia" value="Australia Passport, International Passport & Bridging visa">Australia Passport, International Passport & Bridging visa</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Australia" value="International Passport & Permanent Residency visa">International Passport & Permanent Residency visa</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Australia" value="International Passport & Student visa 8104 or 8105">International Passport & Student visa 8104 or 8105</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Australia" value="International Passport & Working Holiday visa 8417">International Passport & Working Holiday visa 8417</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Australia" value="New Zealand Passport">New Zealand Passport</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Australia" value="Temporary work (skilled) visa 457">Temporary work (skilled) visa 457</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="General Employment Permit">General Employment Permit</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Critical Skills Employment Permit">Critical Skills Employment Permit</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Dependent/Partner/Spouse Employment Permit">Dependent/Partner/Spouse Employment Permit</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Reactivation Employment Permit">Reactivation Employment Permit</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Contract for Service Employment Permit">Contract for Service Employment Permit</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Intra-Company Transfer Employment Permit">Intra-Company Transfer Employment Permit</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Internship Employment Permit">Internship Employment Permit</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Sport and Cultural Employment Permit">Sport and Cultural Employment Permit</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Exchange Agreement Employment Permit">Exchange Agreement Employment Permit</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Other">Other</option>
							<option class="js-specific-field" data-pathway="graduate b2b" data-region="Singapore" value="Singapore Employment Pass">Singapore Employment Pass</option>
							<option class="js-specific-field" data-pathway="graduate b2b" data-region="Singapore" value="Permanent Resident Pass">Permanent Resident Pass</option>
							<option class="js-specific-field" data-pathway="graduate b2b" data-region="Singapore" value="Dependants Pass">Dependants Pass</option>
							<option class="js-specific-field" data-pathway="graduate b2b" data-region="Singapore" value="Student Pass">Student Pass</option>
							<option class="js-specific-field" data-pathway="graduate b2b" data-region="Singapore" value="Other">Other</option>
							<option class="js-specific-field" data-pathway="graduate b2b" data-region="HK" value="Hong Kong Working Visa">Hong Kong Working Visa</option>
							<option class="js-specific-field" data-pathway="graduate b2b" data-region="HK" value="IANG Visa">IANG Visa</option>
							<option class="js-specific-field" data-pathway="graduate b2b" data-region="HK" value="Work Visa for Mainland Talent and Professionals">Work Visa for Mainland Talent and Professionals</option>
							<option class="js-specific-field" data-pathway="graduate b2b" data-region="HK" value="Dependant Visa">Dependant Visa</option>
							<option class="js-specific-field" data-pathway="graduate b2b" data-region="HK" value="Working Holiday Visa">Working Holiday Visa</option>
							<option class="js-specific-field" data-pathway="graduate b2b" data-region="HK" value="Refugee/Asylum">Refugee/Asylum</option>
							<option class="js-specific-field" data-pathway="graduate b2b" data-region="HK" value="Ancestry">Ancestry</option>
							<option class="js-specific-field" data-pathway="graduate b2b" data-region="HK SA" value="Other">Other</option>
						</select>
					</li>
					<li class="[ js-specific-field ]" data-pathway="graduate b2b" data-region="China">
						<label for="location-form__visa-type-ch">If yes, what type of visa fo you currently hold?</label>
						<input id="location-form__visa-type-ch" name="VisaType"/>
					</li>
					<li class="[ js-specific-field ]" data-pathway="graduate" data-region="Australia">
						<label for="location-form__visa-subclass">Visa subclass?</label>
						<input id="location-form__visa-subclass" type="text" name="VisaSubclass"/>
					</li>
					<li class="[ js-specific-field ]" data-pathway="graduate" data-region="Australia">
						<label for="location-form__visa-restriction">Visa restriction?</label>
						<input id="location-form__visa-restriction" type="text" name="VisaSubclass"/>
					</li>


					<li class="[ js-specific-field ]" data-pathway="graduate exforces b2b" data-region="UK Australia SA China HK Singapore Ireland">
						<label for="location-form__uni">What is the expiry date if applicable?</label>
						<input id="location-form__uni" type="date" name="VisaExpiryDate"/>
					</li>

					<div class="js-specific-field" data-pathway="graduate b2b exforces" data-region="USA Canada">
						<p class="js-specific-field" data-pathway="graduate b2b exforces" data-region="USA">FDM is an Equal Opportunity Employer and all qualified applicants receive consideration for employment without regard to race, color, religion, sex, sexual orientation, marital status, national origin, age, disability, veteran status or any other status protected by federal, provincial, or local laws.</p>
						<p class="js-specific-field" data-pathway="graduate b2b exforces" data-region="USA">FDM collects voluntary information from our applicants in order to track the effectiveness of our recruiting efforts of candidates from all backgrounds. To help us measure this, please consider the following optional questions. Any answer you give will be kept private and will not be used during consideration of your employment.</p>
							
						<p class="js-specific-field" data-pathway="graduate" data-region="Canada">FDM is an Equal Opportunity Employer in compliance with the Employer Equity Act (“the Act) and all qualified applicants receive consideration for employment without regard to race, color, religion, sex, sexual orientation, marital status, national origin, age, disability or any other status protected by federal, provincial, or local laws.</p>
						<p class="js-specific-field" data-pathway="graduate" data-region="Canada">FDM collects voluntary information from our applicants in order to track the effectiveness of our recruiting efforts of candidates from all backgrounds in order to ensure continued compliance with the Act. To help us measure this, please consider the following optional questions. Any answer you give will be kept private and will not be used during consideration of your employment. Submission of this information is voluntary and refusal to provide it will not subject you to any adverse treatment.</p>

						<li class="js-specific-field" data-pathway="graduate b2b exforces" data-region="USA">
							<label for="identification-form__ethinc">Ethnic Background: Check on box that best describes how you self-identify<span class="apply-form__required">*</span></label>
							<input id="identification-form__ethinc"
								   name="EthnicBackground"
								   type="radio"
								   value="American Indian / Alaskan Native"
								   data-validation="required"
								   data-validation-error-msg-container="#identification-form__ethinc-err"/>
							<span>American Indian / Alaskan Native</span>

							<input type="radio" value="Asian / Asian-American" name="EthnicBackground"/>
							<span>Asian / Asian-American</span>

							<input type="radio" value="White/Caucasian" name="EthnicBackground"/>
							<span>White/Caucasian</span>

							<input type="radio" value="Black / African-American" name="EthnicBackground"/>
							<span>Black / African-American</span>

							<input type="radio" value="Two or more races" name="EthnicBackground"/>
							<span>Two or more races</span>

							<input type="radio" value="Hispanic/Latino" name="EthnicBackground"/>
							<span>Hispanic/Latino</span>

							<input type="radio" value="Native Hawaiian / Pacific Islander" name="EthnicBackground"/>
							<span>Native Hawaiian / Pacific Islander</span>

							<input type="radio" value="I don’t wish to answer" name="EthnicBackground"/>
							<span>I don’t wish to answer</span>

							<div class="apply-form__val-msg" id="identification-form__ethinc-err"></div>
						</li>
						
						<li class="js-specific-field" data-pathway="graduate" data-region="Canada">
							<label for="identification-form__ethinc">Ethnic Background: Check on box that best describes how you self-identify<span class="apply-form__required">*</span></label>
							<input id="identification-form__ethinc"
								   name="EthnicBackground"
								   type="radio"
								   value="Aboriginal Peoples / First Nations"
								   data-validation="required"
								   data-validation-error-msg-container="#identification-form__ethinc-err"/>
							<span>Aboriginal Peoples / First Nations</span>

							<input type="radio" value="Latin American" name="EthnicBackground"/>
							<span>Latin American</span>

							<input type="radio" value="Asian" name="EthnicBackground"/>
							<span>Asian</span>

							<input type="radio" value="White/Caucasian" name="EthnicBackground"/>
							<span>White/Caucasian</span>

							<input type="radio" value="Arab/West Asian" name="EthnicBackground"/>
							<span>Arab/West Asian</span>

							<input type="radio" value="Two or more ethnicities" name="EthnicBackground"/>
							<span>Two or more ethnicities</span>

							<input type="radio" value="Black" name="EthnicBackground"/>
							<span>Black</span>

							<input type="radio" value="Prefer not to answer" name="EthnicBackground"/>
							<span>Prefer not to answer</span>

							<div class="apply-form__val-msg" id="identification-form__ethinc-err"></div>
						</li>

						<li>
							<label for="identification-form__gender">Gender: Please check how you self-identify<span class="apply-form__required">*</span></label>
							<input id="identification-form__gender"
								   name="Gender"
								   type="radio"
								   value="Female"
								   data-validation="required"
								   data-validation-error-msg-container="#identification-form__gender-err"/>
							<span>Female</span>

							<input type="radio" value="Male" name="Gender"/>
							<span>Male</span>
							<input type="radio" value="Non-binary / non-conforming" name="Gender"/>
							<span>Non-binary / non-conforming</span>
							<input type="radio" value="I don’t wish to answer" name="Gender"/>
							<span>I don’t wish to answer</span>
							<div class="apply-form__val-msg" id="identification-form__gender-err"></div>
						</li>

						<li>
							<label for="identification-form__veteran">Veteran: Have you ever served or are you currently serving in the United States Military?<span class="apply-form__required">*</span></label>
							<input id="identification-form__veteran"
								   name="Veteran"
								   type="radio"
								   value="Yes"
								   data-validation="required"
								   data-validation-error-msg-container="#identification-form__veteran-err"/>
							<span>Yes</span>

							<input type="radio" value="No" name="Veteran"/>
							<span>No</span>

							<input type="radio" value="I don’t wish to answer" name="Veteran"/>
							<span>I don’t wish to answer</span>
							<div class="apply-form__val-msg" id="identification-form__veteran-err"></div>
						</li>

						<li>
							<label for="identification-form__veteran">Disability: You are considered to have a disability if you have a physical or mental impairment or medical condition that substantially limits a major life activity, or if you have a history or record of such an impairment or condition. Please check one of the boxes below:*<span class="apply-form__required">*</span></label>
							<input id="identification-form__disability"
								   name="Disability"
								   type="radio"
								   value="Yes"
								   data-validation="required"
								   data-validation-error-msg-container="#identification-form__disability-err"/>
							<span>Yes, I have (or previously had) a disability</span>

							<input type="radio" value="No" name="Disability"/>
							<span>No, I don’t have a disability</span>

							<input type="radio" value="I don’t wish to answer" name="Disability"/>
							<span>I don’t wish to answer</span>
							<div class="apply-form__val-msg" id="identification-form__disability-err"></div>
						</li>

					</div>



				</ul>
			</form>
		</section>

	<!-- ####### Selection Criteria ####### -->
		<section class="[ js-section ]	[ help--hide ]" data-section="4">
			<h1>
				<span data-region="ENG">Selection Criteria</span>
				<span data-region="DE">Dokumenten Upload</span>
			</h1>
			<form class="[ apply-form  apply-form--checkboxes ]	 [ js-form ]" data-section="4">
				<ul class="checkboxes">
					<li class="[ js-specific-field ]" data-pathway="graduate b2b" data-region="UK Australia China Ireland SA" >
						<label class="[ js-specific-field ]" data-pathway="graduate"	data-region="UK Ireland SA China"  for="selection-form__training-commit">Are you able to fund yourself through our initial 8-14 week training programme?<span class="apply-form__required">*</span></label>
						<label class="[ js-specific-field ]" data-pathway="b2b"	 data-region="UK" for="selection-form__training-commit">Can you commit to seven weeks of training?<span class="apply-form__required">*</span></label>
						<label class="[ js-specific-field ]" data-pathway="graduate"	data-region="Australia Singapore" for="selection-form__training-commit">Can you commit to 12-16 weeks of paid training?<span class="apply-form__required">*</span></label>
						<span class="[ js-specific-field ]" data-pathway="graduate"  data-region="UK Ireland China">Please note: FDM is able to offer a travel bursary giving you the opportunity to expense back up to £100 a week in travel expenses during the training period.</span>
						<span class="[ js-specific-field ]" data-pathway="b2b"  data-region="UK">Please note: FDM is able to offer a living allowance giving you the opportunity to expense back up to £170 a week during the training period.</span>
						<span class="[ js-specific-field ]" data-pathway="graduate"  data-region="SA">We arrange to cover accomodation, travel to/from training and meals. (Accomodation only for those who don't live locally).</span>
						<div class="radio-group">
							 <input id="selection-form__training-commit"
								   name="TrainingCommitment"
								   type="radio"
								   value="yes"
								   name="TrainingCommitment"
								   data-validation="required"
								   data-validation-error-msg-container="#selection-form__training-commit-err"/>
							<span>Yes</span>
							<input id="selection-form__training-commit"
								   type="radio"
								   value="no"
								   name="TrainingCommitment"/>
							<span>No</span>
						</div>
						<div class="apply-form__val-msg" id="selection-form__training-commit-err"></div>
					</li>

					<li class="[ js-specific-field ]" data-pathway="graduate" data-region="Singapore HK" >
						<label for="selection-form__training-commit-sing">Can you commit to 12-16 weeks of unpaid training?<span class="apply-form__required">*</span></label>
						<div class="radio-group">
							<input id="selection-form__training-commit-sing"
									  name="TrainingCommitment"
									  type="radio"
									  value="yes"
									  data-validation="required"
									  data-validation-error-msg-container="#selection-form__training-commit-sing-err"/>
							<span>Yes</span>
							<input id="selection-form__training-commit-sing"
									  type="radio"
									  value="no"
									  name="TrainingCommitment"/>
							<span>No</span>
						</div>
						<div class="apply-form__val-msg" id="selection-form__training-commit-sing-err"></div>
					</li>

					<li class="[ js-specific-field ]" data-pathway="graduate b2b exforces" data-region="UK Australia China Ireland SA Singapore HK">
						<label for="selection-form__employment-commit">Can you commit to two years employment commencing after the training is completed?<span class="apply-form__required">*</span></label>
						<div class="radio-group">
							<input id="selection-form__employment-commit"
								   name="ContractCommitment"
								   type="radio"
								   value="yes"
								   name="ContractCommitment"
								   data-validation="required"
								   data-validation-error-msg-container="#selection-form__employment-commit-err"/>
							<span>Yes</span>
							<input id="selection-form__employment-commit"
								   type="radio"
								   value="no"
								   name="ContractCommitment"/>
							<span>No</span>
						</div>
						<div class="apply-form__val-msg" id="selection-form__employment-commit-err"></div>
					</li>

					<li class="[ js-specific-field ]" data-pathway="graduate b2b exforces" data-region="Canada USA">
						<label class="[ js-specific-field ]" data-pathway="graduate" data-region="Canada" for="regional-form__eligible">Are you legally authorized to work in Canada?<span class="apply-form__required">*</span></label>
						<label class="[ js-specific-field ]" data-pathway="graduate exforces b2b" data-region="USA" for="regional-form__eligible">Are you legally authorized to work in the US?<span class="apply-form__required">*</span></label>
						<div class="radio-group">
							<input id="regional-form__eligible"
								   type="radio"
								   value="yes"
								   name="EligibleToWork"
								   data-validation="required"
								   data-validation-error-msg-container="#regional-form__eligible-err"/>
							<span>Yes</span>
							<input
								   type="radio"
								   value="no"
								   name="EligibleToWork"/>
							<span>No</span>
						</div>
						<div class="apply-form__val-msg" id="regional-form__eligible-err"></div>
					</li>

					<li class="[ js-specific-field ]" data-pathway="graduate exforces b2b" data-region="USA Canada">
						<label class="[ js-specific-field ]" data-pathway="graduate exforces b2b" data-region="USA" for="regional-form__visa">Do you require sponsorship now or at any point in the future to work in the US?<span class="apply-form__required">*</span></label>
						<label class="[ js-specific-field ]" data-pathway="graduate" data-region="Canada" for="regional-form__visa">Do you require sponsorship now or at any point in the future to work in Canada?<span class="apply-form__required">*</span></label>
						<div class="radio-group">
							<input id="regional-form__eligible"
								   type="radio"
								   value="yes"
								   name="RequireVisa"
								   data-validation="required"
								   data-validation-error-msg-container="#regional-form__visa-err"/>
							<span>Yes</span>
							<input
								   type="radio"
								   value="no"
								   name="RequireVisa"/>
							<span>No</span>
						</div>
						<div class="apply-form__val-msg" id="regional-form__visa-err"></div>
					</li>

					<li class="[ js-specific-field ]" data-pathway="graduate exforces b2b" data-region="Canada">
						<label for="regional-form__visa-type">If yes, what is your right to work?</label>
						<select id="regional-form__visa-type" name="VisaType">
							<option class="js-default-select" value="" disabled selected hidden>Please select one</option>	
							<option class="js-specific-field" data-pathway="graduate" data-region="Canada" value="Canadian Citizen/Permanent Resident">Canadian Citizen/Permanent Resident</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Canada" value="Temporary Resident">Temporary Resident</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Canada" value="Post-Graduate Work Permit">Post-Graduate Work Permit</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Canada" value="NAFTA Work Permit">NAFTA Work Permit</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Canada" value="Student Visa">Student Visa</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Canada" value="Other">Other</option>
						</select>
					</li>


					<li class="[ js-specific-field ]" data-pathway="graduate b2b exforces" data-region="UK Australia China Ireland SA Singapore HK Canada USA">
						<label class="[ js-specific-field ]" data-pathway="graduate exforces" data-region="HK UK China Ireland SA Singapore" for="selection-form__overall-commit">Do you understand that the overall commitment to complete our programme would be up to 28 months?<span class="apply-form__required">*</span></label>
						<label class="[ js-specific-field ]" data-pathway="graduate exforces" data-region="Australia" for="selection-form__overall-commit">Do you understand that the overall commitment to complete our programme would be around 28 months?<span class="apply-form__required">*</span></label>
						<label class="[ js-specific-field ]" data-pathway="b2b" data-region="UK Singapore HK" for="selection-form__overall-commit">Do you understand that the overall commitment to complete our programme would be up to 26 months?<span class="apply-form__required">*</span></label>
						<label class="[ js-specific-field ]" data-pathway="graduate exforces b2b" data-region="USA Canada" for="selection-form__overall-commit">Do you understand that the overall commitment to complete our Careers Program would be around 28-30 months in total?<span class="apply-form__required">*</span></label>
						<div class="radio-group">
							<input id="selection-form__overall-commit"
								   type="radio"
								   value="yes"
								   name="OverallCommitment"
								   data-validation="required"
								   data-validation-error-msg-container="#selection-form__overall-commit-err"/>
							<span>Yes</span>
							<input id="selection-form__overall-commit"
								   type="radio"
								   value="no"
								   name="OverallCommitment"/>
							<span>No</span>
						</div>
						<div class="apply-form__val-msg" id="selection-form__overall-commit-err"></div>
					</li>
					<li class="[ js-specific-field ]" data-pathway="graduate b2b exforces" data-region="UK Australia China Ireland SA Singapore HK Canada USA">
						<label class="js-specific-field" data-pathway="graduate" data-region="UK" for="selection-form__geoflex-commit">Are you geographically flexible to relocate within the UK if required?<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="b2b" data-region="UK" for="selection-form__geoflex-commit">Are you flexible to work across our client base?<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="exforces" data-region="UK" for="selection-form__geoflex-commit">If you are applying for the traditional route, are you geographically flexible to relocate within the UK if required?<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="graduate b2b" data-region="HK" for="selection-form__geoflex-commit">Are you geographically flexible to relocate within the Singapore, China and Hong Kong if required?<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="graduate" data-region="Australia" for="selection-form__geoflex-commit">Are you geographically flexible to relocate within Sydney, Melbourne and Brisbane if required?<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="graduate" data-region="China" for="selection-form__geoflex-commit">Are you geographically flexible to relocate within China if required?<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="graduate" data-region="Ireland" for="selection-form__geoflex-commit">Are you geographically flexible to relocate within the UK/Ireland if required?<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="graduate" data-region="SA" for="selection-form__geoflex-commit">Are you geographically flexible to relocate within South Africa if required?<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="graduate" data-region="Singapore" for="selection-form__geoflex-commit">Are you geographically flexible to relocate within Singapore and Hong Kong if required?<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="b2b" data-region="Singapore" for="selection-form__geoflex-commit">Are you flexible to work across our client base?<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="graduate" data-region="Canada" for="selection-form__geoflex-commit">We have clients in major metro cities throughout the US. Are you open to national placement opportunities<span class="apply-form__required">*</span></label>
						<span class="js-specific-field" data-pathway="graduate" data-region="Canada" for="selection-form__geoflex-commit">* Please note geographical flexibility is not a requirement of the program.</span>
						<label class="js-specific-field" data-pathway="graduate" data-region="USA" for="selection-form__geoflex-commit">We have clients in major metro cities throughout the US. Are you open to national placement opportunities<span class="apply-form__required">*</span></label>
						<div class="radio-group">
							<input id="selection-form__geoflex-commit"
								   type="radio"
								   value="yes"
								   name="GeographicalFlexibility"
								   data-validation="required"
								   data-validation-error-msg-container="#selection-form__geoflex-commit-err"/>
							<span>Yes</span>
							<input id="selection-form__geoflex-commit"
								   type="radio"
								   value="no"
								   name="GeographicalFlexibility"/>
							<span>No</span>
						</div>
						<div class="apply-form__val-msg" id="selection-form__geoflex-commit-err"></div>
					</li>
					<li class="[ js-specific-field ]" data-pathway="graduate b2b exforces" data-region="UK Australia China Ireland SA Singapore HK ">
						<label for="selection-form__special-reqs">If you have any special requirements during the application process, please tick this box so we can enquire as to how we can accommodate your needs.<span class="apply-form__required">*</span></label>
						<input id="selection-form__special-reqs"
								  type="checkbox"
								  value="yes"
								  name="SpecialRequirements"/>
						<span>Yes</span>
					</li>
					<h3>
						<span data-region="ENG">Please Upload Your </span>
						<span class="[ js-specific-field ]" data-pathway="graduate b2b exforces" data-region="USA CA">résumé</span>
						<span class="[ js-specific-field ]" data-pathway="graduate b2b exforces" data-region="UK Australia Ireland China Singapore HK SA">CV</span>
						<span data-region="DE">Bitte laden Sie Ihre Bewerbungsunterlagen hoch*</span>
						<span class="apply-form__required">*</span>
					</h3>
					<li class="[ js-specific-field ]" data-pathway="graduate b2b exforces" data-region="DE UK Australia Canada China Singapore HK SA Ireland USA">
						<input type="file" name="file" id="cv-form__upload"
								  data-validation="required"
								  data-validation-error-msg-container="#cv-form__upload-err"/>
						<div class="apply-form__val-msg" id="cv-form__upload-err"></div>
					</li>
					<p data-region="DE">Laden Sie bitte Ihre vollständigen Bewerbungsunterlagen in einer pdf-Datei hoch inkl. Anschreiben, Lebenslauf und Zeugnisse (max. 5 MB)*</p>
					<li class="[ js-specific-field ]" data-pathway="graduate b2b exforces" data-region="UK Australia Canada China Singapore HK SA Ireland USA">
						<label for="selection-form__gdpr">Please confirm that you have read and accept the Terms and Conditions of use, Privacy Policy and consent to receiving information from FDM Group in relation to this request. FDM values the privacy of your personal details and we will not share or otherwise distribute your Personal Data to third parties except as provided in this Privacy Policy.<span class="apply-form__required">*</span></label>
						<input id="selection-form__gdpr"
								  type="checkbox"
								  value="yes"
								  name="GDPRConsent"
								  data-validation="required"
								  data-validation-error-msg-container="#selection-form__gdpr-err"/>
						<span>Yes</span>
						<div class="apply-form__val-msg" id="selection-form__gdpr-err"></div>
					</li>
				</ul>
			</form>
		</section>

	<!-- ####### Congratulations ####### -->
		<section class="[ js-section ]	[ help--hide ] thank-you-message" data-section="5">
			<div data-region="ENG">
				<h1>Congratulations</h1>
				<div>
				<p>We've received your application. Our recruitment team will review your application and get in touch shortly.</p>
				<p>In the meantime, check out our social hub to get an inside look at what life at FDM is like. You can also read our blog for the latest stories from FDM around the world.</p>
					</div>
			</div>
			
			<div data-region="DE">
				<h1>Vielen Dank</h1>
				<p>Wir haben Ihre Bewerbung erhalten und Ihre Unterlagen werden nun von uns geprüft. Sie erhalten in Kürze eine Rückmeldung.</p>
				<p>In der Zwischenzeit können Sie sich auf den sozialen Netzwerken über Neuigkeiten und weitere Karrierewege informieren.</p>
			</div>
		</section>
		
		<div class="control-buttons">

			<button class="[ js-next-btn ]	[ btn ] ">
				<span data-region="ENG">Next</span>
				<span class="help--hide" data-region="DE">Weiter</span>
			</button>
	
			<button class="[ js-apply-btn ]	 [ btn ]	 [ help--hide ]">
				<span data-region="ENG">Apply</span>
				<span class="help--hide" data-region="DE">Abschicken</span>
			
				<div class="sk-circle  js-spinner">
					  <div class="sk-circle1 sk-child"></div>
					  <div class="sk-circle2 sk-child"></div>
					  <div class="sk-circle3 sk-child"></div>
					  <div class="sk-circle4 sk-child"></div>
					  <div class="sk-circle5 sk-child"></div>
					  <div class="sk-circle6 sk-child"></div>
					  <div class="sk-circle7 sk-child"></div>
					  <div class="sk-circle8 sk-child"></div>
					  <div class="sk-circle9 sk-child"></div>
					  <div class="sk-circle10 sk-child"></div>
					  <div class="sk-circle11 sk-child"></div>
					  <div class="sk-circle12 sk-child"></div>
				</div>
			</button>
			
			<p class="help--hide  js-apply-error">
				<span data-region="ENG">Something went wrong, please try again.</span>
				<span data-region="DE">Etwas ist schief gelaufen. Bitte versuche es erneut.</span>
			</p>
	
			<button class="[ js-pre-btn ]  [ btn ]	[ help--hide ]">
				<span data-region="ENG">Back</span>
				<span class="help--hide" data-region="DE">Zurück</span>
			</button>
		</div>
		
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
</div>

<script type="text/javascript">jQuery(function($){
	
	var validationConfigs = {
		modules : 'location, date, security, file',
		showHelpOnFocus : false,
		addSuggestions : false,
		borderColorOnError : "",
		validateHiddenInputs : false
	};
	
	$.validate(validationConfigs);
	
			
	function objectifyForm(formArray) {//serialize data function
		var returnArray = {};
		for (var i = 0; i < formArray.length; i++){
			if (formArray[i]['value'] == "") {
				continue;
			}
			returnArray[formArray[i]['name']] = formArray[i]['value'];
		}
		return returnArray;
	};
	
	function uploadCv(sfId) {
		var reader = new FileReader(),
			
		file = $('#cv-form__upload')[0];

		if (!file.files.length) {
			alert('no file uploaded');
			return false;
		}

		reader.onload = function () {
			var f = file.files[0];
			var data = reader.result,
			base64 = data.replace(/^[^,]*,/, ''),
			cv = {
				cv: {
					parentid: sfId,
					filename: f.name,
					filetype: f.type,
					filesize: f.size,
					filedata: base64
				}
			};

			$.ajax({
				type: "POST",
				dataType: "json",
				contentType: "application/json; charset=UTF-8",
				data: JSON.stringify(cv),
				processData: false,
				url: "https://fdmsaldev-fdmgroup.cs89.force.com/apply/services/apexrest/CVService"
			}).fail(function(jqXHR, textStatus) {
				alert('Something went wrong, please try again');
				return false;
			});
		};
		reader.readAsDataURL(file.files[0]);
		return true;
	};
	
	
	$(function(){
		
		var regionParam = $('.fdm-application-form-component').attr('data-default-region');
		
		if (regionParam != undefined && regionParam != false) {
			
			var region;
			
			switch(regionParam){
				case "HK":
					region = "Hong Kong";
					break;
				case "SA":
					region = "South Africa";
					break;
				case "DE":
					region = "Deutschland";
					break;
				default:
					region = regionParam;
			}
			getRegionSpecifics(region);
			$(".js-region").val(region);
			
			if( regionParam == "DE" ){
				//$('*[data-region~="ENG"]').hide();
				//$('*[data-region~="DE"]').show();
				$(".js-default-select").html("Bitte auswählen");
			}else{
				//$('*[data-region~="DE"]').hide(); 
				//$('*[data-region~="ENG"]').show(); 
				$(".js-default-select").html("Please select one");
			}
		}
		
		$(".js-wrapper").show();
		
		$(".js-region").change(function(){
			var selectedRegion = this.value;
			getRegionSpecifics(selectedRegion);	
			setProgress();			   
		});
		
		$("#education-form__clubs").restrictLength($("#education-form__clubs-max-length"));
		$("#education-form__personal").restrictLength($("#education-form__personal-max-length"));
		$("#details-form__personal").restrictLength($("#details-form__personal-max-length"));
		$("#education-form__leadership").restrictLength($("#education-form__leadership-max-length"));
		
		
		var currentSection = 0;
		var nextSelection = 1;
		var preSelection = -1;
		
		var pathway;
		var region;
		
		var setProgress = function() {
			$('.progress-bar:visible').each(function(){
				$('.js-progress',this).each(function(){
					$(this).show();
					// find children who are visible and contain some text
					var $content = $(this).children(':visible').filter(function() {return $(this).text();});
					// if there are any, then show this pip, otherwise it's a blank, so hide it
					$(this)[$content.length > 0 ? 'show' : 'hide']();
				});
				// set 'current' class on the current section
				$('.js-progress',this).removeClass('current').eq(currentSection).addClass('current');
			});
		};
		setProgress();
		
		var scrollToTop = function() {
			window.setTimeout( function() {
				var $header = $('.l-header');
				$('html, body').scrollTop( $(".fdm-application-form-component").offset().top - 90 );
			}, 100 );
		};

		$(".js-next-btn").click(function(){
			pathway = $('input[type=radio][name=RecruitmentType]:checked' ).val();
			region = $('select[name="ApplyingTo"').val();
			
			region = region == "Hong Kong" ? "HK" : region;
			region = region == "South Africa" ? "SA" : region;
			region = region == "Deutschland" ? "DE" : region;
			
			$('.js-specific-field').hide();
			$('.js-specific-field[data-pathway~="' + pathway + '"]').show();
			$('.js-specific-field[data-pathway~="' + pathway + '"]').filter('.js-specific-field:not([data-region~="' + region + '"])').hide();
			
			
			var $form = $('.js-form[data-section="' + currentSection + '"]');

			if ($form != undefined){
				var areCurrentFormsValid = true;
				$.each($form, function(index, value) {
					if( !$(value).isValid(false, validationConfigs, true) ) {
						areCurrentFormsValid = false;
					}
				});
				if(!areCurrentFormsValid) {
					return false;
				}
			}
			$('.js-section[data-section="' + currentSection + '"]').hide();
			
			if ((nextSelection == 2 && pathway == "exforces" && region == "UK") 
				|| (nextSelection == 3 && region == "DE")) {
				currentSection++;
				nextSelection++;
				preSelection++;
			}
			
			
			if(nextSelection == 5){				 
				$(".js-pre-btn").hide();
				$(".js-next-btn").hide(); 
				$(".js-apply-btn").hide();							
			} else {
				$(".js-pre-btn").css('display', 'block');
			}
			
			if(nextSelection == 4) {	  
				$(".js-next-btn").hide();
				$(".js-apply-btn").css('display', 'block');
			}
			
			currentSection++;
			nextSelection++;
			preSelection++;
			setProgress();
			scrollToTop();
			
			$('.js-specific-field').hide();
			$('.js-specific-field[data-pathway~="' + pathway + '"]').show();
			$('.js-specific-field[data-pathway~="' + pathway + '"]').filter('.js-specific-field:not([data-region~="' + region + '"])').hide();
			
			
			$('.js-section[data-section="' + currentSection + '"]').fadeIn(100);
		});
		
		$(".js-pre-btn").click(function(){
			$(".js-next-btn").css('display', 'block');
			$(".js-apply-btn").hide()
			
			if(preSelection == 0){
				$(".js-pre-btn").hide()
			} else {
				$(".js-pre-btn").css('display', 'block');
			}
			
			$('.js-section[data-section="' + currentSection + '"]').hide();
			
			if (preSelection == 2 && pathway == "exforces" && region == "UK") {
				currentSection--;
				nextSelection--;
				preSelection--;
			}
			
			if (preSelection == 3 && region == "DE") {
				currentSection--;
				nextSelection--;
				preSelection--;
			}
			
			$('.js-section[data-section="' + preSelection + '"]').fadeIn(100);				  
			
			currentSection--;
			nextSelection--;
			preSelection--;
			setProgress();
			scrollToTop();
		});
		
		$(".js-apply-btn").click(function(){
			
			if( !$("form").isValid(false, validationConfigs, true) ) {
				return false;
			}
			
			$(".js-spinner").show();
			$(".js-apply-btn").prop("disabled",true);
			
			var data = $(".js-form:not(.js-cv-form)").serializeArray();
			
			var formJson = {application: objectifyForm(data) };
			
			delete formJson.application.file;

			$.ajax({
				type: "POST",
				dataType : "json",
				headers: { 
					'Accept': 'application/json',
					'Content-Type': 'application/json' 
				},
				data: JSON.stringify(formJson),
				url: "https://fdmsaldev-fdmgroup.cs89.force.com/apply/services/apexrest/ApplicationService",
				success: function(responseData, textStatus, jqXHR) {
					var value = responseData;
					if(uploadCv(value)){
						$(".js-apply-error").hide();
						$(".js-next-btn").trigger("click");
					} else {
						$(".js-apply-error").show();
					}
					
					$(".js-spinner").hide();
					$(".js-apply-btn").removeProp("disabled");
				},
				error: function (responseData, textStatus, errorThrown) {
					alert(responseData.status);
					alert(errorThrown);
					$(".js-apply-error").show();
			$(".js-spinner").hide();
			$(".js-apply-btn").removeProp("disabled");
				}
			});
			
		});
	});
	
	function getRegionSpecifics(region) {
		
	$('label').show();
	validationConfigs.lang = "en";
	$.validate(validationConfigs);
		
	switch(region) {
				case "UK":
					$('*[data-region~="ENG-Programme"]').hide();
					$('*[data-region~="ENG-Graduate"]').hide();
					$('*[data-region~="ENG-CA"]').hide();
					$('*[data-region~="ENG-USA"]').hide();
					$('*[data-region~="ENG-AUS"]').hide();
					$('*[data-region~="ENG-Graduate"]').hide();
					$('*[data-region~="ENG-CN"]').hide();
					$('*[data-region~="ENG-HK"]').hide();
					$('*[data-region~="ENG-IRL"]').hide();
					$('*[data-region~="ENG-SGP"]').hide();
					$('*[data-region~="ENG-ZAF"]').hide();
					$('*[data-region~="DE"]').hide();
			
					$('*[data-region~="ENG"]').show();
					$('*[data-region~="ENG-GB"]').show();
					break;
				case "USA":
					$('*[data-region~="ENG-GB"]').hide();
					$('*[data-region~="ENG-CA"]').hide();
					$('*[data-region~="ENG-Graduate"]').hide();
					$('*[data-region~="ENG-Programme"]').hide();
					$('*[data-region~="DE-DE"]').hide();
					$('*[data-region~="DE"]').hide();
					$('*[data-region~="ENG-AUS"]').hide();
					$('*[data-region~="ENG-CN"]').hide();
					$('*[data-region~="ENG-HK"]').hide();
					$('*[data-region~="ENG-SGP"]').hide();
					$('*[data-region~="ENG-ZAF"]').hide();
					$(".js-grad-only").hide();
					$('*[data-region~="ENG"]').show();
					$('*[data-region~="ENG-USA"]').show();
					$(".js-grad").show();
					$(".js-common-used").show();
					$(".js-exforces").show();
					$(".js-b2b").show();
					break;
				case "Australia":
					$('*[data-region~="ENG-Programme"]').hide();
					$('*[data-region~="DE"]').hide();
					$('*[data-region~="ENG-CA"]').hide();
					$('*[data-region~="ENG-USA"]').hide();
					$('*[data-region~="ENG-GB"]').hide();
					$('*[data-region~="ENG-CN"]').hide();
					$('*[data-region~="ENG-HK"]').hide();
					$('*[data-region~="ENG-SGP"]').hide();
					$('*[data-region~="ENG-ZAF"]').hide();
					$(".js-exforces").hide();
					$(".js-b2b").hide();
					$(".js-common-used").hide();
					$('*[data-region~="ENG-AUS"]').show();
					$('*[data-region~="ENG"]').show();
					$('*[data-region~="ENG-Graduate"]').show();
					$(".js-grad").show();
					$(".js-grad-only").show();
					break;
				case "Canada":
					$('*[data-region~="ENG-Programme"]').hide();
					$('*[data-region~="DE"]').hide();
					$('*[data-region~="ENG-CA"]').hide();
					$('*[data-region~="ENG-USA"]').hide();
					$('*[data-region~="ENG-GB"]').hide();
					$('*[data-region~="ENG-AUS"]').hide();
					$('*[data-region~="ENG-Graduate"]').hide();
					$('*[data-region~="ENG-CN"]').hide();
					$('*[data-region~="ENG-HK"]').hide();
					$('*[data-region~="ENG-SGP"]').hide();
					$('*[data-region~="ENG-ZAF"]').hide();
					$(".js-grad-only").hide();
					$(".js-exforces").hide();
					$(".js-b2b").hide();
					$(".js-grad").show();
					$(".js-common-used").show();
					$('*[data-region~="ENG"]').show();
					$('*[data-region~="ENG-CA"]').show();
					break;
				case "China":
					$('*[data-region~="ENG-Programme"]').hide();
					$('*[data-region~="DE"]').hide();
					$('*[data-region~="ENG-CA"]').hide();
					$('*[data-region~="ENG-USA"]').hide();
					$('*[data-region~="ENG-GB"]').hide();
					$('*[data-region~="ENG-AUS"]').hide();
					$('*[data-region~="ENG-Graduate"]').hide();
					$('*[data-region~="ENG-HK"]').hide();
					$('*[data-region~="ENG-SGP"]').hide();
					$('*[data-region~="ENG-ZAF"]').hide();
					$(".js-exforces").hide();
					$(".js-b2b").hide();
					$(".js-common-used").hide();
					$(".js-grad").show();
					$(".js-grad-only").show();
					$('*[data-region="ENG"]').show();
					$('*[data-region~="ENG-CN"]').show();
					$('*[data-region="ENG-Graduate"]').show();
					break;
				case "Hong Kong":
					$('*[data-region~="ENG-Programme"]').hide();
					$('*[data-region="ENG-Graduate"]').hide();
					$('*[data-region~="DE"]').hide();
					$('*[data-region~="ENG-CA"]').hide();
					$('*[data-region~="ENG-USA"]').hide();
					$('*[data-region~="ENG-GB"]').hide();
					$('*[data-region~="ENG-AUS"]').hide();
					$('*[data-region~="ENG-Graduate"]').hide();
					$('*[data-region~="ENG-CN"]').hide();
					$('*[data-region~="ENG-HK"]').hide();
					$('*[data-region~="ENG-SGP"]').hide();
					$('*[data-region~="ENG-ZAF"]').hide();
					$(".js-exforces").hide();
					$(".js-b2b").hide();
					$(".js-common-used").hide();
					$(".js-grad-only").hide();
					$('*[data-region~="ENG"]').show();
					$('*[data-region~="ENG-HK"]').show();
					break;
				case "Ireland":
					$('*[data-region~="ENG-Programme"]').hide();
					$('*[data-region="ENG-Graduate"]').hide();
					$('*[data-region~="DE"]').hide();
					$('*[data-region~="ENG-CA"]').hide();
					$('*[data-region~="ENG-USA"]').hide();
					$('*[data-region~="ENG-GB"]').hide();
					$('*[data-region~="ENG-AUS"]').hide();
					$('*[data-region~="ENG-Graduate"]').hide();
					$('*[data-region~="ENG-CN"]').hide();
					$('*[data-region~="ENG-HK"]').hide();
					$('*[data-region~="ENG-SGP"]').hide();
					$('*[data-region~="ENG-ZAF"]').hide();
			
					$('*[data-region~="ENG"]').show();
					$('*[data-region~="ENG-IRL"]').show();
					break;
				case "Singapore":
					$('*[data-region~="ENG-Programme"]').hide();
					$('*[data-region="ENG-Graduate"]').hide();
					$('*[data-region~="DE"]').hide();
					$('*[data-region~="ENG-CA"]').hide();
					$('*[data-region~="ENG-USA"]').hide();
					$('*[data-region~="ENG-GB"]').hide();
					$('*[data-region~="ENG-AUS"]').hide();
					$('*[data-region~="ENG-Graduate"]').hide();
					$('*[data-region~="ENG-CN"]').hide();
					$('*[data-region~="ENG-HK"]').hide();
					$('*[data-region~="ENG-IRL"]').hide();
					$('*[data-region~="ENG-SGP"]').hide();
					$('*[data-region~="ENG-ZAF"]').hide();
			
					$('*[data-region~="ENG"]').show();
					$('*[data-region~="ENG-SGP"]').show();
					break;
				case "South Africa":
					$('*[data-region~="ENG-Programme"]').hide();
					$('*[data-region="ENG-Graduate"]').hide();
					$('*[data-region~="DE"]').hide();
					$('*[data-region~="ENG-CA"]').hide();
					$('*[data-region~="ENG-USA"]').hide();
					$('*[data-region~="ENG-GB"]').hide();
					$('*[data-region~="ENG-AUS"]').hide();
					$('*[data-region~="ENG-Graduate"]').hide();
					$('*[data-region~="ENG-CN"]').hide();
					$('*[data-region~="ENG-HK"]').hide();
					$('*[data-region~="ENG-IRL"]').hide();
					$('*[data-region~="ENG-SGP"]').hide();
			
					$('*[data-region~="ENG-ZAF"]').show();
					break;
				case "Deutschland":
					$('*[data-region~="ENG-Programme"]').hide();
					$('*[data-region~="ENG-Graduate"]').hide();
					$('*[data-region~="ENG-CA"]').hide();
					$('*[data-region~="ENG-USA"]').hide();
					$('*[data-region~="ENG-GB"]').hide();
					$('*[data-region~="ENG-AUS"]').hide();
					$('*[data-region~="ENG-Graduate"]').hide();
					$('*[data-region~="ENG-CN"]').hide();
					$('*[data-region~="ENG-HK"]').hide();
					$('*[data-region~="ENG-IRL"]').hide();
					$('*[data-region~="ENG-SGP"]').hide();
					$('*[data-region~="ENG-ZAF"]').hide();
					$('*[data-region~="ENG"]').hide();
					$('label:not([data-region~="' + region + '"])').hide();
			
					$('*[data-region~="DE"]').show();
			
					validationConfigs.lang = "de";
					$.validate(validationConfigs);
					break;
				default:
					break;
			}
	}

});</script>