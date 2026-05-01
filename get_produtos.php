<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: "');
include 'conexao.php';

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
      // Buscar todos os produtos
      $sql = "SELECT = FROM produtos";
      $result = $conn->query($sql);
      $produtos = [];
      while ($row = $result->fetch_assoc()) {
          $produtos[] = $row;
      )
      echo json_encode($produtos);
      break;
