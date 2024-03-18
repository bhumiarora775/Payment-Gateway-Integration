<!DOCTYPE html>
<html>
<head>
    <title>Donate</title>
</head>
<body>
    <h1>Welcome to our website!</h1>
    <p><a href="donate.php">Donate</a></p>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Donate</title>
</head>
<body>
    <h1>Donate</h1>
    <form action="sucess.php" method="post">
        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="amount" required>
        <br>
        <label for="payment_type">Payment Type:</label>
        <select id="payment_type" name="payment_type">
            <option value="paypal">PayPal</option>
        </select>
        <br>
        <input type="submit" value="Donate">
    </form>
</body>
</html>

<?php
require_once 'paypal.php';