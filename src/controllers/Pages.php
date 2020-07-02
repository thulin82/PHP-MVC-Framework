<?php
    class Pages extends Controller {
        public function __construct(){

        }

        public function index(){
            $this->view('pages/index', ['title' => 'Welcome to index page']);
        }

        public function about(){
            $this->view('pages/about', ['title' => 'Welcome to about page']);
        }
    }
    