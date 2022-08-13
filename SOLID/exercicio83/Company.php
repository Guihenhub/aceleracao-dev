<?php
    class Company{
        public function createSoftware(Designer $designer, Programer $programer, Tester $tester){
            $designer->designArchitecture();
            $programer->writeCode();
            $tester->testSoftware();
        }
    }
?>