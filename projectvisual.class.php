<?php
class ProjectPrinter {
    public function projectShow($id, $title, $description, $skills, $image) {
        // HTML content using heredoc syntax
        echo <<<HTML
        <div class="projectObject">
            <div class="featuredBlock">
                <div class="blockText">
                    <h4>$title</h4>
                    <p>$description</p>
                    <button class="hiddenButton hiddenEdit" onclick="location.href='editproject.php?id=$id'">Edit</button>
                </div> <!-- Close blockText -->
                
                <div class="blockSkills">
                    <div class="skillBox">
                        <h3>Skills used:</h3>
                        <hr>
                        <div class="skillsField">
HTML;

        // Display each skill
        foreach ($skills as $skill) {
            echo "<div class=\"skill\">$skill</div>";
        }

        // Resume the HTML with heredoc syntax
        echo <<<HTML
                        </div> <!-- Close skillsField -->
                    </div> <!-- Close skillBox -->
                </div> <!-- Close blockSkills -->
            </div> <!-- Close featuredBlock -->
            
            <div class="homeImage">
                <img src="$image" alt="Screenshot of $title">
            </div> <!-- Close homeImage -->
        </div> <!-- Close projectObject -->
        
        <hr class="projectBreak">
HTML;
    }
}
