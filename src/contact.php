<?php
    class Contact
    {
        private $name;
        private $phone_number;
        private $address;

        function __construct($new_name, $new_number, $new_address)
        {
            $this->name=$new_name;
            $this->phone_number=$new_number;
            $this->address = $new_address;
        }

        function setAddress($new_address)
        {
            $this->address = $new_address;
        }

        function getAddress()
        {
            return $this->address;
        }

        function setNumber($new_number)
        {
            $this->phone_number = $new_number;
        }

        function getNumber()
        {
          return $this->phone_number;
        }

        function setName($new_name)
        {
          $this->name= $new_name;
        }
        function getName()
        {
          return $this->name;
        }

        static function getAll()
        {
          return $_SESSION['list_of_contacts'];
        }
        static function deleteALL()
        {
          $_SESSION['list_of_contacts'] = array();
        }
        function save()
        {
          array_push($_SESSION['list_of_contacts'], $this);
        }
    }
?>
