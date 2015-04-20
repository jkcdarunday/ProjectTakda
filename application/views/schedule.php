<!--<div id="input">
	<form method="get" action="<?php echo site_url('Schedule/employeeSchedule'); ?>">
	<input type="text" name="eid" placeholder="Employee ID" value='<?php if(isset($_GET['eid'])) echo $_GET['eid']; ?>'></input>
	<input type="submit"></input>
	</form>
	<form method="get" action="<?php echo site_url('Schedule/roomSchedule'); ?>">
	<input type="text" name="roomid" placeholder="room ID" value='<?php if(isset($_GET['roomid'])) echo $_GET['roomid']; ?>'></input>
	<input type="submit"></input>
	</form>
</div>-->
<table class="pure-table pure-table-bordered">
    <thead>
        <tr>
            <th>Course Code</th>
            <th>Section Code</th>
            <?php if(isset($type) && $type=="employee"){?>
            <th>Room</th>
            <?php } else { ?>
            <th>Instructor</th>
            <?php } ?>
        </tr>
    </thead>

    <tbody>
<?php foreach($schedules as $item): ?>
        <tr>
            <td><?php echo $item->courseCode; ?></td>
            <td><?php echo $item->sectionCode; ?></td>
            <td><?php if($type=="employee") echo $item->roomName; else echo $item->username; ?></td>
        </tr>
<?php endforeach; ?>
	</tbody>
</table>
	
<div id="canvascontainer">
	<canvas name="sched" id="sched" width="640px" height="480px"></canvas>
	<script>
		var c = initializeSched(document.getElementById('sched'));
<?php foreach($schedules as $item): ?>
		parseSchedule('<?php echo $item->schedule; ?>','<?php echo $item->courseCode; ?>','<?php if($type=="employee") echo $item->roomName; else echo $item->username; ?>','<?php echo $item->sectionCode;?>');
<?php endforeach; ?>
	</script>
</div>