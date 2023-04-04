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
        width: 15%;
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
                    <h2 style="color: white; background-color: #3f005c"> 11th Question</h2>
                    <h3 style="padding-top: 15px;">WordPress is a...</h3>
                    <div>
                        <input type="radio" name="question-11-answers" id="question-11-answers-A" value="A" />
                        <label for="question-11-answers-A">A) Software </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-11-answers" id="question-11-answers-B" value="B" />
                        <label for="question-11-answers-B">B) Web App</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-11-answers" id="question-11-answers-C" value="C" />
                        <label for="question-11-answers-C">C) CMS</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-11-answers" id="question-11-answers-D" value="D" />
                        <label for="question-11-answers-D">D) Other</label>
                    </div>
                </div>
                <br />
                <div style=" height: 280px; width: 60%; border: solid thick #3f005c; text-align: center; padding-top: 20px; font-family: serif;">
                    <h2 style="color: white; background-color: #3f005c"> 12th Question</h2>
                    <h3 style="padding-top: 15px;">SEO is Part Of...</h3>
                    
                    <div>
                        <input type="radio" name="question-12-answers" id="question-12-answers-A" value="A" />
                        <label for="question-12-answers-A">A) Video Editing</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-12-answers" id="question-12-answers-B" value="B" />
                        <label for="question-12-answers-B">B) Graphic Designing</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-12-answers" id="question-12-answers-C" value="C" />
                        <label for="question-12-answers-C">C) Web Designing</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-12-answers" id="question-12-answers-D" value="D" />
                        <label for="question-12-answers-D">D) Digital Marketing</label>
                    </div>
                </div>
                <br />
                    
                <div style=" height: 280px; width: 60%; border: solid thick #3f005c; text-align: center; padding-top: 20px; font-family: serif;">
                    <h2 style="color: white; background-color: #3f005c"> 13th Question</h2>
                    <h3 style="padding-top: 15px;">PHP is a....</h3>
                    
                    <div>
                        <input type="radio" name="question-13-answers" id="question-13-answers-A" value="A" />
                        <label for="question-13-answers-A">A) Server Side Script</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-13-answers" id="question-13-answers-B" value="B" />
                        <label for="question-13-answers-B">B) Programming Language</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-13-answers" id="question-13-answers-C" value="C" />
                        <label for="question-13-answers-C">C) Markup Language</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-13-answers" id="question-13-answers-D" value="D" />
                        <label for="question-13-answers-D">D) None Of Above These</label>
                    </div>
                </div>
                <br />
                    
                <div style=" height: 280px; width: 60%; border: solid thick #3f005c; text-align: center; padding-top: 20px; font-family: serif;">
                    <h2 style="color: white; background-color: #3f005c;"> 14th Question</h2>
                    <h3 style="padding-top: 15px;">Localhost IP is..</h3>
                    
                    <div>
                        <input type="radio" name="question-14-answers" id="question-14-answers-A" value="A" />
                        <label for="question-14-answers-A">A) 192.168.0.1</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-14-answers" id="question-14-answers-B" value="B" />
                        <label for="question-14-answers-B">B) 127.0.0.0</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-14-answers" id="question-14-answers-C" value="C" />
                        <label for="question-14-answers-C">C) 1080:80</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-14-answers" id="question-14-answers-D" value="D" />
                        <label for="question-14-answers-D">D) Any Other</label>
                    </div> 
                </div>
                <br /> 
                    
                <div style=" height: 280px; width: 60%; border: solid thick #3f005c; text-align: center; padding-top: 20px; font-family: serif;">  
                <h2 style="color: white; background-color: #3f005c;"> 15th Question</h2>  
                    <h3 style="padding-top: 15px;">Webdevtrick Is For</h3>
                    
                    <div>
                        <input type="radio" name="question-15-answers" id="question-15-answers-A" value="A" />
                        <label for="question-15-answers-A">A) Web Designer</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-15-answers" id="question-15-answers-B" value="B" />
                        <label for="question-15-answers-B">B) Web Developer</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-15-answers" id="question-15-answers-C" value="C" />
                        <label for="question-15-answers-C">C) Graphic Designer</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-15-answers" id="question-15-answers-D" value="D" />
                        <label for="question-15-answers-D">D) All Above These</label>
                    </div>
                </div>
                <br />
                <a href="Quiz1.php">
                <button type="button" style="width: 85px; color: #3f005c;">Previous</button></a>
                <a href="" style="margin-left: 143px; color: #3f005c; font-family: serif; font-size: 18px;">
                <input type="submit" value="Submit" class="submitbtn" />
                </a>
		</form>
	</div>
</body>
</html>