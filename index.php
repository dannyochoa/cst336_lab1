<!DOCTYPE html>
<html>
<!--

First Website
and comment
in html
(comments can span multiple lines)

-->

<!-- This is the head -->
<!-- All styles and javascript go inside the head -->
    <head>
        <meta charset = "utf-8"/>
        <title>Daniel Ochoa Aguila: Personal Website</title>
    </head>
<!-- closing head -->

    <!-- This is the body -->
    <!-- This is where we place the content of our website -->
    <body>
        <header>
            <h1> Daniel Ochoa Aguila</h1>
            <link href="css/styles.css" rel="stylesheet" type="text/css"/>
            <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        </header>
        <nav>
            <hr width = "50%" />
            <a href = "index.php" id = "standOut">Home</a>
            <a href = "about.html">About</a>
            <a href = "contact.html">Contact</a>
        </nav>
    
        <!-- This is the footer -->
        <!-- The footer goes inside the body but not always -->
        
        <main>
            <figure id ="me">
                <img id = "photo" src="img/me.jpg"/>
            </figure>
            <div id="welcomeText">
                <br/><br/><br/>
                Hello!<br/>
                <p>
                    Thank you for taking the time to look over my page.
                </p>
                <p>
                    I am 20 years old, part of the CS in 3 program. I will be <br/>
                    getting my bachelor degree in 
                    Computer Science in May 2019. 
                </p>
                <p>
                    Feel free to contact me: <br/>
                    <strong>Email: </strong> dochoa-aguila@csumb.edu<br/>
                    <strong>Phone: </strong> (831) 770-9090
                    
                </p>
                <br/><br/>
                <em>“A dog will flatter you but you have to flatter the cat.”</em> - George Mikes 
            </div>
        </main>
        <footer>
            <hr>
            CST336 Internet Programming. 2017 &#xa9; Ochoa Aguila<br/>
            <strong>Disclaimer: </strong>The information in this webpage is fictitous.<br/>
            It is used for academic purposes only.<br/>
            <img id = "footerImg" src ="img/csumb.jpg"/>
            
        </footer>
        
    </body>
    <!-- closing body -->

</html>