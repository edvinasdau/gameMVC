<?php

class Game {

    private $db;

    function __construct(Database $db){
        $this->db = $db;
    }

    public function getAllGames(): array
    {
         return $this->db->select("SELECT * FROM stats");
    }

    public function getUserGames(string $username): array
    {
       return $this->db->select("SELECT * FROM stats WHERE username = :username", ["username" => $username]);
    }

    public function getTopWinners(int $count): array
    {
        // TODO: Implement getTopWinners() method.
        return $this->db->select ("SELECT result, username FROM stats ORDER BY result DESC LIMIT :count",["count" => $count]);

   

    }

    public function getTopPlayers(int $count): array
    {
        // TODO: Implement getTopPlayers() method.
        return $this->db->select ("SELECT username, count(*) as most FROM stats GROUP BY username ORDER BY most DESC LIMIT :count",["count" => $count]);
    }


        public function toDB(int $toDB)
    {
        return $this->db->insert ("INSERT INTO stats (username, result, ip)", ["username" => $username, "result" => $result, "ip" => $ip]);
    }

}