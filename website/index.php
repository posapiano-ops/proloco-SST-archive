<?php
include 'template.php';
$p="index";

if (isset($_GET["page_id"])){
    $p=$_GET["page_id"];
    if ($p!=basename($p) || $p=="index" || !file_exists($p.".html") || !preg_match("/^[A-Za-z0-9-_]+$/",$p)){
        $p="error"; //dovrebbe essere una pagina di errore ma non è!!!!
    }
}
Template::view($p.'.html');
Template::clearCache();

#Template::view('about.html', [
#    'title' => 'Home Page',
#    'colors' => ['red','blue','green']
#]);

