<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
<script>
    function setActiveTab(selector) {
        $('#navbarSupportedContent ul li').removeClass("active");
        $(selector).parent().addClass('active');
        updateHoriSelector();
        localStorage.setItem('activeTab', $(selector).attr('id'));
    }

    function updateHoriSelector(withAnimation = true) {
        var activeItem = $('#navbarSupportedContent').find('.active');
        var activeWidthHeight = activeItem.innerHeight();
        var activeWidthWidth = activeItem.innerWidth();
        var itemPosTop = activeItem.position().top;
        var itemPosLeft = activeItem.position().left;

        $(".hori-selector").css({
            "height": activeWidthHeight + "px",
            "width": activeWidthWidth + "px",
        });

        if (withAnimation) {
            $(".hori-selector").animate({
                "top": itemPosTop + "px", 
                "left": itemPosLeft + "px"
            }, 300);
        } else {
            $(".hori-selector").css({
                "top": itemPosTop + "px", 
                "left": itemPosLeft + "px"
            });
        }
    }

    $(document).ready(function(){
        var activeTabId = localStorage.getItem('activeTab');
        if (activeTabId) {
            setActiveTab('#' + activeTabId);
        } else {
            setActiveTab('#homeLink');
        }

        $(window).on('resize', function(){
            setTimeout(function() { updateHoriSelector(false); }, 500);
        });

        $(".navbar-toggler").click(function(){
            $(".navbar-collapse").slideToggle(300);
            setTimeout(function() { updateHoriSelector(false); });
        });

        $('#navbarSupportedContent ul li a').click(function(e) {
            e.preventDefault();
            setActiveTab(this);
            
            var target = $(this).attr('href');

            $('html, body').animate({
                scrollTop: $(target).offset().top
            }, 800);
        });
    });
</script>
