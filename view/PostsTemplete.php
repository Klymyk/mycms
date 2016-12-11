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
        <?php foreach ($posts as $post) { ?>
        <div class="container">
            <post>
                <h3>
                    <a href="post.php?id=<?=$post["id"]?>"><?=$post["title"]?></a>
                </h3>
                <em>Create date: <?php $post['date']?> </em>
                <p> <?php $post['content']?> </p>
            </post>
            <post>
                <h3>Трофеи великих битв</h3>
                <em>Опубликовано: 2016-10-21</em>
                <p>22 июня 1943 года, спустя два года после начала Великой Отчественной войны, в ЦПКиО им. Горького в Москве открылась за пять лет ее существования на трофейные автомобили, авиация, артиллерия, пришли посмотреть более 7,5 млн человек. Спустя два года после начала Великой Отчественной войны, в ЦПКиО им. Горького в Москве открылась выставка захваченного у Германии оружия.</p>
            </post>
        </div>
        <?php  }  ?>
        <footer>
    </div>
</body>
</html>