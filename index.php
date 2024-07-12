<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sha's Adornments</title>
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/navbar.css">
    <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>
 <?php include_once ("templates/nav.php"); ?>
 

    <div class="content">
        <div class="main-content">
            <h2>WELCOME TO SHA'S ADORNMENTS</h2>
            <p>Where elegance meets artistry! <br> Explore handcrafted collections designed for timeless elegance or celebrating life's special moments. <br> 
               Each piece reflects our passion for perfection, ensuring you find jewelry as unique as you are.</p>
               <div class="image-gallery">
                <img src="photos/18K Real Gold Plated Sea Shell Pearls Necklace.jpeg" alt="Necklace">
                <img src="photos/Home Page Rings.jpeg" alt="Rings">
            </div>
        </div>
        <div class="sidebar">
            <h3>Latest News</h3>
            <button type="button"class="collapsible">Check It Out :)</button>
            <div class="collapsible-content">
            <p>Stay tuned for our upcoming summer collection!</p>
            </div>
            <h3>Contact Us</h3>
            <button type="button"class="collapsible">Reach Out :)</button>
            <div class="collapsible-content">
            <p>Email: info@shas-adornments.com</p>
            <p>Phone Number: 1234-567-89</p>
            </div>
        </div>
    </div>
    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;
        
        for (i = 0; i < coll.length; i++) {
          coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
              content.style.display = "none";
            } else {
              content.style.display = "block";
            }
          });
        }
        </script>
</body>
</html>
