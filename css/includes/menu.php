<style type="text/css">
#blfix{
    display:none;
    opacity: 0.9;
    width: 100%;
    height: 53px;
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
