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
        <h1>Edit post</h1>
        <div>
            <form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
                <label>
                    Title
                    <input type="text" name="title" value="<?=$this->post['title']?>" class="form-item" autofocus required>
                </label><br>
                <label>
                    Date
                    <input type="date" name="date" value="<?=$this->post['date']?>" class="form-item" required>
                </label><br>
                <label>
                    Content
                    <textarea class="form-item" name="content" required><?=$this->post['content']?></textarea>
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
