<!DOCTYPE html>
<html lang="en">

<head>
    <!------METADATA---------->
    <meta charset="UTF-8">
    <title>Logan Reinke Portfolio</title>
    <meta name="description" content="Short description goes here">
    <meta name="keywords" content="web design, web development, graphic design, software developer, software, database, java,
    HTML CSS, javascript, front end back end">
    <meta name="viewport" content="width=device-width, initial-scale =1.0">
    
    <!------STYLESHEETS---------->
    <link rel="icon" href="Resources/images/logo.jpg">
    <link rel="stylesheet" href="Resources/css/main.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <link rel="stylesheet" href="Resources/css/grid.css">
    <!--<link rel="stylesheet" href="Resources/css/normalize.css">-->
    <link rel="stylesheet" href="Resources/css/queries.css">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
    

    <!------SCRIPTS---------->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="Resources/js/main.js"></script>
</head>

<body>
    <main>
        <header>
            <nav class="top-nav">
                <ul class="nav-list">
                    <li>
                        <a href="index.html" class="nav-link">Home</a>
                    </li>
                    <li>
                        <a href="#about" class="nav-link">About</a>
                    </li>
                    <li>
                        <a href="#skills" class="nav-link">Skills</a>
                    </li>
                    <li>
                        <a href="#portfolio" class="nav-link">Portfolio</a>
                    </li>
                    <li>
                        <a href="#contact" class="nav-link">Contact</a>
                    </li>
                </ul>
            </nav>
            <div class="landing-text">
                <h1>Logan Reinke</h1>
                <h6>Web Developer | Graphic Designer | Software Developer</h6>
            </div>
        </header>

        <section class="about" id="about">
            <div class="row">
                <div class="col span-1-of-2">
                    <img src="Resources/images/profile.JPG">
                </div>
                <div class ="col span-1-of-2">
                    <div class = "about-text">
                        <h2>About Me</h2>
                        <hr>
                        <p class="about">Former English teacher&mdash;and current nerd&mdash;who decided to turn his love for puzzles into a career. I've always had
                            a knack for, and interest in, solving problems, and what program works perfectly on the first compile? I believe that my background in 
                            linguistics and language allows me to adapt to machine language just as well. I believe programming is more an art than it is a science,
                            and I take pride in writing concise, well-documented code. Take a look at some of my work and I'm sure
                            you'll agree.
                        </p>
                        <div class="row">
                            <ul class="social-links">
                                <li><a class="social" id="facebook" href="https://www.facebook.com/logan.reinke.3"><ion-icon name="logo-facebook"></ion-icon></a></li>
                                <li><a class="social" id="github" href="https://github.com/Logz11"><ion-icon id="github"name="logo-github"></ion-icon></a></li>
                                <li><a class="social" id="linkedin" href="https://www.linkedin.com/in/logan-reinke/"><ion-icon name="logo-linkedin"></ion-icon></a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

        <section class="skills" id="skills">
            <div class="row">
                <h2>Skills</h2>
                <hr>
                <p class="short-desc">What I Can Do For You</p>
            </div>
            <div class="row">
                <div class="col span-1-of-3">
                    <div class="skill-icon-container">
                        <div id="diamond-border"></div>
                        <div id="diamond"></div>
                        <ion-icon name="code-slash"></ion-icon>
                    </div>
                    <h3>Front-End Development</h3>
                    <p class="skill-copy">With two years of experience writing HTML & CSS, and knowledge of JavaScript, JQuery, and PHP to make
                        them work, I can help you build the website you've always wanted.
                    </p>
                </div>
                <div class="col span-1-of-3">
                    <div class="skill-icon-container">
                        <div id="diamond-border"></div>
                        <div id="diamond"></ion-icon></div>
                        <ion-icon name="color-palette"></ion-icon>
                    </div>
                    <h3>Graphic Design</h3>
                    <p class="skill-copy graphic-design">Whether you want a logo done, some photos edited and retouched, or someone to build you a wireframe,
                        I've got your back.</p>
                </div>
                <div class="col span-1-of-3">
                    <div class="skill-icon-container">
                        <div id="diamond-border"></div>
                        <div id="diamond"></div>
                        <ion-icon name="cafe"></ion-icon>
                    </div>
                    <h3>Software Engineering</h3>
                    <p class="skill-copy">
                        From gradebook applications to video games, I've done a bit of everything with Java. While I'm no expert yet, I am proficient
                        with the javax.swing GUI package and SQL.
                    </p>
                </div>
            </div>
        </section>

        <section class="portfolio" id="portfolio">
            <div class="row">
                <h2>Portfolio</h2>
                <hr>
                <p class="short-desc">Check Out What I've Already Done</p>
            </div>
            <div class="portfolio-container">
                <div class="row">
                    <div class="col span-1-of-2">
                        <img class="portfolio-pic" src="Resources/images/Scarab pic.jpg">
                    </div>
                    <div class="col span-1-of-2">
                        <div class="portfolio-text odd">
                            <h5>Web Development</h5>
                            <h4>Scarab Website</h4>
                            <p class="project-desc">Scarab is the first web project I've designed and coded from start to finish.</p>
                            <a href="#">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-container">
                <div class="row">
                    <div class="col span-1-of-2">
                        <div class="portfolio-text even">
                            <h5>Graphic Design</h5>
                            <h4>Photo Manipulation & Print Designs</h4>
                            <p class="project-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis
                                aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <a href="#">View Details</a>
                        </div>
                    </div>
                    <div class="col span-1-of-2">
                        <img class="portfolio-pic" src="Resources/images/Telesto V3.5.jpg">
                    </div>
                </div>
            </div>
            <div class="portfolio-container">
                <div class="row">
                    <div class="col span-1-of-2">
                        <img class="portfolio-pic" src="Resources/images/chess.jpeg">
                    </div>
                    <div class="col span-1-of-2">
                        <div class="portfolio-text odd">
                            <h5>Software Development</h5>
                            <h4>Rock, Paper, Fireball</h4>
                            <p class="project-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis
                                aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <a href="#">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact" id="contact">
            <div class="contact-text">
                <!--<h2>Contact</h2>
                <hr>
                <p class="short-desc">Let's Get to Work</p>-->

                <?php
            if (isset($_REQUEST['email1'])) { //if "email" variable is filled out, send email
            
                $admin_email = "Logan.Reinke@outlook.com"; 

            
                $email = $_REQUEST['email1'];
                $name = $_REQUEST['name'];
                $subject = $_REQUEST['services']; 
                $message = $_REQUEST['message']; 
                        
                $body  = "From: " . $name . "\n"; 
                $body .= "Email: " . $email . "\n";
                $body .= "Message: " . $message;
            
                $headers = "From: " . $name . " <" . $email . "> \r\n";
                $headers .= "CC: " . $name . " <" . $email . ">";
                
                mail($admin_email, $subject, $body, $headers); 
                
                echo "<h2>Thank you for the email!</h2>";
                echo "<hr>";
                echo "<p class='short-desc'>I'll get back to you as soon as I can</p>";
                }
            
                else  { 
                    echo "<h2>There has been an error!</h2>";
                    echo "<hr>";
                    echo"<p class='short-desc'>So sorry about that! please try again later!</p>";
                }
            ?>

            </div>
            <div class="row">
                <form method="post" action="sendmail.php" class="contact-form" id="contact-form">
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="name">Name</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="name" id="name" placeholder="Your name" value="<?php echo $_REQUEST['name'] ?>" disabled>
                            <span>*</span>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="email1">Email</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="email" name="email1" id="emailAddress1" placeholder="Your email" value="<?php echo $_REQUEST['email1'] ?>" disabled>
                            <span>*</span>
                        </div>

                        <div class="row">
                        <div class="col span-1-of-3">
                            <label for="email2">Confirm Email</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="email" name="email2" id="emailAddress2" placeholder="Re-enter your email" value="<?php echo $_REQUEST['email1'] ?>" disabled>
                            <span>*</span>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="services">Services</label>
                        </div>
                        <div class="col span-2-of-3">
                            <select name="services" id="services" value="<?php echo $_REQUEST['services'] ?>" disabled>>
                                <option value="web-development">Web Development</option>
                                <option value="graphic-design">Graphic Design</option>
                                <option value="software-engineering">Software Engineering</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>What it do?</label>
                        </div>
                        <div class="col span-2-of-3">
                            <textarea name="message" disabled><?php echo $_REQUEST['message'] ?></textarea>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>&nbsp;</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="submit" name="submit" id="form-button" value="Send it!">
                        </div>
                
                    </div>
                
                </form>
            </div>
        </section>

        <footer>
            <div class="row">
                <p class="footer">&copy; 2020 Logan Reinke</p>
            </div>
        </footer>



    </main>
</body>

</html>