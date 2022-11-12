<?php

require_once "../Model/TodoList.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

addTodoList("annanada");
addTodoList("miko");
addTodoList("nnn");
addTodoList("djalsdja");

showTodoList();
viewRemoveTodoList();
showTodoList();