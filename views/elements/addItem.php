<div class="container">
	<form id="form" role="form">
		<div class="row">
			<div class="col-xs-12">
				<div class="form-group">
					<label for="user" data-toggle="tooltip" data-placement="right" title="This field is required. This field only accepts alpha-numeric values. No spaces!">User* <span class="fa fa-question-circle"></span></label>
					<input type="text" class="form-control" id="user" value="">
				</div>
				<div class="form-group">
					<label for="user" data-toggle="tooltip" data-placement="right" title="This field is required. This field must be in proper email format. i.e: tobias@example.com">Email* <span class="fa fa-question-circle"></span></label>
					<input type="text" class="form-control" id="user" value="">
				</div>

				<div class="form-group">
					<label for="user" data-toggle="tooltip" data-placement="right" title="This field is required.">Country* <span class="fa fa-question-circle"></span></label>
					<select class="form-control" id="country">
						<option disabled selected>Select</option>
						<?php foreach($this->countries as $country) { ?>
						<option><?php echo $country; ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label for="user" data-toggle="tooltip" data-placement="right" title="This field is required.">City* <span class="fa fa-question-circle"></span></label>
					<input type="text" class="form-control" id="user" value="">
				</div>
				<div class="form-group">
					<label for="user" data-toggle="tooltip" data-placement="right" title="This field is required.">State/Province* <span class="fa fa-question-circle"></span></label>
					<input type="text" class="form-control" id="user" value="">
				</div>
				<div class="form-group">
					<label for="user" data-toggle="tooltip" data-placement="right" title="This field is required. This field only accepts alpha-numeric values.">Zip* <span class="fa fa-question-circle"></span></label>
					<input type="text" class="form-control" id="user" value="">
				</div>
				<p class="text-right">
					<strong><small>* Required</small></strong>
				</p>
				<br>
				<button type="submit" class="btn btn-block btn-lg btn-success">Submit</button>
			</div>
		</div>
	</form>
	<hr>
	<h3>Stored Data</h3>
	<table class="table table-bordered table-striped table-hover">
		<thead>
			<tr class="active">
				<th><a data-toggle="tooltip" data-placement="bottom" title="Look at Functionality #2 from the instructions above about how to get this value.">Id</a></th>
				<th>User</th>
				<th>Email</th>
				<th>Country</th>
				<th>City</th>
				<th>State/Province</th>
				<th>Zip</th>
				<th><a data-toggle="tooltip" data-placement="bottom" title="Look at Functionality #2 from the instructions above about how to get this value.">Created</a></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</tbody>
	</table>
	<hr>
	<h3>Bonus Points</h3>

	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Can you create the MySQL query to insert this data into a table. You can generate the table and field names. Just looking for a correct Insert statement with this dataset.</h3>
		</div>
		<div class="panel-body">
			<pre>
/* Write your answer here */
			</pre>
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Finish these PHP Conditionals. The echo within the if statements reveal what the conditional should check.</h3>
		</div>
		<div class="panel-body">
			<pre>
$height = 104;
$width = 10;

$str = 'Hello world';

/* Finish/Correct the code below here */
if(   ) {
	echo 'The Height is greater than width';
}

if(   ) {
	echo 'The Width does not equal the height';
}

if(   ) {
	echo 'Str is not null';
} else {
	echo 'Str is null';
	var_dump($str);
}
		</pre>
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Write any type of PHP loop, where you count backwards from 10 to 0 and echos the value during the loop.</h3>
		</div>
		<div class="panel-body">
			<pre>
/* Write your answer here */
			</pre>
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Modal w/ image</h3>
		</div>
		<div class="panel-body">
			<button type="button" class="btn btn-info btn-lg">Click Me!</button>
			<br>
			Make a modal appear when you click the button above. Have the modal include an image of your Favorite tv or movie show character.
		</div>
	</div>
</div>