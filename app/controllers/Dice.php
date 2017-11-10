<?php

class Dice extends Controller {

    public function index() {

    	header("Content-type:application/json");

    	$game = $this->model('Game');
        $result = $game->getAllGames();


    	echo json_encode($result);
    }

    public function myGames() {

        header("Content-type:application/json");

        $game = $this->model('Game');
        $result = $game->getUserGames($_SESSION['username']);


        echo json_encode($result);
    }

    public function getTopWinners() {

        header("Content-type:application/json");

        $game = $this->model('Game');
        $result = $game->getTopWinners(5);


        echo json_encode($result);
    }

    public function getTopPlayers() {

        header("Content-type:application/json");

        $game = $this->model('Game');
        $result = $game->getTopPlayers(5);


        echo json_encode($result);
    }    


        public function toDB() {
            $game = $this->model('Game');

    }

    public function play() {
        $data['title'] = "Dice game";
        $data['header'] = "Lets play dices";
        $this->view("dice/play", $data);
    }

    public function login() {
        $data= [];
        $this->view("dice/login", $data);
        $game = $this->model('Game');
    }

    public function register() {
        $data= [];
        $this->view("dice/register", $data);
        $game = $this->model('Game');
    }    
}


