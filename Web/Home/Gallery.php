<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
      <?=$data['title'] ?>
    </title>
  </head>
  <body>
    <h1>
      <?=$data['title']?>
    </h1>
    <p>
      <strong>
        Table ID - <?=$data['id'] ?>
      </strong>
    </p>
    <p>
      <?=$data['paragraph'] ?>:
    </p>
    <ol>
      <?php foreach ($data['list'] as $val) : ?>
        <li>
          <?=$val ?>
        </li>
      <?php endforeach ?>
    </ol>
    <p>
      Chosen list item:
      <b>
        <?=$data['listItem'] ?>
      </b>
    </p>
  </body>
</html>