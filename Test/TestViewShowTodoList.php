<?php 

require_once "../View/ViewShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("yosaphat");
addTodoList("php");
addTodoList("java");

viewShowTodoList();