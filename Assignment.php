<style type="text/css">
    header{
        height: 100px;
        width: 100%;
        background-color: #3f005c;
        border: thin solid #000000;
    }

    h1{
        text-align: center;
        color: white;
        font-family: all;
    }
    
    nav{
        height: 100px;
        width: 100%;
        border: thin solid #000000;
    }

    nav{
        border: 0px solid #222021;
        width: 100%;
        height: 50px;
        background-color: transparent;
    }

    nav ul{
        display: inline;
        margin: 0;
        padding: 0;
        list-style-type: none;
    }

    nav ul li{
        float: left;
        width: 9%;
        height: 50px;
        margin-left: 5%;
        text-align: center;
        line-height: 50px;
    }

    nav ul li a{
        color: black;
        text-decoration: none;
        line-height: 50px;
    }

    nav ul li a:hover{
        color: #3f005c;
    }

    nav ul li ul{
        position: absolute;
        display: none;
        margin: 0;
        padding: 0;
        list-style-type: none;
        height: 170px;
        z-index: 1;
    }

    nav ul li ul li{
        width: 60%;
        margin-left: 0px;
        background-color: azure;
        box-shadow: 0px 6px 14px 0px lightgrey;
    }

    nav ul li:hover{
        background-color: transparent;
    }

    nav ul li:hover ul{
        display: block;
    }
    div.one{
        border: thin solid #3f005c;
        height: 50px;
        width: 100%;
        text-align: center;
        padding-top: 9px;
    }

    div.two{
        height: 500px;
        width: 100%;
        background: url(Pics/BG_Img.jpg) no-repeat fixed 250px 225px;
    }

    footer{
        height: 500px;
        width: 100%;
        background-color: #3f005c;
        border: thin solid #000000;

    }

    h2{
        text-align: center;
        color: White;
    }
</style>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LMS Learning Hub</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <header>
        <h1>
            <marquee>      
            <img src='Logo\Logo.png' alt=''  height="100" width="130" />
            Submit Assignments 
            </marquee>
        </h1>        
    </header>
    <nav>
    <ul>
        <li><a href="Index_User.php">Home</a></li>
        <li><a href=""></a></li>
        <li><a href=""></a> </li>
        <li><a href=""></a> </li>
    </ul>
</nav>
</head>
<body>
    <div class="one">
        <form action="" method="post" enctype="multipart/form-data">
    Select Assignment to Submit:
    <input type="file" name="images">
    <input type="submit" value="Upload Image" name="submit">    
    </form>
    </div>
    <div class="two">
        
    </div>

    <br />
    <footer>
        <h2>
            <br />
            Learning Hub
            <br />
            <img src='Logo\Logo.png' alt=''  height="100" width="130" />
        </h2>  
    </footer>

</body>
</html>