<!DOCTYPE html>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <title>Задание №3</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
        <form action="" method="POST">
          <label>ФИО:
          <br/><input name="name" placeholder="Введите ФИО"/></label><br/>
          <label>E-mail:
          <br/><input name="email" type="email" placeholder="Введите e-mail"/></label><br/>
          <label>Дата рождения:
          <br/>
          <input name="data" type ="date" min="1950-01-01" max="2020-08-01" value="2000-02-13"/>
          </label>
          <br/>
          <p>Пол:</p>
          <label><input type="radio" name="sex" value="man"/> Мужской </label>
          <label><input type="radio" checked="checked" name="sex" value="woman"/> Женский </label>
          <br/>
          <p>Количество конечностей:</p>
          <label><input type="radio" name="limb" value="1"/> 1 </label>
          <label><input type="radio" checked="checked" name="limb" value="2"/> 2 </label>
          <label><input type="radio" name="limb" value="3"/> 3 </label>
          <label><input type="radio" name="limb" value="4"/> 4 </label>
          <label><input type="radio" name="limb" value="5"/> 5 </label>
          <label><input type="radio" name="limb" value="6"/> 6 </label>
          <br/>
          <p>Сверхспособности:</p>
          <select name="superpower" multiple="multiple">
            <option value="im">Бессмертие</option>
            <option value="sc">Прохождение сквозь стены</option>
            <option value="lev">Левитация</option>
            <option value="telpat">Телепатия</option>
            <option value="telkin">Телекинез</option>
          </select>  
          <br/>
          <p id="bio">Биография:</p>
          <label>
            <textarea name="bio" rows="8" cols="60" placeholder="Расскажите о себе"></textarea>
          </label>
          </br>
          <label><input type="checkbox" name="check"/>С контрактом ознакомлен</label><br/><br/>
          <input type="submit" value="Отправить"/>
        </form>
</body>
</html>
