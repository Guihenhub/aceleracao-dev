<?php
    require_once('./Database.php');

    class BudgetReport{
        private Database $database;

        public function __construct(Database $database)
        {
            $this->database = $database;
        }

        public function open(DateTime $date)
        {
            # code...
        }

        public function save()
        {
            # code...
        }
    }