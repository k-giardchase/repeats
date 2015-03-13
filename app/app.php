<?php

    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/RepeatCounter.php';

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider, array(
      'twig.path' => __DIR__.'/../views'
    ));

    $app->get('/', function() use ($app) {

      return $app['twig']->render('home.twig');
    });

    $app->get('/create_count', function() use ($app) {
      $new_count = new RepeatCounter;
      $tallied_count = $new_count->countRepeats($_GET['input_word'], $_GET['input_phrase']);
      return $app['twig']->render('results.twig', array('total' => $tallied_count));

    });


    return $app;
?>
