<?php
    include 'models/Database/Database.php';
    include 'models/Project.php';
    include 'models/Technology.php';
    include_once 'includes/Views/htmlhead.php';
    include_once 'includes/Views/pageloader.php';
    include_once 'includes/Views/header.php';

    $db = Database::getDb();
    $projs = new Project();
    $listprojects= $projs->list_project($db);
    $tech = new Technology();

?>
<main id="projectpage">
    <h1>Projects</h1>
    <div id="gallery">
        <div id="gallery-header">
            <span>
                <input type="radio" class="gallery-links" id="filter-all" name="filter" checked/>
                <label for="filter-all">ALL</label>
            </span>
            <span>
                <input type="radio" class="gallery-links" id="filter-php" name="filter"/>
                <label for="filter-php">PHP</label>
            </span>
            <span>
                <input type="radio" class="gallery-links" id="filter-javascript" name="filter"/>
                <label for="filter-javascript">JavaScript</label>
            </span>
            <span>
                <input type="radio" class="gallery-links" id="filter-css3" name="filter"/>
                <label for="filter-css3">CSS3</label>
            </span>
            <span>
                <input type="radio" class="gallery-links" id="filter-mern" name="filter"/>
                <label for="filter-mern">MERN</label>
            </span>
            <span>
                <input type="radio" class="gallery-links" id="filter-asp" name="filter"/>
                <label for="filter-asp">ASP.Net</label>
            </span>

        </div>
        <div id="gallery-content">
            <div id="gallery-content-center">
                <?php
                    foreach ($listprojects as $list_proj){
                        $listtech = $tech->list_tech_proj($db, $list_proj->id);
                        print "<div data-toggle=\"modal\" data-target=\"#Modal_".$list_proj->id."\" class=\"project-list ALL";
                              foreach ($listtech as $technology){
                                  print " ".$technology->name;
                              }
                         print  "\"><div class=\"project-img-cont\"><img src=\"";
                                if($list_proj->main_img_path === null){
                                    print $list_proj->img_path;
                                }else{
                                    print $list_proj->main_img_path;
                                };
                          print "\" alt=\"$list_proj->title\"/>
                            </div>
                            <div class=\"project-details-cont\">
                                <div>Click for more Details</div>
                                <div>$list_proj->title</div>
                                <div>$list_proj->date</div>
                            </div>
                        </div>
                        
                        ";
                    }
                ?>
            </div>
        </div>
    </div>

</main>

<?php
    foreach ($listprojects as $list_proj){
        $listtech = $tech->list_tech_proj($db, $list_proj->id);
     print
     "<div class=\"modal fade\" id=\"Modal_$list_proj->id\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"ModalLabel1\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h2 class=\"modal-title\" id=\"ModalLabel1\">$list_proj->title</h2>                   
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"modal-img\">
                            <img src=\"$list_proj->img_path\" alt=\"$list_proj->title\"/>
                        </div>
                        <div class=\"roles\">"; if ($list_proj->user_role) {print "Role: ".$list_proj->user_role;} print"</div>
                        <div class=\"modal-cont\">
                            <div>$list_proj->description</div>
                            <div>
                                <h3>Technologies/Languages</h3>
                                <ul>"; ?>
                                <?php
                                    foreach ($listtech as $technology){
                                        print "<li>$technology->name</li>";
                                    }
                                ?>
                                <?php
                                print "</ul>
                            </div>
                        </div>      
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                        <a href=\""; ?>
                        <?php
                            if( $list_proj->url_path == null){
                                print "#\"";
                            }else{
                                print $list_proj->url_path."\" target=\"_blank\"";
                            }
                        ?>
                        <?php
                        print ">$list_proj->url_description</a>
                    </div>
                </div>
            </div>
        </div>";
    }

?>

<?php include_once 'includes/Views/footer.php'?>


