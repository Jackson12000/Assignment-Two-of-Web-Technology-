<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Myclient</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<center>
  <div>
  <h1>CLIENT FORM</h1>
  <form method="post" action="search.php">
			<label for="search">Search:</label>
			<input type="text" id="search" name="search" placeholder="Enter id to search">
			<button type="submit">Searching</button>
		</form>
  </div>
 <form action="add.php" method="POST">
<div>
<label for="names">Names</label>
<div>
<input class="names" type="text" name="names" value="" placeholder="Enter Names" required> <br><br>
</div>
</div>
<div>
<label for="email">Email</label>
<div>
<input class="names" type="text" name="email" value="" placeholder="Enter Email" required> <br><br>
</div>
</div>
<div>
<label for="username">Username</label>
<div>
<input class="names" type="text" name="username" value="" placeholder="Enter Username" required> <br><br>
</div>
</div>
<div>
<label for="password">Password</label>
<div>
<input class="names" type="text" name="password" value="" placeholder="Enter Password" required> <br><br>
</div>
</div>
<div>
<input class="submit" type="submit" value="NewClient"> 
<input class="submit" type="reset" value="Cancel"> 
</div>
 </form>
 </center> 
</body>
</html>