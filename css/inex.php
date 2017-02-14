<!DOCTYPE html>

<head>

  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="reset.css">
  <script src="js/modernizr.js"></script>
  <script src="scroll.js"></script>
  <title>Шаблон магазина</title>

</head>

<body>

<style type="text/css">
#blfix{
    display:none;
    opacity: 0.9;
    width: 100%;
    height: 56px;
    background-color: #f7f7f7;
    position: fixed;
    z-index: 100;
    font-family: FiraSans;
    font-size: 1.5em;
}
</style>
<div id="blfix">
  <a href="index.php"><img class="logo" src="logo.png" alt="logo"/></a>
    <nav class='header-nav'>
  <ul>
    <li>
    <li class='active'>
      <a href='#'>
        Главная
      </a>
    </li>
    <li>
      <a href='onas.php'>
        О нас
      </a>
    </li>
    <li>
      <a href='contacts.php'>
        Контакты
      </a>
    </li>
    <li>
      <a href='#'>
        Корзина
      </a>
    </li>
    <div class='marker'></div>
  </ul>
</nav>
</div>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script>
jQuery(function(f){
    var element = f('#blfix');
    f(window).scroll(function(){
        element['fade'+ (f(this).scrollTop() > 50 ? 'In': 'Out')](500);
    });
});
</script>

<div id="pre_header">
<p class="tel">
Телефон: +38 066 261 31 13 <span class="slogan">Trophy-style - жизнь в стиле Трофи</span>
</p>
<hr></hr>
</div>

<div id="menu">
  <a href="index.php"><img class="logo" src="logo.png" alt="logo"/></a>
    <nav class='header-nav'>
  <ul>
    <li>
    <li class='active'>
      <a href='#'>
        Главная
      </a>
    </li>
    <li>
      <a href='onas.php'>
        О нас
      </a>
    </li>
    <li>
      <a href='contacts.php'>
        Контакты
      </a>
    </li>
    <li>
      <a href='#'>
        Корзина
      </a>
    </li>
    <div class='marker'></div>
  </ul>
</nav>
</div>



<!-- Slider -->
<div id="slider">
  <div class="slides">
    <div class="slider">
      <div class="legend"></div>
      <div class="content">
        <div class="content-txt">
          <h1>BARSUK-TROPHY 2016</h1>
          <h2>Кременчугский клуб "Полный привод" приступил к подготовке внедорожного мероприятия "Барсук-2016".</h2>
      <span>
    <button href="#" class="btn">Подробнее</button>
  </span>
        </div>
      </div>
      <div class="image">
        <img src="news1.png">
      </div>
    </div>
    <div class="slider">
      <div class="legend"></div>
      <div class="content">
        <div class="content-txt">
          <h1>Харьковская серия 2016</h1>
          <h2>Внедорожное сообщество Харькова приглашает Вас принять участие в серии УТС 2016 по трофи-рейдам.</h2>
<span>
    <button href="#" class="btn">Подробнее</button>
</span>
        </div>
      </div>
      <div class="image">
        <img src="news2.png">
      </div>
    </div>
    <div class="slider">
      <div class="legend"></div>
      <div class="content">
        <div class="content-txt">
          <h1>Анонс КМБ-2016</h1>
          <h2>Niva Kharkov club приглашает 18-19 июня 2016г. принять участие в 1-м этапе Харьковской серии УТС по трофи рейдам КМБ трофи 2016!</h2>
                  <span>
    <button href="#" class="btn">Подробнее</button>
  </span>
        </div>
      </div>
      <div class="image">
        <img src="news3.png">
      </div>
    </div>
    <div class="slider">
      <div class="legend"></div>
      <div class="content">
        <div class="content-txt">
          <h1>Dirt c ross 2015</h1>
          <h2>Нива Харьков клуб приглашает всех любителей и фанатов бездорожья на одно из самых драйвовых мероприятий уходящего сезона!</h2>
  <span>
    <button href="#" class="btn">Подробнее</button>
  </span>
        </div>
      </div>
      <div class="image">
        <img src="news4.png">
      </div>
    </div>
  </div>
  <div class="switch">
    <ul>
      <li>
        <div class="on"></div>
      </li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>
</div>


<div id="div_body">

</div>


<section id="google-map">
  <div id="google-container"></div>
  <div id="zoom-in"></div>
  <div id="zoom-out"></div>
</section>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZ2Qtf7iln4clOzxNVTWOr6uVQINkZJQ0"></script>
<script src="js/main.js"></script>



<footer>
<iframe  class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2565.0859361036314!2d36.21886781542006!3d49.990998279414654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a0f976cc0779%3A0xa5d0dff1dbc5dede!2sTrophy-style!5e0!3m2!1sru!2sua!4v1484067599822" width="300" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
</footer>

</body>
