<?php
if (isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = 'schalvj@jayhalverson.us';
    $subject = "New Request For Estimate";
    $body = '<html>
                <body>
                    <h2>Request for estimate- jayhalverson.us</h2>
                    <hr>
                    <p>Name:<br>'.$name.'</p>
                    <p>Email:<br>'.$email.'</p>
                    <p>Message:<br>'.$message.'</p>
                </body>
            </html>';
    // headers
    $headers  = "From: ".$name." <".$email.">\r\n";
    $headers .= "Reply-To: ".$email."\r\n";
    $headers .= "Request: ".$message."\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset-utf-8";
    // send
    $send = mail($to, $subject, $body, $headers);
    
    if (isset($_POST['name']) && isset($_POST['email'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $replyTo = $_POST['email'];
        $subject2 = "Request Sent - Confirmation";
        $body2 = '<html>
                    <body>
                        <h2>Request Sent - Confirmation</h2>
                        <hr>
                        <p>Thanks for contacting me ' .$name.'. I will get back to you as soon as I have a chance to review your request.</p>
                    </body>
                </html>';
    // headers
    $headers2  = "From: ".$name." <".$email.">\r\n";
    $headers2 .= "Reply-To: ".$email."\r\n";
    $headers2 .= "Request: ".$replyTo."\r\n";
    $headers2 .= "MIME-Version: 1.0\r\n";
    $headers2 .= "Content-type: text/html; charset-utf-8";
    $send = mail($replyTo, $subject2, $body2, $headers2);
    } else {
        echo 'error';
    }
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<meta name="description" content="Jason's development porfolio">
		<meta name="keywords" content="web development, portfolio, development">
		<meta name="author" content="Jason Halverson">
		<title>Jason's Web Development | Services</title>
		<link rel="stylesheet" href="./css/style.css">
		
	</head>
	<body>
		<header>
			<div class="container">
				<div id="branding">
					<span class="highlight">Jason's </span><br/> 
					<span class="highlightB">Web Development</span>
				</div>
				<div id="navbar">
				    <nav >
					    <ul>
						    <li><a href="index.html">Home</a></li>
						    <li><a href="about.html">About</a></li>
						    <li class="current"><a href="services.html">Services</a></li>
					    </ul>
				    </nav>
				</div>
			</div>
		</header>
				
		<section id="main">
			<div class="container">
				<article id="main-col">
					<h2 class="page-title">Services</h2>
					<ul id="services">
						<li>
							<h3>Website Design & Development</h3>
							<p>My approach to design and development is to create an attractive site that will incorporate your company's logo, focusing on responsiveness, and ease of use.</p>
							<p>Pricing: $500 - $3,000</p>
							<p>**Pricing Depending On Site Requirements**</p>
						</li>
						
						<li>
							<h3>Desktop Application Design & Development</h3>
							<p>All applications will be developed based on a list of agreed upon requirements. The client will be kept up-to-date throughout development. Completion of each application will not be done until the client gives final approval. </p>
							<p>Pricing: $500 - $3,000</p>
							<p>**Pricing Depending On Application Requirements**</p>
						</li>
						
						<li>
							<h3>Website & Application Maintenance</h3>
							<p>I will provide site and application maintenance to include functionality and security updates at the request of the client.</p>
							<p>**Pricing Varies Depending On Frequency And Size Of The Job**</p>
						</li>
						
					</ul>
				</article>
				
				<aside id="sidebar">
					<div class="dark">
						<h3>Get A Price Estimate</h3>
						
						<?=$thankYou ?>
						<form class="contact" method="post" action="">
							<div>
								<label>Name:</label>
								<input name="name"><br>
							</div>
							<div>
								<label>Email:</label>
								<input name="email"><br>
							</div>
							<div>
								<label>Message:</label>
								<textarea rows="5" cols="20" name="message"></textarea><br>
							</div>
							<button class="button_1" type="submit">Send</button>
						</form>
					</div>
				</aside>
			</div>
		</section>
				
		<section id="blog">
			<div class="container">
				<h3>Subscribe To Jason's Blog</h3>
				<form>
					<input type="email" placeholder="Enter Email...">
					<button type="submit" class="button_1">Subscribe</button>
				</form>
			</div>
		</section>
		<footer>
			<p>Jason's Web Development, Copyright &copy; 2019</p>
		</footer>
		
	
	</body>
</html>