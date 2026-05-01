  case 'DELETE':
      // Deletar produto
      $id = $_GET['id'];
      $sql = 'DELETE FROM produtos WHERE id=$id";
      if ($conn->query($sql) === TRUE) {
          echo json_encode(['message' => 'Produto deletado com sucesso!']);
      } else {
          echo json_encode(['error' => 'Erro ao deletar produto.']);
      }
      break;
}
$conn->close();
?>
