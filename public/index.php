<?php

if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
}

spl_autoload_register(function ($class) {
    $parts = explode('\\', $class);
    array_shift($parts);
    $class = implode('/', $parts);
    require_once "src/$class.php";
});


use App\Controllers\Router as CRouter;
use App\Router;

$router = new Router();
$router2 = new CRouter();
$db = new App\DB();
var_dump($router,$router2, $db);


// switch($_SERVER['REQUEST_URI']){
//     case '/':
//         $heroTitle = 'World news';
//         $posts = [
//             ['title' => 'World news 1', 'author' => 'Kaspar', 'body' => 'some content here 1'],
//             ['title' => 'World news 2', 'author' => 'Martin', 'body' => 'some content here 2'],
//             ['title' => 'World news 3', 'author' => 'Peter', 'body' => 'some content here 3'],
//             ['title' => 'World news 4', 'author' => 'Pets', 'body' => 'some content here 4'],
//         ];
//         include 'views/index.php';
//         break;
//     case '/us':
//         $heroTitle = 'U.S news';
//         $posts = [
//             ['title' => 'U.S news 1', 'author' => 'Lauri', 'body' => 'some content here 1'],
//             ['title' => 'U.S news 2', 'author' => 'Jaanika', 'body' => 'some content here 2'],
//             ['title' => 'U.S news 3', 'author' => 'Ethel', 'body' => 'some content here 3'],
//             ['title' => 'U.S news 4', 'author' => 'Kaur', 'body' => 'some content here 4'],
//         ];
//         include 'views/us.php';
//         break;
//     default:
//         echo '404';
// }   