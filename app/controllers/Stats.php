<?php

class Stats extends Controller {

    public function index() {

        $data['title'] = "CA Dice Game";
        $data['header'] = "My stats";
        $data['body'] = "This is all my games stats";

        $game = $this->model('Game');
        $data['my_stats'] = $game->getUserGames("gamer");

        $this->view("stats/index", $data);
    }

    public function top() {

        $game = $this->model('Game');

        $data['my_stats'] = $game->getTopWinners(5);
        $data['title'] = "CA Dice Game";
        $data['header'] = "Top players";
        $data['body'] = "Here we have best wins";

        $this->view("stats/tops", $data);
    }
}