<?php
	include_once 'config.php';
?>

<?php
    session_start();
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Contact Page</title>
	  <link rel="stylesheet" href="styles/style.css"> 
	  <link rel="stylesheet" href="styles/contact.css">


	  <script type="text/javascript" src="script.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	</head>
	<body>
		<header>
            <?php
                include ('commonHeader.php')
            
            ?>

        </header>
	   
		  <hr>
		  <center><h1>Contact</h1></center>
		  <div class="upperContent">
			  <div class="upperContentInner">
					<p class="upperCp">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
						Soluta similique laboriosam labore consequuntur recusandae officiis
						 repudiandae nesciunt quas quisquam aliquam distinctio ratione omnis 
						 enim quidem voluptatum tenetur natus, necessitatibus temporibus?</p>
			  </div>
			  <div class="upperContentInner">
					<img src="" alt="" class="upperContentad" id="upperContentad">
			  </div>
		  </div>

		  <form method="POST" action="Contact page.php" class="formClass" >
			<input type = "text" class="blogBtn" name="ctitle" placeholder="serach name" style ="margin:0px;">
			<input type= "submit" name="Csearch" class = "ssubmit" value = "search" style ="margin:0px;"> 
		</form><br><br>

		
		
		<table class='ContactTable' >
						<tr>
							<th>Name</th>
							<th>Hotel</th>
							<th>Email</th>
							<th>Address</th>
							<th>Phone Number</th>
						</tr>

		<?php

		if(isset($_POST["Csearch"])){
			$result = $_POST["ctitle"];
			$sql = "SELECT * FROM b_account_details where C_Name like '%$result%'";
			$result = $conn -> query($sql);
			if ($result -> num_rows > 0){
				while ($row = $result -> fetch_assoc()){
					echo "
						<tr>
						<td>".$row['A_name1']."</td>
						<td>".$row['C_Name']."</td>
						<td>".$row['email']."</td>
						<td>".$row['CAddress1']."</td>
						<td>".$row['CPhone1']."</td>
						</tr>
					</table>";
				}
			}
		}


		else{
			
			$sql = "SELECT * FROM b_account_details";
			$result = $conn ->query($sql);
			if($result -> num_rows > 0){
			while($row = $result -> fetch_assoc()){
				echo "
					<tr>
						<td>".$row['A_name1']."</td>
						<td>".$row['C_Name']."</td>
						<td>".$row['email']."</td>
						<td>".$row['CAddress1']."</td>
						<td>".$row['CPhone1']."</td>
					</tr>
				";
		
			}
		}
		}
		?>
</table>

 <!--Footer-->
 <div class="footer">

	<div class="footer-column">
		<div class="footer-content">

			<div class="content">
				<ul type="none">

					<li class="font"><b><font size="4">Service</font></b></li>
					<li class="font">
						Customer service
					</li>
					<li class="font">
						Reservation
					</li>
					<li class="font">
						Blogs
					</li>
					<li class="font">
						Search Companies
					</li>
				</ul>

				<ul type="none">

					<li class="font"><b><font size="4">Contact Us</font></b></li>
					<li class="font">
					  
						Call : +94 77 3283 832
					</li>
					<li class="font">
						Mail : whateverCo@gmail.com
					</li>
					<li class="font">
						Address : 46, Colombo, Sri Lanka
					</li>
					
				</ul>
				<ul type="none">

					<li class="font"><b><font size="4">Service</font></b></li>
					<li class="font">
						Customer service
					</li>
					<li class="font">
						Reservation
					</li>
					<li class="font">
						Blogs
					</li>
					<li class="font">
						Search Companies
					</li>
				</ul>
			</div>
			
			<div class="links">
				<a href="http://www.facebook.com">
				<img src="pictures/facebook.png" alt="Facebook" class="social" height="20" width="20" >
				</a>

				<a href="http://www.twitter.com">
				<img src="pictures/Twitter.png" alt="Twitter" class="social" height="20" width="20">
				</a>

				<a href="http://www.instagram.com">
				<img src="pictures/insta.png" alt="instagram" class="social" height="20" width="20">
				</a>

				<a href="http://www.linkedin.com">
				<img src="pictures/LinkedIn.jpg" alt="LinkedIn" class="social" height="20" width="20">
				</a>
			</div>
			
			
		</div>


		<div class="footer-bottom">
			&copy; Designed by: 1.2 Group 6
		</div>

	</div>
	</div>
</body>
</html>


	</body>
</html>

