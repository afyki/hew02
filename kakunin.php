<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <title></title>
  <link href="css/design.css" rel="stylesheet" type="text/css">

  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script type="text/javascript">

  $(function(){
    $('a[href^=#]').click(function(){
      var speed = 1000;
      var href= $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top;
      $("html, body").animate({scrollTop:position}, speed, "swing");
      return false;
    });
  });
  </script>

  <script>
  $(function() {
    var Accordion = function(el, multiple) {
      this.el = el || {};
      // more then one submenu open?
      this.multiple = multiple || false;

      var dropdownlink = this.el.find('.dropdownlink');
      dropdownlink.on('click',
      { el: this.el, multiple: this.multiple },
      this.dropdown);
    };

    Accordion.prototype.dropdown = function(e) {
      var $el = e.data.el,
      $this = $(this),
      //this is the ul.submenuItems
      $next = $this.next();

      $next.slideToggle();
      $this.parent().toggleClass('open');

      if(!e.data.multiple) {
        //show only one menu at the same time
        $el.find('.submenuItems').not($next).slideUp().parent().removeClass('open');
      }
    }

    var accordion = new Accordion($('.accordion-menu'), false);
  })
  </script>

</head>

<body>
  <div id="wrapper000">

    <div class="title01">
      <a href="index.html"><img src="images/aaaa01.png"></a>
      <div id="nav">
        <h2>北新地サンド</h2>
        <ul class="accordion-menu">
          <li>
            <div class="dropdownlink"><i class="fa fa-road" aria-hidden="true"></i> MENU
							<i class="fa fa-chevron-down" aria-hidden="true"></i>
						</div>
						<ul class="submenuItems">
							<li><a href="menu.html">❐GRANDMENU</a></li>
						</ul>
					</li>
					<li>
						<div class="dropdownlink"><i class="fa fa-paper-plane" aria-hidden="true"></i>概要
							<i class="fa fa-chevron-down" aria-hidden="true"></i>
						</div>
						<ul class="submenuItems">
							<li><a href="tenpo.html">❐店舗情報</a></li>
						</ul>
					</li>
					<li>
						<div class="dropdownlink"><i class="fa fa-quote-left" aria-hidden="true"></i>口コミ
							<i class="fa fa-chevron-down" aria-hidden="true"></i>
						</div>
						<ul class="submenuItems">
							<li><a href="#">レビュー</a></li>
						</ul>
					</li>
					<li>
						<div class="dropdownlink"><i class="fa fa-motorcycle" aria-hidden="true"></i>アクセス
							<i class="fa fa-chevron-down" aria-hidden="true"></i>
						</div>
						<ul class="submenuItems">
							<li><a href="akusesu.html">❐北新地</a></li>
							<li><a href="akusesu2.html">❐心斎橋</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>

<div class="rev">
    <h1>口コミ</h1>
    <hr>
  <div class="rev2">
    <div class="del">削除しますか？</div>

    <div class="botan">
      <form action="delete.php" method="get">
        <center><input type="submit" value = "は い"></center>
      </form>
    </div>

    <div class="botan3">
      <form action="index2.php" method="get">
        <center><input type="submit" value = "いいえ"></center>
      </form>
    </div>
  </div>
  </div>
    <div id="footer03">
  <div class="text001">
    <p>住所	大阪府大阪市北区曽根崎新地1-2-11 アレーナ堂島 1F</p>
    <p>交通手段　JR北新地駅徒歩３分 北新地駅から161m</p>
    <p>営業時間	18:00～翌4:00</p>
    <p>定休日	日曜日・祝日</p>
  </div>
</div>
  </div>



</body>
</HTML>
