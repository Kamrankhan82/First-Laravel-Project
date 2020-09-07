<html>
<body>
    <form action="upload" method="post" enctype="multipart/form-data">
    <input type="file" name="image">
        @csrf
        <input type="submit" name="submit">
    </form>
    </body>
</html>