<script>
// Calling the function
setFixMenu('.menu','posit');
 
function setFixMenu(element,stickyCssClass) {
    // get the top offset of the menu element
    var menuTop = $(element).offset().top;
    // trigger the function when the windows scroll
    $(window).scroll(function(){
        // get total scrolling
        var htmlTop = $(window).scrollTop(); 
        // check if the scrolling is less than top offset of menu
        // then stick the menu on top by adding the stickyCssClass
        // If not then set the menu at it's default position by removing the stickyCssClass
        if (htmlTop > menuTop) {
            // add the class to stick on top
            $(element).addClass(stickyCssClass);
        } else {
            // remove the stick on top class
            $(element).removeClass(stickyCssClass);
        }
    });
}
</script>