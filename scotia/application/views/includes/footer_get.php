        </div>
        <!-- / Content Wrapper --> 
        <!--/MainWrapper--> 

    </div>
    <!--/Smooth Scroll--> 


    <!-- scroll top -->
    <div class="scroll-top-wrapper hidden-xs">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- /scroll top -->



    <!--Modals-->

    <!--Power Widgets Modal-->
    <div class="modal" id="delete-widget">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <i class="fa fa-lock"></i> </div>
                <div class="modal-body text-center">
                    <p>Are you sure to delete this widget?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" id="trigger-deletewidget-reset">Cancel</button>
                    <button type="button" class="btn btn-primary" id="trigger-deletewidget">Delete</button>
                </div>
            </div>
            <!-- /.modal-content --> 
        </div>
        <!-- /.modal-dialog --> 
    </div>
    <!-- /.modal --> 

    <!--Sign Out Dialog Modal-->
    <div class="modal" id="signout">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <i class="fa fa-lock"></i> </div>
                <div class="modal-body text-center">Are You Sure Want To Sign Out?</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" id="yesigo">Ok</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content --> 
        </div>
        <!-- /.modal-dialog --> 
    </div>
    <!-- /.modal --> 


    <!--Scripts--> 
    <!--JQuery--> 
    <script type="text/javascript" src="<?= base_url('assets/get_help/js/vendors/jquery/jquery.min.js'); ?>"></script> 
    <script type="text/javascript" src="<?= base_url('assets/get_help/js/vendors/jquery/jquery-ui.min.js'); ?>"></script> 

    <!--Fullscreen--> 
    <script type="text/javascript" src="<?= base_url('assets/get_help/js/vendors/fullscreen/screenfull.min.js'); ?>"></script> 

    <!--NanoScroller--> 
    <script type="text/javascript" src="<?= base_url('assets/get_help/js/vendors/nanoscroller/jquery.nanoscroller.min.js'); ?>"></script> 

    <!--Sparkline--> 
    <script type="text/javascript" src="<?= base_url('assets/get_help/js/vendors/sparkline/jquery.sparkline.min.js'); ?>"></script> 

    <!--Horizontal Dropdown--> 
    <script type="text/javascript" src="<?= base_url('assets/get_help/js/vendors/horisontal/cbpHorizontalSlideOutMenu.js'); ?>"></script> 
    <script type="text/javascript" src="<?= base_url('assets/get_help/js/vendors/classie/classie.js'); ?>"></script> 

    <!--PowerWidgets--> 
    <script type="text/javascript" src="<?= base_url('assets/get_help/js/vendors/powerwidgets/powerwidgets.min.js'); ?>"></script> 

    <!--Bootstrap--> 
    <script type="text/javascript" src="<?= base_url('assets/get_help/js/vendors/bootstrap/bootstrap.min.js'); ?>"></script> 

    <!--ToDo--> 
    <script type="text/javascript" src="<?= base_url('assets/get_help/js/vendors/todos/todos.js'); ?>"></script> 

    <!--Main App--> 
    <script type="text/javascript" src="<?= base_url('assets/get_help/js/scripts.js'); ?>"></script>

    <script type="text/javascript">
            $(".advisor-block .tiny-user-block").click(function(){
                    $(".tiny-user-block").removeClass("active");
                    $(".responsive-admin-menu").addClass("sidebar-toggle");
                    $(".content-wrapper").addClass("main-content-toggle-left");
                    $(".advisor-info").hide();
                    $("#advisor-col").addClass("col-sm-4 col-md-4 col-lg-4");
                    $(this).addClass("active");
                    $("#advisor-col").removeClass("col-sm-6 col-md-6 col-lg-6");
                    $("#chat-col").show(500);
            });
    </script>

    <!--/Scripts-->

</body>
</html>