<?php
class ProjectHandler{
    public function projectShow($id, $title, $description, $skills, $image) {
        $projectProperty = new Project($id, $title, $description, $skills, $image);
        echo '<div class="projectObject">';
        echo '<div class="featuredBlock">';
        echo '<div class="blockText">';
        // Display title and description
        echo '<h4>' . $projectProperty->getTitle() . '</h4>';
        echo '<p>' . $projectProperty->getDescription() . '</p>';
        // Edit button with project ID
        echo '<button onclick="location.href=\'editproject.php?id=' . $projectProperty->getId() . '\'">Edit</button>';
        echo '</div>'; // Close blockText
        echo '<div class="blockSkills">';
        echo '<div class="skillBox">';
        echo '<h3>Skills used:</h3>';
        echo '<hr>';
        echo '<div class="skillsField">';

        // Display skills
        foreach ($projectProperty->getSkills() as $skill) {
            echo '<div class="skill">' . $skill . '</div>';
        }

        echo '</div>'; // Close skillsField
        echo '</div>'; // Close skillBox
        echo '</div>'; // Close blockSkills
        echo '</div>'; // Close featuredBlock
        echo '<div class="homeImage">';
        echo '<img src="' . $projectProperty->getImage() . '" alt="Screenshot of ' . $projectProperty->getTitle() . '">';
        echo '</div>'; // Close homeImage
        echo '</div>'; // Close projectObject
        echo '<hr class="projectBreak">';
    }
}
