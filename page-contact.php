<?php 

require 'PHPMailer-master/PHPMailerAutoload.php';





$mail = new PHPMailer;

$to = 'mjstokes1986@att.net';
$name = $_POST['the_name'];
$from = $_POST['the_email'];
$subject = $_POST['subject'];
$body = $_POST['body'];

$mail->isSMTP();
$mail->Host = 'outbound.att.net';
$mail->SMTPAuth = true;
$mail->Username = 'mjstokes1986@att.net';
$mail->Password = 'ihave9sourcesofincome';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->From = $from;
$mail->FromName = $name;
$mail->addAddress($to, $to);
$mail->addReplyTo($from, $name);
$mail->Subject = $subject;
$mail->Body = $body;
$mail->isHTML(true);

if(!$mail->send()) {
	echo '<p style="color:#fff">Message could not be sent</p>';
	echo '<p style="color:#fff">Mailer Error: ' . $mail->ErrorInfo . '</p>';
} else {
	echo '<p style="color:#fff">Message has been sent</p>';
}









 ?>

<?php get_header(); ?>

<body id='page-contact'>

<div class="container text-center">
<div class="row">
<div class="col-xs-12">
<h4 style='color:#fff'>Contact</h4>
<br>
<h1 style='color:#fff'>Michael J. Stokes</h1>

</div>
</div>
</div>

<br>
<br>
<br>



<div class="container text-center">
<div class="row">
<div class="col-xs-12">
<div class="col-xs-6">
	<p>Phone</p>
	<br>
	<p>336-693-5580</p>

</div>

<div class="col-xs-6">
	<p>Email</p>
	<br>
	<p>mjstokes1986@att.net</p>
</div>

<ul class="text-center social">
<li>Link</li>
<li>Link</li>
<li>Link</li>
</ul>


</div>
</div>
</div>


<div class="contact-form container">
	<div class="row">
		<div class="col-xs-12">
			
			<?php while (have_posts() ): the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content text-center">
						<?php the_content(); ?>
							
					<form action="" id='contact' name='email' method='POST' novalidate='novalidate'>

					<div class="form-group">
						
						<div class="input-wrap">
							<input type="text" class='form-control' name='the_name' id='name' placeholder="NAME">
						</div>

						<br>


						<div class="input-wrap">
							<input type="text" class='form-control' name='the_email' id='mail' placeholder="EMAIL">
						</div>

						<br>

						<div class="input-wrap">
							<input type="text" class='form-control' name='subject' placeholder="SUBJECT">
						</div>

						<br>

						<div class="input-wrap">
							<textarea placeholder="MESSAGE" class='form-control' name='body' id='body' cols="30" rows="10"></textarea> 
						</div>
						<br>

						<input type="submit" value='SEND' id='button'>


					</div>
					</form>
						



					</div>


				</article>

			<?php endwhile; ?>
		</div>
	</div>
</div>
	




<?php get_footer(); ?>