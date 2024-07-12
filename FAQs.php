<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <link rel="stylesheet" href="CSS/navbar.css">
    <link rel="stylesheet" href="CSS/collapsemenu.css">
</head>
<body>
    <nav class="navbar">
        <a href="#" class="logo">Sha's Adornments</a>
        <ul class="navlinks">
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="custom.php">Custom</a></li>
            <li><a href="testimonials.php">Testimonials</a></li>
            <li><a href="policies.php">Policies</a></li>
            <li><a href="FAQs.php">FAQs</a></li>
        </ul>
        <div class="right">
            <a href="signup.php">Sign Up</a>
            <a href="login.php">Sign In</a>
        </div>
    </nav>
    <!-- add a collapsing menu for each question -->
    <h1>Sha's Adornments - Frequently Asked Questions</h1>
    
    <button class="accordion">What is the return policy?</button>
    <div class="panel">
        <p>We accept returns within 30 days of purchase. The item must be in its original condition and packaging. Please contact our customer service to initiate a return.</p>
    </div>
    
    <button class="accordion">How can I track my order?</button>
    <div class="panel">
        <p>You can track your order using the tracking number provided in your shipping confirmation email. Simply enter the tracking number on our tracking page.</p>
    </div>
    
    <button class="accordion">Do you offer custom designs?</button>
    <div class="panel">
        <p>Yes, we offer custom designs. You can provide your specifications, and our designers will work with you to create a unique piece.</p>
    </div>
    
    <button class="accordion">What materials do you use?</button>
    <div class="panel">
        <p>We use a variety of materials including gold, silver, platinum, and precious gemstones. Each product description includes detailed information about the materials used.</p>
    </div>
    
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>
</body>
</html>