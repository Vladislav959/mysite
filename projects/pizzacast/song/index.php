<?php 
	$con = mysqli_connect ("localhost","u0935856_default","z6JXDSO!", "u0935856_default");
	if (isset($_POST['liked'])) {
		$postid = $_POST['postid'];
echo $postid;
		$result = mysqli_query($con, "SELECT * FROM `songs` WHERE `id`=$postid");
		$row = mysqli_fetch_array($result);
		$n = $row['likes'];

		mysqli_query($con, "INSERT INTO `likes` (userid, postid) VALUES (1, $postid)");
		mysqli_query($con, "UPDATE `songs` SET `likes`=$n+1 WHERE `id`=$postid");

		echo $n+1;
		exit();
	}
	if (isset($_POST['unliked'])) {
		$postid = $_POST['postid'];
		$result = mysqli_query($con, "SELECT * FROM `songs` WHERE `id`=$postid");
		$row = mysqli_fetch_array($result);
		$n = $row['likes'];

		mysqli_query($con, "DELETE FROM `likes` WHERE `postid`=$postid AND `userid`=1");
		mysqli_query($con, "UPDATE `songs` SET `likes`=$n-1 WHERE `id`=$postid");
		
		echo $n-1;
		exit();
	}
$songid = $_GET['name'];
echo $songid;
	$post = mysqli_query($con, "SELECT * FROM `songs` WHERE `name`='$songid'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Like and unlike system</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	
</head>
<body>
<style>
body {
	padding-top: 100px;
}
.post {
	width: 30%;
	margin: 10px auto;
	border: 1px solid #cbcbcb;
	padding: 5px 10px 0px 10px;
}
.like, .unlike, .likes_count {
	color: blue;
}
.hide {
	display: none;
}
.fa-thumbs-up, .fa-thumbs-o-up {
	transform: rotateY(-180deg);
	font-size: 1.3em;
}
</style>
	<!-- display posts gotten from the database  -->
		<?php while ($row = mysqli_fetch_array($post)) { ?>

			<div class="post">
				<?php echo $row['card']; ?>

				<div style="padding: 2px; margin-top: 5px;">
				<?php 
					// determine if user has already liked this post
					$results = mysqli_query($con, "SELECT * FROM `likes` WHERE `userid`=1 AND `postid`=".$row['id']."");

					if (mysqli_num_rows($results) == 1 ): ?>
						<!-- user already likes post -->
						<span class="unlike fa fa-thumbs-up" data-id="<?php echo $row['id']; ?>"></span> 
						<span class="like hide fa fa-thumbs-o-up" data-id="<?php echo $row['id']; ?>"></span> 
					<?php else: ?>
						<!-- user has not yet liked post -->
						<span class="like fa fa-thumbs-o-up" data-id="<?php echo $row['id']; ?>"></span> 
						<span class="unlike hide fa fa-thumbs-up" data-id="<?php echo $row['id']; ?>"></span> 
					<?php endif ?>

					<span class="likes_count"><?php echo $row['likes']; ?> likes</span>
				</div>
			</div>

		<?php } ?>


<!-- Add Jquery to page -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		// when the user clicks on like
		$('.like').on('click', function(){
			var postid = $(this).data('id');
			    $post = $(this);

			$.ajax({
				url: '/pizzacast/likes/index.php',
				type: 'post',
				data: {
					'liked': 1,
					'postid': postid
				},
				success: function(response){
					$post.parent().find('span.likes_count').text(response + " likes");
					$post.addClass('hide');
					$post.siblings().removeClass('hide');
				}
			});
		});

		// when the user clicks on unlike
		$('.unlike').on('click', function(){
			var postid = $(this).data('id');
		    $post = $(this);

			$.ajax({
				url: '/pizzacast/likes/index.php',
				type: 'post',
				data: {
					'unliked': 1,
					'postid': postid
				},
				success: function(response){
					$post.parent().find('span.likes_count').text(response + " likes");
					$post.addClass('hide');
					$post.siblings().removeClass('hide');
				}
			});
		});
	});
</script>
</body>
</html>