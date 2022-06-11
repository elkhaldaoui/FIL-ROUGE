<?php


class HomeController {

    /**
     * return @void
     */

    public function index($page){
        include ('views/'.$page.'.php');
    }

}
class AgentController {

    /**
     * return @void
     */

    public function index($page){
        include ('views/'.$page.'.php');
    }

}