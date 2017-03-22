<?php
  date_default_timezone_set('America/Los_Angeles');
  require_once __DIR__.'/../vendor/autoload.php';
  require_once __DIR__.'/../src/Change.php';

  $app = new Silex\Application();

  $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
  ));

  $app->get("/", function () use ($app) {
    return $app['twig']->render('index.html.twig');
  });

  $app->post("/doit", function () use ($app) {

    $new_phrase = new Change;
    $result = $new_phrase->doIt($_POST['in'], $_POST['change'], $_POST['phrase']);

    return $app['twig']->render('index.html.twig', array('result'=>$result));
  });

  return $app;
?>
