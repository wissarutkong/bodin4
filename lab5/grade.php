<?php 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    exit(0); // สำหรับ Preflight requests
}

$score = $_GET['score'];
$result = array();
if($score < 50){
    $result = array([
        'grade' => 'F',
        'message' => 'คะแนนต่ำกว่า 50 คะแนนได้เกรด F'
    ]);
}else if($score < 60){
    $result = array([
        'grade' => 'D',
        'message' => 'คะแนนต่ำกว่า 60 คะแนนได้เกรด D'
    ]);
}else if($score < 70){
    $result = array([
        'grade' => 'C',
        'message' => 'คะแนนต่ำกว่า 70 คะแนนได้เกรด C'
    ]);
}else if($score < 80){
    $result = array([
        'grade' => 'B',
        'message' => 'คะแนนต่ำกว่า 80 คะแนนได้เกรด B'
    ]);
}else{
    $result = array([
        'grade' => 'A',
        'message' => 'คะแนนมากกว่า 80 คะแนนได้เกรด A'
    ]);
}

header('Content-Type: application/json; charset=utf-8');
echo json_encode($result, true);
