<?php require_once('../header.php') ?>
<?php require_once('../mysql.php') ?>



<div id="main-container">
	<?php require_once ('../logoutnav.php'); ?>

	<div id="main-container2">
		<div id="side-nav">
			<div class="nav-items active"><img src="/css/home-icon.png"><a href="/dashboard/index.php">HOME</a><br></div>
			<div class="nav-items"><img src="/css/saved-icon.png"><a href="/dashboard/saved.php">SAVED</a><br></div>
			<div class="nav-items"><img src="/css/settings-icon.png"><a href="/dashboard/settings.php">SETTINGS</a></div>
		</div>

		<div id="main-container3">
			<div id="main-nav">
				<div class="left-item"><a href="/dashboard/index.php">Custom Classes</a></div>
				<div class="center-item"><a id="build-classes" href="/dashboard/build-your-own.php">Build Your Own</a></div>
				<div class="right-item main-active"><a id="scheduled-classes" href="/dashboard/schedule.php">Scheduled Classes</a></div>
			</div>

			<div id="schedule-view">
				<div id="header">
					<div id="left-arrow"><img width="30px" src="/css/left-arrow.png"></div>
						<div id="month"></div>
					<div id="right-arrow"><img width="30px" src="/css/right-arrow.png"></div>
<!-- 					<div id="calendar" class="toggles active">Calendar</div>
					<div id="eventList" class="toggles normal">Event List</div> -->
				</div>
				<div style="clear:both"></div>
				<table>
					<tr>
						<td class="week"><p>SUN</p></td>
						<td class="week"><p>MON</p></td>
						<td class="week"><p>TUE</p></td>
						<td class="week"><p>WED</p></td>
						<td class="week"><p>THU</p></td>
						<td class="week"><p>FRI</p></td>
						<td class="week"><p>SAT</p></td>
					</tr>
				</table>

				<div id="schedule-container"></div>
			</div>
		</div>
	</div>
</div>

</body>
</html>
