<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Website Landing Page Design</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="./LandingPage.css">
  
  </head>
  <body>

  <section>
      <input type="checkbox" id="check">
      <header>
        </div>
        <h2><a href="./LandingPage.php" class="logo">STORYERA</a></h2>
        <div class="navigation">
          <a href="./LandingPage.php">Home</a>
          <a href="./login.php">Become Story Teller</a>
          <a href="./admin.php">Admin Login</a>
         
        </div>
        <label for="check">
        <i class="fas fa-bars menu-btn"></i>
        <i class="fas fa-times close-btn"></i>
        </label>
      </header>
      <div class="content">
        <div class="info">
          <h2>Like Nature <br><span>Be Creative!</span></h2>
         
        </div>
      </div>
      <div class="content">
        <div class="info">
        <div   >
        <?php  include('storyData.php');?>
        
      </div>
      <div class="media-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </section>



  </body>
</html>