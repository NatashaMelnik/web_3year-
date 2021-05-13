<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <form action="links.php" method="POST">
        <h1>Введіть довідкову інформацію про себе</h1>
        <div class="wrap-div">
            <div class="info-div">
                <h2>Контактна інформація</h2>
                <div>
                    <label>ПІБ:</label>
                    <input id="full_name" name="full_name" required>
                </div>
                <div>
                    <label>Телефон:</label>
                    <input id="phone" name="phone" required>
                </div>
                <div>
                    <label>Email:</label>
                    <input id="email" name="email" required>
                </div>
            </div>
            <div class="info-div">
                <h2>Інформація про ваш навчальний заклад</h2>
                <div>
                    <label>Назва ЗВО:</label>
                    <input id="university" name="university" required>
                </div>
                <div>
                    <label>Факультет:</label>
                    <input id="faculty" name="faculty" required>
                </div>
                <div>
                    <label>Курс:</label>
                    <input id="course" name="course" required>
                </div>
            </div>
            <div class="info-div">
                <h2>Ваші захоплення</h2>
                <div class="div-radio">
                    <p>
                        <input name="hobby" type="radio" value="Комп'ютерні ігри" >Комп'ютерні ігри<br>
                    </p>
                    <p>
						<input name="hobby" type="radio" value="Шахи">Шахи<br>
                    </p>
                    <p>
						<input name="hobby" type="radio" value="Мистецтво">Мистецтво<br>
                    </p>
                    <p>
                        <input name="hobby" type="radio" value="Спорт">Спорт<br>
                    </p>
                </div>
            </div>
        </div>
        <input type="submit" value="Надіслати">
        <input type="reset" value="Очистити">
    </form>
</body>
</html>