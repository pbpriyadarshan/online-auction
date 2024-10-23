<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

?>
<html>
  <head>
    <title>Online Auction</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <header>
      <h1>Online Auction</h1>
      <nav>
          <li><a href="Home.html">Home</a></li>
          <li><a href="My account.html">My Account</a></li>
      </nav>
    </header>
    <main>
      <h1>Featured Items</h1>
      <ul>
        <li>
          <h3>Item 1-BDA SITES</h3>
          <img src="bda site.jpg" width="50%" height="10%">
         <pre><p><h3>
            <li>The Bengaluru Development Authority (BDA) has re-commenced auctioning its corner sites in various layouts.</li>
            <h4>TERMS AND CONDITIONS</h4>
            <li>Applicant should be a Citizen of India.</li>
            <li>NRIs & Partnership firms also can participate in the auction.</li>
            <li>Applicant has to pay Rs 4 Lakh per site as Earnest Money Deposit (Deposit amount is refundable).</li>
            <li>Successful bidder has to remit 25% of auction amount in 3 days.</li></h3></p></pre>
          <p>Current Bid: $10,000</p>
          <form action="submit.html" method="post">
            <label for="bid-amount">Enter Bid:</label>
            <input type="text" id="bid-amount" name="bid-amount">
          </br></br>
            <input type="submit" value="Submit Bid"  >
            <input type="button" value="Add To watchlist">
          </form>
        </li></br></br>
        <li>
          <h3>Item 2- Mercedes benz GLA200 (2019 model)</h3>
          <img src="https://th.bing.com/th/id/OIP.F9YX075vHn5n90COgXQSiAHaFj?pid=ImgDet&rs=1" width="50%" height="10%">
          <pre><p>
            This is the base model of mercedes benz. This car enters into the luxuary segment of the cars.
            It is an automatic with a good mileage. It is in good condition and 2019 model.
          </p></pre>
          <p>Current Bid: $50,000</p>he compe
          <form action="submit.html" method="post">
            <label for="bid-amount">Enter Bid:</label>
            <input type="text" id="bid-amount" name="bid-amount">
          </br></br>
            <input type="submit" value="Submit Bid">
            <input type="button" value="Add To watchlist">
          </form>
        </li></br></br>
        <li>
          <h3>Item 3-ANTIQUES(Vase)</h3>
          <img src="antiques.jpg"width="50%" height="5%">
          <pre><p>
            Vintage from the 18th century
            Materials: porcelain
            Width: 6 inches
            Height: 14 inches
            Depth: 6 inches

          </p></pre>
          <p>Current Bid: $1,000</p>
          <form action="submit.html" method="post">
            <label for="bid-amount">Enter Bid:</label>
            <input type="text" id="bid-amount" name="bid-amount">
          </br></br>
            <input type="submit" value="Submit Bid">
            <input type="button" value="Add To watchlist">
        </li></br></br>
        <li>
          <h3>Item 4-Mangoes</h3>
          <img src="https://media.millichronicle.com/2019/05/12125624/mangoes-chopped-and-fresh.jpg" width="50%" height="10%">
          <pre><p>
            A mango is a sweet tropical fruit, and it's also the name of the trees on which the fruit grows.
            Ripe mangoes are juicy, fleshy, and delicious. Like peaches and plums, mangoes have an inedible pit at the center.
            Unlike these other fruits, the skin of a mango is very tough and also inedible.
          </p></pre>
          <p>Current Bid: $375.05 per TON</p>
          <form action="submit.html" method="post">
            <label for="bid-amount">Enter Bid:</label>
            <input type="text" id="bid-amount" name="bid-amount">
          </br></br>
            <input type="submit" value="Submit Bid">
            <input type="button" value="Add To watchlist">
          </form>
        </li></br></br>
        <li>
          <h3>Item 5-HOUSE</h3>
          <img src="house.jpeg" width="50%" height="10%">
          <pre><p>
            “Gorgeous 4-bedroom, 2-bathroom home in beautiful Silver Lake. 
            This property offers 1,160 square feet of living space and a lot size of 5,499 square feet. 
            Your family and loved ones will enjoy the spacious backyard, perfect for family gatherings! 
            Come and take a look at this beauty....
          </p></pre>
          <p>Current Bid: $100,000</p>
          <form action="submit.html" method="post">
            <label for="bid-amount">Enter Bid:</label>
            <input type="text" id="bid-amount" name="bid-amount">
          </br></br>
            <input type="submit" value="Submit Bid">
            <input type="button" value="Add To watchlist">
          </form>
        </li></br></br>
      </ul>
    </main>
    <footer>
      <p>Copyright ©2023 Online Auction</p>
      <span class="login-signup btn btn-warning"><a href="logout.php" style="color:white">Logout</a></span>
    </footer>
  </body>
</html>
 
