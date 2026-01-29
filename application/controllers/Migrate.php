<?php
class Migrate extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('migration');
    }
    public function index() {
        if ($this->migration->current() === FALSE) {
            echo "Migration Error: " . $this->migration->error_string() . PHP_EOL;
        } else {
            echo "Migration Success" . PHP_EOL;
        }
    }
}
