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
    <h3>Private CMS</h3>
    <div>
       <div class="container">
            <post>
                <h3>
                    <?=$this->post["title"]?></a>
                </h3>
                <em>Create date: <?=$this->post['date']?> </em>
                <p> <?=$this->post['content']?> </p>
            </post>
        </div>
       <footer>
    </div>
</body>
</html>