<?php include 'includes/head.php'; ?>       

        <!-- HOME -->
    	<section id="home" class="background"> 
            <?php include 'includes/header.php'; ?>
            <div class="begin">
                <div class="absolute animation">           
                    <h1>I make your <span id="area">content</span><span id="cursor"></span> stand out online</h1>
                </div>
                <div class="scroll-down">
                    <i class="fas fa-chevron-down down" data="about" title="Scroll Down"></i>
                </div>
            </div>    
        </section>

        <!-- ABOUT -->
        <section id="about" class="wrapper title-gold white"> 
            <div>
            	<div class="title">
                	<h2><?php echo $aboutTitle; ?></h2>
                </div>	
                <div>
                    <p><?php echo $aboutText; ?></p>
                    <div class="btn">
                        <a href="resume.php" target="_blank"><?php echo $aboutButton; ?></a>
                    </div>    
                </div>
            </div>           
        </section>
        
        <!-- SKILLS -->
        <section id="skills" class="wrapper title-white gold">  
        	<div class="title">
            	<h2><?php echo $skillsTitle; ?></h2>
            </div>	
            <div class="flex">
                <div>
                    <i class="fas fa-chart-line"></i>
                    <h3><?php echo $skillsSubTitle1; ?></h3>
                    <p><?php echo $skillsText1; ?></p>
                </div>
                <div>
                    <i class="far fa-images"></i>
                    <h3><?php echo $skillsSubTitle2; ?></h3>
                    <p><?php echo $skillsText2; ?></p>
                </div>
                <div>
                    <i class="fas fa-laptop-code"></i>
                    <h3><?php echo $skillsSubTitle3; ?></h3>
                    <p><?php echo $skillsText3; ?></p>
                </div>
            </div>          
        </section>

        <!-- PROJECTS -->
        <section id="projects" class="wrapper title-gold white">
        	<div class="title">
            	<h2><?php echo $projectsTitle; ?></h2>
            </div>	
            <div class="flex box">
                <div>
                    <figure class="galery">
                        <picture>
                            <img src="images/projects/magdapimentel.jpg" alt="<?php echo $projectsMagdapimentel; ?>">
                        </picture>    
                        <span class="flex description">
                            <h3>Magda Pimentel</h3>    
                            <p><?php echo $projectsText1; ?></p>
                        </span>                            
                        <a href="personal-website.php"></a>
                    </figure>
                </div>  
                <div>
                    <figure class="galery">
                        <picture>
                            <img src="images/projects/skillsdigital.jpg" alt="<?php echo $projectsSkillsdigital; ?>">
                        </picture>    
                        <span class="flex description">
                            <h3>Skillsdigital</h3> 
                            <p><?php echo $projectsText2; ?></p>
                        </span>     
                        <a href="skillsdigital.php"></a>
                    </figure> 
                </div>   
            </div>  
            <div class="btn">
                <a href="projects.php"><?php echo $projectsButton; ?></a>
            </div>  
        </section>

        <!-- CONTACTS -->
        <section id="contact" class="wrapper title-white gold"> 
        	<div class="title">
            	<h2><?php echo $contactsTitle; ?></h2> 
            </div>	
            <form method="post" action="includes/form.php" class="flex">
                <input type="text" name="name" placeholder="<?php echo $contactsText1; ?>" aria-label="<?php echo $contactsText1; ?>" required>
                <input type="email" name="email" placeholder="<?php echo $contactsText2; ?>" aria-label="<?php echo $contactsText2; ?>" required>
                <input type="text" name="subject" placeholder="<?php echo $contactsText3; ?>" aria-label="<?php echo $contactsText3; ?>" required>
                <textarea name="message" placeholder="<?php echo $contactsText4; ?>" aria-label="<?php echo $contactsText4; ?>" required></textarea>
                <div class="send">
                    <button type="submit" name="send"><?php echo $contactsText5; ?></button>
                </div>
            </form>         
        </section>  

        <!-- POPUP FORM -->
        <section class="popup-form" style="<?php echo isset($_SESSION['form_success']) ? 'display: block' : ''; ?>">
            <div class="popup-content gold"> 
                <div class="form-close">
                    <i class="fas fa-times" title="<?php echo $popupIcon; ?>"></i>
                </div>
                <div class="text">
                    <?php if(isset($_SESSION['form_success']) && $_SESSION['form_success'] === true) : ?>
                    <p><?php echo $popupText1; ?></p> 
                    <?php elseif(isset($_SESSION['form_success']) && $_SESSION['form_success'] === false) : ?>
                    <p><?php echo $popupText2; ?></p>     
                    <?php endif; ?>
                </div>          
            </div>  
        </section> 

<?php include 'includes/footer.php'; ?>

<?php 
    if(isset($_SESSION['form_success'])) {
        unset($_SESSION['form_success']); 
    }
?>