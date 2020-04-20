<?php


class Teacher extends Person
{
    /**
     * @var array
     */
    private array $skills;

    /**
     * Teacher constructor.
     * @param array $kills
     * @param string $name
     * @param string $firstName
     * @param int $age
     * @param Reachable|null $address
     * @param string $sex
     */
    public function __construct(string $name, string $firstName,
        int $age ,Reachable $address = null, string $sex = "F", array $kills = [])
    {
        parent::__construct($name, $firstName, $age, $address, $sex);
        $this->skills = $kills;
    }

    /**
     * @return array
     */
    public function getSkills(): array
    {
        return $this->skills;
    }

    /**
     * @param array $skills
     * @return Teacher
     */
    public function setSkills(array $skills): Teacher
    {
        $this->skills = $skills;

        return $this;
    }

    public function addSkill(string $skillName): Teacher{
        array_push($this->skills, $skillName);
        return  $this;
    }

    public function isSkilled($skillName): bool {
        return in_array($skillName, $this->skills);
    }
}