<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

addTodoList("yosa");
addTodoList("ananda");
addTodoList("messi");
addTodoList("asddd");

showTodoList();

removeTodoList(3);

showTodoList();

removeTodoList(1);

showTodoList();

