<?php

class Home extends Controller {

    public function index() {

        $data['title'] = "CA Dice Game";
        $data['header'] = "CA Dice Game";
        $data['body'] = "This is the best game!";
        $data['games'] = [
            "Dice" => "/Dice/play",
            "LoTo" => "/LoTo/play",
            "Cards" => "/Cards/play",
            "Numbers" => "/Numbers/play",
        ];
        $this->view("main", $data);
    }
}