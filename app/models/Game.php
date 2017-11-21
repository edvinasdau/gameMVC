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
    return $this->db->select ("SELECT username, max(result) as max FROM results GROUP BY username ORDER BY max DESC LIMIT :limit",
            ['limit' => $count]);



}

public function getTopPlayers(int $count): array
{
        // TODO: Implement getTopPlayers() method.
    return $this->db->select ("SELECT username, count(*) as most FROM stats GROUP BY username ORDER BY most DESC LIMIT :count",["count" => $count]);
}


public function storeResult(string $username, string $result, string $ip) : int
{
    return $this->db->insert("INSERT INTO stats (username, result, ip) VALUES (:username, :result, :ip)",
       ["username" => $username, "result" => $result, "ip" => $ip]);
}

}