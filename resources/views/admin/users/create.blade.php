<form action="/users" method="post">
	{!! csrf_field() !!}
<input type="text" name="name" />
<input type="password" name="password" />
<input type="email" name="email"/>
<input type="submit" value="create"/>

</form>