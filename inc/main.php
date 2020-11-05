<?php
echo "Главная</br>";
echo "<a href ='inc/registration.php'>Регистрация</a></br>";
?>
<form  method = "POST">

    <label> Ник: </label></br>
    <input type="text" name="nick" ></br>
    <label> Пароль: </label>	</br>
    <input type="text" name="password" >	</br>
    
	<input type="submit"  name="ok" value="Войти">
</form>
