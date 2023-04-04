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
        height: 52px;
        width: 100%;
        border: thin solid #000000;
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
    background-color: white;
    }

    nav ul li:hover ul{
    display: block;
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
        color: white;
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
            Learning Hub
            </marquee>
        </h1>        
    </header>
    <nav>
    <ul>
        <li><a href="Index_User.php">Home</a></li>
        <li><a href="Quiz.php">Quiz</a></li>
        <li><a href="Assignment.php">Assignment</a> </li>
    </ul>
    <ul>
        <li><a href="announcement.php">Announcement</a> </li>
        <li>Course
        <ul>
            <li style="width: 120px; background-color: white;"><a href="Sem1.php">Sem 1</a></li>
            <br />
            <li style="width: 120px; background-color: white;"><a href="Sem2.php">Sem 2</a></li>
            <br />
            <li style="width: 120px; background-color: white;"><a href="">Sem 3</a></li>
            <br />
            <li style="width: 120px; background-color: white;"><a href="">Sem 4</a></li>
        </li></ul>
        <li><a href=""></a> </li>
        <li>Account
            <ul>
            <li style="width: 120px; background-color: white;"><a href="Login.php">Sign In</a></li>
            <br />
            <li style="width: 120px; background-color: white;"><a href="Signup.php">Sign Up</a></li>
        </li></ul>
    </ul>
</nav>
</head>
<body>
    <div class="two">
        
    </div>

    <br />
    <footer>
        <h2>
            <br />
            Learning Hub
            <br />
            <br />
            <img src='Logo\Logo.png' alt=''  height="100" width="130" />
        </h2> 
            <br />
            <br />
                <a href="https://www.facebook.com/" style="padding-left: 485px">
                    <img src="Logo/F_L2.jpg" height="40px" width="40px">
                </a>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <a href="https://www.google.com/intl/en-GB/gmail/about/#">
                    <img src="Logo/G_l.png" height="40px" width="50px">
                </a>
                &nbsp&nbsp&nbsp&nbsp&nbsp
                <a href="https://twitter.com/">
                    <img src="Logo/T_l.jpg" height="60px" width="60px">
                </a>
                &nbsp&nbsp&nbsp&nbsp
                <a href="https://www.instagram.com/">
                    <img src="Logo/I_l.png" height="60px" width="60px">
                </a>

    </footer>

</body>
</html>