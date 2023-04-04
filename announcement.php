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
        height: 55px;
        width: 100%;
        border: thin solid #3f005c;
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

    div{
        height: 550px;
        width: 100%;
        border-radius:100%;
        background-image: url(https://www.blog.tradingroom.io/wp-content/uploads/2019/05/announcement-banner-600x300.jpg) no-repeat fixed 100% 100% ;


    }

    #slideshow{
    
    margin:50px auto;
    position:relative;
    width:800px;
    height:400px;
    padding:10px;
    box-shadow:0 0 25px rgba(0,0,0,0,4);}
#slideshow>div{
    
    position:absolute;
    top:10px;
    left:10px;
    right:10px;
    bottom:10px;
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <header>
        <h1>
            <marquee>      
            <img src='Logo\Logo.png' alt=''  height="100" width="130" />
            Announcements
            </marquee>
        </h1>        
    </header>
    <nav>
    <ul>
        <li><a href="Index_User.php">Home</a></li>
    </ul>
</nav>
</head>
<body>
    <div id="slideshow" >
            <div>
<img src="Pics/s9.jpg" width="800"height="400">
</div>
<div>
<img src="Pics/s2.jpg"width="800"height="400">
</div>
<div>
<img src="Pics/s3.jpg" width="800"height="400">
</div>
<div>
<img src="Pics/s4.jpg" width="800"height="400">
</div>
<div>
<img src="Pics/s5.jpg" width="800"height="400">
</div>
<div>
<img src="Pics/s6.png" width="800"height="400">
</div>
<div>
<img src="Pics/s7.jpg" width="800"height="400">
</div>
<div>
<img src="Pics/s8.png" width="800"height="400">
</div>
    </div>

        <script>
$("#slideshow > div:gt(0)").hide();
setInterval(function(){
    $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
},  3000);
</script>

</body>
</html>