<?php include 'includes/head.php'; ?>

        <section class="background background-extra"> 
            <?php include 'includes/header.php'; ?>  
            <div class="begin absolute">      
                <h1><?php echo $navbarText3; ?></h1>
            </div>       
        </section>
              
		<section id="projectsPage" class="wrapper title-gold white">
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
                            <p><?php echo $projectsPageText5; ?></p>
                        </span>                            
                        <a href="personal-website.php"></a>
                    </figure>
                </div> 
                <div>
                    <figure class="galery">
                        <picture>
                            <img src="images/projects/ditalent.jpg" alt="<?php echo $projectsDitalent; ?>">
                        </picture>    
                        <span class="flex description">
                            <h3>DiTalent</h3> 
                            <p><?php echo $projectsPageText4; ?></p>
                        </span>     
                        <a href="ditalent.php"></a>
                    </figure> 
                </div>   
                <div>
                    <figure class="galery">
                        <picture>
                            <img src="images/projects/skillsdigital.jpg" alt="<?php echo $projectsSkillsdigital; ?>">
                        </picture>    
                        <span class="flex description">
                            <h3>Skillsdigital</h3> 
                            <p><?php echo $projectsPageText3; ?></p>
                        </span>     
                        <a href="skillsdigital.php"></a>
                    </figure> 
                </div>              
            </div>             
        </section>

<?php include 'includes/footer.php'; ?>