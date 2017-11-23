<?php

class User {

    private $db;

    function __construct(Database $db){
        $this->db = $db;
    }

    // For login and registration purposes
    public function getUserByUsername(string $username) {
        return $this->db->select("SELECT * FROM players WHERE username = :username",
            ["username" => $username]
        );
    }

    // Get user by ID
    public function getUser(string $id) :array {
        return $this->db->select("SELECT * FROM players WHERE id = :id",
            ["id" => $id]
        );
    }

    // Get all users
    public function getAllUsers() : array {
        return $this->db->select("SELECT id, username FROM players");
    }

    // Remove user by ID
    public function removeUser(int $id) {
        return $this->db->remove("DELETE FROM players WHERE id = :id",
            ["id" => $id]
        );
    }

    // Add user to database
    public function addUser(array $userData) : int {
        return $this->db->insert("INSERT into players (username, password) VALUES (:username, :password)",
            $userData
        );
    }

}