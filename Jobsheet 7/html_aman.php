<form method="post">
    <label for="input">Masukkan Data:</label>
    <input type="text" id="input" name="input" required>
    
    <br><br>
    
    <label for="email">Masukkan Email:</label>
    <input type="email" id="email" name="email" required>
    
    <br><br>
    
    <input type="submit" value="Kirim">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = isset($_POST['input']) ? $_POST['input'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';

    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    echo "Input yang Anda masukkan: " . $input . "<br>";
    
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email yang Anda masukkan valid: ". $email . "<br>";
    } else {
        echo "Email tidak valid". $email . "<br>";
    }
}
?>