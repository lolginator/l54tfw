<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- <meta name = "viewport" content = "width=device-width, initial-scale=1.0" > -->
	<title>uniMail</title>
</head>
<body>
<form action="sendmail.php" method="post">
        <label for="name">Имя:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="message">Сообщение:</label>
        <textarea id="message" name="message" required></textarea><br>

        <input type="submit" value="Отправить">
    </form>
</body>
</html>