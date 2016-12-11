<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Admin MYCMS</title>
  </head>
  <body>
    <div class="container">
      <h1>Dashboard</h1>

        <div>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="index.php?action=add">Add post</a></li>
            </ul>
           
          <table class="a-table">
            <tr>
                <th>Дата</th>
                <th>Заголовок</th>
                <th></th>
                <th></th>
            </tr>
            <?php foreach($this->post as $post): ?>
              <tr>
                  <td><?=$post['date']?></td>
                  <td><?=$post['title']?></td>
                  <td>
                      <a href="index.php?action=edit&id=<?=$post['id']?>">Edit</a>
                  </td>
                  <td>
                      <a href="index.php?action=delete&id=<?=$post['id']?>">Delete</a>
                  </td>
              </tr>
            <?php endforeach ?>
          </table>        
        </div>
        <footer>
          <p>
            MYCMS<br>Copiryte &copy 2016;
          </p>
        </footer>
     </div>
  </body>
</html>