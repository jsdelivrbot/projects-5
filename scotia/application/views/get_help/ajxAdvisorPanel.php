<div class="advisor-block">
    New widget 
    <div class="inner-spacer">
        <div class="chat-container">
            <div class="top-buttons clearfix" style="padding-left:10px;">
                <h2 class="margin-0px pull-left">Chat</h2>
                <span class="badge">25</span>
                <div class="btn-group btn-group-sm pull-right"> <a id="close-chat" class="btn btn-default"><i class="fa fa-thumbs-down"></i> <span class="hidden-xs">Leave</span></a> <a class="btn btn-default"><i class="fa fa-times-circle"></i> <span class="hidden-xs">Clear</span></a></div>
            </div>
            <div class="chat-container">
                <div class="chat-pusher">
                    <div class="chat-content"> 
                        <div class="nano"> 
                            <div class="nano-content">
                                <div class="chat-content-inner"> 
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                    <input type="hidden" value="1" class="advisor_id" />
                    <button class="btn btn-info pull-right send_message" type="button">Send!</button>
                </div>
            </div>
        </div>

    </div>

</div>