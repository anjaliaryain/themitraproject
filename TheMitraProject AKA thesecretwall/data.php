<?php
	include("db.php");
	include("server.php");
	if (isset($_POST['getData'])) {

		$start = $GLOBALS["___mysqli_ston"]->real_escape_string($_POST['start']);
		$limit = $GLOBALS["___mysqli_ston"]->real_escape_string($_POST['limit']);

		$sql = $GLOBALS["___mysqli_ston"]->query("SELECT id, title, para FROM stories ORDER BY id desc LIMIT $start, $limit");
         if ($sql->num_rows > 0) {
			$response = "";

			while($data = $sql->fetch_array()) {
				$response .= '
					<div class="card" style="margin: 0px 0px 20px 0px">
                    <div class="card-body">
						<a href="story-des.php?id='.$data['id'].'" style="color:black; text-decoration:none;"> <h2 class="card-title">'.$data['title'].'</h2>
						<p class="class-text">'.$data['para'].'</p></a>
					</div>
                    </div>
				';
			} 
			exit($response);
		} else
			exit('reachedMax');
	}

if (isset($_POST['getcomment'])) {

		$id = $_SESSION['storyId'];
		$start = $GLOBALS["___mysqli_ston"]->real_escape_string($_POST['start']);
		$limit = $GLOBALS["___mysqli_ston"]->real_escape_string($_POST['limit']);

		$sql1 = $GLOBALS["___mysqli_ston"]->query("SELECT body, createdon FROM comments WHERE storyid='".$id."' ORDER BY id desc LIMIT $start, $limit");
         if ($sql1->num_rows > 0) {
			$response = "";

			while($data1 = $sql1->fetch_array()) {
				$response .= '
					<div class="card" style="margin: 0px 0px 20px 0px">
                    <div class="card-body">
						<h5>Posted on :</h5> <p class="card-title">'.$data1['createdon'].'</p>
						<p class="class-text">'.$data1['body'].'</p>
					</div>
                    </div>
				';
			} 
			exit($response);
		} else
			exit('reachedMax');
	}
?>