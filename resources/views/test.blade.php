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

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <!-- <link rel="stylesheet" href="{{ asset('css/main.css') }}"> -->
    <!-- <link rel="stylesheet" href="{{ asset('css/button.css') }}"> -->
</head>
<style>

.navbtn
{
  width: 150px;
  height: 50px;
  background-color: #fff;
  animation: btnan 1s ease-in-out infinite;
}
@keyframes btnan{
  0%{
    border-color: #1ff;
  }
  50%{
    border-color: #1f1;
  }
  100%{
    border-color: #11f;
  }

}


</style>

<body>
<button class="navbtn">
  Lorem
</button>
<button class="navbtn">
  Lorem
</button>
<button class="navbtn">
  Lorem
</button>
<button class="navbtn">
  Lorem
</button>

</body>

</html>