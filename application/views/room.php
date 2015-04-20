<form class="pure-form" method="get" action="?">
    <fieldset>
        <legend>Search Rooms</legend>
        <input name="query" id="query" type="text" placeholder="Search term">
        <input name="type" id="type" type="hidden" value="search">
        <button type="submit" class="pure-button pure-button-primary">Search</button>
	</fieldset>
</form>
<table class="pure-table pure-table-bordered">
    <thead>
        <tr>
            <th>Room</th>
            <th>Building</th>
            <th>Floor</th>
        </tr>
    </thead>

    <tbody>
<?php if(isset($sections)) foreach($sections as $item): ?>
        <tr>
            <td><?php echo $item->roomName; ?></td>
            <td><?php echo $item->building; ?></td>
            <td><?php echo $item->floor; ?></td>
        </tr>
<?php endforeach; ?>
	</tbody>
</table>