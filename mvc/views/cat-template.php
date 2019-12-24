<?php require_once 'mvc/views/partial/head-html.php'; ?>
<body class="home">
<?php require_once 'mvc/views/partial/cat-header.php'; ?>
    
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

  

