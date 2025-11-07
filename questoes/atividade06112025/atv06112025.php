<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro IFTO</title>
</head>
<body>
    <h2>Cadastro de Pessoas do IFTO</h2>

    <?php
    // ======= CLASSES =======

    // Classe mãe
    class Pessoa {
        public $nome;
        public $cpf;
        public $tipo;

        public function __construct($nome, $cpf, $tipo) {
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->tipo = $tipo;
        }

        // Método para exibir informações
        public function exibirInfo() {
            return "Nome: $this->nome | CPF: $this->cpf | Tipo: $this->tipo";
        }
    }

    // Classe Estudante herda de Pessoa
    class Estudante extends Pessoa {
        public $curso;

        public function __construct($nome, $cpf, $curso) {
            parent::__construct($nome, $cpf, "Estudante");
            $this->curso = $curso;
        }

        public function exibirInfo() {
            return parent::exibirInfo() . " | Curso: $this->curso";
        }
    }

    // Classe Professor herda de Pessoa
    class Professor extends Pessoa {
        public $funcao;
        public $salario;

        public function __construct($nome, $cpf, $funcao, $salario) {
            parent::__construct($nome, $cpf, "Professor");
            $this->funcao = $funcao;
            $this->salario = $salario;
        }

        public function exibirInfo() {
            return parent::exibirInfo() . " | Função: $this->funcao | Salário: R$ $this->salario";
        }
    }

    // Classe Servidor herda de Pessoa
    class Servidor extends Pessoa {
        public $funcao;
        public $salario;

        public function __construct($nome, $cpf, $funcao, $salario) {
            parent::__construct($nome, $cpf, "Servidor");
            $this->funcao = $funcao;
            $this->salario = $salario;
        }

        public function exibirInfo() {
            return parent::exibirInfo() . " | Função: $this->funcao | Salário: R$ $this->salario";
        }
    }

    // Classe Visitante herda de Pessoa
    class Visitante extends Pessoa {
        public function __construct($nome, $cpf) {
            parent::__construct($nome, $cpf, "Visitante");
        }
    }

    // ======= SIMULAÇÃO DE BANCO DE DADOS =======
    session_start();

    // Verifica se existe o array de pessoas na sessão
    if (!isset($_SESSION['pessoaIFTO'])) {
        $_SESSION['pessoaIFTO'] = [];
    }

    $pessoaIFTO = $_SESSION['pessoaIFTO'];

    // ======= CADASTRO =======
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tipo = $_POST['tipo'];
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];

        if ($tipo == "Estudante") {
            $curso = $_POST['curso'];
            $novaPessoa = new Estudante($nome, $cpf, $curso);
        } elseif ($tipo == "Professor") {
            $funcao = $_POST['funcao'];
            $salario = $_POST['salario'];
            $novaPessoa = new Professor($nome, $cpf, $funcao, $salario);
        } elseif ($tipo == "Servidor") {
            $funcao = $_POST['funcao'];
            $salario = $_POST['salario'];
            $novaPessoa = new Servidor($nome, $cpf, $funcao, $salario);
        } else {
            $novaPessoa = new Visitante($nome, $cpf);
        }

        // Adiciona ao "banco de dados"
        $pessoaIFTO[] = $novaPessoa;
        $_SESSION['pessoaIFTO'] = $pessoaIFTO;
    }

    ?>

    <!-- ======= FORMULÁRIO DE CADASTRO ======= -->
    <form method="post">
        <label>Nome:</label><br>
        <input type="text" name="nome" required><br><br>

        <label>CPF:</label><br>
        <input type="text" name="cpf" required><br><br>

        <label>Tipo de Pessoa:</label><br>
        <select name="tipo" id="tipo" onchange="mostrarCampos()" required>
            <option value="">Selecione</option>
            <option value="Estudante">Estudante</option>
            <option value="Professor">Professor</option>
            <option value="Servidor">Servidor</option>
            <option value="Visitante">Visitante</option>
        </select><br><br>

        <div id="campoCurso" style="display:none;">
            <label>Curso:</label><br>
            <input type="text" name="curso"><br><br>
        </div>

        <div id="campoFuncao" style="display:none;">
            <label>Função:</label><br>
            <input type="text" name="funcao"><br><br>
        </div>

        <div id="campoSalario" style="display:none;">
            <label>Salário:</label><br>
            <input type="number" name="salario" step="0.01"><br><br>
        </div>

        <input type="submit" value="Cadastrar">
    </form>

    <script>
        // Script para mostrar os campos conforme o tipo
        function mostrarCampos() {
            var tipo = document.getElementById("tipo").value;
            document.getElementById("campoCurso").style.display = "none";
            document.getElementById("campoFuncao").style.display = "none";
            document.getElementById("campoSalario").style.display = "none";

            if (tipo == "Estudante") {
                document.getElementById("campoCurso").style.display = "block";
            } else if (tipo == "Professor" || tipo == "Servidor") {
                document.getElementById("campoFuncao").style.display = "block";
                document.getElementById("campoSalario").style.display = "block";
            }
        }
    </script>

    <hr>

    <!-- ======= LISTA DE PESSOAS CADASTRADAS ======= -->
    <h3>Pessoas Cadastradas:</h3>
    <?php
    if (count($pessoaIFTO) > 0) {
        foreach ($pessoaIFTO as $pessoa) {
            echo "<p>" . $pessoa->exibirInfo() . "</p>";
        }
    } else {
        echo "<p>Nenhuma pessoa cadastrada ainda.</p>";
    }
    ?>

</body>
</html>
