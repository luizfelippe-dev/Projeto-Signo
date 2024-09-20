<?php include 'layouts/header.php'; ?>

<?php
function getSigno($birthdate) {
    $xml = simplexml_load_file('signos.xml');
    $birthdate = strtotime($birthdate);
    
    foreach ($xml->signo as $signo) {
        $start_date = strtotime($signo->dataInicio);
        $end_date = strtotime($signo->dataFim);

        if (($birthdate >= $start_date && $birthdate <= $end_date) ||
            ($end_date < $start_date && ($birthdate >= $start_date || $birthdate <= $end_date))) {
            return $signo;
        }
    }
    return null;
}

if (isset($_POST['birthdate'])) {
    $signo = getSigno($_POST['birthdate']);
    if ($signo) {
        echo "<div class='container mt-5'>";
        echo "<h1>Seu Signo: {$signo->nome}</h1>";
        echo "<p>{$signo->descricao}</p>";
        echo "</div>";
    } else {
        echo "<div class='container mt-5'><p>Data inválida.</p></div>";
    }
}
?>
