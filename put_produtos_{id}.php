case 'PUT':
  // Atualizar produto
  $dados = json_decode(file_get_contents('php://input'), true);
  $id = $_GET['id'];
  $nome = $dados['nome'];
  $descricao = $dados['descricao'];
  $preco = $dados['preco'];
  $sql = "UPDATE produtos SET nome='$nome', descricao='$descricao', preco='$preco' WHERE id=$id";
  if ($conn->query($sql) === TRUE) {
      echo json_encode(['message' => 'Produto atualizado com sucesso!']);
  } else {
      echo json_encode(['error' => 'Erro ao atualizar produto.']);
  }
  break;
