<p>Temporaire</p>


<div id="animationBallon"><p onclick="cliqueAnimations()">CLique !</p></div>
<script type="text/javascript" src="js/modeles/animations.js"></script>
<script src="js/vues/vueAnimationGD.js"></script>
<script type="text/javascript" src="js/mainAnimations.js"></script>








<script>
var liCount;
$(document).ready(function () {
  $(".filter-list ul").each(function () {
    liCount = $(this).children("li").length;
    if (liCount > 3) {
      $(this).next(".more").addClass("showMe");
    }
  });

  $(".more").click(function () {
    $(this).prev("ul").find("li").addClass("showList");
    $(this).hide();
  });
});

</script>