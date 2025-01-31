<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.min.css"
    /> -->

 <!-- Bootstrap CSS -->
 <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <title>Book Your Travel</title>
    <style>
       
     
        .container{
            height:100%; 
            width: 70%;
            display:flex;
            flex-direction:column;
            margin-bottom:100px;
margin-top:10vh;
            /* #A0DAA9 */
            /* background-color: white;             */
            padding: 30px 20px;
            border-radius:10px;
            justify-content: space-evenly;
            align-items: center;
            box-shadow: 2px 5px 20px lightgrey;
           
        }
        
        h1{
            text-align: center;
        }
        h3{
            text-align: center;
        }
        label{
            text-align: center;
            margin:1vh;
        }
        input{
            width: 100%;
            padding:1vh;
            border:0;
            /* display:flex-start; */
            border-radius:4px;
            background-color: rgb(233, 236, 235);
        }
        textarea{
            background-color: rgb(233, 236, 235);
            width: 100%;
            padding:1vh;
            border:0;
        }
        .container i{
            color:red;
        }
        .button{
            background-color: rgb(84, 84, 248);
            padding:1vh  3vh;
            font-size: 15px;
            border-radius:4px;
            color:white;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="/TravelWebsite/home.php"
          >✈ Book Your Travel</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a
              class="nav-link "
              aria-current="page"
              href="/TravelWebsite_1/landing.html"
              >Home</a
            >
            <a class="nav-link" href="/TravelWebsite_1/about.html">About</a>
            <a class="nav-link" href="/TravelWebsite_1/package.html"
              >Packages</a
            >
            <a class="nav-link active" href="/TravelWebsite_1/bookings.php"
              >Bookings</a
            >
            <a class="nav-link" href="/TravelWebsite_1/contact.php">Contact</a>

            <!-- <button type="button" class="btn btn-danger btn-sm">
              <a href="/TravelWebsite_1/login.php">LogOut</a>
            </button> -->
          </div>
        </div>
      </div>
    </nav>


  <div class="container">
 
    <form action="/TravelWebsite_1/process_booking.php" method="post">
<h3>Let's book your trip</h3>


    <!-- Name -->
     <label for="name">Name</label> 
     <input type="text" name="name" placeholder="Enter your name"> <br>

 <br>
     <!-- Email -->
     <label>Email</label>
     <input type="email" name="email" placeholder="Enter your email"> 
<br> <br>
     <!-- Phone -->
     <label for="name">Phone Number</label>
     <input type="number" name="phone" placeholder="Enter your phone number"> 
     <br> <br>
<!-- state -->
 <label for="state">State</label>
 
  <select name="state" id="">
    <option value="1" selected>Odisha</option>
    <option value="2">Delhi</option>
    <option value="3">Maharastra</option> 
  </select>
<br>
 <br>

     <!-- location / destination -->
     <label for="name">Destination / Location</label>
     <input type="text" name="location" placeholder="Enter your visting location"> <br>
<br>
     <!-- No of members -->
<label for="members">Number of members</label>
<input type="number" name="members" placeholder="Enter the number of members visting"> <br>
<br>
<p><i>[Note: Number of members cannot be less than 1 or more than 10, otherwise your booking can be cancelled later.]</i></p> 
     <!-- No. of days -->
<label for="days">Number of Days to Travel</label>
<input type="number" name="days" placeholder="Enter number of days of your trip">

     <!-- date of start Journey -->
      <label for="date">Date of Starting Journey</label>
      <input type="date" name="date">
<br> <br>
     <!-- Message -->
<label for="">Message</label>
<textarea name="message"></textarea>
     <!-- To check --> <br>
 <br>
<!--input button -->
<input type="submit" class="button" value="Book">

<!-- //only in DATABASE -> CURRENT DATE OF DATA INSERT -->

    </form>
  </div>
   <!-- Bootstrap Javascript -->
   <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
</body>
</html>