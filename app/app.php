<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/contact.php";

    session_start();
    if(empty($_SESSION['list_of_contacts']))
    {
        $_SESSION['list_of_contacts'] = array ();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array (
        'twig.path'=>__DIR__.'/../views'
    ));


    $app->get("/", function() use($app) {
        return $app['twig']->render('front.twig', array('contacts' => Contact::getAll()));
    });

    $app->post("/create_contact", function() use($app){
        $contact = new Contact((string)$_POST['contact_name'], (string)$_POST['phone_number'], (string)$_POST['address']);
        $contact->save();
        return $app['twig']->render('create_contact.twig', array('newContact' => $contact));
    });

    $app->post("/delete", function() use ($app){
        Contact::deleteAll();
        return $app['twig']->render('delete_contact.twig');
    });

    return $app;
?>
