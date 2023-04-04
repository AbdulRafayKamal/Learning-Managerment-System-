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
                    <h2 style="color: white; background-color: #3f005c"> 6th Question</h2>
                    <h3 style="padding-top: 15px;">WordPress is a...</h3>
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
                        <label for="question-6-answers-A">A) Software </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
                        <label for="question-6-answers-B">B) Web App</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
                        <label for="question-6-answers-C">C) CMS</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />
                        <label for="question-6-answers-D">D) Other</label>
                    </div>
                </div>
                <br />
                <div style=" height: 280px; width: 60%; border: solid thick #3f005c; text-align: center; padding-top: 20px; font-family: serif;">
                    <h2 style="color: white; background-color: #3f005c"> 7th Question</h2>
                    <h3 style="padding-top: 15px;">SEO is Part Of...</h3>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" />
                        <label for="question-7-answers-A">A) Video Editing</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
                        <label for="question-7-answers-B">B) Graphic Designing</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" />
                        <label for="question-7-answers-C">C) Web Designing</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-D" value="D" />
                        <label for="question-7-answers-D">D) Digital Marketing</label>
                    </div>
                </div>
                <br />
                    
                <div style=" height: 280px; width: 60%; border: solid thick #3f005c; text-align: center; padding-top: 20px; font-family: serif;">
                    <h2 style="color: white; background-color: #3f005c"> 8th Question</h2>
                    <h3 style="padding-top: 15px;">PHP is a....</h3>
                    
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" />
                        <label for="question-8-answers-A">A) Server Side Script</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" />
                        <label for="question-8-answers-B">B) Programming Language</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-C" value="C" />
                        <label for="question-8-answers-C">C) Markup Language</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-D" value="D" />
                        <label for="question-8-answers-D">D) None Of Above These</label>
                    </div>
                </div>
                <br />
                    
                <div style=" height: 280px; width: 60%; border: solid thick #3f005c; text-align: center; padding-top: 20px; font-family: serif;">
                    <h2 style="color: white; background-color: #3f005c;"> 9th Question</h2>
                    <h3 style="padding-top: 15px;">Localhost IP is..</h3>
                    
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" />
                        <label for="question-9-answers-A">A) 192.168.0.1</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" />
                        <label for="question-9-answers-B">B) 127.0.0.0</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-C" value="C" />
                        <label for="question-9-answers-C">C) 1080:80</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-D" value="D" />
                        <label for="question-9-answers-D">D) Any Other</label>
                    </div> 
                </div>
                <br /> 
                    
                <div style=" height: 280px; width: 60%; border: solid thick #3f005c; text-align: center; padding-top: 20px; font-family: serif;">  
                <h2 style="color: white; background-color: #3f005c;"> 10th Question</h2>  
                    <h3 style="padding-top: 15px;">Webdevtrick Is For</h3>
                    
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-A" value="A" />
                        <label for="question-10-answers-A">A) Web Designer</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-B" value="B" />
                        <label for="question-10-answers-B">B) Web Developer</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-C" value="C" />
                        <label for="question-10-answers-C">C) Graphic Designer</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-D" value="D" />
                        <label for="question-10-answers-D">D) All Above These</label>
                    </div>
                </div>
                <br />
                <a href="Quiz.php">
                <button type="button" style="width: 85px; color: #3f005c;">Previous</button></a>
                <a href="Quiz2.php">
                <button type="button" style="width: 85px; color: #3f005c;margin-left: 127px;">Next</button></a>
		</form>
	</div>
</body>
</html>