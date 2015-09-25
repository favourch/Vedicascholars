	

	<div class="form">
		<div class="header inner_header">
			<div class="grid-container">
				<div class="column-twelve">
					<h4 style="margin-bottom:15px;"><?php echo $lang['section_additional_info'];?></h4>
				</div>							
			</div>
		</div>
		<div class="section inner_section">
			<form method="post" action="" id="section_additional_info">
				<fieldset>
					<div class="grid-container">
						<div class="column-twelve">
							<div class="input-group">
								<?php echo CSRF::make('section_additional_info-form')->protect();?>                                      
							</div>
						</div>
						<div class="column-twelve">
						    <div class="box">
							    <div class="box-header" style="text-align:left">
								    <h3>Additional Information</h3>
								</div>
								<div class="box-section center">
								    <div class="column-twelve">
										<div class="textarea-group irequire">
										    <label for="rolemodelinfo" class="group label-textarea">
				                                <textarea rows="5" id="rolemodelinfo" name="rolemodelinfo" class="textarea resisable" placeholder="Who is your role model? Explain the reasons behind your choice. (Max 200 words)"></textarea>
											</label>
									    </div>
									</div>
									<div class="column-twelve">
										<div class="textarea-group irequire">
										    <label for="supportinfo" class="group label-textarea">
				                                <textarea rows="5" id="supportinfo" name="supportinfo" class="textarea resisable" placeholder="What according to you has been your biggest failure and how did you overcome it? (Max 200 words)"></textarea>
											</label>
									    </div>
									</div>
									<div class="column-twelve">
										<div class="textarea-group irequire">
										    <label for="supportinfo" class="group label-textarea">
				                                <textarea rows="5" id="supportinfo" name="supportinfo" class="textarea resisable" placeholder="Create a write-up of yourself as an alumnus of The Vedica Scholars Programme alumnus and explain how the programme helped you achieve your career goals. (Max 200 words)"></textarea>
											</label>
									    </div>
									</div>
									<div class="column-twelve">
										<div class="textarea-group irequire">
										    <label for="supportinfo" class="group label-textarea">
				                                <textarea rows="5" id="supportinfo" name="supportinfo" class="textarea resisable" placeholder="Is there anything else you would like to mention that would add to your candidature for the programme? (Max 200 words)"></textarea>
											</label>
									    </div>
									</div>
								</div>
							</div>
						</div>
						<div class="column-two">
							<button type="button" id="back-button-doc" class="button button-large button-blue">Back</button>
						</div>
						<div class="column-two">
							<button type="button" id="save-button-doc" class="button button-large button-blue">Save</button>
						</div>
						<div class="column-two">
							<button type="button" id="continue-button-doc" class="button button-large button-green">Save and Continue</button>
						</div>						
					</div>
				</fieldset>
			</form>
		</div>	
	</div>