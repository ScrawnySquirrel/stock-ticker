<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Grabs data from the Playe model and pass it to the welcome view
 */
class Welcome extends Application {

	public function index()
	{
	 	$stocks = $this->stocks->all();
    foreach($stocks as $stock)
    {
      $stockArr[] = $stock;
    }

    $players = $this->players->all();
    foreach($players as $player)
    {
      $playerArr[] = $player;
    }

    $this->data['pagebody'] = 'welcome';
    $this->data['stocks'] = $stockArr;
    $this->data['players'] = $playerArr;
    $this->render();
	}
}
