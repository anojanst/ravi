<?php
function list_label() {
	include 'conf/config.php';
	include 'conf/opendb.php';

	echo '<div class="table-responsive">
              <table class="table">
				 <thead>
                       <tr>

                           <th>Edit</th>
						    <th>Label</th>
                            <th>Delete</th>

                       </tr>
                  </thead>
	<tbody>';

	$result = mysqli_query($conn, "SELECT * FROM label ORDER BY id DESC");
	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		echo '<tr>
				<td align="center"><a href="label.php?job=edit&id=' . $row[id] . '"  ><i class="fa fa-pencil-square-o"></i></a></td>
								
				<td>' . $row[label] . '</td>
				<td align="center"><a href="label.php?job=delete&id=' . $row[id] . '" onclick="javascript:return confirm(\'Are you sure you want to delete this entry?\')"><i class="fa fa-times fa-2x"></i></a></td>
				</tr>';
	}
	echo '</tbody></table></div>';

	include 'conf/closedb.php';
}


function save_label($label) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	 
	$query = "INSERT INTO label (id, label)
	VALUES ('', '$label')";
	mysqli_query($conn, $query) or die(mysqli_error($conn));

	include 'conf/closedb.php';
}

function update_label($id, $label){
	include 'conf/config.php';
	include 'conf/opendb.php';
	
	 
	$query = "UPDATE label SET
	label='$label'
	WHERE id='$id'";

	mysqli_query($conn, $query);

	include 'conf/closedb.php';
}

function cancel_label($id) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	 
	$query = "UPDATE label SET
	cancel_status='1'
	WHERE id='$id'";
	mysqli_query($conn, $query);

	include 'conf/closedb.php';
}

function get_label_info($id) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result = mysqli_query($conn, "SELECT * FROM label WHERE id='$id'");
	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		return $row;
	}
	include 'conf/closedb.php';
}

