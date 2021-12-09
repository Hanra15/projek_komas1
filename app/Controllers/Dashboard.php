<?php

    namespace App\Controllers;

    class Dashboard extends BaseController
    {
        public function index()
        {
            $this->load->view('backend/dashboard');
        }
    }

?>