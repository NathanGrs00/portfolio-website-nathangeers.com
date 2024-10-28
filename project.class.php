<?php

class Project{
    private $title;
    private $description;
    private $skills;

    public function __construct($title, $description, $skills){
        $this->title = $title;
        $this->description = $description;
        $this->skills = $skills;
    }
//    public function setTitle($title) {
//        $this->title = $title;
//    }
//
//    public function setDescription($description) {
//        $this->description = $description;
//    }
//
//    public function setSkills($skills) {
//        $this->skills = $skills;
//    }

    public function getTitle(){
        return "<h4>$this->title</h4>";
    }
    public function getDescription(){
        return "<p>$this->description</p>";
    }
    public function getSkills() {
        return $this->skills;
    }
}