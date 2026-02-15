<?php
include('data.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing page</title>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
<style>
.error{color:red;font-size:13px;}
.success{color:green;margin-bottom:10px;}
.db-error{color:red;margin-bottom:10px;}
</style>
</head>
<body>
    <header class="navbar">
        <div class="container">
            <ul class="nav">
                <li><a href="#about">Features</a></li>
                <li><a href="#feature">Units</a></li>
                <li><a href="#location">Location</a></li>
                <li><a href="#contact">Contact</a></li>

                <li class="btn-wrap">
                <a href="" class="btn1">Download Brochure</a>
                <a href="#contact" class="btn2">Register your interest</a>

                <!-- <button class="btn1"><a href="">Download</a></button>
                <button class="btn1"><a href="">Register your interest</a></button> -->
                </li>
            </ul>
        </div>
    </header>
    <section class="main-section">
        <div class="container hero-content">
            <!-- <h1 class="">Discover Living in <br><span class="highlight">Sensual Purity</span></h1>
            <p class="">Premium Real Estate by Binghatti</p> -->
        </div>
    </section>
    <section id="about" class="section">
        <div class="container about-flex">
            <div class="about-image">
                <img src="images/Frame 48.jpg" alt="Building">
            </div>

            <div class="about-text">
                <h1>About the Project</h1>
                <!-- <p>This project is inspired by automotive design. We blend luxury, comfort, and state-of-the-art
                    architecture into one experience.</p> -->
            </div>
            <div class="para">
                <p><b>Introducing Mercedes Benz Places By Binghatti:</b><br><br>A gateway to experience new grounds for extraordinary moments.A combination of intelligence and emotion, glamour and simplicity, and historic legacies aspiring to a future of infintes possibilties.</p> 
            </div>
        </div>
    </section>


    <section id="feature" class="features-section">
            <h2 class="features-title">Exclusive features</h2>
            <!-- Feature 1 -->
            <div class="feature-row">

                <div class="feature-text">
                    <h4>UNOBSTRUCTED<br>VIEW OF<br>BURJ KHALIFA</h4>
                    <p>
                        From the comfort of your own sanctuary,
                        witness the awe-inspiring architecture of
                        the world’s tallest building.
                    </p>
                </div>

                <div class="feature-image">
                    <img src="images/Frame 63.jpg" alt="">
                </div>

            </div>

            <!-- Feature 2 -->
            <div class="feature-row1 reverse">
                <div class="feature-image overlay-wrap">
                    <div class=""></div>
                    <img src="images/Frame 62.jpg" alt="" width="550px">
                    <div class="image-overlay-text">
                        <h4>REVOLUTIONARY<br>CRAFTSMANSHIP</h4>

                        <div class="image-overlay-text1">
                        <p>
                            The hyper-tower’s supreme style is brought
                            to life by the amalgamation of multiple
                            design languages.
                        </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Feature 3 -->
            <div class="feature-row">

                <div class="feature-text">
                    <h4>Private<br>Pool</h4>

                    <p>
                        From the comfort of your own sanctuary,
                        witness the awe-inspiring architecture of
                        the world’s tallest building.
                    </p>
                </div>

                <div class="feature-image">
                    <img src="images/Frame 61.jpg" alt="">
                </div>
            </div>
            <!-- feature 4 -->
             <div class="feature-row1 reverse">
                <div class="feature-image overlay-wrap">
                    <img src="images/Frame 64.jpg" alt="" width="550px">
                    <div class="image-overlay-text">
                        <h4>REVOLUTIONARY<br>CRAFTSMANSHIP</h4>
                        
                        <div class="image-overlay-text1">
                        <p>
                            The hyper-tower’s supreme style is brought
                            to life by the amalgamation of multiple
                            design languages.
                        </p>
                        </div>
                     
                    </div>
                </div>
            </div>

            <!-- feature 5 -->
             <div class="feature5">
                <img src="images/Layouts.jpg" alt=""></img>
             </div>
    </section>

    <section id="location" class="location-section">
             <div class="feature">
                <img src="images/Frame 27.jpg" alt=""></img>
             </div>
    </section>
    <section class="location-section">
            <div class="feature">
                <img src="images/Gallery.jpg" alt=""></img>
                <h2 class="image-text">Gallery</h2>
             </div>
    </section>

    <!-- register -->
     <section id="contact" class="section-register">
        <div class="left">
            <h2 class="register-title">Register your Interest</h2>

            <?php if($success){ ?>
                <div class="success"><?php echo $success; ?></div>
            <?php } ?>

            <?php if($dbError){ ?>
                <div class="db-error"><?php echo $dbError; ?></div>
            <?php } ?>


            <form method="post" class="form">
                <div class="form-row">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Name" value="<?php echo htmlspecialchars($name); ?>"required>
                         <div class="error"><?php echo $errors['name'] ?? ""; ?></div>
                    </div>

                    <div class="form-group">
                        <input type="email" name="email" placeholder="Email" value="<?php echo htmlspecialchars($email); ?>">
                         <div class="error"><?php echo $errors['email'] ?? ""; ?></div>
                    </div>
                </div>

                <div class="form-group full">
                    <input type="text" name="comment" placeholder="Comment" value="<?php echo htmlspecialchars($comment); ?>">
                     <div class="error"><?php echo $errors['comment'] ?? ""; ?></div>
                </div>
                 <!-- <button type="submit" class="submit-btn">Submit</button> -->
                 <input type="submit" class="submit-btn" name="submit" value="Submit">
            </form>
        </div>
        <div class="address">
            <h2>
                C Ghoaim 2023. All Right Reserved.<br>Privacy Policy <br>Terms Condition<br> Legal Disclaimers
            </h2>
        </div>
     </section>
</body>
</html>
