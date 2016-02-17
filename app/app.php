<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Palindrome.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->post("/result", function() use ($app) {
        $newPalindrome = new Palindrome;
        $result = $newPalindrome->palindrome_confirm($_POST['input']);
        return $app['twig']->render('results.html.twig', array('result' => $result));
    });

    return $app;

?>
