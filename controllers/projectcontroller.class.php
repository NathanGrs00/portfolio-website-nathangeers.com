<?php
require_once 'classes/projectvisual.class.php';
require_once 'classes/project.class.php';
require_once 'classes/imageupload.class.php';
class ProjectController{
    public function newProjectList(){
        //Makes an array and hard-codes projects
        $_SESSION['projects'] = array();
        $_SESSION['projects'][] = new Project("1", "Portfolio Website", "In the first semester of my software development study, I made the portfolio website you are currently viewing. It has features to contact the owner and view, add or edit projects", array('HTML','CSS','JavaScript','PHP'), "img/Project1Website.png");
        $_SESSION['projects'][] = new Project("2", "Gym Website", "I made a website for a local gym, they needed a way for new members to register through a form and for them to see the amount of members that have applied.", array('HTML','CSS','PHP'), "img/Project2Gym.png");
    }
    public function showAllProjects(){
        // For each project, call a function in projectvisual.class.php that passes the project getters as parameters.
        $showProjects = new ProjectPrinter();
        foreach ($_SESSION['projects'] as $project){
            $showProjects->projectShow($project->getId(), $project->getTitle(), $project->getDescription(), $project->getSkills(), $project->getImage());
        }
    }
    public function addProject(){
        $imageUploader = new ImageController();
        //ID is the current amount of projects + 1
        $id = (count($_SESSION['projects']) + 1);
        $destinationPath = $imageUploader->ImageUploader();

        //Makes a new project and adds it to the project array.
        $singleProject = new Project($id, $_POST["title"], $_POST["description"], $_POST["checks"], $destinationPath);
        $_SESSION['projects'][] = $singleProject;
        header('Location: projects.php');
    }
}
