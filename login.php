<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Travel Website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.min.css">
</head>
<style>
    h1{
        text-align:center;
    }
    .container{
        height:100%;
width:100%;
display:flex;
        flex-direction:column;
        justify-content: center;
        align-items:center;
    }
    form{
        margin-top:10vh;
        height:100%;
        width:80%;
        display:flex;
        flex-direction:column;
        justify-content: center;
        align-items:center;
    }
    input{
        width:100%;
    }
</style>
<body>
    <!-- <H1>LogIn</H1> -->
   <div class="container">
   <H1>LogIn To Travel Website</H1>
   <form action="" method="post">
        <label for="">Email</label>
        <input type="email" name="email" id="">

        <label for="">Password</label>
        <input type="password" name="password" id="">

        <p>or <a href="/TravelWebsite_1/landing.html">Login as a guest</a></p>
        <input type="submit" value="LogIn">
    </form>
    <p>[Note: If you are late for SignUp. Unfortunately you can't LogIn. Then, you can only LogIn as a Guest.]</p>
   </div>
</body>
</html>






