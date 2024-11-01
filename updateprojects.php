<?php
require_once 'project.class.php';
require_once 'errorhandler.class.php';
require_once 'imagecontroller.class.php';
session_start();

class ProjectUpdater{
    private $projectID;
    private $title;
    private $description;
    private $skills;
    private $imagePath = null;

    public function __construct($id, $title, $description, $skills){
        $this->projectID = $id;
        $this->title = $title;
        $this->description = $description;
        $this->skills = $skills;
    }
    public function checkImage(){
        if(!empty($_FILES['image']['name'])){
            $imageCheck = new ImageController();
            $this->imagePath = $imageCheck->ImageUploader();
        }
        $this->updateProject();
    }
    public function updateProject(){
        $errorMessage = new ErrorHandler();

        // Proceed only if no errors
        foreach ($_SESSION['projects'] as $project){
            if ($project->getId() == $this->projectID) {  // Find project by stored ID.
                // Update the project fields.
                $project->setTitle($this->title);
                $project->setDescription($this->description);
                $project->setSkills($this->skills);

                if ($this->imagePath){
                    $project->setImage($this->imagePath);  // Update the image if provided.
                }

                echo $errorMessage->showError("Project updated successfully!");
                break;
            }
        }
    }
}
$update = new ProjectUpdater($_POST['projectID'], $_POST['title'], $_POST['description'], $_POST['checks'], $_FILES['image']);
$update->checkImage();
