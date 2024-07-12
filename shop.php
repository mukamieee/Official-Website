<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="CSS/navbar.css">
    <link rel="stylesheet" href="CSS/table.css">

    <script>
      document.addEventListener('DOMContentLoaded', function() {
          const form = document.querySelector('form');
          
          // Form validation on submit
          form.addEventListener('submit', function(event) {
              const name = document.getElementById('name').value;
              const email = document.getElementById('email').value;
              
              if (name === '' || email === '') {
                  alert('Name and Email are required!');
                  event.preventDefault(); // Prevent form submission
              }
          });

          // Additional dynamic behavior example
          const customDesignCheckbox = document.getElementById('customDesign');
          const serviceTypeRadios = document.getElementsByName('serviceType');
          const additionalDetails = document.getElementById('details');

          customDesignCheckbox.addEventListener('change', function() {
              if (customDesignCheckbox.checked) {
                  additionalDetails.style.display = 'block';
              } else {
                  additionalDetails.style.display = 'none';
              }
          });

          serviceTypeRadios.forEach(radio => {
              radio.addEventListener('change', function() {
                  if (this.value === 'customOrder') {
                      additionalDetails.placeholder = 'Please describe your custom order in detail.';
                  } else {
                      additionalDetails.placeholder = '';
                  }
              });
          });
      });
  </script>

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
    <h1>SHOP SOMETHING SPECIAL</h1> 
    <!-- add a navigation bar that has different jewelry  -->
    <table>
      <tr>
        <th>Company</th>
        <th>Contact</th>
        <th>Country</th>
      </tr>
      <tr>
        <td>Alfreds Futterkiste</td>
        <td>Maria Anders</td>
        <td>Germany</td>
      </tr>
      <tr>
        <td>Centro comercial Moctezuma</td>
        <td>Francisco Chang</td>
        <td>Mexico</td>
      </tr>
      <tr>
        <td>Ernst Handel</td>
        <td>Roland Mendel</td>
        <td>Austria</td>
      </tr>
      <tr>
        <td>Island Trading</td>
        <td>Helen Bennett</td>
        <td>UK</td>
      </tr>
      <tr>
        <td>Laughing Bacchus Winecellars</td>
        <td>Yoshi Tannamuri</td>
        <td>Canada</td>
      </tr>
      <tr>
        <td>Magazzini Alimentari Riuniti</td>
        <td>Giovanni Rovelli</td>
        <td>Italy</td>
      </tr>
    </table>
    <h2>Get Yours Today!</h2>
    <form action="submit_form.php">
      <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone"><br><br>

      <label for="jewelryType">Type of Jewelry:</label>
      <select id="jewelryType" name="jewelryType">
        <option value="necklace">Necklace</option>
        <option value="bracelet">Bracelet</option>
        <option value="ring">Ring</option>
        <option value="earrings">Earrings</option>
    </select><br><br>

    <label for="material">Material:</label>
            <input type="text" id="material" name="material"><br><br>

            <label for="customDesign">Custom Design:</label>
            <input type="checkbox" id="customDesign" name="customDesign" value="yes"> Yes<br><br>
            
            <legend>Service Details</legend>
            <label for="serviceType">Type of Service:</label><br>
            <input type="radio" id="repair" name="serviceType" value="repair">
            <label for="repair">Repair</label><br>
            <input type="radio" id="cleaning" name="serviceType" value="cleaning">
            <label for="cleaning">Cleaning</label><br>
            <input type="radio" id="customOrder" name="serviceType" value="customOrder">
            <label for="customOrder">Custom Order</label><br><br>
            
            <label for="details">Additional Details:</label><br>
            <textarea id="details" name="details" rows="4" cols="50"></textarea><br><br>  
            
            <input type="submit" value="Submit">
    </form>
</body>
</html>