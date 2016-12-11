<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>MYCMS</title>
</head>
<body>
<div>
    <h3 class="entry-content">Private CMS</h3>
    <ul>
        <li><a href="../index.php">Home</a></li>
        <li> <a href="admin"> Content panel </a></li>
    </ul>
    
    <div>
        <?php foreach ($posts as $post) { ?>
        <div class="container">
            <post>
                <h3>
                    <a href="post.php?id=<?=$post["id"]?>"><?=$post["title"]?></a>
                </h3>
                <em>Create date: <?=$post['date']?> </em>
                <p> <?=$post['content']?> </p>
            </post>
        </div>
        <?php  }  ?>
        <footer>
    </div>
</body>
</html>