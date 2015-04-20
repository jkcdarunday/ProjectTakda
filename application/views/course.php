<form class="pure-form" method="get" action="?">
    <fieldset>
        <legend>Search Courses</legend>
        <input name="query" id="query" type="text" placeholder="Course Name">
        <input name="type" id="type" type="hidden" value="search">
        <button type="submit" class="pure-button pure-button-primary">Search</button>
	</fieldset>
</form>
<table class="pure-table pure-table-bordered">
    <thead>
        <tr>
            <th>Course Code</th>
            <th>Course Title</th>
        </tr>
    </thead>

    <tbody>
<?php if(isset($courses)) foreach($courses as $item): ?>
        <tr>
            <td><?php echo $item->courseCode; ?></td>
            <td><?php echo $item->courseTitle; ?></td>
        </tr>
<?php endforeach; ?>
	</tbody>
</table>