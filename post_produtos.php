case 'POST':
    // Criar novo produto
    $dados = json_decode(file_get_contents('php://input'), true);
    $nome = $dados['nome'];
    $descricao = $dados['descricao'];
    $preco = $dados['preco'];
    $sql = "INSERT INTO produtos (nome, descricao, preco) VALUES ('$nome', '$descricao', '$preco')";
    if ($conn->query($sql) === TRUE) {
        echo json_encode(['message' => 'Produto criado com sucesso!']);
    } else {
        echo json_encode(['error' => 'Erro ao criar produto.']);
    break;
