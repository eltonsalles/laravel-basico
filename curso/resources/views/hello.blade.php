<h1>Hello Make</h1>

<form action="/hello" method="post">
    {{ csrf_field() }}
    <input type="text" name="name">
    <input type="submit" name="enviar">
</form>