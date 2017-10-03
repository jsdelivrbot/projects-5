$(document).ready(function() {


    $(".ivz_leftAccordionHeading").on("click", function() { //select all like elements, add following function to occur on click
        var $this = $(this); //establish which individual element was clicked
        $this.toggleClass("arrowOpen"); //utility function, will detect current state, and either add or remove class
        $this.next().slideToggle("fast"); //utility function, will detect current state, and either animate to hide or show
    });
    if ($(".ivz_leftAccordionHeading").length <= 1) {
        $(".ivz_leftAccordionHeading").off();
    } //if there is 1 (or less) menus, do not allow them to be collapsible.
    $(".ivz_leftAccordionHeading.arrowClosed").next().css("display", "none"); //if class is added to menu, it will be close on load


    $(".ivz_sortableTable").tablesorter({
        sortList: [
            [0, 0]
        ]
    });



    $(".ivz_notification").delay(1500).slideDown(500);
    $(".notification_close").on("click", function() {
        $(this).parent().slideUp(200);
    });


    if ($(".ivz_pageIntro").html() === "") { //if there is no intro text, hide the container, to avoid showing background color on mobile resolutions
        $(".ivz_pageIntro").css("display", "none");
        //        console.log(" NO content");
    } else {
        //        console.log("there is content");
    }



    // check for web page option display title
    if ($("#webPageOption").length) {
        var pageDisplayTitle = $("#pageDisplayTitle").html();
        $("#webPageOption").data("displaytitle", pageDisplayTitle);
    }
}); //end of doc ready



//*************Stepped modal calls*************//


$(document).ready(function() {

    $("#modal_forgotPword").on("click", {
        previous: "advisorLogin",
        next: "forgotPword1"
    }, multiStepModal);
}); //end of doc ready

function multiStepModal(event) {
    var previousModal = $("#" + event.data.previous);
    var nextModal = $("#" + event.data.next);
    previousModal.modal('hide');

    $(previousModal).on('hidden.bs.modal', function() {
        // Load up a new modal...
        $(nextModal).modal('show');
    });

}



//*************MEGA & MOBILE MENu*************//

$(document).ready(function() {

    $(".ivz_MM_list li").on('click', function() {
        var $this = $(this);

        if ($this.hasClass('directLink')) {
            return;
        }

        if ($this.hasClass("ivz_MM_selectedDropDown")) {
            $(".ivz_MM_dropDown").css('display', 'none');
            $this.removeClass('ivz_MM_selectedDropDown');
            return;
        } else {
            $(".ivz_MM_list li").removeClass('ivz_MM_selectedDropDown');
            $(".ivz_MM_dropDown").css('display', 'none');
            $this.addClass("ivz_MM_selectedDropDown");
            var newMenu = $this.data('megamenu');
            $(".ivz_MM_" + newMenu).css('display', 'block');
            newMenu = $(".ivz_MM_" + newMenu);
            megaMenuCloseListener(newMenu); //to have menu close on outside click
        }
    });

//mobile menu 
    $(".mobileMenuParentBTN").on("click", function() {
        $("#mobileMenu").toggleClass("openMenu");
        $(".mobileMenuParentBTN").removeClass("selectedMobileNav");
        var $this = $(this);
        $this.addClass('selectedMobileNav');


        if ($this.data("menu") === "chat") {
            $this.removeClass('selectedMobileNav');
            return;
        }

        var newOpenMenu = "#ivz_mobileChild_" + $this.data("menu");


        if ($(newOpenMenu).css("display") === "block") {
            $(".mobileChildNavContainer").slideUp(400);
            $this.removeClass('selectedMobileNav');
            return;
        }

        $(".mobileChildNavContainer").slideUp(400);
        $(newOpenMenu).slideDown();

    });

    //mobile accodrion
    $('.ivz_mobileMenu_parentItem').on('click', function() {
        var $this = $(this);
        var allMenus = $('.ivz_mobileMenu_parentItem');

        if ($this.next().css('display') == "block") {
            $this.next().slideUp(400, function() {
                $this.removeClass("ivz_mobileMenu_parentItemOpen");
            });

            return;
        }

        allMenus.removeClass('ivz_mobileMenu_parentItemOpen');
        allMenus.next().slideUp(400);

        $this.addClass('ivz_mobileMenu_parentItemOpen');

        if ($(".ivz_mobileMenu_accordion:visible").length === 0) {
            //no other menu showing, no delay in opening new menu
            $this.next().slideDown(500);
            return;
        }

        $this.next().delay(400).slideDown(500);
    });

    $("#ivz_pageControls_print").on("click", function() {
        window.print();
    });

}); //end of doc ready

function megaMenuCloseListener(currMenu) {

    var $this = currMenu;
    $('.ivz_mainBgContainer').on("click", function(e) {

        var target = $(e.target);
        if (target.parent().hasClass('ivz_MM_list')) {
            return;
        } //stops menu from auto closing when clicking on MM_list, maintains mainBgContainer click listener
        if (target.hasClass("ivz_MM_dropDown") || target.parents().hasClass("ivz_MM_dropDown")) {
            return;
        }
        $this.hide();
        $(".ivz_MM_list li").removeClass('ivz_MM_selectedDropDown');
        $('.ivz_mainBgContainer').off('click');
        if ($this.css('display', 'none')) {
            $(".ivz_MM_list li").removeClass('ivz_MM_selectedDropDown');
        }
    });
}

//*************END OF MEGA & MOBILE MENu*************//

/****Main body accordion init ******/
$(document).ready(function() {
    if ($(".ivz_mainAccordion_header").length > 0) {

        $(".ivz_mainAccordion_header").on("click", function() {
            var $this = $(this);
            var thisPanel = $this.next(".ivz_mainAccordion_body");

            if ($this.hasClass("open")) {
                thisPanel.slideUp(500);
                $this.removeClass("open");
                return;
            }

            if ($(".ivz_mainAccordion_header").hasClass("open")) {

                $(".ivz_mainAccordion_header.open").next().slideUp(400, function() {
                    $(".ivz_mainAccordion_header").removeClass("open");
                    $this.addClass("open");
                    thisPanel.delay(100).slideToggle(500);
                });
            } else {
                $this.addClass("open");
                thisPanel.slideDown(500);
            }



        })


    }

});


/****POPOVER ******/
$( document ).ready(function() {
    $("[data-toggle='popover']").popover();
}); 


/****AUM TOGGLE ******/
$(document).ready(function() {

    $("body").on("click","#aum_toggle_btn", function () {
        $("#dashboard_aum_toggleContainer").hide();
        $("#dashboard_aum_display").show();
    });
});


// hash tag fix for bootstrap tab linking
$(document).ready(function(){
var hash = document.location.hash;
    var prefix = "tab_";
      if (hash) {
        $('.nav-tabs a[href="'+hash.replace(prefix,"")+'"]').tab('show');
      } 

    // Change hash for page-reload
    $('.nav-tabs a').on('shown', function (e) {
    window.location.hash = e.target.hash.replace("#", "#" + prefix);
    });

});