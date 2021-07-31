<?php
include_once('./_path.php');
$current_menu = '요기보드' ;
require_once(SKIN_DIR .'/layout1.php');  // 1단 레이아웃 
?>
<!---- 본문내용 시작 (여기에 이페이지 본문에 들어갈 내용을 Html 로 입력) ---->
<!-- Carousel  -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active" ></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1" ></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2" ></li>
</ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/image1.jpg" alt="그림1" class="h-100 w-100" >
    </div>
    <div class="carousel-item">
      <img src="img/image2.jpg" alt="그림2" class="h-100 w-100" >
    </div>
    <div class="carousel-item">
      <img src="img/image3.jpg" alt="그림3" class="h-100 w-100" >
    </div>
  </div>
  <a class="carousel-control-prev"  href="#carouselExampleIndicators" data-slide="prev">
    <span class="carousel-control-prev-icon" ></span>
    
</a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" data-slide="next">
    <span class="carousel-control-next-icon" ></span>
    
</a>
</div>
<!-- Carousel -->

<!---- 본문내용 끝 ----------------------------------->
<?php
require_once(SKIN_DIR . '/footer.php');  // 페이지 끝(Footer)
?>