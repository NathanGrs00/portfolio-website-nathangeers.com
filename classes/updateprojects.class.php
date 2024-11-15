<?php
require_once 'classes/project.class.php';
require_once 'classes/errorhandler.class.php';
require_once 'classes/imagecontroller.class.php';

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
    }
    public function updateProject(){
        $errorMessage = new ErrorHandler();

        foreach ($_SESSION['projects'] as $project){
            if ($project->getId() == $this->projectID) {  // Find project by stored ID.
                // Update the project fields.
                $project->setTitle($this->title);
                $project->setDescription($this->description);
                $project->setSkills($this->skills);

                // Update the image if provided.
                if ($this->imagePath){
                    $project->setImage($this->imagePath);
                }

                $errorMessage->showError("Project updated successfully!");
                break;
            }
        }
    }
}
