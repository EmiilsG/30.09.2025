<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
</head>
<body>

<h1>Create New Post</h1>

<form action="/posts/store" method="POST">
    @csrf

    <label for="title">Title:</label><br>
    <input type="text" id="title" name="title"><br><br>

    <label for="content">Content:</label><br>
    <textarea id="content" name="content"></textarea><br><br>

    <button type="submit">Save Post</button>
</form>

</body>
</html>
