<?php

include "header.php";

$reviews=json_decode(file_get_contents("reviews.json"),true);

if(!$reviews){
$reviews=[];
}

?>

<section class="featured" style="margin-top:100px;">

<h2>Customer Reviews</h2>

<div style="max-width:600px;margin:auto;">

<form action="save-review.php" method="POST">

<input
type="text"
name="name"
placeholder="Your Name"
required
style="width:100%;padding:12px;margin:10px 0;">

<select
name="rating"
required
style="width:100%;padding:12px;margin:10px 0;">

<option value="">Select Rating</option>
<option value="★★★★★">★★★★★</option>
<option value="★★★★">★★★★</option>
<option value="★★★">★★★</option>
<option value="★★">★★</option>
<option value="★">★</option>

</select>

<textarea
name="message"
rows="5"
placeholder="Write your review..."
required
style="width:100%;padding:12px;margin:10px 0;"></textarea>

<button
type="submit"
class="btn">

Submit Review

</button>

</form>

</div>

<div class="card-container" style="margin-top:50px;">

<?php

foreach(array_reverse($reviews) as $review){

?>

<div class="card">

<div style="padding:25px;">

<h3><?php echo htmlspecialchars($review['name']); ?></h3>

<p style="color:orange;font-size:20px;">

<?php echo $review['rating']; ?>

</p>

<p>

<?php echo nl2br(htmlspecialchars($review['message'])); ?>

</p>

</div>

</div>

<?php

}

if(count($reviews)==0){

echo "<h3>No reviews available.</h3>";

}

?>

</div>

</section>

<?php include "footer.php"; ?>