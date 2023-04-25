<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::plugin(
    'Turnus',
    ['path' => '/turnus'],
    function (RouteBuilder $builder) {

        $builder->connect( "/add-turno" , [ "controller" => "Turno", "action" => "addTurno"]);

        $builder->connect( "/list-turno" , [ "controller" => "Turno", "action" => "listTurno"]);

        $builder->connect( "/turno/{id}" , [ "controller" => "Turno", "action" => "showTurno"], 
        [
            "pass" => ["id"]
        ]);

        $builder->connect( "/edit-turno/{id}" , [ "controller" => "Turno", "action" => "editTurno"], 
        [
            "pass" => ["id"]
        ]);

        $builder->connect( "/delete-turno/{id}" , [ "controller" => "Turno", "action" => "deleteTurno"], 
        [
            "pass" => ["id"]
        ]);

        $builder->fallbacks(DashedRoute::class);
    }
);
