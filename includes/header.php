            <header>  
                <nav>
                    <div class="nav">
                        <div class="logo">
                            <a href="index.php">
                                <img src="images/magda-pimentel-logotipo.png" alt="<?php echo $navbarLogo; ?>">   
                            </a>     
                        </div>

                        <div class="bars" title="Menu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>    

                    <div class="pages">
                        <ul>
                            <li>
                                <a href="index.php#about"><?php echo $navbarText1; ?></a>
                            </li>
                            <li>
                                <a href="index.php#skills"><?php echo $navbarText2; ?></a>
                            </li>
                            <li>
                                <a href="index.php#projects"><?php echo $navbarText3; ?></a>
                            </li>
                            <li>
                                <a href="index.php#contact"><?php echo $navbarText4; ?></a>
                            </li>

                            <span> 
                                <li>
                                    <a class="<?=$_SESSION['lang'] === 'pt' ? 'active' : '';?>" href="?lang=pt">PT</a> 
                                </li>
                                <li>|</li>  
                                <li>
                                    <a class="<?=$_SESSION['lang'] === 'en' ? 'active' : '';?>" href="?lang=en">EN</a>
                                </li>    
                            </span>   
                        </ul>  
                    </div>
                </nav> 
            </header>