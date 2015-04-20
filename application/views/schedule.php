<div id="input">
	<form method="get" action="<?php echo site_url('Schedule/employeeSchedule'); ?>">
	<input type="text" name="eid" placeholder="Employee ID" value='<?php if(isset($_GET['eid'])) echo $_GET['eid']; ?>'></input>
	<input type="submit"></input>
	</form>
	<form method="get" action="<?php echo site_url('Schedule/roomSchedule'); ?>">
	<input type="text" name="roomid" placeholder="room ID" value='<?php if(isset($_GET['roomid'])) echo $_GET['roomid']; ?>'></input>
	<input type="submit"></input>
	</form>
</div>
<div id="canvascontainer">
	<canvas name="sched" id="sched" width="640px" height="480px"></canvas>
	<script>
		var colors = [
			"#00008b",
			"#008b8b",
			"#a9a9a9",
			"#006400",
			"#bdb76b",
			"#8b008b",
			"#556b2f",
			"#ff8c00",
			"#9932cc",
			"#8b0000",
			"#e9967a",
			"#9400d3"
		];
		var c = initializeSched(document.getElementById('sched'));
<?php foreach($schedules as $item): ?>
		parseSchedule('<?php echo $item->schedule; ?>','<?php echo $item->courseCode; ?>','<?php echo $item->sectionCode;?>',colors.splice(1,1));
<?php endforeach; ?>
	</script>
</div>