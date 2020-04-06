
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" hrel="mystyle.css" />
<script src="myscript.js"></script>
<title>template#1</title>


</head>
<body>


<!-- Цель - получить данные в echo -->
<div id="Форма">
<form method="post" id="add-edit" name="post1" action="template_1.php">
<pre>Форма добавления/изменения:</pre>
<pre>id: 
<input type="text" name="id" value="1"/>
</pre>
<pre>date
<input type="text" name="date" value="2014-12-24"/>
</pre>
<pre>document id
<input type="text" name="document" value="IDA-GID-141105A"/>
</pre>
<pre>document type
<select name="type" size="7">
	<option>ДОГОВОРА</option>
    <option>ИНВОЙСЫ</option>
	<option>ЦМР-Ы</option>
	<option>ПРОФОРМЫ</option>
	<option>СЧЕТА</option>
    <option selected="selected">new</option>
</select>
</pre>
<input name="save" type="submit" value="Сохранить" />
<input type="submit" value="Новая запись" />
<input type="reset" value="Reset" />
</form>
</div>

<!-- Отображение echo $_POST['']; -->
<div id="Проверка работы формы">
<? echo $_POST['id']; ?></br>
<? echo $_POST['date']; ?></br>
<? echo $_POST['document']; ?></br>
<? echo $_POST['type']; ?></br>
</div>



</body>
</html>