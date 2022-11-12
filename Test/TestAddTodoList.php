<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("yosa");
addTodoList("ananda");

var_dump($todoList);