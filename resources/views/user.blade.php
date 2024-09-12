<center>
<div class="form-container">
    <h2>User Login</h2>
    <form action="user" method="post">
        @csrf
        <!-- <input type="hidden" name="_method" value="delete"> -->
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" >
        <br>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" >
        <br>
        <br>
        <input type="submit" value="Login">
    </form>
</div>
</center>