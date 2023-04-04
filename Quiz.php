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
        text-align: center;
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

body{ 
    font: 14px Georgia, serif; }

#page-wrap { 
    width: 500px; 
    margin: 0 auto;}

#quiz input {
    vertical-align: middle;
}

#quiz h3 {
   font-size: 17px; margin: 0 0 1px 0; color: #666;
}
 
#results {
    font: 44px Georgia, Serif;
}

div.DivTwo{

        float: right;
        height: 1495px;
        width: 16%;
        border: thin solid #000000;
        margin-top: 50px ;
    }

</style>

<!DOCTYPE html>
<head>
	<meta charset=UTF-8 />
	<title>PHP QUIZ</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>

    <header>
        <h1>
            <marquee>      
            <img src='Logo\Logo.png' alt=''  height="100" width="130" />
            Quiz
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
    <div class="DivTwo">
        <img src="Pics/Q1.jpg" alt="" height="1495px" width="100%">
    </div>
    <br />
    <br />
	<div id="page-wrap">
		<form action="result.php" method="post" id="quiz">
	
                <div style=" height: 280px; width: 60%; border: solid thick #3f005c; text-align: center; padding-top: 20px; font-family: serif;">
                    <h2 style="color: white; background-color: #3f005c"> 1st Question</h2>
                    <h3 style="padding-top: 15px;">WordPress is a...</h3>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) Software </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) Web App</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) CMS</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) Other</label>
                    </div>
                </div>
                <br />
                <div style=" height: 280px; width: 60%; border: solid thick #3f005c; text-align: center; padding-top: 20px; font-family: serif;">
                    <h2 style="color: white; background-color: #3f005c"> 2nd Question</h2>
                    <h3 style="padding-top: 15px;">SEO is Part Of...</h3>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A) Video Editing</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) Graphic Designing</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) Web Designing</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D) Digital Marketing</label>
                    </div>
                </div>
                <br />
                    
                <div style=" height: 280px; width: 60%; border: solid thick #3f005c; text-align: center; padding-top: 20px; font-family: serif;">
                    <h2 style="color: white; background-color: #3f005c"> 3rd Question</h2>
                    <h3 style="padding-top: 15px;">PHP is a....</h3>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A) Server Side Script</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) Programming Language</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C) Markup Language</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D) None Of Above These</label>
                    </div>
                </div>
                <br />
                    
                <div style=" height: 280px; width: 60%; border: solid thick #3f005c; text-align: center; padding-top: 20px; font-family: serif;">
                    <h2 style="color: white; background-color: #3f005c;"> 4th Question</h2>
                    <h3 style="padding-top: 15px;">Localhost IP is..</h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A) 192.168.0.1</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) 127.0.0.0</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C) 1080:80</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D) Any Other</label>
                    </div> 
                </div>
                <br /> 
                    
                <div style=" height: 280px; width: 60%; border: solid thick #3f005c; text-align: center; padding-top: 20px; font-family: serif;">  
                <h2 style="color: white; background-color: #3f005c;"> 5th Question</h2>  
                    <h3 style="padding-top: 15px;">Webdevtrick Is For</h3>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A) Web Designer</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B) Web Developer</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C) Graphic Designer</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D) All Above These</label>
                    </div>
                </div>
                <br />
                <a href="Quiz1.php">
                <button type="button" style="width: 85px; color: #3f005c;margin-left: 110px; ">Next</button></a>
		</form>
	</div>
</body>
</html>