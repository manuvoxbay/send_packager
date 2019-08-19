<!DOCTYPE html>
<html>
<head>
    <title>Test</title>
</head>
<body>
    <h><center>Welcome To My World | Loader</center></h3>

    <form method="post" action="{{route('send')}}">
        @csrf
        Name 
        <input type="text" name="name" placeholder="Enter user name">
        Email
        <input type="email" name="email" placeholder="Enter email id">
        Message
        <textarea name="note" placeholder="Enter Note"></textarea>
        <input type="submit" value="Send">
    </form>
</body>
</html>