<?php
include "header.php";
?>

<section class="contact" style="margin-top:100px;">

<h2 align="center">Contact Us</h2>

<div class="form" style="max-width:600px;margin:30px auto;">

<form action="email.php" method="POST">

<input
type="text"
name="name"
placeholder="Your Name"
required>

<input
type="email"
name="email"
placeholder="Your Email"
required>

<input
type="text"
name="subject"
placeholder="Subject"
required>

<textarea
name="message"
rows="6"
placeholder="Your Message"
required></textarea>

<button
type="submit"
class="btn">

Send Message

</button>

</form>

</div>

<div style="text-align:center;margin:40px;">

<h3>CarDeal Showroom</h3>

<p>📍 Surat, Gujarat, India</p>

<p>📞 +91 7859922831</p>

<p>📧 maheshgamit321@gmail.com</p>

</div>

</section>

<?php include "footer.php"; ?>