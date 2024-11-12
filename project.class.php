<?php
class Project{
    // Class with project variables, and getters and setters.
    private $id;
    private $title;
    private $description;
    private $skills;
    private $image;

    public function __construct($id, $title, $description, $skills, $image){
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->skills = $skills;
        $this->image = $image;
    }
    public function setTitle($title) {
        $this->title = $title;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setSkills($skills) {
        $this->skills = $skills;
    }
    public function setImage($image) {
        $this->image = $image;
    }
    public function getId(){
        return $this->id;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getDescription(){
        return $this->description;
    }
    public function getSkills() {
        return $this->skills;
    }
    public function getImage(){
        return $this->image;
    }
}