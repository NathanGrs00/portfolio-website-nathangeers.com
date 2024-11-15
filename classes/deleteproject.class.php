<?php
require_once 'project.class.php';
require_once 'errorhandler.class.php';

class ProjectRemover{
    function __construct(){
        $errorMessage = new ErrorHandler();
        // Check if projectID is set.
        if (!isset($_POST['projectID'])) {
            $errorMessage->showError("Project ID is missing.");
            exit();
        }
    }

    public function deleteProject(){
        $projectID = $_POST['projectID'];

        // Iterate over the projects and remove the project with the matching ID
        foreach ($_SESSION['projects'] as $key => $project) {
            if ($project->getId() == $projectID) {
                unset($_SESSION['projects'][$key]);
                // Re-index the array to keep it sequential
                $_SESSION['projects'] = array_values($_SESSION['projects']);
                break;
            }
        }
    }
}