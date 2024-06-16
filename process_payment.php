<?php
// Pseudokod do obsługi płatności Przelewy24
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $hostel = $_POST['hostel'];
    $days = $_POST['days'];
    $total = $_POST['total'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Logika integracji z Przelewy24

    // Wysłanie potwierdzenia na email
    $to = $email;
    $subject = "Potwierdzenie opłaty za pobyt";
    $message = "Dziękujemy za dokonanie opłaty. Szczegóły:\nNazwisko: $lastname\nImię: $firstname\nHostel: $hostel\nLiczba dni: $days\nKwota: $total";
    mail($to, $subject, $message);

    echo "Opłata została zrealizowana. Potwierdzenie zostało wysłane na email.";
}
?>
