<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
<script>
$(document).ready(function() {
    var activeTabId = localStorage.getItem('activeTab');
    if (activeTabId) {
        setActiveTab('#' + activeTabId);
    } else {
        setActiveTab('#homeLink');
    }

    $('#homeLink').click(function() {
        setActiveTab(this);
        $('#content').load(' #content > *', function() {
            updateHoriSelector();
        });
    });

    $('#projectsLink').click(function() {
        setActiveTab(this);
        $('#content').load('project #content > *', function() {
            updateHoriSelector(); 
        });
    });
	$('#portfolioLink').click(function() {
        setActiveTab(this);
        $('#content').load('portfolio #content > *', function() {
            updateHoriSelector(); 
        });
    });
	$('#contactLink').click(function() {
        setActiveTab(this);
        $('#content').load('contact #content > *', function() {
            updateHoriSelector(); 
        });
    });

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
            }, 50);
        } else {
            $(".hori-selector").css({
                "top": itemPosTop + "px", 
                "left": itemPosLeft + "px"
            });
        }
    }
});

</script>
