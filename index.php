<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Processar os dados do formulário
    $selectedOptions = isset($_POST["firewall"]) ? $_POST["firewall"] . ", " : "";
    $selectedOptions .= isset($_POST["antivirus"]) ? $_POST["antivirus"] . ", " : "";
    $selectedOptions .= isset($_POST["atualizacoes"]) ? $_POST["atualizacoes"] . ", " : "";
    $selectedOptions .= isset($_POST["backup"]) ? $_POST["backup"] . ", " : "";
    $selectedOptions .= isset($_POST["conscientizacao"]) ? $_POST["conscientizacao"] : "";

    // Exibir resultados
    echo "Medidas de segurança escolhidas: " . $selectedOptions;
} else {
    // Se o formulário não foi enviado, redirecionar para o formulário
    header("Location: index.html");
    exit();
}
