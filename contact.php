<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact page</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.min.css"> -->
    <!-- Bootstrap CSS -->
 <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
<style>
   
   .container{
            height:100%;
            width: 70%;
            display:flex;
            flex-direction:column;
            margin-bottom:50px;
margin-top:10vh;
            /* #A0DAA9 */
            background-color: white;            
            padding: 10px 7px;
            border-radius:10px;
            justify-content: space-evenly;
            align-items: center;
            box-shadow: 2px 5px 20px lightgrey;
           
        }
        form{
            height:100%;
            width:70%;
            margin-bottom:20px;
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
        #btn{
            background-color: rgb(84, 84, 248);
            padding:1vh  3vh;
            font-size: 15px;
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
              class="nav-link"
              aria-current="page"
              href="/TravelWebsite_1/landing.html"
              >Home</a
            >
            <a class="nav-link" href="/TravelWebsite_1/about.html">About</a>
            <a class="nav-link" href="/TravelWebsite_1/package.html"
              >Packages</a
            >
            <a class="nav-link" href="/TravelWebsite_1/bookings.php"
              >Bookings</a
            >
            <a class="nav-link active" href="/TravelWebsite_1/contact.php">Contact</a>

            <!-- <button type="button" class="btn btn-danger btn-sm">
              <a href="/TravelWebsite_1/login.php">LogOut</a>
            </button> -->
          </div>
        </div>
      </div>
    </nav>


    <div class="container">
        <h1>Contact Us</h1>
        <form action="contact_data_insert.php" method="post">
            <label for="">First Name</label>
            <input type="text" name="first_name" placeholder="Enter your first name">
            <br>
            <label for="">Last Name</label>
            <input type="text" name="last_name" placeholder="Enter your last name">
            <br>
            <label for="">Email</label>
            <input type="email" name="email" placeholder="Enter your email id">
            <br>
            <label for="">Message</label>
            <textarea name="message"></textarea>
             <br>
             <br>
            <input type="submit" value="Submit" id="btn">

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