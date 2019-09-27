<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CS 313 - Jake-Maughan</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
<nav id="navbar">
        <a href="#aboutMe">About Me</a>
        <a href="assignments.php" id="navEnd">Assignments</a>
    </nav>

    <main>
        <section id="welcome-section">
            <div id="hero-container">
                <span class="coding-text" id="h1-start">&lt;h1&gt;</span>
                <h1>Hello, <br>
                    I'm <span id="jake">Jake</span>, <br>
                    Student at BYU-I.
                </h1>
                <span class="coding-text" id="h1-end">&lt;/h1&gt;</span>
                <p>Welcome to my homepage | Scroll to see my more about me</p>
            </div>
        </section>

        <section id="aboutMe">
            <h2>
                <span class="coding-text" id="h2-start">&lt;h2&gt;</span>
                About Me
                <span class="coding-text" id="h2-end">&lt;/h2&gt;</span>
            </h2>

            <div class="aboutMeContainer">
                <h3 class="aboutMeHeader">Welcome to my homepage for CS 313 - Web Engineering II. </h3>
                <p>
                    I began my journey as a developer the winter of 2017. I had always been interested in “computer stuff”
                but never had the time or opportunity to learn it. That led me to a huge decision when it came to choose
                a degree for college. I originally started our studying software development but quickly realized I enjoyed 
                creating web pages.
                </p>

                <p>
                    I am a software engineer for a small contracting company in MD. We are preparing to move to Colorado in 
                    a few months and could not be more excited. I have been married to my wonderful wife for almost 4 years
                    and we have the most adorable (I am definitely biased) son on earth!
                </p>

                <hr>
                <section id="family-photos">
            <h2>
                <span class="coding-text" id="h2-start">&lt;h2&gt;</span>
                Here are some family photos
                <span class="coding-text" id="h2-end">&lt;/h2&gt;</span>
            </h2>
            

            <div id="photo-grid">
                <div class="photo-tile">
                    <img src="images/Danny.jpg" alt="My Son Danny">
                </div>

                <div class="photo-tile">
                    <img src="images/Jake-RZR.jpg" alt="Myself in a RZR">
                </div>

                <div class="photo-tile">
                    <img src="images/Jessi-Danny.jpg" alt="My Wife and Son">
                </div>

                <div class="photo-tile">
                    <img src="images/Family.jpg" alt="Our Family">
                </div>

            </div>
        </section>
    </main>

    <footer>
        <?php
        echo "<p class='date'>Today is " . date("Y/m/d") . "</p>" . "<br>"; 
        ?>
    </footer>
</body>

</html>