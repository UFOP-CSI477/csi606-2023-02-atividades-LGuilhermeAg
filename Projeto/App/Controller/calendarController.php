<?php
    class calendarController extends Controller{
        public function index(){
            return $this->view('Calendar/calendar');
        }
    }
?>