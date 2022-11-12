<?php
require_once "../View/ViewAddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("yosa");
addTodoList("ann");
addTodoList("miko");

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();