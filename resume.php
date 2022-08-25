<?php include 'includes/head.php'; ?>        

        <section id="resume" class="background wrapper"> 
            <div class="main">
                <img src="images/magdapimentel.jpg" alt="<?php echo $resumeImage; ?>">
                <h1><?php echo $resumeHeading1; ?></h1>
                <h2><?php echo $resumeHeading2; ?></h2>
                <p><?php echo $resumeHeading3; ?></p>
                <div class="icons">
                    <a href="#">
                        <i class="far fa-envelope" title="Email"></i>
                    </a>
                    <a href="#">
                        <i class="fas fa-globe" title="Website"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-skype" title="Skype"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-facebook-f" title="Facebook"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-twitter" title="Twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-linkedin-in" title="LinkedIn"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-instagram" title="Instagram"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-pinterest-p" title="Pinterest"></i>
                    </a>    
                    <a href="#">
                        <i class="fab fa-github" title="GitHub"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-codepen" title="CodePen"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-behance" title="Behance"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-medium-m" title="Medium"></i>
                    </a>
                </div>    
            </div>

            <div class="contents">
                <div class="flex nav">
                    <div class="item one" data-type="skills">
                        <h3 class="active"><?php echo $resumeNavbar1; ?></h3>
                        <div class="line visible"></div>
                    </div>
                    <div class="item two" data-type="experience">
                        <h3><?php echo $resumeNavbar2; ?></h3>
                        <div class="line"></div>
                    </div>
                    <div class="item three" data-type="education">
                        <h3><?php echo $resumeNavbar3; ?></h3>
                        <div class="line"></div>
                    </div>
                </div>
                <div>
                    <div class="topic skills first" style="display: block;">
                        <?php include 'includes/resume/skills.php'; ?>                     
                    </div>

                    <div class="topic paragraph experience second">
                        <?php include 'includes/resume/experience.php'; ?>
                    </div> 

                    <div class="topic paragraph education third">
                        <?php include 'includes/resume/education.php'; ?>                      
                    </div>                    
                </div>    
            </div>
        </section>            

<?php include 'includes/footer.php'; ?>