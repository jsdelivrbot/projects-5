<div class="content-wrapper"> 
    <!--Breadcrumb-->
    <div class="breadcrumb clearfix">
        <ul>
            <li><a href="#"><i class="fa fa-home"></i></a></li>
            <li><a href="#">Dashboard</a></li>
            <li class="active">Inbox</li>
        </ul>
    </div>
    <!--/Breadcrumb-->

    <!--<div class="page-header">
      <h1>Conversations<small>Advisors</small></h1>
    </div>-->

    <div class="row">

        <div id="advisor-col" class="col-sm-6 col-md-6 col-lg-6">
            <div class="powerwidget dark-blue" style="margin-bottom:0;">
                <header role="heading">
                    <h2>Clients</h2>
                </header>
            </div>
            <div class="advisor-block" style="margin-top:0;">

                <div class="tiny-user-block clearfix client" style="padding-right:10px;">
                    <input type="hidden" value="1" class="id_client" />
                    <div class="user-img"> <img src="<?= base_url('assets/images/client.jpg'); ?>" alt="User"/> <span class="badge msg-count">5</span></div>
                    <h3>Anton Durant <small class="pull-right sm-nobefore"> <span class="btn btn-success status-btn"></span> Online</small></h3>
                    <p class="advisor-info">Lorem ipsum dolor sit amet</p>
                </div>
            </div>
        </div>
        <div class="chat_col" id="chat_col" style="display: none;">
            
        </div>
    </div>

</div>
<script type="text/javascript" src="<?= base_url('assets/get_help/js/vendors/jquery/jquery.min.js'); ?>"></script> 
<script type="text/javascript">
    $(document).ready(function () {
        $('body').on('click', '.client', function () {
            var id_client = $('.id_client').val();
            $.ajax({
                type: "post",
                data: {'id_client': id_client},
                async: false,
                url: "<?= site_url('navs/ajxClientPanel') ?>",
                success: function (result) {
                    $('#chat_col').show();
                  $('#chat_col').html(result);
                }
            });
        });
        $('body').on('click', '.send_message', function () {
            var advisor_id = $('.advisor_id').val();
            var message = $('.message').val();            
            //alert(message);
            $.ajax({
                type: "post",
                data: {'advisor_id': advisor_id, 'message': message},
                async: false,
                url: "<?= site_url('navs/ajxClientSendMessage') ?>",
                success: function (result) {
                    $('#chat_col').show();
                   $('#chat_col').html(result);
                }
            });
        });
        $.ajax({
            type: "POST",
            url: '<?= site_url('navs/refresh_client') ?>'
                    // serializes the form's elements.
            , success: function (result) {
                
                $('#chat_col').html(result);

            }
        });
        setInterval(function () {
            $("#chat_col").load('<?= site_url('navs/refresh_client') ?>')
        }, 10000);
    });
</script>