

<form id="formGreid" name="greid1" method="post" action="/test/" enctype="application/x-www-form-urlencoded">
    <h3>greid1</h3>
    <label>Текст </label><input type="text" name="text"><br>
    <label>Имя </label><input type="text" name="name"><br>
    <label>Почта </label><input type="text" name="email"><br>
    <button type="submit">Отправить</button>
</form>

<form id="formGreid2" name="greid2" method="post" action="/test/" enctype="multipart/form-data">
    <h3>greid2</h3>
    <label>Текст </label><input type="text" name="text"><br>
    <label>Имя </label><input type="text" name="name"><br>
    <label>Почта </label><input type="text" name="email"><br>
    <button type="submit">Отправить</button>
</form>

<form id="formGreid3" name="greid3"">
    <h3>greid3</h3>
    <label>Текст </label><input type="text" name="text"><br>
    <label>Имя </label><input type="text" name="name"><br>
    <label>Почта </label><input type="text" name="email"><br>
    <button type="submit">Отправить</button>
</form>

<script>
    var form = document.querySelector("#formGreid3");
    form.addEventListener("submit", function(event) {
        var xhr = new XMLHttpRequest();

        var json = JSON.stringify({
            text: form.elements.text.value,
            name: form.elements.name.value,
            email: form.elements.email.value,
        });

        xhr.open("POST", '/test/', true)
        xhr.setRequestHeader('Content-type', 'application/json; charset=utf-8');

        xhr.send(json);
    });
</script>

<?php

echo '<pre>',var_export($_POST),'</pre>';
echo '<pre>',var_export($_GET),'</pre>';
echo '<pre>',var_export($_REQUEST),'</pre>';
?>

