<?php
//Connect to the DB
require 'conn.php';
//The comment class
include 'comment.php';

$email = mysqli_real_escape_string($db, $_POST['email']);
$phone_no = mysqli_real_escape_string($db, $_POST['phone_no']);
$branch = mysqli_real_escape_string($db, $_POST['branch']);
$comments = mysqli_real_escape_string($db, $_POST['comment']);
//The comment object
$comment = new Comment(null, $email, $phone_no, $branch, $comments);
//The response back to the client
$response = array();
postComment($comment);

function postComment($comment) {
	//The DB connection
	global $db, $pdo, $response;
	try {
		//SQL
		$sql = ("INSERT INTO `contact_us`(`comment_id`, `email`, `phone_no`, `branch`, `comment`) VALUES (null,'{$comment->getEmail()}','{$comment->getPhoneNo()}','{$comment->getBranch()}','{$comment->getComment()}');");
		//Run the query
		$result = $pdo->query($sql);
		//If the post is successful send an email to the user notifying them that their comment was posted
		if ($result){
		// emailResponse($comment->getEmail());
			$response["success"] = 1;
		} else {
			$response["success"] = 0;
		}
	//Return the response to the user
	echo json_encode($response);
	} catch (PDOException $e) {
	    echo $e->getMessage();
	}
}
?>