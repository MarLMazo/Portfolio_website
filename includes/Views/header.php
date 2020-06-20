<header id="header-cont">
    <div class="header-img-cont">
        <a href="./" class="transition">
            <img src="http://wordpress.mdmazo.com/wp-content/uploads/2020/06/mylogo-1-e1591827176437.png" alt="portfolio logo"/>
        </a>
    </div>
    <nav class="header-menu-cont">
        <ul>
            <!-- Adding Class of ACTIVE if its in the current page           -->
            <li><a href="./" class="transition <?php if($currentPage  == 'index') {echo 'active';}?>" >Home</a></li>
            <li><a href="about.php" class="transition <?php if($currentPage  == 'about') {echo 'active';}?>">About</a></li>
            <li><a href="project.php" class="transition <?php if($currentPage  == 'project') {echo 'active';}?>">Project</a></li>
            <li><a href="contact.php" class="transition <?php if($currentPage  == 'contact') {echo 'active';}?>">Contact</a></li>
        </ul>
    </nav>
    <div class="header-btn-cont">
        <button id="header-btn" ><i class="fas fa-arrow"></i></button>
    </div>
</header>