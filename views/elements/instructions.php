<div class="jumbotron">
	<div class="container">
		<h1>Instructions!</h1>
		<p>What you need to do:</p>
		<div class="panel panel-info">
			<div class="panel-heading">
				<h5>Intro</h5>
			</div>
			<div class="panel-body">
				<p>
					This evaluation is to see how well you can handle the tasks given to you as a front-end developer. At AKT we use Bootstrap CSS framework for almost all projects. So it's important that new developers have a strong understanding of the framework as well as traditional HTML/CSS/JS coding practices.
				</p>
				<p>
					Treat this evaluation as a normal project. Don't overthink the tasks and use the resources you have at hand. Don't be afraid to google or find information on the internet. Even the most experienced developers need a refresher.
				</p>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h5>Layout</h5>
			</div>
			<div class="panel-body">
				<ol>
					<li>
						Navigation adjustments <span class="label label-info">(Uses: HTML/Bootstrap)</span>
						<ol>
							<li>The navigation links are broken. Make them work so they jump to the correct locations.</li>
							<li>The navigation should be a sticky nav. Keep the nav at the top as you scroll down the page.</li>
						</ol>
					</li>
					<li>
						On Mobile Devices (bootstrap xs size), compact form elements. <span class="label label-info">(Uses: Bootstrap-HTML)</span>
						<ul>
							<li>Put <mark>city</mark>, <mark>state/province</mark> and <mark>zip</mark> all on the same line. Without adding additional form elements. <mark>Hint:</mark> Bootstrap has some nice features to do this for you without writing any extra CSS.</li>
						</ul>
					</li>
					<li>
						Responsive table <span class="label label-info">(Uses: Bootstrap-HTML)</span>
						<ul>
							<li>The Stored Data table is breaking the layout on Mobile. Make the table responsive. <mark>(Remember, Bootstrap!)</mark></li>
						</ul>
					</li>
					<li>
						Add iDangerous Swiper carousel <span class="label label-info">(Uses: HTML/CSS/JS maybe PHP)</span>
						<ul>
							<li>Using (<a href="http://www.idangero.us/swiper/#.VmsZbsrSjFY" target="_blank">Link <span class="fa fa-external-link"></span></a>) create a slider that shows 1 image at a time.</li>
							<li>The slider should have 3 images of your choosing.</li>
							<li>If you want to use PHP to generate the markup you can.</li>
							<li>The size of the slider does not matter. Make sure it does not break the Bootstrap grid.</li>
						</ul>
					</li>
					<li>
						Table Header Hover Effect <span class="label label-info">(Uses: CSS only!)</span>
						<ul>
							<li>You should create a custom CSS file to make these CSS changes.</li>
							<li>On hover of <mark><u>all</u></mark> table headers we would like to have the text color change to '#ff0000'.</li>
							<li>The color effect should have a fade of 0.3 seconds.</li>
							<li>The table headers should alter cell color; every other header element should have '#e5e5e5' as their background color.</li>
						</ul>
					</li>
					<li>
						Today's date in the nav <span class="label label-info">(Uses: PHP/Bootstrap-HTML)</span>
						<ul>
							<li>Use the <mark>classes/main.php</mark> file to create the PHP code.</li>
							<li>Then use the view that has the navbar html and echo the date on the right side of the navbar.</li>
							<li><mark>Hint:</mark> The view has an example of extracting the PHP data into the view.</li>
						</ul>
					</li>
					<li>
						Debugging
						<ul>
							<li>The HTML has errors as well. Syntax errors are on the form and the main layout page. These bugs might manipulate your data giving you an unexpected result when you submit the data. The syntax errors are common mistakes of copy and pasting elements.</li>
							<li>When you are done run the HTML through the <a href="https://validator.w3.org/#validate_by_upload" target="_blank">W3C Validating service <span class="fa fa-external-link"></span></a>. The result should be 0 errors or warnings.</li>
						</ul>
					</li>
					<li>
						Clean Code
						<ul>
							<li>At AKT we are sticklers of clean code. Since the projects you may be working on will be shared within the whole team, it's important to follow our normal standards and practices when writing code. You can view our Bible over at this GitHub repo (<a href="https://github.com/districtlines/AKTCodingStandards" target="_blank">Link <span class="fa fa-external-link"></span></a>).</li>
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
						Validate and display the form data <span class="label label-info">(Uses: HTML/CSS/JS)</span>
						<ol>
							<li>Each form field has specific requirements. Before the form can be submitted the values of the form elements must be validated to meet their requirements. You can use any method you would like to validate. Keep in mind that the validation must work in the latest versions of Firefox, Safari and Chrome.</li>
							<li>On error there needs to be some sort of display to let the user know there is problems with their values. You can list all errors together or per element. It should only display problematic fields. Do not use: <mark>JS:alert();</mark></li>
							<li>If the user data passes the validation, have the data display in the table below the form. <mark>See note about AJAX below</mark></li>
							<li>We are not expecting this data to be saved to any type of DB. It is purely a front-end form.</li>
						</ol>
					</li>
					<li>
						Ajax <span class="label label-info">(Uses: HTML/CSS/JS/PHP)</span>
						<ul>
							<li>You will see that there are 2 fields that are not part of the form, <mark><u>ID</u></mark> and <mark><u>Created</u></mark>. These fields should never be generated client-side as that can pose a security risk. Instead we rely on server-side scripts to handle this for us. You will need to create the AJAX call as well as write the basic PHP in the components/ajax/ajax.php file. The PHP is very minor (you can use Google).</li>
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