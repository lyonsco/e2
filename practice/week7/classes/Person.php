<?php

class Person 
{
    # Properties
    public $person = [];
    public string $firstName;

    public string $lastName;

    public int $age;

    // public function __construct(string $firstName, string $lastName, int $age) {
    //     $this->firstName = $firstName;
    //     $this->lastName = $lastName;
    //     $this->age = $age;
    // }

    # Methods
    public function __construct(string $jsonSource)
    {
        # Load the JSON string of data
        $json = file_get_contents('people.json');
        
        # Convert the JSON string into an array
        $this->person= json_decode($json, true);
        var_dump($person);
    }

    public function getFullName() {
        return $this->firstName . $this->lastName;
    }

    public function getClassification() {
        
    }
    
}