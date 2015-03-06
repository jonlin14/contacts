<?php
  class Contact
  {
    private $name;
    private $phone_number;


    function __construct($new_name, $new_number)
    {
      $this->name=$new_name;
      $this->phone_number=$new_number;
    }

    function setNumber($new_number)
    {
      $this->phone_number = $new_number;
    }

    function setName($new_name)
    {
      $this->name= $new_name;
    }
    function getName()
    {
      return $this->name;
    }
    function getNumber()
    {
      return $this->phone_number;
    }
    static function getAll()
    {
      return $_SESSION['list_of_contacts'];
    }
    static function deleteALL()
    {
      $_SESSION['list_of_contacts'] = array ();
    }
    function save()
    {
      array_push($_SESSION['list_of_contacts'], $this);
    }
  }
