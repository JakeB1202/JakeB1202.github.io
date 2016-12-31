<!DOCTYPE html>
<html>
<head>
  <title>Creating the big life - Title</title>
  <meta name="viewport" content="user-scalable=yes">
  <meta name="author" content="Alison McCloskey">
  <meta name="keywords" content="Creating the big life!">
  <meta name="description" content="Learn how to make your life great!">
  <meta name="DC.Language" content="en">
  <meta name="DC.Creator" content="Jake Brown">
  <meta name="DC.Subject" content="Life coaching">
  <meta property="og:type" content="website">
  <meta property="og:image" content="">
  <link rel="stylesheet" href="style.css">

  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <link href="./css/animations.css" rel="stylesheet">
  <link href="font.css" rel="stylesheet">
</head>

<style>

/* GENERAL CSS
–––––––––––––––––––––––––––––––––––––––––––––––––– */

*,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  background: #456990;
  color: #fff;
  overflow-x: hidden;
  padding-bottom: 50px;
}

/* INTRO SECTION
–––––––––––––––––––––––––––––––––––––––––––––––––– */

.intro {
  background: #F45B69;
  font-family: 'whipsmartregular';
  padding: 100px 0;
}

.container {
  width: 90%;
  max-width: 1200px;
  margin: 0 auto;
  text-align: center;
}

h1 {
  font-size: 2.5rem;
}

/* INFO SECTION
–––––––––––––––––––––––––––––––––––––––––––––––––– */

.info {
  background: #F45B69;
  padding: 100px 0;
}

.container {
  width: 90%;
  max-width: 1200px;
  margin: 0 auto;
  text-align: center;
}

h1 {
  font-size: 2.5rem;
}


/* TIMELINE
–––––––––––––––––––––––––––––––––––––––––––––––––– */

.timeline ul {
  background: #456990;
  font-family: 'whipsmartregular';
  padding: 50px 0;
}

.timeline ul li {
  list-style-type: none;
  position: relative;
  width: 6px;
  margin: 0 auto;
  padding-top: 50px;
  background: #fff;
}

.timeline ul li::after {
  content: '';
  position: absolute;
  left: 50%;
  bottom: 0;
  transform: translateX(-50%);
  width: 30px;
  height: 30px;
  border-radius: 50%;
  background: inherit;
}

.timeline ul li div {
  position: relative;
  bottom: 0;
  width: 400px;
  padding: 15px;
  background: #F45B69;
}

.timeline ul li div::before {
  content: '';
  position: absolute;
  bottom: 7px;
  width: 0;
  height: 0;
  border-style: solid;
}

.timeline ul li:nth-child(odd) div {
  left: 45px;
}

.timeline ul li:nth-child(odd) div::before {
  left: -15px;
  border-width: 8px 16px 8px 0;
  border-color: transparent #F45B69 transparent transparent;
}

.timeline ul li:nth-child(even) div {
  left: -439px;
}

.timeline ul li:nth-child(even) div::before {
  right: -15px;
  border-width: 8px 0 8px 16px;
  border-color: transparent transparent transparent #F45B69;
}

time {
  display: block;
  font-size: 1.2rem;
  font-weight: bold;
  margin-bottom: 8px;
}

/* FOOTER SECTION
–––––––––––––––––––––––––––––––––––––––––––––––––– */

.footer-bar {
  bottom: 0;
  width: 100%;
  height: 60px;
  background-color: #4c4c4c;
}

.footer-text {
  font-size: 20px;
  font-family: 'luckiest_guyregular';
  color: #999;
  margin-top: 20px;
}

</style>


<body>

  <section class="intro">
    <div class="container">
      <div class = "animated fadeInRight delay1 speed0-4">
        <h1>Creating the big life.</h1>
        <h2>How to make your life better, from many differant angles.
      </div>
      <br>
      <br>
      <img src = "img/quote1.png" class = "well animated speed1 bounceInLeft">
    </div>
  </section>

  <section class="nav">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Main Menu</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Relationships</a></li>
            <li><a href="#">Parenting</a></li>
            <li><a href="#">Coaching</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="./blog">Blog</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Terms and Conditions</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </section>


  <form class="form-horizontal" role="form" method="post" action="index.php">
	<div class="form-group">
		<label for="name" class="col-sm-2 control-label">Name</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
			<?php echo "<p class='text-danger'>$errName</p>";?>
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="col-sm-2 control-label">Email</label>
		<div class="col-sm-10">
			<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
			<?php echo "<p class='text-danger'>$errEmail</p>";?>
		</div>
	</div>
	<div class="form-group">
		<label for="message" class="col-sm-2 control-label">Message</label>
		<div class="col-sm-10">
			<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
			<?php echo "<p class='text-danger'>$errMessage</p>";?>
		</div>
	</div>
	<div class="form-group">
		<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
			<?php echo "<p class='text-danger'>$errHuman</p>";?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<?php echo $result; ?>
		</div>
	</div>
</form>

<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

//Validate first
if(empty($name)||empty($visitor_email))
{
    echo "Name and email are mandatory!";
    exit;
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}

$email_from = 'jakebrown1202@yahoo.com';//<== update the email address
$email_subject = "New Form submission";
$email_body = "You have received a new message from the user $name.\n".
    "Here is the message:\n $message".

$to = "tom@amazing-designs.com";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: thank-you.html');


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}

?>
