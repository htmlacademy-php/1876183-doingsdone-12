<?php
// показывать или нет выполненные задачи
$show_complete_tasks = rand(0, 1);
$projects = ['Входящие', 'Учеба', 'Работа', 'Домашние дела', 'Авто'];

$tasks = [
    [
        'tasks' => 'Собеседование в IT компании',
        'date' => '01.12.2019',
        'project' => 'Работа',
        'completed' => false
    ],
    [
        'tasks' => 'Выполнить тестовое задание',
        'date' => '25.12.2019',
        'project' => 'Работа',
        'completed' => false
    ],
    [
        'tasks' => 'Сделать задание первого раздела',
        'date' => '21.12.2019',
        'project' => 'Учеба',
        'completed' => true
    ],
    [
        'tasks' => 'Встреча с другом',
        'date' => '22.12.2019',
        'project' => 'Входящие',
        'completed' => false
    ],
    [
        'tasks' => 'Купить корм для кота',
        'date' => null,
        'project' => 'Домашние дела',
        'completed' => false
    ],
    [
        'tasks' => 'Заказать пиццу',
        'date' => null,
        'project' => 'Домашние дела',
        'completed' => false
    ]];

require_once 'helpers.php';


$page_content = include_template("main.php",
[
    "projects" => $projects,
    "tasks" => $tasks,
    "show_complete_tasks" => $show_complete_tasks
]);

$layout_content = include_template("layout.php", [
    "page_content" => $page_content,
    "page_title" => "Дела в порядке"
]);

print($layout_content);

?>
