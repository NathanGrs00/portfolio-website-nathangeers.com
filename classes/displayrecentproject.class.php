<?php
    class ShowRecentProject{
        public function displayRecentProject(){
            // Get the last project (most recently added), end() gets the last one.
            $mostRecentProject = end($_SESSION['projects']);
            // getting the array elements in the html tags. The foreach loop loops through all skills and prints them.
            ?>
            <div class="sectionRecentProject">
                <div class="homeImage">
                    <img src="<?php echo $mostRecentProject->getImage(); ?>" alt="Screenshot of <?php echo $mostRecentProject->getTitle(); ?>.">
                </div>
                <div class="featuredBlock">
                    <div class="blockText">
                        <h4>Featured Project: <?php echo $mostRecentProject->getTitle(); ?></h4>
                        <p><?php echo $mostRecentProject->getDescription(); ?></p>
                        <button onclick="location.href='projects.php'">View More!</button>
                    </div>
                    <div class="blockSkills">
                        <div class="skillBox">
                            <h3>Skills used:</h3>
                            <hr>
                            <div class="skillsField">
                                <?php foreach ($mostRecentProject->getSkills() as $skill): ?>
                                    <div class="skill"><?php echo $skill; ?></div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
        }
    }
    ?>