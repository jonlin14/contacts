<?php
  class Contact
  {
    private $name;

    function __construct($new_name)
    {
      $this->name=$new_name;
    }

    function setName($new_name)
    {
      $this->name= $new_name;
    }
    function getName()
    {
      return $this->name;
    }
    function getAll()
    {
      return $_SESSION('list_of_contacts');
    }
    function deleteALL()
    {
      $_SESSION('list_of_contacts') = array ();
    }
  }
