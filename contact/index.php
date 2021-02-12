<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Responsive Contact us form Using HTML and CSS</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	
<div class="wrapper">
  <div class="title">
    <h1>Contact Me</h1>
  </div>
  <div class="contact-form">
<form action="contactreg.php" method="post">
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
          <label>email</label>
          <input type="email" name="email" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
<!--     <div class="msg">

      <textarea placeholder="Message"></textarea>
      <div class="btn">send</div>

    </div> -->
  </div>
</div>
	
</body>
</html>