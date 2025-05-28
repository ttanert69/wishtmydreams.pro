<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = $_POST['email'];
    $subject = "Hayallerin Başlıyor!";
    $message = "Sitemize hoş geldin! Burada ilham alacağın içerikler seni bekliyor.";
    $headers = "From: info@wishtmydreams.pro"; // Burayı kendi domainine göre ayarla

    if (mail($to, $subject, $message, $headers)) {
        echo "Mail gönderildi!";
    } else {
        echo "Mail gönderilemedi.";
    }
}
?>
