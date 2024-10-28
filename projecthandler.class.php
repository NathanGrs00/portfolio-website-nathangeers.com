<?php
class ProjectHandler{
    public function projectShow($title, $description, $skills){
        $projectProperty = new Project($title, $description, $skills);
        echo '<div class="projectObject">';
                echo '<div class="featuredBlock">';
                    echo '<div class="blockText">';
                        echo $projectProperty->getTitle();
                        echo $projectProperty->getDescription();
                        echo '<button>Edit</button>';
                    echo '</div>';
                    echo '<div class="blockSkills">';
                        echo '<div class="skillBox">';
                            echo '<h3>Skills used:</h3>';
                            echo '<hr>';
                                echo '<div class="skillsField">';
                                    foreach ($projectProperty->getSkills() as $skill) {
                                        echo '<div class="skill">' . htmlspecialchars($skill) . '</div>';
                                    }
                                echo '</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
                echo '<div class="homeImage">';
                    echo '<img src="img/Project1Website.png" alt="Screenshot of Portfolio website.">';
                echo '</div>';
            echo '</div>';
        echo '<hr class="projectBreak">';
    }
}