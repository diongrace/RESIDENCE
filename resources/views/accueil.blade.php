
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Furnish | HTML Design</title>
    
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS Style -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- Used Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,700" rel="stylesheet" type="text/css">

    <!-- JavaScript -->
    <script type="text/javascript" src="{{asset('js/jquery-1.9.1.min.js')}}"></script>
  <script type="text/javascript">
    var themeListOpen = false;
    $(document).ready(function () {
        function adjustIframeHeight() {
            var switcherHeight = $("#switcher").height();
            $("#iframe").attr("height", $(window).height() - switcherHeight + "px");
        }

        var isIpad = navigator.userAgent.match(/iPad/i) != null;

        $(window).resize(function () {
            adjustIframeHeight();
        }).resize();

        $("#theme_select").click(function () {
            if (themeListOpen === true) {
                $(".center ul li ul").hide();
                themeListOpen = false;
            } else {
                $(".center ul li ul").show();
                themeListOpen = true;
            }
            return false;
        });

        $("#theme_list ul li a").click(function () {
            var relValues = $(this).attr("rel").split(",");
            $("li.purchase a").attr("href", relValues[1]);
            $("li.remove_frame a").attr("href", relValues[0]);
            $("#iframe").attr("src", relValues[0]);
            window.location.href = "?theme=" + relValues[2];
            $("li.close a").attr("src", relValues[0]);
            $("#theme_list a#theme_select").text($(this).text());
            $(".center ul li ul").hide();
            themeListOpen = false;
            return false;
        });

        $("#header-bar").hide();
        var clicked = "desktop";
        var devices = {
            desktop: "100%",
            tabletlandscape: 1040,
            tabletportrait: 788,
            mobilelandscape: 500,
            mobileportrait: 340,
            placebo: 0
        };

        jQuery(".responsive a").on("click", function () {
            var clickedDevice = jQuery(this);
            for (var device in devices) {
                if (clickedDevice.hasClass(device)) {
                    clicked = device;
                    jQuery("#iframe").width(devices[device]);
                    if (clicked === device) {
                        jQuery(".responsive a").removeClass("active");
                        clickedDevice.addClass("active");
                    }
                }
            }
            return false;
        });

        if (isIpad) {
            $("#iframe").css("padding-bottom", "60px");
        }
    });
</script>

</head>
<body>
    <div id="switcher">
        <div class="center">
            <div class="responsive">
                <div class="itemname">SPEACEFUL RESIDENCE</div>
           		<a href="#" class="desktop active" title="View Desktop Version"></a>
				<a href="#" class="tabletlandscape" title="View Tablet Landscape (1024x768)"></a>
				<a href="#" class="tabletportrait" title="View Tablet Portrait (768x1024)"></a>
				<a href="#" class="mobilelandscape" title="View Mobile Landscape (480x320)"></a>
				<a href="#" class="mobileportrait" title="View Mobile Portrait (320x480)"></a>
            </div>
        </div>
    </div>

    <iframe id="iframe" src="https://html.design/demo/furnish/index.html" frameborder="0" width="100%"></iframe>
    <!-- Additional scripts if needed -->
    <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5a7fc9b308e4bc00136bbe96&product=sticky-share-buttons"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
			<script async src="https://www.googletagmanager.com/gtag/js?id=UA-45529136-9"></script>
			<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-45529136-9');
			</script>
			<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5351821530950623"
			crossorigin="anonymous"></script>

			<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5351821530950623"
			crossorigin="anonymous"></script>

</body>
</html>

