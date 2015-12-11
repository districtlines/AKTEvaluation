<div class="container">
	<form id="form">
		<h2>Add a new user</h2>
		<div class="row">
			<div class="col-xs-12">
				<div class="form-group">
					<label for="user" data-toggle="tooltip" data-placement="right" title="This field is required. This field only accepts alpha-numeric values. No spaces!">User* <span class="fa fa-question-circle"></span></label>
					<input type="text" class="form-control" id="user" name="user" value="">
				</div>
				<div class="form-group">
					<label for="user" data-toggle="tooltip" data-placement="right" title="This field is required. This field must be in proper email format. i.e: tobias@example.com">Email* <span class="fa fa-question-circle"></span></label>
					<input type="text" class="form-control" id="user" name="email" value="">
				</div>

				<div class="form-group">
					<label for="user" data-toggle="tooltip" data-placement="right" title="This field is required.">Country* <span class="fa fa-question-circle"></span></label>
					<select class="form-control" id="country" name="country">
						<option disabled selected>Select</option>
						<?php foreach($this->countries as $country) { ?>
						<option><?php echo $country; ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label for="user" data-toggle="tooltip" data-placement="right" title="This field is required.">City* <span class="fa fa-question-circle"></span></label>
					<input type="text" class="form-control" id="user" name="city" value="">
				</div>
				<div class="form-group">
					<label for="user" data-toggle="tooltip" data-placement="right" title="This field is required.">State/Province* <span class="fa fa-question-circle"></span></label>
					<input type="text" class="form-control" id="user" name="state_province" value="">
				</div>
				<div class="form-group">
					<label for="user" data-toggle="tooltip" data-placement="right" title="This field is required. This field only accepts alpha-numeric values.">Zip* <span class="fa fa-question-circle"></span></label>
					<input type="text" class="form-control" id="user" name="zip" value="">
				</div>
				<input type="hidden" name="email" value="<?php echo $this->defaultEmail; ?>">
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
</div>

<div class="jumbotron">
	<div class="container">
		<h3>Bonus Points</h3>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Can you create the MySQL query to insert this data into a table. You can generate the table and field names. Just looking for a correct Insert statement with this dataset.</h3>
			</div>
			<div class="panel-body">
				<pre>/* Write your answer here */</pre>
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
		echo 'The `height` is greater than `width`';
	}

	if(   ) {
		echo 'The `width` does not equal the `height` and the `width` is not and array.';
	}

	/* Write an if/else that will echo out a boolean of true when the variable $str is null and a boolean of false when it's not null. */
			</pre>
			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Write any type of PHP loop, where you count backwards from 10 to 0 and echos the value during the loop.</h3>
			</div>
			<div class="panel-body">
				<pre>/* Write your answer here */</pre>
			</div>
		</div>
	</div>
</div>