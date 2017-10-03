<div class="content-wrapper"> 
    <!--Breadcrumb-->
    <div class="breadcrumb clearfix">
        <ul>
            <li><a href="#"><i class="fa fa-home"></i></a></li>
            <li><a href="#">Dashboard</a></li>
            <li class="active">Conversations</li>
        </ul>
    </div>
    <!--/Breadcrumb-->
    <div class="row">

        <div id="advisor-col" class="col-sm-6 col-md-6 col-lg-6">
            <div class="powerwidget dark-blue" style="margin-bottom:0;">
                <header role="heading">
                    <h2>Advisors</h2>
                </header>
            </div>
            <div class="advisor-block" style="margin-top:0;">
                <?php foreach ($advisors as $advisor): ?>
                    <div class="tiny-user-block clearfix advisor">
                        <input type="hidden" value="<?= $advisor['id_advisor']; ?>" class="id_advisor" />
                        <div class="user-img"> <img src="<?= base_url('assets/images/' . $advisor['photo']); ?>" alt="User"/> </div>
                        <div class="user-img" style="right:10px; left:auto;"> <img src="<?= base_url('assets/images/favicon.jpg'); ?>" alt="User"/> </div>
                        <h3><?= $advisor['advisor_name']; ?> <small class="pull-right sm-nobefore"> <span class="btn btn-success status-btn"></span> Online</small></h3>
                        <p class="text-blue"><?= $advisor['designation']; ?></p>
                        <p class="advisor-info">Lorem ipsum dolor sit amet</p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div id="chat_col" style="display: none;" class="col-sm-8 col-md-8 col-lg-8">
           
        </div>
    </div>

</div>
<script type="text/javascript" src="<?= base_url('assets/get_help/js/vendors/jquery/jquery.min.js'); ?>"></script> 
<script type="text/javascript">
    $(document).ready(function () {
        $('body').on('click', '.advisor', function () {
            var id_advisor = $('.id_advisor').val();
            $.ajax({
                type: "post",
                data: {'id_advisor': id_advisor},
                async: false,
                url: "<?= site_url('navs/ajxAdvisorPanel') ?>",
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
                url: "<?= site_url('navs/ajxSendMessage') ?>",
                success: function (result) {
                    $('#chat_col').show();
                   $('#chat_col').html(result);
                }
            });
        });
        $.ajax({
            type: "POST",
            url: '<?= site_url('navs/refresh') ?>'
                    // serializes the form's elements.
            , success: function (result) {
                $('#chat_col').html(result);

            }
        });
        setInterval(function () {
            $("#chat_col").load('<?= site_url('navs/refresh') ?>')
        }, 20000);
    });
</script>


