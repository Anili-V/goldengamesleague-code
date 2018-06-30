<?php include 'header.php'; ?>
<style> 
input[type=text] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
}

input[type=text]:focus {
    border: 3px solid #555;
}
</style>
<head>
	<title>Contact Us</title>
</head>
<body>
    <div>	
      <form method="post" action="https://formspree.io/goldengamesleague@gmail.com">
	      <div>
		      <label>Name</label><br>
		      <input type="text" name="name">
	      </div>
	      <div>
	      	<label>Email</label><br>
	      	<input type="text" name="email">
	      </div>
	      <div>
	      	<label>Message</label><br>
	      	<textarea name="message"></textarea>
	      </div>
	      <br>
	      <button type="submit" name="submit">Submit</button>
      </form>
    </div>
</body>
<?php include 'footer.php'; ?>