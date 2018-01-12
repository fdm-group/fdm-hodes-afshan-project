<div class="fdm-application-form-component" data-default-region="<?= $default_region ?>">
    <h2 class="js-loading" style="text-align: center; display:relative;">Loading</h2>
	<div class="js-wrapper  js-hidden">
		<header>
		
			<ul class="progress-bar" data-region="ENG">
				<li class="js-progress" data-section-id="0">
					<span class="progress-icon"></span>
					<span data-region="ENG-GB ENG-AUS ENG-CN ENG-HK ENG-IRL ENG-SGP ENG-ZAF">Select a Programme</span>
					<span data-region="ENG-CA ENG-USA">Select a Program</span>
				</li><li class="js-progress" data-section-id="1">
					<span class="progress-icon"></span>
					<span>Your Details</span>
				</li><li class="js-specific-field  js-progress"
                         data-pathway="graduate b2b"
                         data-section-id="2"
                         data-region="Canada Australia China HK Ireland Singapore SA ENG-CA ENG-AUS ENG-CN ENG-HK ENG-IRL ENG-SGP ENG-ZAF">
					<span class="progress-icon"></span>
					<span>Education</span>
				</li><li class="js-specific-field  js-progress"
                         data-pathway="graduate"
                         data-section-id="2"
                         data-region="UK ENG-GB">
					<span class="progress-icon"></span>
					<span>Education</span>
				</li><li class="js-specific-field  js-progress"
                         data-pathway="exforces graduate b2b"
                         data-section-id="2"
                         data-region="USA ENG-USA">
					<span class="progress-icon"></span>
					<span>Experience and Education</span>
				</li><li class="js-progress" data-section-id="3">
					<span class="progress-icon"></span>
					<span data-region="ENG-USA ENG-CA">Self-Identification</span>
					<span data-region="ENG-GB ENG-AUS ENG-CN ENG-HK ENG-IRL ENG-SGP  ENG-ZAF">Location Details</span>
				</li><li class="js-progress" data-section-id="4">
					<span class="progress-icon"></span>
					<span>
						<span data-region="ENG-CA ENG-USA">Regional</span>
						<span data-region="ENG-CN ENG-GB ENG-HK ENG-AUS ENG-IRL ENG-SGP ENG-ZAF">Selection</span> Criteria
					</span>
				</li>
			</ul>
			
			<ul class="progress-bar" data-region="DE">
				<li class="js-progress" data-section-id="0">
					<span class="progress-icon"></span>
					<span>Traineeprogramm</span>
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
		<section class="[ js-section ]" data-section="0">
			<h1>
				<span data-region="ENG-GB  ENG-HK  ENG-SGP">Select a Programme</span>
				<span data-region="ENG-CA">FDM Careers Program</span>
				<span data-region="ENG-USA">Select a Program</span>
				<span data-region="ENG-AUS	ENG-CN	ENG-IRL	 ENG-ZAF">FDM Graduate Programme</span>
				<span data-region="DE" >Starten Sie Ihre Karriere in der IT</span>
			</h1>
			<form class="[ js-form ]" data-section="0">
				<label>Please select a location<span class="apply-form__required">*</span></label>
				<select id="applying-to" name="ApplyingTo" class="js-region">
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
					<span data-region="ENG-GB ENG-HK ENG-SGP ENG-CN ENG-IRL ENG-ZAF">Please select the programme you would like to apply for<span class="apply-form__required">*</span></span>
					<span data-region="ENG-USA ENG-CA">Please select the program you would like to apply for<span class="apply-form__required">*</span></span>
				</label>
				<label class="js-hidden" data-region="DE">Bewerben Sie sich jetzt für das FDM Traineeprogramm<span class="apply-form__required">*</span></label>
				
				<div class="program-type-boxes">
				
					<label data-region="ENG-GB ENG-USA ENG-AUS ENG-CA ENG-CN ENG-HK ENG-IRL ENG-SGP ENG-ZAF DE">
						<img src="<?= Hodes\FDM\asset_url('img/graduates.svg') ?>" />
						<label data-region="ENG">Graduate</label>
						<label data-region="DE">Traineeprogramm</label>
						<input type="radio" name="RecruitmentType" value="Graduate" data-validation="required" data-validation-error-msg-container="#programme-form__pathway-err"/>
						<p data-region="ENG">For graduates looking to launch their careers as an IT or business consultant</p>
					</label>
					
					<label data-region="ENG-GB ENG-USA">
						<img src="<?= Hodes\FDM\asset_url('img/exforces.svg') ?>" />
						<label data-region="ENG-GB">Ex-Forces</label>
						<label data-region="ENG-USA">Veterans</label>
						<input type="radio" name="RecruitmentType" value="Military" />
						<p>For those with military experience looking to transition to a civilian career</p>
					</label>
					
					<label data-region="ENG-GB ENG-HK ENG-SGP">
						<img src="<?= Hodes\FDM\asset_url('img/b2b.svg') ?>" />
						<label>Getting Back to Business</label>
						<input type="radio" name="RecruitmentType" value="ReturnToWork" />
						<p>For individuals returning to work after a career break</p>
					</label>
					
				</div>
				
				<div class="" id="programme-form__pathway-err"></div>

			</form>
		</section>

	<!-- ####### Your Details ####### -->
		<section class="[ js-section ]" style="display:none;" data-section="1">
			<h1>
				<span data-region="ENG">Your Details</span>
				<span data-region="DE">Persönliche Informationen</span>
			</h1>
			<form class="[ apply-form ]	 [ js-form ]" data-section="1">
						
				<div class="form-row js-specific-field" data-pathway="graduate exforces b2b" data-region="UK Australia Canada China HK Ireland Singapore SA USA">
					<div>
						<label for="details-form__title">Title</label>
					</div>
					<div>
						<select id="details-form__title" name="Title">
							<option class="js-default-select" value="" disabled selected hidden>Please select one</option>	
							<option class="js-specific-field" data-pathway="graduate exforces b2b" data-region="DE UK Australia China HK Ireland Singapore SA"  value="None">None</option>
							<option value="Mr.">Mr.</option>
							<option value="Mrs.">Mrs.</option>
							<option value="Miss.">Miss.</option>
							<option value="Ms.">Ms.</option>
							<option class="js-specific-field" data-pathway="graduate exforces b2b" data-region="USA Canada" value="Mx">Mx.</option>
							<option value="Dr.">Dr.</option>
							<option class="js-specific-field" data-pathway="graduate exforces b2b" data-region="DE UK Australia China HK Ireland Singapore SA" value="Prof.">Prof.</option>
						</select>
					</div>
				</div>
				
				<div class="form-row js-specific-field" data-pathway="graduate" data-region="DE">
					<div>
						<label for="details-form__title" data-region="DE">Anrede</label>
					</div>
					<div>
						<select id="details-form__title" name="Title">
							<option class="js-default-select" value="" disabled selected hidden>Please select one</option>	
							 <option value="Frau">Frau</option>
							 <option value="Herr">Herr</option>
							 <option value="Dr.">Dr.</option>
							 <option value="Prof.">Prof.</option>
						</select>
					</div>
				</div>
				
				<div class="form-row js-specific-field" data-pathway="graduate exforces b2b" data-region="DE UK Australia Canada China HK Ireland Singapore SA USA">
					<div>
						<label for="details-form__first-name">First Name<span class="apply-form__required">*</span></label>
						<label data-region="DE" for="details-form__first-name">Vorname<span class="apply-form__required">*</span></label>
					</div>
					<div>
						<input id="details-form__first-name" type="text" name="FirstName" data-validation="required" data-validation-error-msg-container="#details-form__first-name-err"/>
					</div>
					<div class="apply-form__val-msg" id="details-form__first-name-err"></div>
				</div>
				
				<div class="form-row js-specific-field" data-pathway="graduate exforces b2b" data-region="DE UK Australia Canada China HK Ireland Singapore SA USA">
					<div>
						<label for="details-form__last-name">Last Name<span class="apply-form__required">*</span></label>
						<label data-region="DE" for="details-form__last-name">Nachname<span class="apply-form__required">*</span></label>
					</div>
					<div>
						<input id="details-form__last-name" type="text" name="LastName" data-validation="required" data-validation-error-msg-container="#details-form__last-name-err"/>
					</div>
					<div class="apply-form__val-msg" id="details-form__last-name-err"></div>
				</div>
				
				<div class="form-row js-specific-field" data-pathway="graduate exforces b2b" data-region="DE UK Australia Canada China HK Ireland Singapore SA USA">
					<div>
						<label for="details-form__email">Email<span class="apply-form__required">*</span></label>
						<label data-region="DE" for="details-form__email">E-Mail-Adresse<span class="apply-form__required">*</span></label>
					</div>
					<div>
						<span class="js-specific-field	apply-form__info" data-pathway="graduate exforces b2b" data-region="UK Australia Canada China HK Ireland Singapore SA USA">E.g. youremail@email.com</span>
						<span class="js-specific-field	apply-form__info" data-pathway="graduate" data-region="DE" >z.B. deinemail@email.com</span>
						<input id="details-form__email" type="text" name="Email" data-validation="email" data-validation-error-msg-container="#details-form__email-err"/>
					</div>
					<div class="apply-form__val-msg" id="details-form__email-err"></div>
				</div>
				
				<div class="form-row js-specific-field" data-pathway="graduate exforces b2b" data-region="DE UK Australia Canada China HK Ireland Singapore SA USA">
					<div>
						<label for="details-form__phone">Phone<span class="apply-form__required">*</span></label>
						<label data-region="DE" for="details-form__phone">Telefonnummer<span class="apply-form__required">*</span></label>
					</div>
					<div>
						<span class="[ apply-form__info ]	 [ js-specific-field ]" data-pathway="graduate" data-region="Australia">E.g. +61 123 456 7891</span>
						<span class="[ apply-form__info ]	 [ js-specific-field ]" data-pathway="graduate exforces b2b" data-region="UK">E.g. +44 123 456 7891</span>
						<span class="[ apply-form__info ]	 [ js-specific-field ]" data-pathway="graduate" data-region="Canada">E.g. +1 647 693 9302</span>
						<span class="[ apply-form__info ]	 [ js-specific-field ]" data-pathway="graduate" data-region="China">E.g. +86 647 693 9302</span>
						<span class="[ apply-form__info ]	 [ js-specific-field ]" data-pathway="graduate" data-region="Ireland">E.g. +353 1 234 5678</span>
						<span class="[ apply-form__info ]	 [ js-specific-field ]" data-pathway="graduate b2b" data-region="HK">E.g. +852 1234 5678</span>
						<span class="[ apply-form__info ]	 [ js-specific-field ]" data-pathway="graduate b2b" data-region="Singapore">E.g. +65 1234 5678</span>
						<span class="[ apply-form__info ]	 [ js-specific-field ]" data-pathway="graduate" data-region="SA">E.g. +27 12 345 6789</span>
						<span class="[ apply-form__info ]	 [ js-specific-field ]" data-pathway="graduate exforces b2b" data-region="USA">E.g. +1 917 789 1053</span>
						<span class="[ apply-form__info ]	 [ js-specific-field ]" data-pathway="graduate" data-region="DE">z.B +49(0) 69 9675 9273</span>
						<input id="details-form__phone" type="text" name="Phone" data-validation="required" data-validation-error-msg-container="#details-form__phone-err"/>
					</div>
					<div class="apply-form__val-msg" id="details-form__phone-err"></div>
				</div>
				
				<div class="form-row js-specific-field" data-pathway="graduate exforces b2b" data-region="DE UK Canada Ireland SA USA">
					<div>
						<label for="details-form__address-one">Address<span class="apply-form__required">*</span></label>
						<label data-region="DE" for="details-form__address-one">Adresse<span class="apply-form__required">*</span></label>
					</div>
					<div>
						<span class="apply-form__info  js-specific-field" data-pathway="graduate" data-region="DE">z.B. Straße, Hausnummer</span>
						<input id="details-form__address-one" type="text" name="Street1" data-validation="required" data-validation-error-msg-container="#details-form__address-err"/>
					</div>
					<div class="apply-form__val-msg" id="details-form__address-err"></div>
				</div>
				
				<div class="form-row js-specific-field" data-pathway="graduate exforces b2b" data-region="DE UK Canada Ireland SA USA">
					<div>
						<label></label>
					</div>
					<div>
						<input id="details-form__address-two" type="text" name="Street2"/>
					</div>
				</div>
				
				<div class="form-row js-specific-field" data-pathway="graduate exforces b2b" data-region="DE UK Australia China Canada HK Ireland Singapore SA USA">
					<div>
						<label class="js-specific-field" data-pathway="graduate exforces b2b" data-region="UK Canada China HK Singapore SA USA" for="details-form__city">City<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="graduate" data-region="Ireland" for="details-form__city">Town<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="graduate" data-region="Australia" for="details-form__city">City/Town<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="graduate" data-region="DE" for="details-form__city">Stadt<span class="apply-form__required">*</span></label>
					</div>
					<div>
						<input id="details-form__city" type="text" name="City" data-validation="required" data-validation-error-msg-container="#details-form__city-err"/>
					</div>
					<div class="apply-form__val-msg" id="details-form__city-err"></div>
				</div>

				<div class="form-row js-specific-field" data-pathway="graduate exforces b2b" data-region="Ireland UK Australia Canada China HK Singapore SA USA">
					<div>
						<label class="js-specific-field" data-pathway="graduate exforces b2b" data-region="UK China" for="details-form__county">County<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="graduate b2b" data-region="Singapore HK" for="details-form__county">County/State/Province<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="graduate exforces b2b" data-region="SA Ireland" for="details-form__county">County/Province<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="graduate exforces b2b" data-region="USA" for="details-form__county">State/Province<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="graduate" data-region="Canada" for="details-form__county">Province<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="graduate" data-region="Australia" for="details-form__city">State<span class="apply-form__required">*</span></label>
					</div>
					<div>
						<input id="details-form__county" type="text" name="County" data-validation="required" data-validation-error-msg-container="#details-form__county-err"/>
					</div>
					<div class="apply-form__val-msg" id="details-form__county-err"></div>
				</div>
				
				<div class="form-row js-specific-field" data-pathway="graduate exforces b2b" data-region="DE UK Canada SA USA">
					<div>
						<label class="js-specific-field" data-pathway="graduate exforces b2b" data-region="UK China" for="details-form__postcode">Postcode<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="graduate" data-region="Canada SA" for="details-form__postcode">Postal Code<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="graduate b2b" data-region="Singapore HK" for="details-form__postcode">Postal Code/Zip<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="graduate exforces b2b" data-region="USA" for="details-form__postcode">Zip Code<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="graduate" data-region="Australia" for="details-form__city">Zip/Postcode<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="graduate" data-region="DE" for="details-form__postcode">PLZ<span class="apply-form__required">*</span></label>
					</div>
					<div>
						<input id="details-form__postcode" type="text" name="postcode" data-validation="required" data-validation-error-msg-container="#details-form__postcode-err"/>
					</div>
					<div class="apply-form__val-msg" id="details-form__postcode-err"></div>
				</div>
				
				<div class="form-row js-specific-field" data-pathway="graduate" data-region="Ireland">
					<div>
						<label>Eircode (if applicable)</label>
                    </div>
                    <div>
						<input id="details-form__postcode" type="text" name="postcode"/>
					</div>
				</div>
				
				<div class="form-row js-specific-field" data-pathway="graduate exforces b2b" data-region="DE UK Australia Canada China HK Ireland Singapore SA USA">
					<div>
						<label for="details-form__country">Country<span class="apply-form__required">*</span></label>
						<label data-region="DE" for="details-form__country">Land<span class="apply-form__required">*</span></label>
					</div>
					<div>
						<input id="details-form__country" type="text" name="Country" data-validation="required" data-validation-error-msg-container="#details-form__country-err"/>
					</div>
					<div class="apply-form__val-msg" id="details-form__country-err"></div>
				</div>
                
                <!-- Education level - Only UK B2B -->
                <div class="form-row js-specific-field" data-pathway="b2b" data-region="UK">
					<div>
						<label for="education-form__edu-level-b2b">Education Level<span class="apply-form__required">*</span></label>
					</div>
					<div>
						<select id="education-form__edu-level-b2b" type="text" name="EducationLevel" data-validation="required" data-validation-error-msg-container="#education-form__edu-level-err-b2b">
							<option class="js-default-select" value="" disabled selected hidden>Please select one</option>
							<option value="A Level or equivalent">A Level or equivalent</option>
							<option value="Bachelor's Degree">Bachelor's Degree</option>
							<option value="Master's Degree/Post Graduate Qualification / MBA">Master's Degree/Post Graduate Qualification / MBA</option>
							<option value="Doctorate Degree">Doctorate Degree</option>
							<option value="Other">Other</option>

						</select>
					</div>
					<div class="apply-form__val-msg" id="education-form__edu-level-err-b2b"></div>
				</div>
				
				<div class="form-row js-specific-field js-campaign-name" data-pathway="graduate exforces b2b" data-region="DE UK Australia Canada China HK Ireland Singapore SA USA">
					<div>
						<label for="details-form__hear-about">Where did you hear about us?<span class="apply-form__required">*</span></label>
						<label data-region="DE" for="details-form__hear-about">Wie haben Sie von uns erfahren?<span class="apply-form__required">*</span></label>
					</div>
					<div>
						<select id="details-form__hear-about" name="OnlineSource" data-validation="required" data-validation-error-msg-container="#details-form__hear-about-err">
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
							<option class="js-specific-field" data-pathway="graduate" data-region="Australia" value="News Article/Press">News Article / Press</option>
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
							<option class="js-specific-field" data-pathway="graduate" data-region="Canada" value="News Article/Press">News Article / Press</option>
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
							<option class="js-specific-field" data-pathway="graduate" data-region="China" value="News Article/Press">News Article / Press</option>
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
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="Absolventa">Absolventa</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="Campus Tours">Campus Tours</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="CareerBuilder">CareerBuilder</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="Empfehlung durch Bekannte">Empfehlung durch Bekannte</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="Facebook">Facebook</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="FDM Blog">FDM Blog</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="Get in IT">Get in IT</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="Glassdoor">Glassdoor</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="Google">Google</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="Hochschule">Hochschule</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="Indeed">Indeed</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="JobScout24">JobScout24</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="Jobware">Jobware</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="Karrieremesse">Karrieremesse</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="Karriereseite der Universität">Karriereseite der Universität</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="Komm mach MINT">Komm mach MINT</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="LinkedIn">LinkedIn</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="Monster">Monster</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="DE" value="Presse/Nachrichten">Presse / Nachrichten</option>
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
							<option class="js-specific-field" data-pathway="b2b" data-region="HK" value="News Article/Press">News Article / Press</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="HK" value="Other">Other</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="HK" value="Other Job Board">Other Job Board</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="HK" value="Referral">Referral</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="HK" value="Twitter">Twitter</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="HK" value="YouTube">YouTube</option>
							<!-- HK - Grad -->
							<option class="js-specific-field" data-pathway="graduate" data-region="HK" value="Alumni University Careers Service">Alumni University Careers Service</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="HK" value="Careers Group">Careers Group</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="HK" value="CV Library">CV Library</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="HK" value="Facebook">Facebook</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="HK" value="Glassdoor">Glassdoor</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="HK" value="Google">Google</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="HK" value="Careers Fairs">Careers Fairs</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="HK" value="Freshlinker">Freshlinker</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="HK" value="Indeed">Indeed</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="HK" value="Instagram">Instagram</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="HK" value="JobsDB">JobsDB</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="HK" value="LinkedIn">LinkedIn</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="HK" value="News Article/Press">News Article / Press</option>
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
							<option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Magazine/Newspaper Article">Magazine / Newspaper Article</option>
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
							<option class="js-specific-field" data-pathway="b2b" data-region="Singapore" value="LinkedIn">LinkedIn</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="Singapore" value="News Article/Press">News Article / Press</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="Singapore" value="Other">Other</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="Singapore" value="Other Job Board">Other Job Board</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="Singapore" value="Referral">Referral</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="Singapore" value="Twitter">Twitter</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="Singapore" value="YouTube">YouTube</option>
							<!-- Singapore - Grad -->
							<option class="js-specific-field" data-pathway="graduate" data-region="Singapore" value="Alumni University Careers Service">Alumni University Careers Service</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Singapore" value="Careers Group">Careers Group</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Singapore" value="CV Library">CV Library</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Singapore" value="Facebook">Facebook</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Singapore" value="Glassdoor">Glassdoor</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Singapore" value="Google">Google</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Singapore" value="Careers Fairs">Careers Fairs</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Singapore" value="Indeed">Indeed</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Singapore" value="Instagram">Instagram</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Singapore" value="JobsDB">JobsDB</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Singapore" value="Jobstreet">Jobstreet</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Singapore" value="GradSingapore">GradSingapore</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Singapore" value="Gradconnection">Gradconnection</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Singapore" value="Jobsbank">Jobsbank</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Singapore" value="LinkedIn">LinkedIn</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Singapore" value="News Article/Press">News Article / Press</option>
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
							<option class="js-specific-field" data-pathway="exforces" data-region="UK" value="Glasgow Subway">Glasgow Subway</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="UK" value="Leeds Bus">Leeds Bus</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="UK" value="Leeds Station">Leeds Station</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="UK" value="LinkedIn">LinkedIn</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="UK" value="Magazine/Newspaper Article">Magazine / Newspaper Article</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="UK" value="Officers Association">Officers Association</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="UK" value="Other">Other</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="UK" value="Other Job Board">Other Job Board</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="UK" value="Twitter">Twitter</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="UK" value="White Ensign Association">White Ensign Association</option>
							<!-- UK - b2b -->
							<option class="js-specific-field" data-pathway="b2b" data-region="UK" value="Association for Project Management (APM)">Association for Project Management (APM)</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="UK" value="Employee Referral">Employee Referral</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="UK" value="Facebook">Facebook</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="UK" value="FDM Blog">FDM Blog</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="UK" value="Glasgow Subway">Glasgow Subway</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="UK" value="Instagram">Instagram</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="UK" value="Leeds Bus">Leeds Bus</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="UK" value="Leeds Station">Leeds Station</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="UK" value="LinkedIn">LinkedIn</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="UK" value="Mumsnet">Mumsnet</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="UK" value="Magazine/Newspaper Article">Magazine / Newspaper Article</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="UK" value="Other">Other</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="UK" value="Other Job Board">Other Job Board</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="UK" value="S1 Jobs">S1 Jobs</option>
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
							<option class="js-specific-field" data-pathway="graduate" data-region="UK" value="Glasgow Subway">Glasgow Subway</option>
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
							<option class="js-specific-field" data-pathway="graduate" data-region="UK" value="Leeds Bus">Leeds Bus</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="UK" value="Leeds Station">Leeds Station</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="UK" value="LinkedIn">LinkedIn</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="UK" value="Milkround">Milkround</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="UK" value="Magazine/Newspaper Article">Magazine / Newspaper Article</option>
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
							<option class="js-specific-field" data-pathway="b2b" data-region="USA" value="Career Fair / Event">Career Fair / Event</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="USA" value="Facebook">Facebook</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="USA" value="FDM Blog">FDM Blog</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="USA" value="Glassdoor">Glassdoor</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="USA" value="Google">Google</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="USA" value="Government Agency">Government Agency</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="USA" value="Indeed">Indeed</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="USA" value="Instagram">Instagram</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="USA" value="Job Board - Other">Job Board - Other</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="USA" value="LinkedIn">LinkedIn</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="USA" value="Local Networking / Meetup Group">Local Networking / Meetup Group</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="USA" value="Monster">Monster</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="USA" value="News Article / Press">News Article / Press</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="USA" value="NY State Job Bank">NY State Job Bank</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="USA" value="Referral">Referral</option>
                            <option class="js-specific-field" data-pathway="b2b" data-region="USA" value="Symplicity">Symplicity</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="USA" value="The Muse">The Muse</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="USA" value="Twitter">Twitter</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="USA" value="Women’s Job List">Women’s Job List</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="USA" value="Women For Hire">Women For Hire</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="USA" value="Women Who Code">Women Who Code</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="USA" value="YouTube">YouTube</option>
							<option class="js-specific-field" data-pathway="b2b" data-region="USA" value="ZipRecruiter">ZipRecruiter</option>
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
							<option class="js-specific-field" data-pathway="graduate" data-region="USA" value="News Article/Press">News Article / Press</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="USA" value="Referral">Referral</option>
                            <option class="js-specific-field" data-pathway="graduate" data-region="USA" value="Symplicity">Symplicity</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="USA" value="The Muse">The Muse</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="USA" value="Twitter">Twitter</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="USA" value="University Job Board">University Job Board</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="USA" value="YouTube">YouTube</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="USA" value="ZipRecruiter">ZipRecruiter</option>
							<!-- US - Exforces -->
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="Army CSP Program">Army CSP Program</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="Army PaYS Program">Army PaYS Program</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="CareerBuilder">CareerBuilder</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="Career Fair / Veteran Event">Career Fair / Veteran Event</option>
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
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="News Article/Press">News Article / Press</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="NY State Job Bank">NY State Job Bank</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="RecruitMilitary">RecruitMilitary</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="Referral">Referral</option>
                            <option class="js-specific-field" data-pathway="exforces" data-region="USA" value="Symplicity">Symplicity</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="The Muse">The Muse</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="Twitter">Twitter</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="University Job Board">University Job Board</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="YouTube">YouTube</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="ZipRecruiter">ZipRecruiter</option>
                            
							
						</select>
					</div>
					<div class="apply-form__val-msg" id="details-form__hear-about-err"></div>
				</div>
				
				<div class="form-row js-specific-field" data-pathway="graduate" data-region="DE UK Australia Canada China HK Ireland Singapore">
					<div>
						<label class="js-specific-field" data-pathway="graduate" data-region="UK Australia China HK Ireland Singapore" for="details-form__pathway ">Preferred learning pathway<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="graduate" data-region="Canada USA" for="details-form__pathway">Preferred entry-level program<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="graduate" data-region="DE" for="details-form__pathway">Bevorzugter Trainingsbereich<span class="apply-form__required">*</span></label>
					</div>
					<div>
						<select id="details-form__pathway" class="js-pathway" type="text" name="Pathway" data-validation="required" data-validation-error-msg-container="#details-form__pathway-err">
							<option class="js-default-select" value="" selected disabled hidden>Please select one</option>
							<option data-region="DE" value="Business Analyse">Business Analyse</option>
							<option data-region="DE" value="Business Intelligence">Business Intelligence</option>
							<option data-region="DE" value="Financial Application Management">Financial Application Management</option>
							<option data-region="DE" value="IT Service Management">IT Service Management</option>
							<option data-region="DE" value="Java / Mainframe Entwicklung">Java / Mainframe Entwicklung</option>
							<option data-region="DE" value="Projekt Management / Business Analyse">Projekt Management / Business Analyse</option>
							<option data-region="DE" value="Risk Regulation &amp; Compliance">Risk Regulation &amp; Compliance</option>
                            <option data-region="DE" value="Software Entwicklung">Software Entwicklung</option>
							<option data-region="DE" value="Software Testing">Software Testing</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="UK China Ireland" value="Business">Business</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="UK China Ireland" value="Technical">Technical</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="UK China Ireland" value="No preference">No preference</option>
                            <option class="js-specific-field" data-pathway="graduate" data-region="Canada" value="Data Analysis / Business Intelligence">Data Analysis / Business Intelligence</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Canada Singapore HK" value="IT Service Management (ITSM)">IT Service Management (ITSM)</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Canada Singapore HK" value="Project Management (PMO)">Project Management (PMO)</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Canada Singapore HK" value="Software Development">Software Development</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Canada" value="No preference">No preference</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Australia HK" value="Business Analysis">Business Analysis</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Australia" value="Software Development">Software Development</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Australia Singapore" value="Mx.3 Support">Mx.3 Support</option>
							<option class="js-specific-field" data-pathway="graduate" data-region="Singapore" value="Testing">Testing</option>
						</select>
                        <input class="js-pre-def-pathway js-hidden" name="Pathway" type="text" disabled/>
					</div>
					<div class="apply-form__val-msg" id="details-form__pathway-err"></div>
				</div>
				
				<div class="form-row js-specific-field" data-pathway="graduate exforces b2b" data-region="USA">
					<div>
						<label class="js-specific-field" data-pathway="graduate" data-region="USA">Preferred entry-level program<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="exforces b2b" data-region="USA">Preferred career program<span class="apply-form__required">*</span></label>
					</div>
					<div>
						<select id="details-form__pathway" class="js-pathway" type="text" name="Pathway" data-validation="required" data-validation-error-msg-container="#details-form__pathway-err-usa">
							<option class="js-default-select" value="" selected disabled hidden>Please select one</option>
                            <option class="js-specific-field" data-pathway="exforces" data-region="USA" value="Advanced Project Management (PMO)">Advanced Project Management (PMO)</option>
							<option value="Data Analysis / Business Intelligence">Data Analysis / Business Intelligence</option>
							<option value="DevOps">DevOps</option>
							<option value="IT Service Management (ITSM)">IT Service Management (ITSM)</option>
							<option value="Project Management (PMO)">Project Management (PMO)</option>
							<option value="Risk, Regulation & Compliance">Risk, Regulation &amp; Compliance</option>
							<option value="Software Development">Software Development</option>
							<option value="No preference">No preference</option>
						</select>
                        <input class="js-pre-def-pathway js-hidden" name="Pathway" type="text" disabled/>
					</div>
					<div class="apply-form__val-msg" id="details-form__pathway-err-usa"></div>
				</div>

				<div class="form-row [ js-specific-field ]" data-pathway="graduate" data-region="DE">
					<div>
						<label data-region="DE">Sind Sie deutschlandweit geographisch flexibel<span class="apply-form__required">*</span></label>
					</div>
					<div class="radio-group-horizontal">
						<label  data-region="DE">
							<input type="radio" value="yes" name="GeographicalFlexibility" data-validation="required" data-validation-error-msg-container="#selection-form__geoflex-commit-err"/>
							<span>Ja</span>
						</label>
						<label  data-region="DE">
							<input type="radio" value="no" name="GeographicalFlexibility"/>
							<span>Nein</span>
						</label>
					</div>
					<div class="apply-form__val-msg" id="selection-form__geoflex-commit-err"></div>
				</div>

				<div class="form-row js-specific-field" data-pathway="exforces" data-pathway="exforces" data-region="UK">
					<div>
						<label for="details-form__rank">Rank<span class="apply-form__required">*</span></label>
					</div>
					<div>
						<input id="details-form__rank" type="text" name="Rank" data-validation="required" data-validation-error-msg-container="#details-form__rank-err"/>
					</div>
					<div class="apply-form__val-msg" id="details-form__rank-err"></div>
				</div>
				
				<div class="form-row js-specific-field" data-pathway="exforces" data-region="UK">
					<div>
						<label for="details-form__service">Service<span class="apply-form__required">*</span></label>
					</div>
					<div>
						<select id="details-form__service" type="text" name="Service" data-validation="required" data-validation-error-msg-container="#details-form__service-err">
							<option class="js-default-select" value="" disabled selected hidden>Please select one</option>	
							<option value="British Army">British Army</option>
							<option value="Royal Navy/Royal Marines">Royal Navy/Royal Marines</option>
							<option value="Royal Airforce">Royal Airforce</option>
							<option value="Other">Other</option>
						</select>
					</div>
					<div class="apply-form__val-msg" id="details-form__service-err"></div>
				</div>
				
				<div class="form-row js-specific-field" data-pathway="exforces" data-region="UK">
					<div>
						<label for="details-form__service-length">Length of Service</label>
					</div>
					<div>
						<input id="details-form__service-length" type="text" name="LengthOfService"/>
					</div>
				</div>
				
				<div class="form-row js-specific-field" data-pathway="exforces" data-region="UK">
					<div>
						<label for="details-form__availability">Availability</label>
					</div>
					<div>
						<input id="details-form__availability" type="date" name="AvailabilityDate"/>
					</div>
				</div>
				
				<div class="form-row js-specific-field" data-pathway="exforces" data-region="UK">
					<div>
						<label for="details-form__route">Route you are applying for</label>
					</div>
					<div>
						<select id="details-form__service" class="js-pathway" type="text" name="Pathway">
							<option class="js-default-select" value="" disabled selected hidden>Please select one</option>	
							<option value="Traditional">Traditional</option>
							<option value="Advanced">Advanced</option>
							<option value="Don't know">Don't know</option>
						</select>
                        <input class="js-pre-def-pathway js-hidden" name="Pathway" type="text" disabled/>
					</div>
				</div>
				
				<div class="form-row js-specific-field" data-pathway="exforces" data-region="UK">
					<div>
						<label for="details-form__personal">Why do you think you would be a good candidate for FDM's Ex-Forces Programme?</label>
					</div>
					<div>
						<textarea id="details-form__personal" rows="11" name="PersonalStatement" data-validation="length" data-validation-length="max750" data-validation-error-msg-container="#details-form__personal-err"></textarea>
						<span><span id="details-form__personal-max-length">750</span> characters left</span>
					</div>
					<div class="apply-form__val-msg" id="details-form__personal-err"></div>
				</div>
				
				<p class="[ js-specific-field ]" data-pathway="graduate b2b exforces" data-region="China Australia Ireland">Please note: We provide our trainees with individual learning pathways to suit their specific skill sets. Due to this, we cannot guarantee that you will be trained in your preferred learning pathway. If you are interested in more than one career path you do not need to submit multiple applications, we will discuss all the options with you once we have reviewed your submission.</p>
				<p class="[ js-specific-field ]" data-pathway="graduate" data-region="UK">Please note: We provide our trainees with individual learning pathways to suit their specific skill sets. Due to this, we cannot guarantee that you will be trained in your preferred learning pathway. If you are interested in more than one career path you do not need to submit multiple applications, we will discuss all the options with you once we have reviewed your submission.</p>
				<p class="[ js-specific-field ]" data-pathway="graduate" data-region="HK Singapore">Please note: We provide our trainees with individual learning pathways to suit their specific skill sets. Due to this, we cannot guarantee that you will be trained in your preferred learning pathway. If you are interested in more than one career path you do not need to submit multiple applications, we will discuss all the options with you once we have reviewed your submission.</p>
				<p class="[ js-specific-field ]" data-pathway="graduate b2b exforces" data-region="Canada">Please note: If you are interested in more than one career path, please only submit one application. We will review your submission and discuss the options available to you.</p>
				<p class="[ js-specific-field ]" data-pathway="graduate b2b exforces" data-region="USA">Please note: If you are interested in more than one career path, please only submit one application. We will review your submission and discuss the options available to you.</p>
				<p class="[ js-specific-field ]" data-pathway="graduate" data-region="DE">Sollten Sie sich für mehr als einen Trainingsbereich interessieren, genügt eine einzige Bewerbung. Nach Durchsicht Ihrer Unterlagen besprechen wir mögliche Optionen gerne persönlich mit Ihnen.</p>
			</form>
		</section>

	<!-- ####### Education ####### -->
		<section class="[ js-section ]" style="display:none;" data-section="2">
			<h1>
				<span data-region="ENG-GB ENG-CA ENG-AUS ENG-CN ENG-HK ENG-IRL ENG-SGP ENG-ZAF">Education</span>
				<span data-region="ENG-USA">Experience and Education</span>
				<span data-region="DE">Ausbildung</span>
			</h1>
			<form class="[ apply-form ]	 [ js-form ]" data-section="2">
			
				<div class="form-row [ js-specific-field ]" data-pathway="graduate" data-region="SA UK Australia HK Ireland Singapore">
					<div>
						<label>Applicant status<span class="apply-form__required">*</span></label>
					</div>
					<div class="radio-group-vertical">
						<label>
							<input id="education-form__app-status" type="radio" value="graduated" name="ApplicationStatus" data-validation="required" data-validation-error-msg-container="#education-form__app-status-err"/>
							<span>Graduated and looking to launch my career</span>
						</label>
						<label>
							<input id="education-form__app-status" type="radio" value="still studying" name="ApplicationStatus"/>
							<span>Currently studying and looking for future start</span>
						</label>
					</div>
					<div class="apply-form__val-msg" id="education-form__app-status-err"></div>
				</div>
				
				<div class="form-row [ js-specific-field ]" data-pathway="graduate b2b exforces" data-region="USA China Canada">
					<div>
						<label>Applicant status<span class="apply-form__required">*</span></label>
					</div>
					<div class="radio-group-vertical">
						<label>
							<input id="education-form__app-status" type="radio" value="immediate start" name="ApplicationStatus" data-validation="required" data-validation-error-msg-container="#education-form__app-status-err"/>
							<span>Applying for immediate start date within 6 months</span>
						</label>
						<label>
							<input id="education-form__app-status" type="radio" value="6+ months" name="ApplicationStatus"/>
							<span>Applying for deferred start date in 6+ months</span>
						</label>
					</div>
					<div class="apply-form__val-msg" id="education-form__app-status-err"></div>
				</div>
				
				<div class="form-row [ js-specific-field ]" data-pathway="exforces" data-region="USA">
					<div>
						<label>Have you served in the US Military?</label>
					</div>
					<div class="radio-group-horizontal">
						<label>
							<input id="education-form__served" type="radio" value="yes" name="ArmedforcesVeteran"/>
							<span>Yes</span>
						</label>
						<label>
							<input id="education-form__served" type="radio" value="no" name="ArmedforcesVeteran"/>
							<span>No</span>
						</label>
					</div>
				</div>

				<div class="form-row js-specific-field" data-pathway="exforces" data-region="USA">
					<div>
						<label for="education-form__service">Military Affiliation</label>
					</div>
					<div>
						<select id="education-form__service" type="text" name="Service">
							<option class="js-default-select" value="" disabled selected hidden>Please select one</option>	
							<option value="Army">Army</option>
							<option value="Navy">Navy</option>
							<option value="Marines">Marines</option>
							<option value="Air Force">Air Force</option>
							<option value="Coast Guard">Coast Guard</option>
							<option value="Military Spouse">Military Spouse</option>
						</select>
					</div>
				</div>

				<div class="form-row js-specific-field" data-pathway="exforces" data-region="USA">
					<div>
						<label for="details-form__availability">If you are currently serving on active duty, when is your expected EAS/ETS?</label>
					</div>
					<div>
						<input id="details-form__availability" type="date" name="AvailabilityDate"/>
					</div>
				</div>

				<div class="form-row js-specific-field" data-pathway="exforces" data-pathway="exforces" data-region="USA">
					<div>
						<label for="education-form__rank">Rank</label>
					</div>
					<div>
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
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="O1">O1</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="O2">O2</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="O3">O3</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="O4">O4</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="O5">O5</option>
							<option class="js-specific-field" data-pathway="exforces" data-region="USA" value="O6">O6</option>
						</select>
					</div>
				</div>

				<div class="form-row [ js-specific-field ]" data-pathway="exforces" data-region="USA">
					<div>
						<label>Are you a current member of the National Guard or Reserves?</label>
					</div>
					<div class="radio-group-horizontal">
						<label>
							<input id="education-form__reserves" type="radio" value="yes" name="IsInReserves"/>
							<span>Yes</span>
						</label>
						<label>
							<input id="education-form__reserves" type="radio" value="no" name="IsInReserves"/>
							<span>No</span>
						</label>
					</div>
				</div>
                
                <!-- global Education -->
                <div class="js-specific-field" data-pathway="graduate b2b" data-region="USA Canada DE Australia China HK Singapore">
                    <!-- uni -->
                    <div class="form-row [ js-specific-field ]" data-pathway="graduate b2b" data-region="DE Australia China HK Singapore">
                        <div>
                            <label for="education-form__uni">University<span class="apply-form__required">*</span></label>
                            <label data-region="DE" for="education-form__uni">Universität<span class="apply-form__required">*</span></label>
                        </div>
                        <div>
                            <span class="apply-form__info" data-region="ENG">As specified on degree certificate</span>
                            <span class="apply-form__info" data-region="DE">Name der Universität wir auf Ihren Zeugnissen angegeben</span>
                            <input id="education-form__uni" type="text" name="University" data-validation="required" data-validation-error-msg-container="#education-form__uni-err"/>
                        </div>
                        <div class="apply-form__val-msg" id="education-form__uni-err"></div>
                    </div>

                    <!-- grad year -->
                    <div class="form-row [ js-specific-field ]" data-pathway="graduate" data-region="DE Australia USA Canada China HK Singapore">
                        <div>
                            <label for="education-form__grad-yr">Graduation Year<span class="apply-form__required">*</span></label>
                            <label data-region="DE" for="education-form__grad-yr">Abschlussjahr<span class="apply-form__required">*</span></label>
                        </div>
                        <div>
                            <select id="education-form__grad-yr" type="text" name="GraduationYear" data-validation="required" data-validation-error-msg-container="#education-form__grad-yr-err">
                                <option class="js-default-select" value="" disabled selected hidden>Please select one</option>	
                                <option value="2012">2012</option>
                                <option valie="2013">2013</option>
                                <option valie="2014">2014</option>
                                <option valie="2015">2015</option>
                                <option valie="2016">2016</option>
                                <option valie="2017">2017</option>
                                <option valie="2018">2018</option>
                                <option valie="2019">2019</option>
                                <option valie="2020">2020</option>
                                <option data-region="ENG" value="Already graduated">Already graduated</option>
                            </select>
                        </div>
                        <div class="apply-form__val-msg" id="education-form__grad-yr-err"></div>
                    </div>

                    <!-- grad year - hk Singapore -->
                    <div class="form-row [ js-specific-field ]" data-pathway="b2b" data-region="HK Singapore">
                        <div>
                            <label for="education-form__grad-yr">Graduation Year<span class="apply-form__required">*</span></label>
                        </div>
                        <div>
                            <input id="education-form__grad-yr-hk" type="text" name="GraduationYear" data-validation="required" data-validation-error-msg-container="#education-form__grad-yr-hk-err" />
                        </div>
                        <div class="apply-form__val-msg" id="education-form__grad-yr-hk-err"></div>
                    </div>

                    <!-- Education level -->
                    <div class="form-row js-specific-field" data-pathway="graduate b2b exforces" data-region="DE Australia USA Canada China HK Singapore">
                        <div>
                            <label for="education-form__edu-level">Education Level<span class="apply-form__required">*</span></label>
                            <label data-region="DE" for="education-form__edu-level">Höchster erwobener Abschluss<span class="apply-form__required">*</span></label>
                        </div>
                        <div>
                            <select id="education-form__edu-level" type="text" name="EducationLevel" data-validation="required" data-validation-error-msg-container="#education-form__edu-level-err">
                                <option class="js-default-select" value="" disabled selected hidden>Please select one</option>
                                <option class="[ js-specific-field ]" data-pathway="graduate b2b" data-region="UK China Singapore" value="Bachelor's Degree">Bachelor's Degree</option>
                                <option class="[ js-specific-field ]" data-pathway="graduate b2b" data-region="UK China Singapore" value="Master's Degree/Post Graduate Qualification / MBA">Master's Degree / Post Graduate Qualification / MBA</option>
                                <option class="[ js-specific-field ]" data-pathway="graduate b2b" data-region="UK China Singapore" value="Doctorate Degree">Doctorate Degree</option>
                                <option class="[ js-specific-field ]" data-pathway="graduate b2b" data-region="China Singapore" value="Higher Degree">Higher Degree</option>
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
                                <option class="js-specific-field" data-pathway="graduate b2b exforces" data-region="USA" value="High school degree or equivalent (e.g. GED)">High school degree or equivalent (e.g. GED)</option>
                                <option class="js-specific-field" data-pathway="graduate b2b exforces" data-region="Canada" value="High school degree or equivalent)">High school degree or equivalent</option>
                                <option class="js-specific-field" data-pathway="graduate b2b exforces" data-region="USA Canada" value="Some college or university, no degree">Some college or university, no degree</option>
                                <option class="js-specific-field" data-pathway="graduate b2b exforces" data-region="USA Canada" value="Associate degree (e.g. AA, AS)">Associate degree (e.g. AA, AS)</option>
                                <option class="js-specific-field" data-pathway="graduate b2b exforces" data-region="USA Canada" value="Bachelor’s degree (e.g. BA, BS)">Bachelor’s degree (e.g. BA, BS)</option>
                                <option class="js-specific-field" data-pathway="graduate" data-region="Canada" value="Postgraduate diploma">Postgraduate diploma</option>
                                <option class="js-specific-field" data-pathway="graduate b2b exforces" data-region="USA Canada" value="Master’s degree (e.g. MA, MS, MEd)">Master’s degree (e.g. MA, MS, MEd)</option>
                                <option class="js-specific-field" data-pathway="graduate b2b exforces" data-region="USA Canada" value="Professional degree (e.g. MD, DDS">Professional degree (e.g. MD, DDS)</option>
                                <option class="js-specific-field" data-pathway="graduate b2b exforces" data-region="Canada USA" value="Doctorate(e.g. PhD, EdD)">Doctorate (e.g. PhD, EdD)</option>
                                <option class="js-specific-field" data-pathway="b2b graduate" data-region="HK" value="Bachelor’s Degree">Bachelor’s Degree</option>
                                <option class="js-specific-field" data-pathway="b2b graduate" data-region="HK" value="Master’s Degree/Post Graduate Qualification / MBA">Master’s Degree / Post Graduate Qualification / MBA</option>
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
                                <option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Bachelor's Degree Ordinary (Level 7)">Bachelor's Degree Ordinary (Level 7)</option>
                                <option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Bachelor’s Degree Honours (Level 8)">Bachelor’s Degree Honours (Level 8)</option>
                                <option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Master’s Degree / Post Graduate Qualification / MBA">Master’s Degree / Post Graduate Qualification / MBA</option>
                                <option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Doctorate Degree">Doctorate Degree</option>
                                <option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Other">Other</option>
                                <option data-region="DE" value="Bachelor’s Degree">Bachelor’s Degree</option>
                                <option data-region="DE" value="Master’s Degree/MBA">Master’s Degree/MBA</option>
                                <option data-region="DE" value="Diplom">Diplom</option>
                                <option data-region="DE" value="Promotion">Promotion</option>
                            </select>
                        </div>
                        <div class="apply-form__val-msg" id="education-form__edu-level-err"></div>
                    </div>

                    <!-- Grade -->
                    <div class="form-row [ js-specific-field ]" data-pathway="graduate"	data-region="DE China HK">
                        <div>
                            <label for="education-form__grade">Grade</label>
                            <label data-region="DE" for="education-form__grade">Note/Voraussichtliche Note</label>
                        </div>
                        <div>
                            <span data-region="ENG" class="apply-form__info">If already graduated, please specify grade achieved</span>
                            <span data-region="DE" class="apply-form__info" style="white-space: nowrap;">Wenn Sie bereits abgeschlossen haben, geben Sie bitte Ihre erreichte Note an</span>
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
                        </div>
                    </div>

                    <!-- GPA -->
                    <div class="form-row [ js-specific-field ]" data-pathway="graduate"	data-region="USA Canada">
                        <div>
                            <label for="education-form__grade">Cumulative GPA</label>
                        </div>
                        <div>
                            <input id="education-form__grade" type="text" name="Grade" />
                        </div>
                    </div>

                    <!-- Expected grad - China HK -->
                    <div class="form-row [ js-specific-field ]" data-pathway="graduate" data-region="China HK">
					<div>
						<label for="education-form__exp-grade">Expected Grade</label>
					</div>
					<div>
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
					</div>
				</div>
				</div>
                
                <!-- Education UK SA Ireland -->
                <div class="js-specific-field" data-pathway="graduate" data-region="UK Ireland SA">
                    <div class="form-row">
                        <div></div>
                        <div>
                            <p style="margin: 0;">List your educational experiences below, starting with the most recent.</p>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <p style="text-align: center; font-weight: bold;">Education (recent)</p>
                    </div>
                    <!-- ############ 1st set ############ -->
                    
                    <!-- uni -->
                    <div class="form-row [ js-specific-field ]" data-pathway="graduate" data-region="UK Ireland SA">
                        <div>
                            <label for="education-form__uni1">University<span class="apply-form__required">*</span></label>
                        </div>
                        <div>
                            <span class="apply-form__info" data-region="ENG">As specified on degree certificate</span>
                            <input id="education-form__uni1" type="text" name="University" data-validation="required" data-validation-error-msg-container="#education-form__uni-err1"/>
                        </div>
                        <div class="apply-form__val-msg" id="education-form__uni-err1"></div>
                    </div>

                    <!-- grad year -->
                    <div class="form-row [ js-specific-field ]" data-pathway="graduate" data-region="UK Ireland SA">
                        <div>
                            <label for="education-form__grad-yr1">Graduation Year<span class="apply-form__required">*</span></label>
                        </div>
                        <div>
                            <select id="education-form__grad-yr1" type="text" name="GraduationYear" data-validation="required" data-validation-error-msg-container="#education-form__grad-yr-err1">
                                <option class="js-default-select" value="" disabled selected hidden>Please select one</option>	
                                <option value="2012">2012</option>
                                <option valie="2013">2013</option>
                                <option valie="2014">2014</option>
                                <option valie="2015">2015</option>
                                <option valie="2016">2016</option>
                                <option valie="2017">2017</option>
                                <option valie="2018">2018</option>
                                <option valie="2019">2019</option>
                                <option valie="2020">2020</option>
                                <option data-region="ENG" value="Already graduated">Already graduated</option>
                                <option data-region="DE" value="Already graduated">bereits abgeschlossen haben</option>
                            </select>
                        </div>
                        <div class="apply-form__val-msg" id="education-form__grad-yr-err1"></div>
                    </div>

                    <!-- Education level -->
                    <div class="form-row js-specific-field" data-pathway="graduate" data-region="Ireland UK SA">
                        <div>
                            <label for="education-form__edu-level1">Education Level<span class="apply-form__required">*</span></label>
                        </div>
                        <div>
                            <select id="education-form__edu-level1" type="text" name="EducationLevel" data-validation="required" data-validation-error-msg-container="#education-form__edu-level-err1">
                                <option class="js-default-select" value="" disabled selected hidden>Please select one</option>
                                <option class="js-specific-field" data-pathway="graduate" data-region="UK" value="Bachelor's Degree">Bachelor's Degree</option>
                                <option class="js-specific-field" data-pathway="graduate" data-region="UK" value="Master's Degree/Post Graduate Qualification/MBA">Master's Degree/Post Graduate Qualification/MBA</option>
                                <option class="js-specific-field" data-pathway="graduate" data-region="UK" value="Doctorate Degree">Doctorate Degree</option>
                                <option class="js-specific-field" data-pathway="graduate" data-region="UK" value="Other">Other</option>
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
                                <option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Bachelor's Degree Ordinary (Level 7)">Bachelor's Degree Ordinary (Level 7)</option>
                                <option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Bachelor’s Degree Honours (Level 8)">Bachelor’s Degree Honours (Level 8)</option>
                                <option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Master’s Degree / Post Graduate Qualification / MBA">Master’s Degree / Post Graduate Qualification / MBA</option>
                                <option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Doctorate Degree">Doctorate Degree</option>
                                <option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Other">Other</option>
                            </select>
                        </div>
                        <div class="apply-form__val-msg" id="education-form__edu-level-err1"></div>
                    </div>

                    <!-- Grade -->
                    <div class="form-row [ js-specific-field ]" data-pathway="graduate"	data-region="UK">
                        <div>
                            <label for="education-form__grade1">Grade</label>
                        </div>
                        <div>
                            <span data-region="ENG" class="apply-form__info">If already graduated, please specify grade achieved</span>
                            <select id="education-form__grade1" type="text" name="Grade">
                                <option class="js-default-select" value="" disabled selected hidden>Please select one</option>	
                                <option value="1st">1st</option>
                                <option value="2:1">2:1</option>
                                <option value="2:2">2:2</option>
                                <option value="3rd">3rd</option>
                                <option value="Pass">Pass</option>
                                <option value="Fail">Fail</option>
                                <option value="Merit">Merit</option>
                                <option value="Distinction">Distinction</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>

                    <!-- Grade - Ireland SA -->
                    <div class="form-row [ js-specific-field ]" data-pathway="graduate"	data-region="Ireland SA">
                        <div>
                            <label for="education-form__grade-ire1">Grade</label>
                        </div>
                        <div>
                            <span class="apply-form__info">If already graduated, please specify grade achieved</span>
                            <input id="education-form__grade-ire1" type="text" name="Grade" />
                        </div>
                    </div>

                    <!-- Expected grad - Ireland SA -->
                    <div class="form-row js-specific-field" data-pathway="graduate"	data-region="Ireland SA">
                        <div>
                            <label for="education-form__exp-grade-ire1">Expected Grade</label>
                        </div>
                        <div>
                            <span class="apply-form__info">If not graduated, please specify expected grade</span>
                            <input id="education-form__exp-grade-ire1" type="text" name="ExpectedGrade" />
                        </div>
                    </div>

                    <!-- Expected grad - UK China HK -->
                    <div class="form-row [ js-specific-field ]" data-pathway="graduate" data-region="UK ">
                        <div>
                            <label for="education-form__exp-grade1">Expected Grade</label>
                        </div>
                        <div>
                            <span class="apply-form__info">If not graduated, please specify expected grade</span>
                            <select id="education-form__exp-grade1" type="text" name="ExpectedGrade">
                                <option class="js-default-select" value="" disabled selected hidden>Please select one</option>	
                                <option value="1st">1st</option>
                                <option value="2:1">2:1</option>
                                <option value="2:2">2:2</option>
                                <option value="3rd">3rd</option>
                                <option value="Pass">Pass</option>
                                <option value="Fail">Fail</option>
                                <option value="Merit">Merit</option>
                                <option value="Distinction">Distinction</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- ############ 2nd set ############ -->
                    <div class="form-row">
                        <p style="text-align: center; font-weight: bold;">Education (other)</p>
                    </div>
                    <!-- uni -->
                    <div class="form-row [ js-specific-field ]" data-pathway="graduate" data-region="UK Ireland SA">
                        <div>
                            <label for="education-form__uni2">University</label>
                        </div>
                        <div>
                            <span class="apply-form__info" data-region="ENG">As specified on degree certificate</span>
                            <input id="education-form__uni1" type="text" name="University2"/>
                        </div>
                    </div>

                    <!-- grad year -->
                    <div class="form-row [ js-specific-field ]" data-pathway="graduate" data-region="UK Ireland SA">
                        <div>
                            <label for="education-form__grad-yr2">Graduation Year</label>
                        </div>
                        <div>
                            <select id="education-form__grad-yr1" type="text" name="GraduationYear2">
                                <option class="js-default-select" value="" disabled selected hidden>Please select one</option>	
                                <option value="2012">2012</option>
                                <option valie="2013">2013</option>
                                <option valie="2014">2014</option>
                                <option valie="2015">2015</option>
                                <option valie="2016">2016</option>
                                <option valie="2017">2017</option>
                                <option valie="2018">2018</option>
                                <option valie="2019">2019</option>
                                <option valie="2020">2020</option>
                                <option data-region="ENG" value="Already graduated">Already graduated</option>
                                <option data-region="DE" value="Already graduated">bereits abgeschlossen haben</option>
                            </select>
                        </div>
                    </div>

                    <!-- Education level -->
                    <div class="form-row js-specific-field" data-pathway="graduate" data-region="Ireland UK SA">
                        <div>
                            <label for="education-form__edu-level2">Education Level</label>
                        </div>
                        <div>
                            <select id="education-form__edu-level1" type="text" name="EducationLevel2">
                                <option class="js-default-select" value="" disabled selected hidden>Please select one</option>
                                <option class="js-specific-field" data-pathway="graduate" data-region="UK" value="Bachelor's Degree">Bachelor's Degree</option>
                                <option class="js-specific-field" data-pathway="graduate" data-region="UK" value="Master's Degree / Post Graduate Qualification / MBA">Master's Degree / Post Graduate Qualification / MBA</option>
                                <option class="js-specific-field" data-pathway="graduate" data-region="UK" value="Doctorate Degree">Doctorate Degree</option>
                                <option class="js-specific-field" data-pathway="graduate" data-region="UK" value="Other">Other</option>
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
                                <option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Bachelor's Degree Ordinary (Level 7)">Bachelor's Degree Ordinary (Level 7)</option>
                                <option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Bachelor’s Degree Honours (Level 8)">Bachelor’s Degree Honours (Level 8)</option>
                                <option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Master’s Degree / Post Graduate Qualification / MBA">Master’s Degree / Post Graduate Qualification / MBA</option>
                                <option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Doctorate Degree">Doctorate Degree</option>
                                <option class="js-specific-field" data-pathway="graduate" data-region="Ireland" value="Other">Other</option>
                            </select>
                        </div>
                    </div>

                    <!-- Grade -->
                    <div class="form-row [ js-specific-field ]" data-pathway="graduate"	data-region="UK">
                        <div>
                            <label for="education-form__grade2">Grade</label>
                        </div>
                        <div>
                            <span data-region="ENG" class="apply-form__info">If already graduated, please specify grade achieved</span>
                            <select id="education-form__grade2" type="text" name="Grade2">
                                <option class="js-default-select" value="" disabled selected hidden>Please select one</option>	
                                <option value="1st">1st</option>
                                <option value="2:1">2:1</option>
                                <option value="2:2">2:2</option>
                                <option value="3rd">3rd</option>
                                <option value="Pass">Pass</option>
                                <option value="Fail">Fail</option>
                                <option value="Merit">Merit</option>
                                <option value="Distinction">Distinction</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>

                    <!-- Grade - Ireland SA -->
                    <div class="form-row [ js-specific-field ]" data-pathway="graduate"	data-region="Ireland SA">
                        <div>
                            <label for="education-form__grade-ire2">Grade</label>
                        </div>
                        <div>
                            <span class="apply-form__info">If already graduated, please specify grade achieved</span>
                            <input id="education-form__grade-ire2" type="text" name="Grade2" />
                        </div>
                    </div>

                    <!-- Expected grad - Ireland SA -->
                    <div class="form-row js-specific-field" data-pathway="graduate"	data-region="Ireland SA">
                        <div>
                            <label for="education-form__exp-grade-ire2">Expected Grade</label>
                        </div>
                        <div>
                            <span class="apply-form__info">If not graduated, please specify expected grade</span>
                            <input id="education-form__exp-grade-ire2" type="text" name="ExpectedGrade2" />
                        </div>
                    </div>

                    <!-- Expected grad - UK China HK -->
                    <div class="form-row [ js-specific-field ]" data-pathway="graduate" data-region="UK ">
                        <div>
                            <label for="education-form__exp-grade2">Expected Grade</label>
                        </div>
                        <div>
                            <span class="apply-form__info">If not graduated, please specify expected grade</span>
                            <select id="education-form__exp-grade2" type="text" name="ExpectedGrade2">
                                <option class="js-default-select" value="" disabled selected hidden>Please select one</option>	
                                <option value="1st">1st</option>
                                <option value="2:1">2:1</option>
                                <option value="2:2">2:2</option>
                                <option value="3rd">3rd</option>
                                <option value="Pass">Pass</option>
                                <option value="Fail">Fail</option>
                                <option value="Merit">Merit</option>
                                <option value="Distinction">Distinction</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
				</div>
                
                
                
                <!-- Clubs -->
				<div class="form-row [ js-specific-field ]" data-pathway="graduate"	data-region="UK Australia China HK Ireland SA Singapore">
					<div>
						<label for="education-form__clubs">Please list any clubs or societies you have been a part of</label>
					</div>
					<div>
						<textarea id="education-form__clubs" rows="10" name="Clubs" data-validation="length" data-validation-length="max300" data-validation-error-msg-container="#education-form__clubs-err"></textarea>
						<span><span id="education-form__clubs-max-length">300</span> characters left</span>
					</div>
					<div class="apply-form__val-msg" id="education-form__clubs-err"></div>
				</div>
				
				<div class="form-row [ js-specific-field ]" data-pathway="graduate b2b"	data-region="USA Canada China HK Singapore">
					<div>
						<label class="[ js-specific-field ]" data-pathway="graduate b2b" data-region="China" for="education-form__personal">Why do you think you would be a good fit for FDM's Careers Programme?</label>
						<label class="[ js-specific-field ]" data-pathway="graduate" data-region="Australia HK" for="education-form__personal">Why do you think you would be a good fit for FDM's Graduate Programme?</label>
						<label class="[ js-specific-field ]" data-pathway="b2b" data-region="USA" for="education-form__personal">Please tell us a bit about your past experience. Why do you think you’re well suited to FDM’s Getting Back to Business Program?</label>
						<label class="[ js-specific-field ]" data-pathway="b2b" data-region="HK Singapore" for="education-form__personal">Why do you think you would be a good fit for FDM’s Getting Back to Business Programme?</label>
						<label class="[ js-specific-field ]" data-pathway="graduate" data-region="Singapore" for="education-form__personal">Why do you think you would be a good fit for FDM's Careers Programme?</label>
						<label class="[ js-specific-field ]" data-pathway="graduate" data-region="USA Canada" for="education-form__personal">Please list any clubs, student organizations or volunteer involvement you have been a part of and any leadership roles held</label>
					</div>
					<div>
						<textarea id="education-form__personal" rows="10" name="PersonalStatement" data-validation="length" data-validation-length="max700" data-validation-error-msg-container="#education-form__personal-err"></textarea>
						<span><span id="education-form__personal-max-length">700</span> characters left</span>
					</div>
					<div class="apply-form__val-msg" id="education-form__personal-err"></div>
				</div>
				
				<div class="form-row [ js-specific-field ]" data-pathway="graduate b2b"	data-region="Australia UK Ireland SA">
					<div>
						<label class="js-specific-field" data-pathway="graduate" data-region="UK Ireland SA" for="education-form__personal-uk">Why do you think you would be a good fit for FDM's Careers Programme?<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="graduate" data-region="Australia" for="education-form__personal">Why do you think you would be a good fit for FDM's Graduate Programme?<span class="apply-form__required">*</span></label>

					</div>
					<div>
						<textarea id="education-form__personal-uk" rows="10" name="PersonalStatement" data-validation="required length" data-validation-length="max700" data-validation-error-msg-container="#education-form__personal-uk-err"></textarea>
						<span><span id="education-form__personal-uk-max-length">700</span> characters left</span>
					</div>
					<div class="apply-form__val-msg" id="education-form__personal-uk-err"></div>
				</div>

				<div class="form-row [ js-specific-field ]" data-pathway="exforces"	data-region="USA">
					<div>
						<label for="education-form__leadership">Please list any leadership roles held</label>
					</div>
					<div>
						<textarea id="education-form__leadership" rows="10" name="Clubs"></textarea>
						<span><span id="education-form__leadership-max-length">700</span> characters left</span>
					</div>
				</div>
				
			</form>
		</section>

	<!-- ####### Location Details ####### -->
		<section class="[ js-section ]" style="display:none;" data-section="3">
			<h1 class="[ js-specific-field ]" data-pathway="graduate b2b exforces"  data-region="UK Australia China HK SA Ireland Singapore">Location Details</h1>
			<h1 class="[ js-specific-field ]" data-pathway="graduate b2b exforces"  data-region="USA	 Canada">Self-Identification</h1>
			<form class="[ apply-form ]	 [ js-form ]" data-section="3">

				<div class="form-row [ js-specific-field ]" data-pathway="graduate exforces b2b" data-region="UK China Ireland">
					<div>
						<label for="location-form__training-loc">Preferred training location<span class="apply-form__required">*</span></label>
					</div>
					<div>
						<select id="location-form__training-loc" name="PreferredTrainingLocation" data-validation="required" data-validation-error-msg-container="#location-form__training-loc-err">
							<option class="js-default-select" value="" disabled selected hidden>Please select one</option>
							<option value="London">London</option>
							<option class="js-specific-field" data-pathway="graduate exforces" data-region="UK Ireland China" value="Leeds">Leeds</option>
							<option value="Glasgow">Glasgow</option>
                            <option class="js-specific-field" data-pathway="graduate" data-region="UK" value="Birmingham">Birmingham</option>
							<option class="js-specific-field" data-pathway="graduate b2b" data-region="China" value="New York">New York</option>
							<option value="Flexible">Flexible</option>
							<option value="Don't know">Don't know</option>
						</select>
					</div>
					<div class="apply-form__val-msg" id="location-form__training-loc-err"></div>
				</div>
				
				<div class="form-row [ js-specific-field ]" data-pathway="graduate exforces b2b" data-region="Australia UK China SA Ireland HK Singapore">
					<div>
						<label class="[ js-specific-field ]" data-pathway="graduate exforces b2b" data-region="UK" for="location-form__eligible">Are you eligible to work in the UK?<span class="apply-form__required">*</span></label>
						<label class="[ js-specific-field ]" data-pathway="graduate" data-region="Ireland" for="location-form__eligible">Are you eligible to work in the UK/Ireland?<span class="apply-form__required">*</span></label>
						<label class="[ js-specific-field ]" data-pathway="graduate" data-region="SA" for="location-form__eligible">Are you eligible to work in South Africa?<span class="apply-form__required">*</span></label>
						<label class="[ js-specific-field ]" data-pathway="graduate" data-region="China" for="location-form__eligible">Are you eligible to work in China?<span class="apply-form__required">*</span></label>
						<label class="[ js-specific-field ]" data-pathway="graduate b2b" data-region="HK" for="location-form__eligible">Are you eligible to work in Hong Kong?<span class="apply-form__required">*</span></label>
						<label class="[ js-specific-field ]" data-pathway="graduate b2b" data-region="Singapore" for="location-form__eligible">Are you eligible to work in Singapore?<span class="apply-form__required">*</span></label>
						<label class="[ js-specific-field ]" data-pathway="graduate b2b" data-region="Australia" for="location-form__eligible">Are you eligible to work in Australia?<span class="apply-form__required">*</span></label>
					</div>
					<div>
						<select id="location-form__eligible" name="EligibleToWork" data-validation="required" data-validation-error-msg-container="#location-form__eligible-err">
							<option class="js-default-select" value="" disabled selected hidden>Please select one</option>	
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>
					<div class="apply-form__val-msg" id="location-form__eligible-err"></div>
				</div>
				
				<div class="form-row [ js-specific-field ]" data-pathway="graduate exforces b2b" data-region="UK China SA Ireland">
					<div>
						<label class="[ js-specific-field ]" data-pathway="graduate exforces b2b" data-region="UK" for="location-form__visa">Do you require a visa to work in the UK?<span class="apply-form__required">*</span></label>
						<label class="[ js-specific-field ]" data-pathway="graduate" data-region="China" for="location-form__visa">Do you require a visa to work in China?<span class="apply-form__required">*</span></label>
						<label class="[ js-specific-field ]" data-pathway="graduate" data-region="SA" for="location-form__visa">Do you require a visa to work in South Africa?<span class="apply-form__required">*</span></label>
						<label class="[ js-specific-field ]" data-pathway="graduate" data-region="Ireland" for="location-form__visa">Do you require a visa to work in the UK/Ireland?<span class="apply-form__required">*</span></label>
						<label class="[ js-specific-field ]" data-pathway="graduate b2b" data-region="HK" for="location-form__visa">Do you require a visa to work in Hong Kong?<span class="apply-form__required">*</span></label>
					</div>
					<div>
						<select id="location-form__visa" name="RequireVisa" data-validation="required" data-validation-error-msg-container="#location-form__visa-err">
							<option class="js-default-select" value="" disabled selected hidden>Please select one</option>	
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>
					<div class="apply-form__val-msg" id="location-form__visa-err"></div>
				</div>
				
				<div class="form-row js-specific-field" data-pathway="graduate exforces b2b" data-region="HK UK Ireland Singapore">
					<div>
						<label class="js-specific-field" data-pathway="graduate exforces b2b" data-region="UK SA Ireland" for="location-form__visa-type">If yes, what type of visa do you currently hold?</label>
						<label class="js-specific-field" data-pathway="graduate b2b" data-region="HK Singapore" for="location-form__visa-type">If yes, please select the option that applies to you?</label>
					</div>
					<div>
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
							<option class="js-specific-field" data-pathway="graduate b2b" data-region="HK" value="Hong Kong citizen">Hong Kong citizen</option>
							<option class="js-specific-field" data-pathway="graduate b2b" data-region="HK" value="Hong Kong permanent Resident">Hong Kong permanent Resident</option>
							<option class="js-specific-field" data-pathway="graduate b2b" data-region="HK" value="Hong Kong working visa">Hong Kong working visa</option>
							<option class="js-specific-field" data-pathway="graduate b2b" data-region="HK" value="IANG visa">IANG visa</option>
							<option class="js-specific-field" data-pathway="graduate b2b" data-region="HK" value="Work visa for mainland talent and professionals">Work visa for mainland talent and professionals</option>
							<option class="js-specific-field" data-pathway="graduate b2b" data-region="HK" value="Dependant visa">Dependant visa</option>
							<option class="js-specific-field" data-pathway="graduate b2b" data-region="HK" value="Working holiday visa">Working holiday visa</option>
							<option class="js-specific-field" data-pathway="graduate b2b" data-region="HK" value="Refugees / asylum visa">Refugees / asylum visa</option>
							<option class="js-specific-field" data-pathway="graduate b2b" data-region="HK" value="Ancestry">Ancestry</option>
							<option class="js-specific-field" data-pathway="graduate b2b" data-region="HK" value="Other">Other</option>
							<option class="js-specific-field" data-pathway="graduate b2b" data-region="Singapore" value="Singapore citizen">Singapore citizen</option>
							<option class="js-specific-field" data-pathway="graduate b2b" data-region="Singapore" value="Singapore permanent resident">Singapore permanent resident</option>
							<option class="js-specific-field" data-pathway="graduate b2b" data-region="Singapore" value="Dependant passholder">Dependant passholder</option>
							<option class="js-specific-field" data-pathway="graduate b2b" data-region="Singapore" value="Other">Other</option>
						</select>
					</div>
				</div>
				
				<div class="form-row [ js-specific-field ]" data-pathway="graduate b2b" data-region="China SA">
					<div>
						<label for="location-form__visa-type-ch">If yes, what type of visa do you currently hold?</label>
					</div>
					<div>
						<input id="location-form__visa-type-ch" name="VisaType" type="text"/>
					</div>
				</div>
				
				<div class="form-row [ js-specific-field ]" data-pathway="graduate" data-region="Australia">
					<div>
						<label for="location-form__australian-status">If yes, please select the option that applies to you?</label>
					</div>
					<div>
						<select id="location-form__australian-status" name="AustralianStatus">
							<option class="js-default-select" value="" disabled selected hidden>Please select one</option>	
							<option value="Australian">Australian</option>
							<option value="Permanent resident">Permanent resident</option>
							<option value="Bridging visa">Bridging visa</option>
							<option value="Student visa">Student visa</option>
							<option value="Working holiday visa">Working holiday visa</option>
							<option value="New Zealand passport holder">New Zealand passport holder</option>
							<option value="Temporary skilled visa 457">Temporary skilled visa 457</option>
							<option value="Temporary graduate visa 485">Temporary graduate visa 485</option>
						</select>
					</div>
				</div>
				
				<div class="form-row [ js-specific-field ]" data-pathway="graduate exforces b2b" data-region="UK Australia SA China HK Singapore Ireland">
					<div>
						<label class="[ js-specific-field ]" data-pathway="graduate exforces b2b" data-region="UK SA China Ireland" for="location-form__uni">What is the expiry date if applicable?</label>
						<label class="[ js-specific-field ]" data-pathway="graduate exforces b2b" data-region="Australia HK Singapore" for="location-form__uni">If applicable, what is the expiry date of your visa?</label>
					</div>
					<div>
						<input id="location-form__uni" type="date" name="VisaExpiryDate"/>
					</div>
				</div>

				<div class="js-specific-field" data-pathway="graduate b2b exforces" data-region="USA Canada">
				
					<p class="js-specific-field" data-pathway="graduate b2b exforces" data-region="USA">FDM is an Equal Opportunity Employer and all qualified applicants receive consideration for employment without regard to race, color, religion, sex, sexual orientation, marital status, national origin, age, disability, veteran status or any other status protected by federal, provincial, or local laws.</p>
					<p class="js-specific-field" data-pathway="graduate b2b exforces" data-region="USA">FDM collects voluntary information from our applicants in order to track the effectiveness of our recruiting efforts of candidates from all backgrounds. To help us measure this, please consider the following optional questions. Any answer you give will be kept private and will not be used during consideration of your employment.</p>
						
					<p class="js-specific-field" data-pathway="graduate" data-region="Canada">FDM is an Equal Opportunity Employer in compliance with the Employer Equity Act (“the Act) and all qualified applicants receive consideration for employment without regard to race, color, religion, sex, sexual orientation, marital status, national origin, age, disability or any other status protected by federal, provincial, or local laws.</p>
					<p class="js-specific-field" data-pathway="graduate" data-region="Canada">FDM collects voluntary information from our applicants in order to track the effectiveness of our recruiting efforts of candidates from all backgrounds in order to ensure continued compliance with the Act. To help us measure this, please consider the following optional questions. Any answer you give will be kept private and will not be used during consideration of your employment. Submission of this information is voluntary and refusal to provide it will not subject you to any adverse treatment.</p>

					<div class="form-row js-specific-field" data-pathway="graduate b2b exforces" data-region="USA">
						<div>
							<label>Ethnic Background: Check on box that best describes how you self-identify<span class="apply-form__required">*</span></label>
						</div>
						<div class="radio-group-vertical">
							<label>
								<input id="identification-form__ethinc" name="EthnicBackground" type="radio" value="American Indian / Alaskan Native" data-validation="required" data-validation-error-msg-container="#identification-form__ethinc-err"/>
								<span>American Indian / Alaskan Native</span>
							</label>
							<label>
								<input type="radio" value="Asian / Asian-American" name="EthnicBackground"/>
								<span>Asian / Asian-American</span>
							</label>
							<label>
								<input type="radio" value="White/Caucasian" name="EthnicBackground"/>
								<span>White/Caucasian</span>
							</label>
							<label>
								<input type="radio" value="Black / African-American" name="EthnicBackground"/>
								<span>Black / African-American</span>
							</label>
							<label>
								<input type="radio" value="Hispanic/Latino" name="EthnicBackground"/>
								<span>Hispanic/Latino</span>
							</label>
							<label>
								<input type="radio" value="Native Hawaiian / Pacific Islander" name="EthnicBackground"/>
								<span>Native Hawaiian / Pacific Islander</span>
							</label>
							<label>
								<input type="radio" value="Two or more races" name="EthnicBackground"/>
								<span>Two or more races</span>
							</label>
							<label>
								<input type="radio" value="I don’t wish to answer" name="EthnicBackground"/>
								<span>I don’t wish to answer</span>
							</label>
						</div>
						<div class="apply-form__val-msg" id="identification-form__ethinc-err"></div>
					</div>
					
					<div class="form-row js-specific-field" data-pathway="graduate" data-region="Canada">
						<div>
							<label>Ethnic Background: Check on box that best describes how you self-identify<span class="apply-form__required">*</span></label>
						</div>
						<div class="radio-group-vertical">
							<label>
								<input id="identification-form__ethinc" name="EthnicBackground" type="radio" value="Aboriginal Peoples / First Nations" data-validation="required" data-validation-error-msg-container="#identification-form__ethinc-err"/>
								<span>Aboriginal Peoples / First Nations</span>
							</label>
							<label>
								<input type="radio" value="Arab/West Asian" name="EthnicBackground"/>
								<span>Arab/West Asian</span>
							</label>
							<label>
								<input type="radio" value="Asian" name="EthnicBackground"/>
								<span>Asian</span>
							</label>
							<label>
								<input type="radio" value="Black" name="EthnicBackground"/>
								<span>Black</span>
							</label>
							<label>
								<input type="radio" value="Latin American" name="EthnicBackground"/>
								<span>Latin American</span>
							</label>
							<label>
								<input type="radio" value="White/Caucasian" name="EthnicBackground"/>
								<span>White/Caucasian</span>
							</label>
							<label>
								<input type="radio" value="Two or more ethnicities" name="EthnicBackground"/>
								<span>Two or more ethnicities</span>
							</label>
							<label>
								<input type="radio" value="Prefer not to answer" name="EthnicBackground"/>
								<span>Prefer not to answer</span>
							</label>
						</div>
						<div class="apply-form__val-msg" id="identification-form__ethinc-err"></div>
					</div>

					<div class="form-row">
						<div>
							<label>Gender: Please check how you self-identify<span class="apply-form__required">*</span></label>
						</div>
						<div class="radio-group-vertical">
							<label>
								<input id="identification-form__gender" name="Gender" type="radio" value="Female" data-validation="required" data-validation-error-msg-container="#identification-form__gender-err"/>
								<span>Female</span>
							</label>
							<label>
								<input type="radio" value="Male" name="Gender"/>
								<span>Male</span>
							</label>
							<label>
								<input type="radio" value="Non-binary / non-conforming" name="Gender"/>
								<span>Non-binary / non-conforming</span>
							</label>
							<label>
								<input type="radio" value="I don’t wish to answer" name="Gender"/>
								<span class="js-specific-field" data-pathway="graduate b2b exforces" data-region="USA">I don’t wish to answer</span>
								<span class="js-specific-field" data-pathway="graduate" data-region="Canada">Prefer not to answer</span>
							</label>
						</div>
						<div class="apply-form__val-msg" id="identification-form__gender-err"></div>
					</div>

					<div class="form-row js-specific-field" data-pathway="graduate b2b exforces" data-region="USA">
						<div>
							<label>Veteran: Have you ever served or are you currently serving in the United States Military?<span class="apply-form__required">*</span></label>
						</div>
						<div class="radio-group-vertical">
							<label>
								<input id="identification-form__veteran" name="Veteran" type="radio" value="Yes" data-validation="required" data-validation-error-msg-container="#identification-form__veteran-err"/>
								<span>Yes</span>
							</label>
							<label>
								<input type="radio" value="No" name="Veteran"/>
								<span>No</span>
							</label>
							<label>
								<input type="radio" value="I don’t wish to answer" name="Veteran"/>
								<span class="js-specific-field" data-pathway="graduate b2b exforces" data-region="USA">I don’t wish to answer</span>
								<span class="js-specific-field" data-pathway="graduate" data-region="Canada">Prefer not to answer</span>
							</label>
						</div>
						<div class="apply-form__val-msg" id="identification-form__veteran-err"></div>
					</div>

					<div class="form-row">
						<div>
							<label class="js-specific-field" data-pathway="graduate b2b exforces" data-region="USA">Disability: You are considered to have a disability if you have a physical or mental impairment or medical condition that substantially limits a major life activity, or if you have a history or record of such an impairment or condition. Please select one of the boxes:<span class="apply-form__required">*</span></label>
							<label class="js-specific-field" data-pathway="graduate" data-region="Canada">Disability: Do you identify as someone with a disability, either physical or mental, or with an associated medical condition?<span class="apply-form__required">*</span></label>
						</div>
						<div class="radio-group-vertical">
							<label>
								<input id="identification-form__disability" name="Disability" type="radio" value="Yes" data-validation="required" data-validation-error-msg-container="#identification-form__disability-err"/>
								<span>Yes, I have (or previously had) a disability</span>
							</label>
							<label>
								<input type="radio" value="No" name="Disability"/>
								<span>No, I don’t have a disability</span>
							</label>
							<label>
								<input type="radio" value="I don’t wish to answer" name="Disability"/>
								<span class="js-specific-field" data-pathway="graduate b2b exforces" data-region="USA">I don’t wish to answer</span>
								<span class="js-specific-field" data-pathway="graduate" data-region="Canada">Prefer not to answer</span>
							</label>
						</div>
						<div class="apply-form__val-msg" id="identification-form__disability-err"></div>
					</div>

				</div>

			</form>
		</section>

	<!-- ####### Selection Criteria ####### -->
		<section class="[ js-section ]" style="display:none;" data-section="4">
			<h1>
				<span data-region="ENG-CN ENG-GB ENG-HK ENG-AUS ENG-IRL ENG-SGP ENG-ZAF">Selection Criteria</span>
				<span data-region="ENG-CA ENG-USA">Regional Criteria</span>
				<span data-region="DE">Dokumenten Upload</span>
			</h1>
			<form class="[ apply-form  apply-form--checkboxes ]	 [ js-form ]" data-section="4">
				
				<div class="form-row [ js-specific-field ]" data-pathway="graduate b2b" data-region="UK Australia China Ireland SA" >
					<div>
						<label class="[ js-specific-field ]" data-pathway="graduate" data-region="UK Ireland SA">Are you able to fund yourself through our initial 8-14 week training programme?<span class="apply-form__required">*</span></label>
						<label class="[ js-specific-field ]" data-pathway="b2b" data-region="UK" >Can you commit to seven weeks of training?<span class="apply-form__required">*</span></label>
						<label class="[ js-specific-field ]" data-pathway="graduate" data-region="Australia">Can you commit to 12-16 weeks of paid training?<span class="apply-form__required">*</span></label>
						<label class="[ js-specific-field ]" data-pathway="graduate" data-region="China">Can you commit to 8-14 weeks of training?<span class="apply-form__required">*</span></label>
                        
						<span class="[ js-specific-field ]" data-pathway="graduate" data-region="UK">Please note: FDM is able to offer a travel bursary giving you the opportunity to expense back up to £100 a week in travel expenses during the training period.</span>
						<span class="[ js-specific-field ]" data-pathway="graduate" data-region="Ireland">Please note: FDM is able to offer a travel bursary giving you the opportunity to expense back up to £170 a week in travel expenses during the training period.</span>
						<span class="[ js-specific-field ]" data-pathway="b2b" data-region="UK">Please note: FDM is able to offer a living allowance giving you the opportunity to claim expenses up to £170 a week during the training period.</span>
						<span class="[ js-specific-field ]" data-pathway="graduate" data-region="SA">We arrange to cover accomodation, travel to/from training and meals. (Accomodation only for those who don't live locally).</span>
					</div>
					<div class="radio-group-horizontal">
						<label>
							<input id="selection-form__training-commit" name="TrainingCommitment" type="radio" value="yes" name="TrainingCommitment" data-validation="required" data-validation-error-msg-container="#selection-form__training-commit-err"/>
							<span>Yes</span>
						</label>
						<label>
							<input id="selection-form__training-commit" type="radio" value="no" name="TrainingCommitment"/>
							<span>No</span>
						</label>
					</div>
					<div class="apply-form__val-msg" id="selection-form__training-commit-err"></div>
				</div>

				<div class="form-row [ js-specific-field ]" data-pathway="graduate b2b" data-region="Singapore HK" >
					<div>
						<label class="js-specific-field"  data-pathway="graduate" data-region="Singapore HK">Can you commit to 12-16 weeks of paid training?<span class="apply-form__required">*</span></label>
						<label class="js-specific-field"  data-pathway="b2b" data-region="Singapore HK">Can you commit to 8 weeks of unpaid training?<span class="apply-form__required">*</span></label>
					</div>
					<div class="radio-group-horizontal">
						<label>
							<input id="selection-form__training-commit-sing" name="TrainingCommitment" type="radio" value="yes" data-validation="required" data-validation-error-msg-container="#selection-form__training-commit-sing-err"/>
							<span>Yes</span>
						</label>
						<label>
							<input id="selection-form__training-commit-sing" type="radio" value="no" name="TrainingCommitment"/>
							<span>No</span>
						</label>
					</div>
					<div class="apply-form__val-msg" id="selection-form__training-commit-sing-err"></div>
				</div>

				<div class="form-row [ js-specific-field ]" data-pathway="graduate b2b exforces" data-region="UK Australia China Ireland SA Singapore HK">
					<div>
						<label class="[ js-specific-field ]" data-pathway="graduate b2b exforces" data-region="UK Ireland SA">Can you commit to two years employment commencing after the training is completed?<span class="apply-form__required">*</span></label>
						<label class="[ js-specific-field ]" data-pathway="graduate b2b exforces" data-region="Australia China Singapore HK">Can you commit to two years employment once placed onsite after your training?<span class="apply-form__required">*</span></label>
					</div>
					<div class="radio-group-horizontal">
						<label>
							<input id="selection-form__employment-commit" name="ContractCommitment" type="radio" value="yes" name="ContractCommitment" data-validation="required" data-validation-error-msg-container="#selection-form__employment-commit-err"/>
							<span>Yes</span>
						</label>
						<label>
							<input id="selection-form__employment-commit" type="radio" value="no" name="ContractCommitment"/>
							<span>No</span>
						</label>
					</div>
					<div class="apply-form__val-msg" id="selection-form__employment-commit-err"></div>
				</div>

				<div class="form-row [ js-specific-field ]" data-pathway="graduate b2b exforces" data-region="Canada USA">
					<div>
						<label class="[ js-specific-field ]" data-pathway="graduate" data-region="Canada">Are you legally authorized to work in Canada?<span class="apply-form__required">*</span></label>
						<label class="[ js-specific-field ]" data-pathway="graduate exforces b2b" data-region="USA">Are you legally authorized to work in the US?<span class="apply-form__required">*</span></label>
					</div>
					<div class="radio-group-horizontal">
						<label>
							<input id="regional-form__eligible" type="radio" value="yes" name="EligibleToWork" data-validation="required" data-validation-error-msg-container="#regional-form__eligible-err"/>
							<span>Yes</span>
						</label>
						<label>
							<input type="radio" value="no" name="EligibleToWork"/>
							<span>No</span>
						</label>
					</div>
					<div class="apply-form__val-msg" id="regional-form__eligible-err"></div>
				</div>
                
                <div class="form-row js-specific-field" data-pathway="graduate exforces b2b" data-region="Canada">
					<div>
						<label for="location-form__visa-type-ca">If yes, what is your right to work?</label>
					</div>
					<div>
						<select id="location-form__visa-type-ca" name="VisaType">
                            <option class="js-default-select" value="" disabled selected hidden>Please select one</option>	
                            <option class="js-specific-field" data-pathway="graduate" data-region="Canada" value="Canadian Citizen / Permanent Resident">Canadian Citizen / Permanent Resident</option>
                            <option class="js-specific-field" data-pathway="graduate" data-region="Canada" value="Temporary Resident">Temporary Resident</option>
                            <option class="js-specific-field" data-pathway="graduate" data-region="Canada" value="Post-Graduate Work Permit">Post-Graduate Work Permit</option>
                            <option class="js-specific-field" data-pathway="graduate" data-region="Canada" value="NAFTA Work Permit">NAFTA Work Permit</option>
                            <option class="js-specific-field" data-pathway="graduate" data-region="Canada" value="Student Visa">Student Visa</option>
                            <option class="js-specific-field" data-pathway="graduate" data-region="Canada" value="Other">Other</option>
                        </select>
					</div>
				</div>
                
                <div class="form-row js-specific-field" data-pathway="graduate exforces b2b" data-region="USA">
					<div>
						<label for="location-form__visa-type-usa">What is your right to work?<span class="apply-form__required">*</span></label>
					</div>
					<div>
						<select id="location-form__visa-type-usa" name="VisaType" data-validation="required" data-validation-error-msg-container="#location-form__visa-type-usa-err">
                            <option class="js-default-select" value="" disabled selected hidden>Please select one</option>	
                            <option class="js-specific-field" data-pathway="graduate b2b exforces" data-region="USA" value="US Citizen">US Citizen</option>
                            <option class="js-specific-field" data-pathway="graduate b2b exforces" data-region="USA" value="Green Card / Permanent Resident">Green Card / Permanent Resident</option>
                            <option class="js-specific-field" data-pathway="graduate b2b exforces" data-region="USA" value="EAD (Employment Authorization Document)">EAD (Employment Authorization Document)</option>
                            <option class="js-specific-field" data-pathway="graduate b2b exforces" data-region="USA" value="TN Visa (Canadian / Mexican Citizen)">TN Visa (Canadian / Mexican Citizen)</option>
                            <option class="js-specific-field" data-pathway="graduate b2b exforces" data-region="USA" value="F1/OPT Visa">F1/OPT Visa</option>
                            <option class="js-specific-field" data-pathway="graduate b2b exforces" data-region="USA" value="H1-B Visa (Sponsored by another employer)">H1-B Visa (Sponsored by another employer)</option>
                            <option class="js-specific-field" data-pathway="graduate b2b exforces" data-region="USA" value="J Visa – Exchange students">J Visa – Exchange students</option>
                            <option class="js-specific-field" data-pathway="graduate b2b exforces" data-region="USA" value="K Visa – Spouse of a US citizen">K Visa – Spouse of a US citizen</option>
                            <option class="js-specific-field" data-pathway="graduate b2b exforces" data-region="USA" value="Canadian Citizen">Canadian Citizen</option>
                            <option class="js-specific-field" data-pathway="graduate b2b exforces" data-region="USA" value="Other">Other</option>
                        </select>
					</div>
                    <div class="apply-form__val-msg" id="location-form__visa-type-usa-err"></div>
				</div>
                

				<div class="form-row [ js-specific-field ]" data-pathway="graduate exforces b2b" data-region="USA Canada">
					<div>
						<label class="[ js-specific-field ]" data-pathway="graduate exforces b2b" data-region="USA">Do you require sponsorship now or at any point in the future to work in the US?<span class="apply-form__required">*</span></label>
						<label class="[ js-specific-field ]" data-pathway="graduate" data-region="Canada">Do you require sponsorship now or at any point in the future to work in Canada?<span class="apply-form__required">*</span></label>
					</div>
					<div class="radio-group-horizontal">
						<label>
							<input id="regional-form__eligible" type="radio" value="yes" name="RequireVisa" data-validation="required" data-validation-error-msg-container="#regional-form__visa-err"/>
							<span>Yes</span>
						</label>
						<label>
							<input type="radio" value="no" name="RequireVisa"/>
							<span>No</span>
						</label>
					</div>
					<div class="apply-form__val-msg" id="regional-form__visa-err"></div>
				</div>

				<div class="form-row [ js-specific-field ]" data-pathway="graduate b2b exforces" data-region="UK Australia China Ireland SA Singapore HK Canada USA">
					<div>
						<label class="[ js-specific-field ]" data-pathway="graduate exforces" data-region="HK China SA Singapore">Do you understand that the overall commitment to complete our programme would be up to 28 months?<span class="apply-form__required">*</span></label>
						<label class="[ js-specific-field ]" data-pathway="graduate exforces" data-region="UK Ireland">Do you understand that the overall commitment to complete our programme would be around 28 months?<span class="apply-form__required">*</span></label>
						<label class="[ js-specific-field ]" data-pathway="graduate exforces" data-region="Australia">Do you understand that the overall commitment to complete our programme would be around 28 months?<span class="apply-form__required">*</span></label>
						<label class="[ js-specific-field ]" data-pathway="b2b" data-region="UK HK">Do you understand that the overall commitment to complete our programme would be up to 26 months?<span class="apply-form__required">*</span></label>
						<label class="[ js-specific-field ]" data-pathway="b2b" data-region="Singapore">Do you understand that the overall commitment to complete our programme would be up to 28 months?<span class="apply-form__required">*</span></label>
						<label class="[ js-specific-field ]" data-pathway="graduate exforces b2b" data-region="USA Canada">Do you understand that the overall commitment to complete our Careers Program would be around 28-30 months in total?<span class="apply-form__required">*</span></label>
					</div>
					<div class="radio-group-horizontal">
						<label>
							<input id="selection-form__overall-commit" type="radio" value="yes" name="OverallCommitment" data-validation="required" data-validation-error-msg-container="#selection-form__overall-commit-err"/>
							<span>Yes</span>
						</label>
						<label>
							<input id="selection-form__overall-commit" type="radio" value="no" name="OverallCommitment"/>
							<span>No</span>
						</label>
					</div>
					<div class="apply-form__val-msg" id="selection-form__overall-commit-err"></div>
				</div>
				
                <!-- world geoflex -->
				<div class="form-row [ js-specific-field ]" data-pathway="graduate b2b exforces" data-region="Australia China Ireland SA Singapore HK Canada USA">
					<div>
						<label class="js-specific-field" data-pathway="graduate b2b" data-region="HK">Are you geographically flexible to relocate within Hong Kong, or to Singapore or China if required?<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="graduate" data-region="Australia">Are you geographically flexible to relocate to Sydney, Melbourne or Brisbane if required?<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="graduate" data-region="China">Are you geographically flexible to relocate within China, or to Hong Kong or Singapore if required?<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="graduate" data-region="Ireland">Are you geographically flexible to relocate within the UK/Ireland if required?<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="graduate" data-region="SA">Are you geographically flexible to relocate within South Africa if required?<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="graduate b2b" data-region="Singapore">Are you geographically flexible to relocate within Singapore or to Hong Kong if required?<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="graduate" data-region="Canada">We have clients in major metro cities in Canada – primarily Toronto, Montreal and Vancouver. Are you open to national placement opportunities?<span class="apply-form__required">*</span></label>
						<span class="js-specific-field" data-pathway="graduate" data-region="Canada">* Please note geographical flexibility is not a requirement of the program.</span>
						<label class="js-specific-field" data-pathway="graduate b2b exforces" data-region="USA">We have clients in major metro cities throughout the US. Are you open to national placement opportunities?<span class="apply-form__required">*</span></label>
					</div>
					<div class="radio-group-horizontal">
						<label>
							<input id="selection-form__geoflex-commit" type="radio" value="yes" name="GeographicalFlexibility" data-validation="required" data-validation-error-msg-container="#selection-form__geoflex-commit-err"/>
							<span>Yes</span>
						</label>
						<label>
							<input id="selection-form__geoflex-commit" type="radio" value="no" name="GeographicalFlexibility"/>
							<span>No</span>
						</label>
					</div>
					<div class="apply-form__val-msg" id="selection-form__geoflex-commit-err"></div>
				</div>
                
                <!-- UK GeoFlex -->
                <div class="form-row [ js-specific-field ]" data-pathway="graduate exforces" data-region="UK">
					<div>
						<label class="js-specific-field" data-pathway="graduate" data-region="UK">Are you geographically flexible to relocate within the UK?<span class="apply-form__required">*</span></label>
						<label class="js-specific-field" data-pathway="exforces" data-region="UK">If you are applying for the traditional route, are you geographically flexible to relocate within the UK if required?</label>
				    </div>
					<div class="radio-group-horizontal">
						<label>
							<input id="selection-form__geoflex-commit" type="radio" value="yes" name="GeographicalFlexibility" data-validation="required" data-validation-error-msg-container="#selection-form__geoflex-commit-err-uk"/>
							<span>Yes</span>
						</label>
						<label>
							<input id="selection-form__geoflex-commit" type="radio" value="no" name="GeographicalFlexibility"/>
							<span>No</span>
						</label>
					</div>
					<div class="apply-form__val-msg" id="selection-form__geoflex-commit-err-uk"></div>
				</div>
                
                <!-- b2b Have you taken a career break of one year or more? -->
                <div class="form-row [ js-specific-field ]" data-pathway="b2b" data-region="UK">
					<div>
						<label class="js-specific-field" data-pathway="b2b" data-region="UK">Have you taken a career break of one year or more?<span class="apply-form__required">*</span></label>
				    </div>
					<div class="radio-group-horizontal">
						<label>
							<input id="selection-form__geoflex-commit" type="radio" value="Yes" name="CareerBreak" data-validation="required" data-validation-error-msg-container="#selection-form__geoflex-commit-err"/>
							<span>Yes</span>
						</label>
						<label>
							<input id="selection-form__geoflex-commit" type="radio" value="No" name="CareerBreak"/>
							<span>No</span>
						</label>
					</div>
					<div class="apply-form__val-msg" id="selection-form__geoflex-commit-err"></div>
				</div>
				
				<div class="form-row [ js-specific-field ]" data-pathway="graduate b2b exforces" data-region="UK Australia China Ireland SA Singapore HK ">
					<div>
						<label>If you have any special requirements during the application process, please tick this box so we can enquire as to how we can accommodate your needs.</label>
					</div>
					<div class="single-checkbox">
						<label>
							<input id="selection-form__special-reqs" type="checkbox" value="yes" name="SpecialRequirements"/>
							<span>Yes</span>
						</label>
					</div>
				</div>
				
				<h3 class="[ js-specific-field ]" data-pathway="graduate b2b exforces" data-region="USA Australia Ireland China Canada Singapore HK SA">
					<span data-region="ENG">Please upload your </span>
					<span class="[ js-specific-field ]" data-pathway="graduate b2b exforces" data-region="USA Canada">résumé</span>
					<span class="[ js-specific-field ]" data-pathway="graduate b2b exforces" data-region="Australia Ireland China Singapore HK SA">CV</span>
					<span data-region="DE">Bitte laden Sie Ihre Bewerbungsunterlagen hoch</span>
					<span class="apply-form__required">*</span>
				</h3>

                <h3 class="[ js-specific-field ]" data-pathway="graduate b2b exforces" data-region="UK">
					<span data-region="ENG">Please upload your CV</span>
					<span class="apply-form__required  js-specific-field"  data-pathway="graduate b2b" data-region="UK">*</span>
				</h3>
                
                <p style="text-align: center;" class="js-specific-field	" data-pathway="graduate exforces b2b" data-region="UK Australia Canada China HK Ireland Singapore SA USA">Please Note, the maximum file size is 4.3MB</p>
				
                <!-- Required CV -->
				<div class="form-row [ js-specific-field ]" data-pathway="graduate b2b exforces" data-region="DE Australia Canada China Singapore HK SA Ireland USA">
					<div>
					</div>
					<div>
						<input class="js-upload-input" type="file" name="file" data-validation="required size" data-validation-max-size="4300kb" data-validation-error-msg-container="#cv-form__upload-err"/>
					</div>
					<div class="apply-form__val-msg" id="cv-form__upload-err"></div>
				</div>
                
                <!-- Required CV UK -->
				<div class="form-row [ js-specific-field ]" data-pathway="graduate b2b" data-region="UK">
					<div>
					</div>
					<div>
						<input class="js-upload-input" type="file" name="file" data-validation="required size" data-validation-max-size="4300kb" data-validation-error-msg-container="#cv-form__upload-err-uk"/>
					</div>
					<div class="apply-form__val-msg" id="cv-form__upload-err-uk"></div>
				</div>
                
                <!-- NOT Required CV -->
                <div class="form-row [ js-specific-field ]" data-pathway="exforces" data-region="UK">
					<div>
					</div>
					<div>
						<input class="js-upload-input" type="file" name="file" data-validation="size" data-validation-max-size="4300kb" data-validation-error-msg-container="#cv-form__upload-err-uk-ex"/>
					</div>
                    <div class="apply-form__val-msg" id="cv-form__upload-err-uk-ex"></div>

				</div>
				
				<p data-region="DE">Laden Sie bitte Ihre vollständigen Bewerbungsunterlagen in einer pdf-Datei hoch inkl. Anschreiben, Lebenslauf und Zeugnisse (max. 4.3 MB)*</p>
				
				<div class="form-row [ js-specific-field ]" data-pathway="graduate b2b exforces" data-region="DE UK Australia Canada China Singapore HK SA Ireland USA">
					<div>
						<label class="[ js-specific-field ]" data-pathway="graduate b2b exforces" data-region="UK Canada China Singapore HK SA Ireland USA">I have read and accept the <a href="<?= Hodes\FDM\get_translated_permalink(1966) ?>" target="_blank">Terms and Conditions</a> of use, <a href="<?= Hodes\FDM\get_translated_permalink(1963) ?>" target="_blank">Privacy Policy</a> and consent to receiving information from FDM Group in relation to this request. FDM values the privacy of your personal details and we will not share or otherwise distribute your Personal Data to third parties except as provided in this Privacy Policy.</label>
						<label class="[ js-specific-field ]" data-pathway="graduate" data-region="Australia" for="selection-form__gdpr">I have read and accept the <a href="<?= Hodes\FDM\get_translated_permalink(1966) ?>" target="_blank">Terms and Conditions</a> of use, <a href="<?= Hodes\FDM\get_translated_permalink(1963) ?>" target="_blank">Privacy Policy</a> and consent to receiving information from FDM Group in relation to this request. FDM agrees to treat private information disclosed by you through your use of the Site in accordance with the Data Protection Act 1998 (UK) or equivalent legislation in the jurisdiction in which you applied.</label>
						<label class="[ js-specific-field ]" data-pathway="graduate" data-region="DE" for="selection-form__gdpr-de">Ich habe die <a href="<?= Hodes\FDM\get_translated_permalink(1966) ?>" target="_blank" >Nutzungsbedingungen</a> und <a href="<?= Hodes\FDM\get_translated_permalink(1963) ?>" target="_blank">Datenschutzrichtlinie</a> gelesen bin damit einverstanden, dass ich im Hinblick auf diese Anfrage Informationen der FDM Group erhalte. FDM legt großen Wert auf den Schutz Ihrer persönlichen Angaben und wir werden Ihre personenbezogenen Daten nicht an Dritte weitergeben oder anderweitig verbreiten, es sei denn, wie in der Datenschutzrichtlinie vorgesehen.</label>
					</div>
					<div class="single-checkbox">
						<label>
							<input id="selection-form__gdpr" type="checkbox" value="yes" name="GDPRConsent"/>
							<span>Yes</span>
						</label>
						<label data-region="DE">
							<input id="selection-form__gdpr-de" type="checkbox" value="yes" name="GDPRConsent"/>
							<span>Ja</span>
						</label>
					</div>
				</div>

			</form>
		</section>

	<!-- ####### Congratulations ####### -->
		<section class="[ js-section ] thank-you-message" style="display:none;" data-section="5">
			<div data-region="ENG">
				<h1 class="[ js-specific-field ]" data-pathway="graduate b2b exforces" data-region="Australia Canada China Singapore HK SA USA">Congratulations</h1>
				<h1 class="[ js-specific-field ]" data-pathway="graduate b2b exforces" data-region="UK Ireland">Thank you</h1>
				<div class="form-success-icon"><img src="<?= Hodes\FDM\asset_url('img/form-success.svg') ?>" /></div>
				<div>
					<p>We've received your application. Our recruitment team will review your application and get in touch shortly.</p>
					<p>In the meantime, check out our <a href="<?= Hodes\FDM\get_translated_permalink(1435) ?>">social hub</a> to get an inside look at what life at FDM is like. You can also read <a href="<?= Hodes\FDM\get_translated_permalink(142) ?>">our blog</a> for the latest stories from FDM around the world.</p>
				</div>
			</div>
			
			<div data-region="DE">
				<h1>Vielen Dank</h1>
				<p>Wir haben Ihre Bewerbung erhalten und Ihre Unterlagen werden nun von uns geprüft. Sie erhalten in Kürze eine Rückmeldung.</p>
				<p>In der Zwischenzeit können Sie sich auf den <a href="<?= Hodes\FDM\get_translated_permalink(1435) ?>">sozialen Netzwerken</a> über Neuigkeiten und weitere Karrierewege informieren.</p>
			</div>
		</section>
		
		<div class="control-buttons">

			<button class="[ js-next-btn ]	[ btn ] ">
				<span data-region="ENG">Next</span>
				<span class="js-hidden" data-region="DE">Weiter</span>
			</button>
	
			<button class="[ js-apply-btn ]	 [ btn ]	 [ js-hidden ]">
				<span data-region="ENG">Apply</span>
				<span class="js-hidden" data-region="DE">Abschicken</span>
			
				<div class="sk-circle  js-spinner js-hidden">
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
			
			<p class="js-hidden	 js-apply-error" style="text-align:center;">
				<span data-region="ENG">Something went wrong, please try again.</span>
				<span data-region="DE">Etwas ist schief gelaufen. Bitte versuche es erneut.</span>
			</p>
            
            <p class="js-hidden	 js-apply-wait" style="text-align:center;">
				<span data-region="ENG">Please wait.</span>
				<span data-region="DE">Warten Sie mal.</span>
			</p>
	
			<button class="[ js-pre-btn ]  [ btn ]	[ js-hidden ]">
				<span data-region="ENG">Back</span>
				<span class="js-hidden" data-region="DE">Zurück</span>
			</button>
		</div>
		
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
</div>
    
<form class="js-form  js-additional-fields" style="display: none"></form>

<script type="text/javascript">
    
    
    jQuery(function($){
	
	var validationConfigs = {
		modules : 'location, date, security, file',
		showHelpOnFocus : false,
		addSuggestions : false,
		borderColorOnError : "",
		validateHiddenInputs : false
	};
	
	$.validate(validationConfigs);
    
    $.fn.changeElementType = function(newType) {
        var attrs = {};

        $.each(this[0].attributes, function(idx, attr) {
            attrs[attr.nodeName] = attr.nodeValue;
        });

        this.replaceWith(function() {
            return $("<" + newType + "/>", attrs).append($(this).contents());
        });
    };
        
    jQuery.fn.toggleDisplay = function( show ) {
        
        jQuery( this ).each(function(){
        
            if( show ) {
                if( jQuery( this ).is("hidden") ){
                    jQuery( this ).changeElementType( "option" );
                    jQuery( this ).removeClass('js-hidden');
                } else {
                    jQuery( this ).removeClass('js-hidden');
                }
            } else {
                if( jQuery( this ).is("option") ){
                    jQuery( this ).changeElementType( "hidden" );
                    jQuery( this ).addClass('js-hidden');
                } else {
                    jQuery( this ).addClass('js-hidden');
                }
            }
        });
    };
        
    var getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = decodeURIComponent(window.location.search.substring(1)),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : sParameterName[1];
            }
        }
    };
        
    function appendStyle(styles) {
        var css = document.createElement('style');
        css.type = 'text/css';

        if (css.styleSheet) {
            css.styleSheet.cssText = styles;
        }
        else {
            css.appendChild(document.createTextNode(styles));
        }

        document.getElementsByTagName("head")[0].appendChild(css);
    }
        
	function objectifyForm(formArray) {
		var returnArray = {};
		for (var i = 0; i < formArray.length; i++){
			if (formArray[i]['value'] == "") {
				continue;
			}
			returnArray[formArray[i]['name']] = formArray[i]['value'];
		}
		return returnArray;
	};
	
	function uploadCv(sfId, callback) {
		var reader = new FileReader();
        
		var file;
        
        $(".js-upload-input").each(function(){
            var input = this;
            
            if( input.files.length ){
                file = this;
            }
        });
        
		if (file === undefined) {
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
                async: false,
				contentType: "application/json; charset=UTF-8",
				data: JSON.stringify(cv),
				processData: false,
				url: "https://applications.fdmgroup.com/services/apexrest/CVService",
                success: callback
			}).fail(function(jqXHR, textStatus) {
				callback
			});
		};
		reader.readAsDataURL(file.files[0]);
		return true;
	};
	
	
	$(function(){
		
        appendStyle(".fdm-application-form-component button{position:relative}.sk-circle{position:absolute;width:30px;height:30px;top:50%;right:10px;transform:translateY(-50%)}.sk-circle .sk-child{width:100%;height:100%;position:absolute;left:0;top:0}.sk-circle .sk-child:before{content:'';display:block;margin:0 auto;width:15%;height:15%;background-color:#000;border-radius:100%;-webkit-animation:sk-circleBounceDelay 1.2s infinite ease-in-out both;animation:sk-circleBounceDelay 1.2s infinite ease-in-out both}.sk-circle .sk-circle2{-webkit-transform:rotate(30deg);-ms-transform:rotate(30deg);transform:rotate(30deg)}.sk-circle .sk-circle3{-webkit-transform:rotate(60deg);-ms-transform:rotate(60deg);transform:rotate(60deg)}.sk-circle .sk-circle4{-webkit-transform:rotate(90deg);-ms-transform:rotate(90deg);transform:rotate(90deg)}.sk-circle .sk-circle5{-webkit-transform:rotate(120deg);-ms-transform:rotate(120deg);transform:rotate(120deg)}.sk-circle .sk-circle6{-webkit-transform:rotate(150deg);-ms-transform:rotate(150deg);transform:rotate(150deg)}.sk-circle .sk-circle7{-webkit-transform:rotate(180deg);-ms-transform:rotate(180deg);transform:rotate(180deg)}.sk-circle .sk-circle8{-webkit-transform:rotate(210deg);-ms-transform:rotate(210deg);transform:rotate(210deg)}.sk-circle .sk-circle9{-webkit-transform:rotate(240deg);-ms-transform:rotate(240deg);transform:rotate(240deg)}.sk-circle .sk-circle10{-webkit-transform:rotate(270deg);-ms-transform:rotate(270deg);transform:rotate(270deg)}.sk-circle .sk-circle11{-webkit-transform:rotate(300deg);-ms-transform:rotate(300deg);transform:rotate(300deg)}.sk-circle .sk-circle12{-webkit-transform:rotate(330deg);-ms-transform:rotate(330deg);transform:rotate(330deg)}.sk-circle .sk-circle2:before{-webkit-animation-delay:-1.1s;animation-delay:-1.1s}.sk-circle .sk-circle3:before{-webkit-animation-delay:-1s;animation-delay:-1s}.sk-circle .sk-circle4:before{-webkit-animation-delay:-.9s;animation-delay:-.9s}.sk-circle .sk-circle5:before{-webkit-animation-delay:-.8s;animation-delay:-.8s}.sk-circle .sk-circle6:before{-webkit-animation-delay:-.7s;animation-delay:-.7s}.sk-circle .sk-circle7:before{-webkit-animation-delay:-.6s;animation-delay:-.6s}.sk-circle .sk-circle8:before{-webkit-animation-delay:-.5s;animation-delay:-.5s}.sk-circle .sk-circle9:before{-webkit-animation-delay:-.4s;animation-delay:-.4s}.sk-circle .sk-circle10:before{-webkit-animation-delay:-.3s;animation-delay:-.3s}.sk-circle .sk-circle11:before{-webkit-animation-delay:-.2s;animation-delay:-.2s}.sk-circle .sk-circle12:before{-webkit-animation-delay:-.1s;animation-delay:-.1s}@-webkit-keyframes sk-circleBounceDelay{0%,100%,80%{-webkit-transform:scale(0);transform:scale(0)}40%{-webkit-transform:scale(1);transform:scale(1)}}@keyframes sk-circleBounceDelay{0%,100%,80%{-webkit-transform:scale(0);transform:scale(0)}40%{-webkit-transform:scale(1);transform:scale(1)}}");
        
        var shortCode = getUrlParameter("cs");
        var streamCode = getUrlParameter("stream");
        var regionOverride;
                
        if(shortCode != undefined) {
            
            $.ajax({
                url: "https://applications.fdmgroup.com/services/apexrest/ApplicationService?cs=" + shortCode,
                type: "get",
                async: false,
                success: function(data){
                    
                    var campaingDetails = data.CampaignDetails;

                    if( campaingDetails.CampaignName != undefined ){

                        $('#details-form__hear-about').append($('<option>', {
                            value: campaingDetails.CampaignName,
                            text: campaingDetails.CampaignName,
                            selected: 'selected'
                        }));
                        $(".js-campaign-name").hide();

                    }

                    if( campaingDetails.CampaignId != undefined ){
                        $('<input />').attr('type', 'hidden')
                            .attr('name', "CampaignId")
                            .attr('value', campaingDetails.CampaignId)
                            .appendTo('.js-additional-fields');
                    }

                    if( campaingDetails.ApplyingTo != undefined ){
                        regionOverride = campaingDetails.ApplyingTo;
                    }
                }
            });
        }
        
        if(streamCode != undefined) {
            $(".js-pathway").addClass("js-hidden");
            $(".js-pre-def-pathway").removeClass("js-hidden");
            $(".js-pre-def-pathway").val(streamCode);   
        }
        
        
		var regionParam = regionOverride === undefined || regionOverride === "" ? $('.fdm-application-form-component').attr('data-default-region') : regionOverride;
		
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
			
		}
		
        $(".js-loading").addClass("js-hidden");
		$(".js-wrapper").removeClass('js-hidden');
        
        // set a data attribute indicating the number of boxes visible - this is used in styling
		var $ptb = $('.program-type-boxes');
		$ptb.attr('data-num-visible', $ptb.children(':visible').length );
		
		$(".js-region").change(function(){
			var selectedRegion = this.value;
			getRegionSpecifics(selectedRegion);	
			setProgress();			   
		});
		
		$("#education-form__clubs").restrictLength($("#education-form__clubs-max-length"));
		$("#education-form__personal").restrictLength($("#education-form__personal-max-length"));
		$("#education-form__personal-uk").restrictLength($("#education-form__personal-uk-max-length"));
		$("#details-form__personal").restrictLength($("#details-form__personal-max-length"));
		$("#education-form__leadership").restrictLength($("#education-form__leadership-max-length"));
		
		
		var currentSection = 0;
		var nextSelection = 1;
		var preSelection = -1;
		
		var pathway;
		var region;
		
		var setProgress = function() {
			$('.progress-bar:visible').each(function(){
				$('.js-progress',this).removeClass('current');
			});
			$('.js-progress[data-section-id="' + currentSection + '"]').addClass('current');
		};
		setProgress();
		
		var scrollToTop = function() {
			window.setTimeout( function() {
				var $header = $('.l-header');
				$('html, body').scrollTop( $(".fdm-application-form-component").offset().top - 90 );
			}, 100 );
		};

		$(".js-next-btn").click(function(){
			var rawPathway = $('input[type=radio][name=RecruitmentType]:checked' ).val();
			
			switch(rawPathway){
				case "Graduate":
					pathway = "graduate";
					break;
				case "ReturnToWork":
					pathway = "b2b";
					break;
				case "Military":
					pathway = "exforces";
					break;
				default:
					return false;
			}
			
			region = $('select[name="ApplyingTo"]').val();
			
			region = region == "Hong Kong" ? "HK" : region;
			region = region == "South Africa" ? "SA" : region;
			region = region == "Deutschland" ? "DE" : region;
            
            if (nextSelection == 1 ) {
                $('.js-specific-field').toggleDisplay(false);
                $('.js-specific-field[data-pathway~="' + pathway + '"]').toggleDisplay(true);
                $('.js-specific-field[data-pathway~="' + pathway + '"]').filter('.js-specific-field:not([data-region~="' + region + '"])').toggleDisplay(false);
			}else {
                $('.js-specific-field').addClass('js-hidden');
                $('.js-specific-field[data-pathway~="' + pathway + '"]').removeClass('js-hidden');
                $('.js-specific-field[data-pathway~="' + pathway + '"]').filter('.js-specific-field:not([data-region~="' + region + '"])').addClass('js-hidden');
            }
            
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
                || (nextSelection == 2 && pathway == "b2b" && region == "UK")
				|| (nextSelection == 3 && region == "DE")) {
				currentSection++;
				nextSelection++;
				preSelection++;
			}
			
			
			if(nextSelection == 5){				 
				$(".js-pre-btn").addClass('js-hidden');
				$(".js-next-btn").addClass('js-hidden'); 
				$(".js-apply-btn").addClass('js-hidden');							
			} else {
				$(".js-pre-btn").removeClass('js-hidden');
			}
			
			if(nextSelection == 4) {	  
				$(".js-next-btn").addClass('js-hidden');
				$(".js-apply-btn").removeClass('js-hidden');
			}
			
			currentSection++;
			nextSelection++;
			preSelection++;
			setProgress();
			scrollToTop();
			
			$('.js-specific-field').addClass('js-hidden');
			$('.js-specific-field[data-pathway~="' + pathway + '"]').removeClass('js-hidden');
			$('.js-specific-field[data-pathway~="' + pathway + '"]').filter('.js-specific-field:not([data-region~="' + region + '"])').addClass('js-hidden');
			
			
			$('.js-section[data-section="' + currentSection + '"]').fadeIn(100);
		});
		
		$(".js-pre-btn").click(function(){
            
            $('.js-specific-field').addClass('js-hidden');
			$('.js-specific-field[data-pathway~="' + pathway + '"]').removeClass('js-hidden');
			$('.js-specific-field[data-pathway~="' + pathway + '"]').filter('.js-specific-field:not([data-region~="' + region + '"])').addClass('js-hidden');
			
            
			$(".js-next-btn").removeClass('js-hidden');
			$(".js-apply-btn").addClass('js-hidden');
			
			if(preSelection == 0){
				$(".js-pre-btn").addClass('js-hidden')
			} else {
				$(".js-pre-btn").removeClass('js-hidden');
			}
			
			$('.js-section[data-section="' + currentSection + '"]').hide();
			
			if ((preSelection == 2 && pathway == "exforces" && region == "UK")
                || (preSelection == 2 && pathway == "b2b" && region == "UK")) {
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
			
			$(".js-spinner").removeClass('js-hidden');
			$(".js-apply-btn").prop("disabled",true);
            $(".js-apply-wait").removeClass('js-hidden');
			
            var allForms = $(".js-form:not(.js-cv-form)");
            
            var disabled = allForms.find(':input:disabled').removeAttr('disabled');
            
            var data = allForms.serializeArray();
            
            disabled.attr('disabled','disabled');
            			
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
				url: "https://applications.fdmgroup.com/services/apexrest/ApplicationService",
				success: function(responseData, textStatus, jqXHR) {
					var value = responseData;
					uploadCv(value, function(){
                        $(".js-apply-error").addClass('js-hidden');
                        $(".js-next-btn").trigger("click");
                        $(".js-spinner").addClass('js-hidden');
                        $(".js-apply-btn").removeProp("disabled");
                        $(".js-apply-wait").addClass('js-hidden');
                    });
                    
                    
				},
				error: function (responseData, textStatus, errorThrown) {
					$(".js-apply-error").removeClass('js-hidden');
					$(".js-spinner").addClass('js-hidden');
					$(".js-apply-btn").removeProp("disabled");
					$(".js-apply-wait").addClass('js-hidden');
                    
				}
			});
			
			// notify Google Analytics of the application by region
            getGoogleAnalytics(region);			
		});
	});
    
    function getGoogleAnalytics(region) {
        switch(region) {
            case "UK":
                gtag('event', 'apply', {'event_category': 'application-form','event_label': 'UK Apply button clicked'});
                break;
            case "USA":
                gtag('event', 'apply', {'event_category': 'application-form','event_label': 'USA Apply button clicked'});
                break;
            case "Australia":
                gtag('event', 'apply', {'event_category': 'application-form','event_label': 'Australia Apply button clicked'});
                break;
            case "Canada":
                gtag('event', 'apply', {'event_category': 'application-form','event_label': 'Canada Apply button clicked'});
                break;
            case "China":
                gtag('event', 'apply', {'event_category': 'application-form','event_label': 'China Apply button clicked'});
                break;
            case "Hong Kong":
                gtag('event', 'apply', {'event_category': 'application-form','event_label': 'Hong Kong Apply button clicked'});
                break;
            case "Singapore":
                gtag('event', 'apply', {'event_category': 'application-form','event_label': 'Singapore Apply button clicked'});
                break;
            case "Ireland":
                gtag('event', 'apply', {'event_category': 'application-form','event_label': 'Ireland Apply button clicked'});
                break;
            case "South Africa":
                gtag('event', 'apply', {'event_category': 'application-form','event_label': 'South Africa Apply button clicked'});
                break;
            case "Deutschland":
                gtag('event', 'apply', {'event_category': 'application-form','event_label': 'Germany Apply button clicked'});
                break;
            default:
                gtag('event', 'apply', {'event_category': 'application-form','event_label': 'Apply button clicked'});
                break;
        }
    }
	
	function getRegionSpecifics(region) {
		
        $('label').removeClass('js-hidden');
        validationConfigs.lang = "en";
        $.validate(validationConfigs);

        if( region == "Deutschland" ){
            $(".js-default-select").html("Bitte auswählen");
        }else{
            $(".js-default-select").html("Please select one");
        }

        $('option[data-region~="DE"]').toggleDisplay(false);

        switch(region) {
                case "UK":
                    $('*[data-region~="ENG-Programme"]').addClass('js-hidden');
                    $('*[data-region~="ENG-Graduate"]').addClass('js-hidden');
                    $('*[data-region~="ENG-CA"]').addClass('js-hidden');
                    $('*[data-region~="ENG-USA"]').addClass('js-hidden');
                    $('*[data-region~="ENG-AUS"]').addClass('js-hidden');
                    $('*[data-region~="ENG-Graduate"]').addClass('js-hidden');
                    $('*[data-region~="ENG-CN"]').addClass('js-hidden');
                    $('*[data-region~="ENG-HK"]').addClass('js-hidden');
                    $('*[data-region~="ENG-IRL"]').addClass('js-hidden');
                    $('*[data-region~="ENG-SGP"]').addClass('js-hidden');
                    $('*[data-region~="ENG-ZAF"]').addClass('js-hidden');
                    $('*[data-region~="DE"]').addClass('js-hidden');

                    $('*[data-region~="ENG"]').removeClass('js-hidden');
                    $('*[data-region~="ENG-GB"]').removeClass('js-hidden');
                    break;
                case "USA":
                    $('*[data-region~="ENG-GB"]').addClass('js-hidden');
                    $('*[data-region~="ENG-CA"]').addClass('js-hidden');
                    $('*[data-region~="ENG-Graduate"]').addClass('js-hidden');
                    $('*[data-region~="ENG-Programme"]').addClass('js-hidden');
                    $('*[data-region~="DE-DE"]').addClass('js-hidden');
                    $('*[data-region~="DE"]').addClass('js-hidden');
                    $('*[data-region~="ENG-AUS"]').addClass('js-hidden');
                    $('*[data-region~="ENG-CN"]').addClass('js-hidden');
                    $('*[data-region~="ENG-HK"]').addClass('js-hidden');
                    $('*[data-region~="ENG-SGP"]').addClass('js-hidden');
                    $('*[data-region~="ENG-ZAF"]').addClass('js-hidden');
                    $(".js-grad-only").addClass('js-hidden');
                    $('*[data-region~="ENG"]').removeClass('js-hidden');
                    $('*[data-region~="ENG-USA"]').removeClass('js-hidden');
                    $(".js-grad").removeClass('js-hidden');
                    $(".js-common-used").removeClass('js-hidden');
                    $(".js-exforces").removeClass('js-hidden');
                    $(".js-b2b").removeClass('js-hidden');
                    break;
                case "Australia":
                    $('*[data-region~="ENG-Programme"]').addClass('js-hidden');
                    $('*[data-region~="DE"]').addClass('js-hidden');
                    $('*[data-region~="ENG-CA"]').addClass('js-hidden');
                    $('*[data-region~="ENG-USA"]').addClass('js-hidden');
                    $('*[data-region~="ENG-GB"]').addClass('js-hidden');
                    $('*[data-region~="ENG-CN"]').addClass('js-hidden');
                    $('*[data-region~="ENG-HK"]').addClass('js-hidden');
                    $('*[data-region~="ENG-SGP"]').addClass('js-hidden');
                    $('*[data-region~="ENG-ZAF"]').addClass('js-hidden');
                    $(".js-exforces").addClass('js-hidden');
                    $(".js-b2b").addClass('js-hidden');
                    $(".js-common-used").addClass('js-hidden');
                    $('*[data-region~="ENG-AUS"]').removeClass('js-hidden');
                    $('*[data-region~="ENG"]').removeClass('js-hidden');
                    $('*[data-region~="ENG-Graduate"]').removeClass('js-hidden');
                    $(".js-grad").removeClass('js-hidden');
                    $(".js-grad-only").removeClass('js-hidden');
                    break;
                case "Canada":
                    $('*[data-region~="ENG-Programme"]').addClass('js-hidden');
                    $('*[data-region~="DE"]').addClass('js-hidden');
                    $('*[data-region~="ENG-CA"]').addClass('js-hidden');
                    $('*[data-region~="ENG-USA"]').addClass('js-hidden');
                    $('*[data-region~="ENG-GB"]').addClass('js-hidden');
                    $('*[data-region~="ENG-AUS"]').addClass('js-hidden');
                    $('*[data-region~="ENG-Graduate"]').addClass('js-hidden');
                    $('*[data-region~="ENG-CN"]').addClass('js-hidden');
                    $('*[data-region~="ENG-HK"]').addClass('js-hidden');
                    $('*[data-region~="ENG-SGP"]').addClass('js-hidden');
                    $('*[data-region~="ENG-ZAF"]').addClass('js-hidden');
                    $(".js-grad-only").addClass('js-hidden');
                    $(".js-exforces").addClass('js-hidden');
                    $(".js-b2b").addClass('js-hidden');
                    $(".js-grad").removeClass('js-hidden');
                    $(".js-common-used").removeClass('js-hidden');
                    $('*[data-region~="ENG"]').removeClass('js-hidden');
                    $('*[data-region~="ENG-CA"]').removeClass('js-hidden');
                    break;
                case "China":
                    $('*[data-region~="ENG-Programme"]').addClass('js-hidden');
                    $('*[data-region~="DE"]').addClass('js-hidden');
                    $('*[data-region~="ENG-CA"]').addClass('js-hidden');
                    $('*[data-region~="ENG-USA"]').addClass('js-hidden');
                    $('*[data-region~="ENG-GB"]').addClass('js-hidden');
                    $('*[data-region~="ENG-AUS"]').addClass('js-hidden');
                    $('*[data-region~="ENG-Graduate"]').addClass('js-hidden');
                    $('*[data-region~="ENG-HK"]').addClass('js-hidden');
                    $('*[data-region~="ENG-SGP"]').addClass('js-hidden');
                    $('*[data-region~="ENG-ZAF"]').addClass('js-hidden');
                    $(".js-exforces").addClass('js-hidden');
                    $(".js-b2b").addClass('js-hidden');
                    $(".js-common-used").addClass('js-hidden');
                    $(".js-grad").removeClass('js-hidden');
                    $(".js-grad-only").removeClass('js-hidden');
                    $('*[data-region="ENG"]').removeClass('js-hidden');
                    $('*[data-region~="ENG-CN"]').removeClass('js-hidden');
                    $('*[data-region="ENG-Graduate"]').removeClass('js-hidden');
                    break;
                case "Hong Kong":
                    $('*[data-region~="ENG-Programme"]').addClass('js-hidden');
                    $('*[data-region="ENG-Graduate"]').addClass('js-hidden');
                    $('*[data-region~="DE"]').addClass('js-hidden');
                    $('*[data-region~="ENG-CA"]').addClass('js-hidden');
                    $('*[data-region~="ENG-USA"]').addClass('js-hidden');
                    $('*[data-region~="ENG-GB"]').addClass('js-hidden');
                    $('*[data-region~="ENG-AUS"]').addClass('js-hidden');
                    $('*[data-region~="ENG-Graduate"]').addClass('js-hidden');
                    $('*[data-region~="ENG-CN"]').addClass('js-hidden');
                    $('*[data-region~="ENG-HK"]').addClass('js-hidden');
                    $('*[data-region~="ENG-SGP"]').addClass('js-hidden');
                    $('*[data-region~="ENG-ZAF"]').addClass('js-hidden');
                    $(".js-exforces").addClass('js-hidden');
                    $(".js-b2b").addClass('js-hidden');
                    $(".js-common-used").addClass('js-hidden');
                    $(".js-grad-only").addClass('js-hidden');
                    $('*[data-region~="ENG"]').removeClass('js-hidden');
                    $('*[data-region~="ENG-HK"]').removeClass('js-hidden');
                    break;
                case "Ireland":
                    $('*[data-region~="ENG-Programme"]').addClass('js-hidden');
                    $('*[data-region="ENG-Graduate"]').addClass('js-hidden');
                    $('*[data-region~="DE"]').addClass('js-hidden');
                    $('*[data-region~="ENG-CA"]').addClass('js-hidden');
                    $('*[data-region~="ENG-USA"]').addClass('js-hidden');
                    $('*[data-region~="ENG-GB"]').addClass('js-hidden');
                    $('*[data-region~="ENG-AUS"]').addClass('js-hidden');
                    $('*[data-region~="ENG-Graduate"]').addClass('js-hidden');
                    $('*[data-region~="ENG-CN"]').addClass('js-hidden');
                    $('*[data-region~="ENG-HK"]').addClass('js-hidden');
                    $('*[data-region~="ENG-SGP"]').addClass('js-hidden');
                    $('*[data-region~="ENG-ZAF"]').addClass('js-hidden');

                    $('*[data-region~="ENG"]').removeClass('js-hidden');
                    $('*[data-region~="ENG-IRL"]').removeClass('js-hidden');
                    break;
                case "Singapore":
                    $('*[data-region~="ENG-Programme"]').addClass('js-hidden');
                    $('*[data-region="ENG-Graduate"]').addClass('js-hidden');
                    $('*[data-region~="DE"]').addClass('js-hidden');
                    $('*[data-region~="ENG-CA"]').addClass('js-hidden');
                    $('*[data-region~="ENG-USA"]').addClass('js-hidden');
                    $('*[data-region~="ENG-GB"]').addClass('js-hidden');
                    $('*[data-region~="ENG-AUS"]').addClass('js-hidden');
                    $('*[data-region~="ENG-Graduate"]').addClass('js-hidden');
                    $('*[data-region~="ENG-CN"]').addClass('js-hidden');
                    $('*[data-region~="ENG-HK"]').addClass('js-hidden');
                    $('*[data-region~="ENG-IRL"]').addClass('js-hidden');
                    $('*[data-region~="ENG-SGP"]').addClass('js-hidden');
                    $('*[data-region~="ENG-ZAF"]').addClass('js-hidden');

                    $('*[data-region~="ENG"]').removeClass('js-hidden');
                    $('*[data-region~="ENG-SGP"]').removeClass('js-hidden');
                    break;
                case "South Africa":
                    $('*[data-region~="ENG-Programme"]').addClass('js-hidden');
                    $('*[data-region="ENG-Graduate"]').addClass('js-hidden');
                    $('*[data-region~="DE"]').addClass('js-hidden');
                    $('*[data-region~="ENG-CA"]').addClass('js-hidden');
                    $('*[data-region~="ENG-USA"]').addClass('js-hidden');
                    $('*[data-region~="ENG-GB"]').addClass('js-hidden');
                    $('*[data-region~="ENG-AUS"]').addClass('js-hidden');
                    $('*[data-region~="ENG-Graduate"]').addClass('js-hidden');
                    $('*[data-region~="ENG-CN"]').addClass('js-hidden');
                    $('*[data-region~="ENG-HK"]').addClass('js-hidden');
                    $('*[data-region~="ENG-IRL"]').addClass('js-hidden');
                    $('*[data-region~="ENG-SGP"]').addClass('js-hidden');

                    $('*[data-region~="ENG-ZAF"]').removeClass('js-hidden');
                    break;
                case "Deutschland":
                    $('*[data-region~="ENG-Programme"]').addClass('js-hidden');
                    $('*[data-region~="ENG-Graduate"]').addClass('js-hidden');
                    $('*[data-region~="ENG-CA"]').addClass('js-hidden');
                    $('*[data-region~="ENG-USA"]').addClass('js-hidden');
                    $('*[data-region~="ENG-GB"]').addClass('js-hidden');
                    $('*[data-region~="ENG-AUS"]').addClass('js-hidden');
                    $('*[data-region~="ENG-Graduate"]').addClass('js-hidden');
                    $('*[data-region~="ENG-CN"]').addClass('js-hidden');
                    $('*[data-region~="ENG-HK"]').addClass('js-hidden');
                    $('*[data-region~="ENG-IRL"]').addClass('js-hidden');
                    $('*[data-region~="ENG-SGP"]').addClass('js-hidden');
                    $('*[data-region~="ENG-ZAF"]').addClass('js-hidden');
                    $('*[data-region~="ENG"]').addClass('js-hidden');
                    $('label:not([data-region~="' + region + '"])').addClass('js-hidden');

                    $('*[data-region~="DE"]').removeClass('js-hidden');

                    $('select *[data-region~="DE"]').toggleDisplay(true);

                    validationConfigs.lang = "de";
                    $.validate(validationConfigs);
                    break;
                default:
                    break;
            }

        // set a data attribute indicating the number of boxes visible - this is used in styling
        var $ptb = $('.program-type-boxes');
        $ptb.attr('data-num-visible', $ptb.children(':visible').length );

    }

});</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-236343-7"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments)};
    gtag('js', new Date());
    gtag('config', 'UA-236343-7');
</script>