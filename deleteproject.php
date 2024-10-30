<?php
require_once 'project.class.php';
session_start();

// Check if projectID is passed
if (isset($_POST['projectID'])) {
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

    // Redirect to a page (e.g., projects list) or show a success message
    header("Location: projects.php"); // Replace with the appropriate page
    exit();
} else {
    echo "Project ID is missing.";
    exit();
}

