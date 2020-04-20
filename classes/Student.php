<?php


class Student extends Person
{

    private string $trainingCourse;

    /**
     * Student constructor.
     * @param string $trainingCourse
     */
    public function __construct(string $trainingCourse, string $name, string $firstName,
        int $age ,Reachable $address = null, string $sex = "F")
    {
        //Appel au constructeur du parent
        parent::__construct($name, $firstName, $age, $address, $sex);
        //Ajout des infos spécifiques à l'étudiant
        $this->trainingCourse = $trainingCourse;
    }


    /**
     * @return string
     */
    public function getTrainingCourse(): string
    {
        return $this->trainingCourse;
    }

    /**
     * @param string $trainingCourse
     * @return Student
     */
    public function setTrainingCourse(string $trainingCourse): Student
    {
        $this->trainingCourse = $trainingCourse;

        return $this;
    }

    public function getFullName(): string
    {
        return parent::getFullName(). " étudiant ". $this->trainingCourse;
    }

    public function canTeachMe(Teacher $teacher): bool {
        return $teacher->isSkilled($this->trainingCourse);
    }


}