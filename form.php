<form action="sendmail.php" method="post">
		<fieldset class="c-form">
			<legend class="c-form__heading bf-h1" >LET'S GET IN CONTACT...</legend>
			<br><br><br>
			<div class="c-form__row">
				<label for="name" class="c-label">Name</label><br>
				<input type="text" name="name" id="name" class="c-input-field bf-m-b-2" value="" autocorrect="off">
			</div>
			<div class="c-form__row">
				<label for="email" class="c-label">Email</label><br>
				<input type="email" name="email" id="email" autocapitalize="none" autocorrect="off" class="c-input-field bf-m-b-2">
			</div>
      <div class="c-form__row">
    <label for="contactno" class="c-label">Contact Number</label><br>
    <input type="text" name="contactno" id="contactno" class="c-input-field bf-m-b-2" value="" autocorrect="off" pattern="[0-9+\s]+" maxlength="" required>
    </div>
    <div class="c-form__row">
				<label for="subject" class="c-label">Subject</label><br>
				<input type="text" name="subject" id="subject" class="c-input-field bf-m-b-2" value="" autocorrect="off">
			</div>
			<div class="c-form__row">
				<label for="message" class="c-label">Your message</label><br>
				<textarea name="message" id="message" class="c-input-field c-input-field--multiline bf-m-b-3" rows="10"></textarea>
			</div>
			<div class="c-form__row">
				<button class="c-button bf-btn bf-btn--primary" type="submit" name='send'>Submit </button>
			</div>
			<br><br><br>
		</fieldset>
	</form>