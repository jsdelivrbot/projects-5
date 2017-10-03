<div class="chat-col col-sm-6 col-md-6 col-lg-6">
    <div class="advisor-block">

        <!-- New widget -->
        <div class="inner-spacer">
            <div class="chat-container">
                <div class="top-buttons clearfix" style="padding-left:10px;">
                    <h2 class="margin-0px pull-left">Chat</h2>
                    <span class="badge">25</span>
                    <div class="btn-group btn-group-sm pull-right"> <a id="close-chat" class="btn btn-default"><i class="fa fa-thumbs-down"></i> <span class="hidden-xs">Leave</span></a> <a class="btn btn-default"><i class="fa fa-times-circle"></i> <span class="hidden-xs">Clear</span></a></div>
                </div>

                <div class="chat-container">
                    <div class="chat-pusher">
                        <div class="chat-content"><!-- this is the wrapper for the content -->
                            <div class="nano"><!-- this is the nanoscroller -->
                                <div class="nano-content">
                                    <div class="chat-content-inner"><!-- extra div for emulating position:fixed of the menu --> 

                                        <!-- Top Navigation -->

                                        <div class="clearfix">
                                            <div class="chat-messages">
                                                <ul>
                                                    <?php foreach ($messages as $message): ?>
                                                    <?php if ($message['status'] == 2) { ?>     
                                                        <li class="right clearfix"><span class="user-img pull-right"> <img src="<?= base_url('assets/images/client.jpg'); ?>" alt="User Avatar" /> </span>
                                                            <div class="chat-body clearfix">
                                                                <div class="header"> <span class="name">Anton Durant</span><span class=" badge"><i class="fa fa-clock-o"></i></span> </div>
                                                                <p> <?= $message['message']; ?></p>
                                                            </div>
                                                        </li>
                                                    <?php } else { ?>
                                                        <?php
                                                        $advisor = $this->db->where('id_advisor', $message['advisor_id'])->get('advisors')->row_array();
                                                        ?>

                                                    <li class="left clearfix"><span class="user-img pull-left"> <img src="<?= base_url('assets/images/' . $advisor['photo']); ?>" alt="User Avatar" class="img-circle" /> </span>
                                                            <div class="chat-body clearfix">
                                                                <div class="header"> <span class="name"><?= $advisor['advisor_name']; ?> </span> <span class="badge"><i class="fa fa-clock-o"></i></span> </div>
                                                                <p><?= $message['message']; ?></p>
                                                                <!--<img src="../images/tangy-free-psd-button-set.jpg" alt="">-->
                                                            </div>
                                                        </li>
                                                    <?php } endforeach; ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- /chat-content-inner --> 
                                </div>
                            </div>

                            <!-- /nano --> 

                        </div>

                        <!-- /chat-content --> 
                    </div>
                    <!-- /chat-pusher --> 
                </div>
            </div>
            <!-- /chat-container--> 

            <!--Chat-form -->
            <div class="chat-message-form">
                <div class="row">
                    <div class="col-md-12">
                        <textarea placeholder="Write Your Message Here" class="form-control margin-bottom message" rows="2"></textarea>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-8">
                        <div class="btn-group">
                            <button class=" btn btn-default"><i class="fa fa-location-arrow"></i></button>
                            <button class=" btn btn-default"><i class="fa fa-camera"></i></button>
                            <button class=" btn btn-default"><i class="fa fa-music"></i></button>
                            <button class=" btn btn-default"><i class="fa fa-file"></i></button>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <button class="btn btn-info pull-right send_message" type="button">Send!</button>
                    </div>
                </div>
            </div>

            <!-- /Chat-form --> 

        </div>
        <!-- End Widget --> 

    </div>
</div>
<div class="chat-col col-sm-2 col-md-2 col-lg-2"> 

    <!-- New widget -->
    <div class="powerwidget dark-blue" data-widget-editbutton="false">
        <header>
            <h2>Conversation Obj</h2>
        </header>
        <div class="inner-spacer advisor-block" style="margin-top:0;"">
            <div class="chat-container">

                <div class="dd nestable2">
                    <ol class="dd-list mobj">
                        <li class="dd-item" data-toggle="modal" data-target="#myModal">
                            <div class="dd-handle">Object 1</div>
                        </li>
                        <li class="dd-item" data-toggle="modal" data-target="#myModal">
                            <div class="dd-handle">Object 2</div>
                        </li>
                        <li class="dd-item" data-toggle="modal" data-target="#myModal">
                            <div class="dd-handle">Object 3</div>
                        </li>
                        <li class="dd-item" data-toggle="modal" data-target="#myModal">
                            <div class="dd-handle">Object 4</div>
                        </li>
                        <li class="dd-item" data-toggle="modal" data-target="#myModal">
                            <div class="dd-handle">Object 5</div>
                        </li>
                        <li class="dd-item" data-toggle="modal" data-target="#myModal">
                            <div class="dd-handle">Object 6</div>
                        </li>
                    </ol>
                </div>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Object 1</h4>
                            </div>
                            <div class="modal-body">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                        Option one is this and that&mdash;be sure to include why it's great
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                        Option two can be something else and selecting it will deselect option one
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" >
                                        Option three is disabled
                                    </label>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info">Start Chat</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
    <!-- End Widget --> 

</div>