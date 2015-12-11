<div class="jumbotron">
	<div class="container">
		<h1>Instructions!</h1>
		<p>What you need to do:</p>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h5>Layout</h5>
			</div>
			<div class="panel-body">
				<ol>
					<li>The navigation links are broken. Make them work so they jump to the correct locations.</li>
					<li>
						On Mobile Devices (bootstrap xs size), adjust the form to be more compact. (Uses: HTML/CSS)
						<ul>
							<li>Put <em>city</em>, <em>state/province</em> and <em>zip</em> all on the same line. Without adding any more form elements. It should be pure CSS with styles and classes and structural HTML elements.</li>
						</ul>
					</li>
					<li>The Stored Data table is breaking the layout on Mobile. Make the table responsive. <em>(Remember, Bootstrap!)</em></li>
					<li>
						Add iDangerous Swiper carousel (Uses: HTML/CSS/JS maybe PHP)
						<ul>
							<li>Using (http://www.idangero.us/swiper/#.VmsZbsrSjFY) create a slider that shows 1 image at a time.</li>
							<li>The slider should have 3 images of your choosing.</li>
							<li>If you want to use PHP to generate the markup you can.</li>
							<li>The size of the slider does not matter. Make sure it does not break the Bootstrap grid.</li>
						</ul>
					</li>
					<li>
						Table Header Hover Effect (Uses: CSS only!)
						<ul>
							<li>On hover of <u>all</u> table headers we would like to have the text color change to '#ff0000'.</li>
							<li>The color effect should have a fade of 0.3 seconds.</li>
							<li>The table headers should alter cell color; every other header element should have '#e5e5e5' as their background color.</li>
							<li>You should create a custom CSS file to make CSS changes.</li>
						</ul>
					</li>
					<li>
						Debugging
						<ul>
							<li>The HTML has errors as well. Syntax errors are on the form and the main layout page. These bugs might manipulate your data giving you an unexpected result when you submit the data. The syntax errors are common mistakes of copy and pasting elements.</li>
							<li>When you are done run the HTML through the W3C Validating service. The result should be 0 errors or warnings.</li>
						</ul>
					</li>
					<li>
						Clean Code
						<ul>
							<li>At AKT we are sticklers of clean code. Since the projects you may be working on will be shared within the whole team, it's important to follow our normal standards and practices when writing code. You can view our Bible over at this GitHub repo (https://github.com/districtlines/AKTCodingStandards).</li>
						</ul>
					</li>
				</ol>
			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-heading">
				<h5>Form Functionality</h5>
			</div>
			<div class="panel-body">
				<ol>
					<li>
						Validate and display the form data (Uses: HTML/CSS/JS)
						<ol>
							<li>Each form field has specific requirements. Before the form can be submitted the values of the form elements must be validated to meet their requirements. You can use any method you would like to validate. Keep in mind that the validation must work in the latest versions of Firefox, Safari and Chrome.</li>
							<li>On error there needs to be some sort of display to let the user know there is problems with their values. You can list all errors together or per element. It should only display problematic fields. Do not use: <em>JS:alert();</em></li>
							<li>If the user data passes the validation, have the data display in the table below the form. <em>See note about AJAX below</em></li>
							<li>We are not expecting this data to be saved to any type of DB. It is purely a front-end form.</li>
						</ol>
					</li>
					<li>
						Ajax (Uses: HTML/CSS/JS/PHP)
						<ul>
							<li>You will see that there is 2 fields that are not part of the form, <em><u>ID</u></em> and <em><u>Created</u></em>. These fields should never be generated client-side as that can pose a security risk. Instead we rely on server-side scripts to handle this for us. You will need to create the AJAX call as well as write the basic PHP in the components/ajax/ajax.php file. The PHP is very minor (you can use Google).</li>
						</ul>
					</li>
				</ol>
			</div>
		</div>

		<div class="panel panel-success">
			<div class="panel-heading">
				<h5>Bonus Points</h5>
			</div>
			<div class="panel-body">
				<ul>
					<li>Take a look at the Bonus Points section, see if you can answer any of them. At AKT you will have to mix well with front-end and back-end code.</li>
				</ul>
			</div>
		</div>

		<div class="panel panel-info">
			<div class="panel-heading">
				<h5>What to do when you are done?</h5>
			</div>
			<div class="panel-body">
				Compress this whole project in a ZIP file and send it back to AKT. Make sure to include all assets so that the final project can be reviewed out of the box.
			</div>
		</div>
		<div class="alert alert-sm alert-danger"><h5>Keep track of your development time!</h5></div>
		<p><a class="btn btn-primary btn-lg" href="#form" role="button">Let's go!</a></p>
	</div>
</div>