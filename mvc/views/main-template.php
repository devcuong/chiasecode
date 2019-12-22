<!DOCTYPE html>
<html lang="vi" xml:lang="vi" xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head><title>
	Cộng đồng chia sẻ và download source code, mã nguồn, đồ án miễn phí
</title><link rel="shortcut icon" href="assets/images/sharecode.ico" type="image/x-icon" /><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta name="robots" content="noodp,index,follow" /><meta name="revisit-after" content="1 days" /><meta content="sharecode.vn" name="author" /><meta content="Global" name="distribution" /><meta content="sharecode.vn" name="copyright" /><meta name="dc.creator" content="ShareCode" /><meta name="generator" content="Sharecode.vn" /><meta name="viewport" content="width=device-width, initial-scale=1" /><meta name="twitter:card" value="summary" /><meta property="og:site_name" content="Sharecode.vn" />
<link rel="stylesheet" type="text/css" href="mvc/public/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="mvc/public/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="mvc/public/css/select2.min.css" />
<link rel="stylesheet" type="text/css" href="mvc/public/css/owl.carousel.css" />
<link rel="stylesheet" type="text/css" href="mvc/public/css/jquery-ui.min.css" />
<link rel="stylesheet" type="text/css" href="mvc/public/css/animate.css" />
<link rel="stylesheet" type="text/css" href="mvc/public/css/reset.css" />
<link rel="stylesheet" type="text/css" href="mvc/public/css/style.css" />
<meta name="description" content="Thư viện chia sẻ và download source code, upload code kiếm tiền, tổng hợp các mã nguồn và đồ án, kiến thức lập trình chuyên nghành công nghệ thông tin" />
<meta name="keywords" content="Downloads source code, đồ án, mã nguồn, source code web, do an lap trinh, Source Code free, source web bán hàng,share code" />
<meta property="og:image" content="assets/images/logo_sharecode.png" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Cộng đồng chia sẻ và download source code, mã nguồn, đồ án miễn phí" />
<meta property="og:url" content="index.html" />
<meta property="og:description" content="Thư viện chia sẻ và download source code, upload code kiếm tiền, tổng hợp các mã nguồn và đồ án, kiến thức lập trình chuyên nghành công nghệ thông tin" />
<link href="index.html" rel="canonical" />
<link rel="stylesheet" type="text/css" href="mvc/public/css/jquery.bxslider.css" />
<link rel="stylesheet" type="text/css" href="mvc/public/css/responsive.css" /></head>
<body class="home">
<?php require_once 'mvc/views/partial/main-header.php'; ?>
    
    <div class="container" id="columns">
        <div id="mainbody_upPannel">
                <div class="row" itemscope itemtype="http://schema.org/ItemList">
                    <div class="center_column col-xs-12 col-sm-12" id="center_column">
                    <?php require_once "./mvc/views/pages/" . $data["Page"] . ".php"?>
                    </div>
                </div>

</div>
    </div>
<script src="assets/js/floater_xlib.js"></script>
<script type="text/javascript">
    var slideTime = 600;
    var floatAtBottom = false;
    function winOnResize() {
        checkScreenWidth();
        winOnScroll(); // initial slide
    }

</script>
    <!-- footer -->
    <?php require_once 'mvc/views/partial/main-footer.php'; ?>

    <a href="#" class="scroll_top" title="Lên đầu" style="display: inline;"></a>
    <!-- Script-->
    <script type="text/javascript" src="mvc/public/js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="mvc/public/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="mvc/public/js/select2.min.js"></script>
    <script type="text/javascript" src="mvc/public/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="mvc/public/js/jquery.actual.min.js"></script>
    <script type="text/javascript" src="mvc/public/js/theme-script.js"></script>
    <script type="text/javascript" src="mvc/public/js/jquery-ui.min.js"></script>

    <script type="text/javascript">
        $('.carousel').carousel({
            interval: 5000
        })
        $(document).ready(function () {
            //duy tri alive: 5 minutes
            setInterval("KeepSessionAlive()", 300000);
            $('.txt-auto').autocomplete({
                source: TagSuggest,
                minLength: 2,
                html: true
            });
        });
        //auto
        (function ($) { var proto = $.ui.autocomplete.prototype, initSource = proto._initSource; function filter(array, term) { var matcher = new RegExp($.ui.autocomplete.escapeRegex(term), "i"); return $.grep(array, function (value) { return matcher.test($("<div>").html(value.label || value.value || value).text()); }); } $.extend(proto, { _initSource: function () { if (this.options.html && $.isArray(this.options.source)) { this.source = function (request, response) { response(filter(this.options.source, request.term)); }; } else { initSource.call(this); } }, _renderItem: function (ul, item) { return $("<li></li>").data("item.autocomplete", item).append($("<a></a>")[this.options.html ? "html" : "text"](item.label)).appendTo(ul); } }); })(jQuery);
        var cache = {};
    </script>
    <script type="application/ld+json">
{ "@context" : "http://schema.org",
  "@type" : "Organization",
  "legalName" : "sharecode.vn",
  "url" : "https://sharecode.vn",
  "contactPoint" : [{
    "@type" : "ContactPoint",
    "telephone" : "+84981282756",
    "contactType" : "customer service"
  }],
        "potentialAction" : {
    "@type" : "SearchAction",
    "target" : "https://sharecode.vn/tim-kiem.htm?tu-khoa={search_term}",
    "query-input" : "required name=search_term"
  }
}
    </script>
    <div class="hisella-messages">
        <div class="hisella-messages-outer">
            <div id="hisella-minimize">&nbsp;HỖ TRỢ TRỰC TUYẾN</div>
            <div id="hisella-facebook" class='fb-page' data-adapt-container-width='true' data-height='350' data-hide-cover='false' data-href='https://www.facebook.com/sharecode.vn' data-show-facepile='true' data-show-posts='false' data-small-header='false' data-tabs='messages' data-width='250'></div>
        </div>
    </div>
    <script type="text/javascript" src="mvc/public/js/jquery.bxslider.min.js"></script>
</body>
</html>
