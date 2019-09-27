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
        <a href="index.php">About Me</a>
        <a href="#" id="navEnd">Assignments</a>
    </nav>

    <main>

    <section id="welcome-section">
            <div id="hero-container">
                <span class="coding-text" id="h1-start">&lt;h1&gt;</span>
                <h1>Scroll <br>
                    To <span id="jake">See</span>, <br>
                    My Projects.
                </h1>
                <span class="coding-text" id="h1-end">&lt;/h1&gt;</span>
                <p>From HTML, CSS, and JS to PHP and MYSQL, see what I can do!</p>
            </div>
        </section>

        <section id="projects">
            <h2>
                <span class="coding-text" id="h2-start">&lt;h2&gt;</span>
                These are some of my class projects
                <span class="coding-text" id="h2-end">&lt;/h2&gt;</span>
            </h2>
            <hr>

            <div id="projects-grid">

                <div class="project-tile">
                    <a href=""
                        target="_blank">
                        <img src="images/hiclipart.com-id_maviw.png" alt="Coming Soon Stamp">
                        <h3 class="projectDescription">
                            <span class="code">&lt;</span>
                            Shopping Cart
                            <span class="code">/&gt;</span>
                        </h3>
                    </a>
                </div>

                <div class="project-tile">
                    <a href=""
                        target="_blank">
                        <img src="images/hiclipart.com-id_maviw.png" alt="Coming Soon Stamp">
                        <h3 class="projectDescription">
                            <span class="code">&lt;</span>
                            Coming Soon
                            <span class="code">/&gt;</span>
                        </h3>
                    </a>
                </div>

                <div class="project-tile">
                    <a href=""
                        target="_blank">
                        <img src="images/hiclipart.com-id_maviw.png" alt="Coming Soon Stamp">
                        <h3 class="projectDescription">
                            <span class="code">&lt;</span>
                            Coming Soon
                            <span class="code">/&gt;</span>
                        </h3>
                    </a>
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