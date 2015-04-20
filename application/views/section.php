<form class="pure-form" method="get" action="?">
    <fieldset>
        <legend>Search Sections</legend>
        <input name="query" id="query" type="text" placeholder="Section Name">
        <input name="type" id="type" type="hidden" value="search">
        <button type="submit" class="pure-button pure-button-primary">Search</button>
	</fieldset>
</form>
<table class="pure-table pure-table-bordered full-width">
    <thead>
        <tr>
            <th>Course Code</th>
            <th>Section Code</th>
            <th>Room</th>
            <th>Instructor</th>
            <th>Type</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
<?php if(isset($sections)) foreach($sections as $item): ?>
        <tr>
            <td><?php echo $item->courseCode; ?></td>
            <td><?php echo $item->sectionCode; ?></td>
            <td><?php echo $item->roomName; ?></td>
            <td><?php echo $item->firstName . " " . $item->middleName . " " . $item->lastName; ?></td>
            <td><?php echo $item->classification; ?></td>
            <td><a class="pure-button pure-button-primary small-font" href="edit"><i class="fa fa-pencil-square-o"></i> Edit</a>
            <a class="pure-button pure-button-primary small-font" href="swap"><i class="fa fa-arrows-h"></i> Swap</a></td>
        </tr>
<?php endforeach; ?>
	</tbody>
</table>