<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  body {
    background: rgb(46, 52, 64);
    background: linear-gradient(217deg, rgba(46, 52, 64, 1) 0%, rgba(59, 66, 82, 1) 53%, rgba(76, 86, 106, 1) 100%);
    margin: 0;
    height: 100vh;
    display: grid;
    place-items: center;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  }

  li {
    list-style-type: none;
  }

  a {
    text-decoration: none;
    color: #e1bbd9;
    padding: 10px;
  }
</style>

<body>
  <?php
  $books = [
    [
      "bookName" => "First Book",
      "author" => "First Author",
      "releaseDate" => "1999",
      "purchaseUrl" => "https://www.firstbook.com"
    ],
    [
      "bookName" => "Second Book",
      "author" => "Second Author",
      "releaseDate" => "2001",
      "purchaseUrl" => "https://www.secondbook.com"
    ],
    [
      "bookName" => "Third Book",
      "author" => "First Author",
      "releaseDate" => "2005",
      "purchaseUrl" => "https://www.thirdbook.com"
    ],
    [
      "bookName" => "Fourth Book",
      "author" => "Third Author",
      "releaseDate" => "2010",
      "purchaseUrl" => "https://www.fourthbook.com"
    ]
  ];

  ?>
</body>
<ul>
  <?php foreach ($books as $book) : ?>
    <?php if ($book['author'] === 'First Author') : ?>
      <a href="<?= $book['purchaseUrl'] ?>">
        <li><?= $book['bookName'] ?> (<?= $book['releaseDate'] ?>) - by <?= $book['author'] ?></li>
      </a>
    <?php endif; ?>
  <?php endforeach; ?>
</ul>

</html>