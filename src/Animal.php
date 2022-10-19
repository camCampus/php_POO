<?php
namespace App;

    abstract class Animal {

        //Attribut
        /** @var string $name */
        private string $name;

        // Force les classes filles à définir cette méthode
        abstract protected function getNoise();

        public function __construct(string $name)
        {
            $this->name = $name;
        }

        public function noise(){
            return $this->getNoise();
        }

        /**
         * @return string
         */
        public function getName(): string
        {
            return $this->name;
        }

        /**
         * @param string $name
         */
        public function setName(string $name): void
        {
            $this->name = $name;
        }



    }