<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NEON Донецк</title>
    <META NAME="description" CONTENT="<?= $description = 'Description' ?>">
    <meta name="Robots" content="index, follow">
    <!-- На главной индекс фоллов, на остальныйх NO при пагинации. NOindex NOfollow на технических страницах, превнекст при каталоге с пагинацией (Договора, документы и тд, не важные для юзера)-->
    <link rel="shortcut icon" href="img/icon/icon.ico" type="image/x-icon">
    <!-- <link rel="stylesheet" href="https://snipp.ru/cdn/bootstrap/3.4.1/bootstrap.min.css"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"> </script> -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src="js/text_line_animation.js"></script>
    <script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://snipp.ru/cdn/maskedinput/jquery.maskedinput.min.js"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="../css/main.css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/button.css') }}">
</head>
<style>
    .header {
  background-color: yellow;
  display: flex;
  justify-content: space-between; /* Puts the image at far left, nav at far right */
}

.image {
  width: 100px;
  background-color: green
}

ul {
  display: flex; /* Puts the `li` in a row */
  list-style: none; margin: 0; padding: 0;
  background-color: blue;
  height: 100px;
}

li {
  border: 1px solid;
  width: 100px; /* Alternatively, you could set a specific width on the ul, and use flex-grow:1 here to make all the li elements the same width */
  display: flex; /* allows align-items to work below */
  justify-content: center; /* Horizontally centers single-line elements */
  text-align:center; /* Horizontally centers text within line-wrapped elements */
  align-items: center; /* vertical */
}
</style>

<body>
<div class="header">
  <div class="image">
    Image
  </div>
  <nav class="navigation">
    <ul>
      <li>Very long text with line wrapping</li>
      <li>Short</li>
      <li>X</li>
    </ul>
  </nav>
</div>
</body>

</html>