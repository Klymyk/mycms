<<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>Admin MYCMS</title>
    </head>
    <body>
    <div class="container">
        <h1>Add post</h1>
        <div>
            <form method="post" action="index.php?action=add">
                <label>
                    Title
                    <input type="text" name="title" value="" class="form-item" autofocus required>
                </label><br>
                <label>
                    Date
                    <input type="date" name="date" value="" class="form-item" required>
                </label><br>
                <label>
                    Content
                    <textarea class="form-item" name="content" required></textarea>
                </label><br>
                <input type="submit" value="Save" class="btn">
            </form>
        </div>
        <footer>
            <p>
                <br>Copyright &copy; 2016
            </p>
        </footer>
    </div>
    </body>
</html>
