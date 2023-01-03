

<!DOCTYPE html>
<html>
    <head>
        <title>
            Add your blog here
        </title>
        <link rel="stylesheet" href="styles/addblogss.css"> 
    
     
    </head>
    <body>
        
          <h1 class="addblogsh1">Add Your Blog Here</h1>
          <center>
          <div class="submitblog">
            <form method="POST" action="submitblogs.php" class="submitblogform" enctype="multipart/form-data">
                <label for="title">What is the title</label><br>
                <input type="text" name="title" id="title" class="addblogf"><br><br>
                <label for="picture">Select your image</label><br>
                <input type="file" name="image" id="image" accept="image/*" class="addblogf"><br><br>
                <label for="picture">Select your blog pdf</label><br>
                <input type="file" name="doc" id="doc"  class="addblogf"><br><br>
                <label for="author">Who pubish this</label><br>
                <input type="text" name="author" id="author" class="addblogf"><br><br>
                <label for="description">Write a short description</label><br>
                <textarea name="description" id="description" cols="30" rows="4" class="addblogf"></textarea><br><br>
                
                <input type="submit" name="submit" class="blogsub">
            </form>
          </div>
        </center>
        
    </body>
</html>


   

