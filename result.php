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

body{ 
    font: 14px Georgia, serif; 
}
 
#page-wrap { 
    width: 500px; 
    margin: 0 auto;
}
 
h2 { 
    margin: 25px 0; 
    font: 18px Georgia, Serif; 
    text-transform: uppercase; 
    letter-spacing: 3px; 
}
 
#quiz input {
    vertical-align: middle;
}
 
#quiz ol {
   margin: 0 0 10px 20px;
}
 
#quiz ol li {
   margin: 0 0 20px 0;
}
 
#quiz ol li div {
   padding: 4px 0;
}
 
#quiz h3 {
   font-size: 17px; margin: 0 0 1px 0; color: #666;
}
 
#results {
    font: 44px Georgia, Serif;
}

</style>

<!DOCTYPE html>
<html>
 
<head>
	<meta charset=UTF-8 />
	<title>LMS Quiz</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css" />

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
 
	<div id="page-wrap">
        <br />
        <br />
        <div style="height: 65px; width: 70%; background-color: black; color: white; text-align: center; padding-top: 8px; padding-left: 10px;">
            <h2 style="font-family: serif;">Result</h2>
        </div>
		
		
        <?php
            
            @$answer1 = $_POST['question-1-answers'];
            @$answer2 = $_POST['question-2-answers'];
            @$answer3 = $_POST['question-3-answers'];
            @$answer4 = $_POST['question-4-answers'];
            @$answer5 = $_POST['question-5-answers'];
            @$answer6 = $_POST['question-6-answers'];
            @$answer7 = $_POST['question-7-answers'];
            @$answer8 = $_POST['question-8-answers'];
            @$answer9 = $_POST['question-9-answers'];
            @$answer10 = $_POST['question-10-answers'];
            @$answer11 = $_POST['question-11-answers'];
            @$answer12 = $_POST['question-12-answers'];
            @$answer13 = $_POST['question-13-answers'];
            @$answer14 = $_POST['question-14-answers'];
            @$answer15 = $_POST['question-15-answers'];
        
            $totalCorrect = 0;
            
            if (@$answer1 == "C") { $totalCorrect++; }
            if (@$answer2 == "D") { $totalCorrect++; }
            if (@$answer3 == "A") { $totalCorrect++; }
            if (@$answer4 == "B") { $totalCorrect++; }
            if (@$answer5 == "D") { $totalCorrect++; }
            if (@$answer6 == "A") { $totalCorrect++; }
            if (@$answer7 == "B") { $totalCorrect++; }
            if (@$answer8 == "D") { $totalCorrect++; }
            if (@$answer9 == "C") { $totalCorrect++; }
            if (@$answer10 == "B") { $totalCorrect++; }
            if (@$answer11 == "C") { $totalCorrect++; }
            if (@$answer12 == "D") { $totalCorrect++; }
            if (@$answer13 == "A") { $totalCorrect++; }
            if (@$answer14 == "B") { $totalCorrect++; }
            if (@$answer15 == "D") { $totalCorrect++; }
            
            echo "<div id='results'>$totalCorrect / 15 correct</div>";
            
        ?>

	</div>
</body>
</html>