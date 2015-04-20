<form class="pure-form" method="get" action="?">
    <fieldset>
        <legend>Search Users</legend>
        <input name="query" id="query" type="text" placeholder="Search Term">
        <input name="type" id="type" type="hidden" value="search">
        <button type="submit" class="pure-button pure-button-primary">Search</button>
	</fieldset>
</form>
<table class="pure-table pure-table-bordered full-width">
    <thead>
        <tr>
            <th>Employee ID</th>
            <th>Username</th>
            <th>Email Address</th>
            <th>Name</th>
            <th>Position</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
<?php if(isset($users)) foreach($users as $item): ?>
        <tr>
            <td><?php echo $item->employeeID; ?></td>
            <td><?php echo $item->username; ?></td>
            <td><?php echo $item->emailAddress; ?></td>
            <td><?php echo $item->firstName . " " . $item->middleName . " " . $item->lastName; ?></td>
            <td><?php echo $item->position; ?></td>
            <td>
				<a class="pure-button pure-button-primary small-font" href="edit"><i class="fa fa-pencil-square-o"></i> Edit</a>
				<a class="pure-button pure-button-primary button-error small-font" href="drop"><i class="fa fa-times"></i> Delete</a>
				</td>
        </tr>
<?php endforeach; ?>
	</tbody>
</table>