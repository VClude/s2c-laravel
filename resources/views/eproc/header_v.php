<div class="row border-bottom">

  <nav class="navbar navbar-static-top navbar-fixed-top" role="navigation" style="margin-bottom: 0"> 

    <div class="navbar-header hidden-lg">
      <a class="navbar-minimalize minimalize-styl-2 btn btn-primary ">
        <i class="fa fa-bars"></i> 
      </a>

    </div>
    <ul class="nav navbar-top-links navbar-left">
     <li><a href="#" style="font-weight: bold" id="servertime"></a></li>
   </ul>
   <ul class="nav navbar-top-links navbar-right">

  <!--   <span class="m-r-sm text-muted welcome-message">iProc v.1.3</span> -->
  </li>


        <li class="dropdown">
              <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#" aria-expanded="true">
                  <i class="fa fa-envelope"></i>
                  <span class="label label-info pull-right">
                    <?php echo $this->session->userdata('jml_chat') ?>
                  </span>
              </a>
              <?php if($this->session->userdata('jml_chat')) { ?>
              <ul class="dropdown-menu dropdown-alerts" style="overflow-y: auto">
            
                <?php foreach ($this->session->userdata('chat') as $chat) { ?>
                      <li>
                         <a href="<?= site_url($chat['url'].'?showchat=1') ?>">
                             <div>
                                 <i class="fa fa-comment"></i>&nbsp;&nbsp;<?php echo $chat['number'] ?> <br>
                                 &nbsp;&nbsp;&nbsp;&nbsp; <small><?php echo substr($chat['pesan'],0,30)?> ...</small>
                             </div>
                         </a>
                      </li>
                  <li class="divider"></li>
                <?php } ?>
              </ul>
              <?php } else {?>
                  <ul class="dropdown-menu dropdown-alerts" style="overflow-y: auto">
                          <li>
                            <div class="text-center">
                             <h5>Tidak ada Pesan </h5>
                            </div>
                          </li>
                      <li class="divider"></li>
                  </ul>
              <?php } ?>
          </li>

          <li class="divider"></li>

          <li class="dropdown">
          <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#" aria-expanded="true">
           
             
              <i class="fa fa-bell"></i> <span class="label label-warning"><?php
                echo $this->session->userdata('procCtr');
              ?></span>
          </a>
          <ul class="dropdown-menu dropdown-alerts" style="overflow-y: auto">
              <li>
                  <a href="<?php echo base_url() ?>procurement/daftar_pekerjaan">
                      <div>
                          <i class="fa fa-laptop"></i> Procurement
                      <?php echo $this->session->userdata('jml_procurement') ?>
                      </div>
                  </a>
              </li>
              <li class="divider"></li>

              <?php
              if( isset( $position_id ) ) { 
                $position_id = $position_id;
            } else{
              $position_id = null;
              }
              if ($position_id == 19) { ?>
                   <li>
                       <a href="<?php echo base_url() ?>procurement/procurement_tools/e_auction">
                           <div>
                               <i class="fa fa-btc"></i> E-auction
                           <?php echo $this->session->userdata('jml_Auction') ?>
                           </div>
                       </a>
                   </li>
                   <li class="divider"></li>
              <?php } ?>
              <li>
                  <a href="<?php echo base_url() ?>contract/daftar_pekerjaan">
                      <div>
                          <i class="fa fa-file"></i> Contract
                          <?php echo $this->session->userdata('jml_contract') ?>
                      </div>
                  </a>
              </li>
              <li class="divider"></li>

              <?php
              if( isset( $position_id ) ) { 
                $position_id = $position_id;
            } else{
              $position_id = null;
              }
              if ($position_id == 169) { ?>
                   <li>
                       <a href="<?php echo base_url() ?>vendor/aktivasi_suspend_vendor">
                           <div>
                               <i class="fa fa-truck"></i> Vendor
                           <?php echo $this->session->userdata('jml_SuspendVendor') ?>
                           </div>
                       </a>
                   </li>
                   <li class="divider"></li>
              <?php } ?>
              <!-- <li>
                  <a href="grid_options.html">
                      <div>
                          <i class="fa fa-upload fa-fw"></i> Kontrak
                          <span class="label label-success pull-right">8</span></span>
                      </div>
                  </a>
              </li>
              <li class="divider"></li>
              <li>
                  <a href="grid_options.html">
                      <div>
                          <i class="fa fa-upload fa-fw"></i> Work Order
                          <span class="label label-success pull-right">8</span></span>
                      </div>
                  </a>
              </li>
              <li class="divider"></li>
              <li>
                  <a href="grid_options.html">
                      <div>
                          <i class="fa fa-upload fa-fw"></i> Progress WO
                          <span class="label label-success pull-right">8</span></span>
                      </div>
                  </a>
              </li>
              <li class="divider"></li>
              <li>
                  <a href="grid_options.html">
                      <div>
                          <i class="fa fa-upload fa-fw"></i> Progress Milestone
                          <span class="label label-success pull-right">8</span></span>
                      </div>
                  </a>
              </li>
              <li class="divider"></li>
              <li>
                  <a href="grid_options.html">
                      <div>
                          <i class="fa fa-upload fa-fw"></i> BAST WO
                          <span class="label label-success pull-right">8</span></span>
                      </div>
                  </a>
              </li>
              <li class="divider"></li>
              <li>
                  <a href="grid_options.html">
                      <div>
                          <i class="fa fa-upload fa-fw"></i> BAST MILESTONE
                          <span class="label label-success pull-right">8</span></span>
                      </div>
                  </a>
              </li>
              <li class="divider"></li>
              <li>
                  <a href="grid_options.html">
                      <div>
                          <i class="fa fa-upload fa-fw"></i> Invoice WO
                          <span class="label label-success pull-right">8</span></span>
                      </div>
                  </a>
              </li>
              <li class="divider"></li>
              <li>
                  <a href="grid_options.html">
                      <div>
                          <i class="fa fa-upload fa-fw"></i> Invoice MILESTONE
                          <span class="label label-success pull-right">8</span></span>
                      </div>
                  </a>
              </li>
              <li class="divider"></li>
              <li>
                  <a href="grid_options.html">
                      <div>
                          <i class="fa fa-upload fa-fw"></i> Progress
                          <span class="label label-success pull-right">8</span></span>
                      </div>
                  </a>
              </li>
              <li class="divider"></li>
              <li>
                  <a href="grid_options.html">
                      <div>
                          <i class="fa fa-upload fa-fw"></i> Adendum
                          <span class="label label-success pull-right">8</span></span>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="grid_options.html">
                      <div>
                          <i class="fa fa-upload fa-fw"></i> BAST
                          <span class="label label-success pull-right">8</span></span>
                      </div>
                  </a>
              </li>
              <li class="divider"></li>
              <li>
                  <a href="grid_options.html">
                      <div>
                          <i class="fa fa-upload fa-fw"></i> Invoice
                          <span class="label label-success pull-right">8</span></span>
                      </div>
                  </a>
              </li>
              <li class="divider"></li> -->
          </ul>
      </li>
<?php /*
        <li class="dropdown">
          <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
            <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
          </a>
          <ul class="dropdown-menu dropdown-messages">
            <li>
              <div class="dropdown-messages-box">
                <a href="profile.html" class="pull-left">
                  <img alt="image" class="img-circle" src="assets/img/a7.jpg">
                </a>
                <div>
                  <small class="pull-right">46h ago</small>
                  <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                  <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                </div>
              </div>
            </li>
            <li class="divider"></li>
            <li>
              <div class="dropdown-messages-box">
                <a href="profile.html" class="pull-left">
                  <img alt="image" class="img-circle" src="assets/img/a4.jpg">
                </a>
                <div>
                  <small class="pull-right text-navy">5h ago</small>
                  <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                  <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                </div>
              </div>
            </li>
            <li class="divider"></li>
            <li>
              <div class="dropdown-messages-box">
                <a href="profile.html" class="pull-left">
                  <img alt="image" class="img-circle" src="assets/img/profile.jpg">
                </a>
                <div>
                  <small class="pull-right">23h ago</small>
                  <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                  <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                </div>
              </div>
            </li>
            <li class="divider"></li>
            <li>
              <div class="text-center link-block">
                <a href="mailbox.html">
                  <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                </a>
              </div>
            </li>
          </ul>
        </li>
        */ ?>
        <li class="dropdown">
          <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
            <i class="fa fa-briefcase"></i> Ganti Posisi
          </a>
          <ul class="dropdown-menu dropdown-alerts">
            <?php foreach ($position as $key => $value) { ?>
            <li><a href="<?php echo site_url('log/change_role/'.$value['pos_id']) ?>"><?php echo $value['pos_name'] ?></a></li>
            <?php } ?>
          </ul>
        </li>

         <!-- <li>
          <a href="<?php echo site_url('chat/chat_inbox') ?>">
            <i class="fa fa-comments"></i> Chatting Person
          </a>
        </li> -->
  
        <li>
         <!--  <a class="dropdown-toggle count-info" href="<?php echo site_url('chat/chat_inbox') ?>">
            <i class="fa fa-envelope"></i>  <span class="label label-warning"><?php echo $jml_chat?></span>
          </a> -->

          <li>
            <a href="<?php echo site_url('log/change_password') ?>">
              <i class="fa fa-lock"></i> Ubah Password
            </a>
          </li>
          <li>
            <a href="<?php echo site_url('log/logout') ?>" id="logout">
              <i class="fa fa-sign-out"></i> Logout
            </a>
          </li>

        </ul>

      </nav>

     <!--  <div class="small-chat-box fadeInRight animated">

        <div class="heading" draggable="true">
          <small class="chat-date pull-right">
            02.19.2015
          </small>
          Small chat
        </div>

        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 234px;"><div class="content" style="overflow: hidden; width: auto; height: 234px;">

          <div class="left">
            <div class="author-name">
              Monica Jackson <small class="chat-date">
                10:02 am
              </small>
            </div>
            <div class="chat-message active">
              Lorem Ipsum is simply dummy text input.
            </div>

          </div>
          <div class="right">
            <div class="author-name">
              Mick Smith
              <small class="chat-date">
                11:24 am
              </small>
            </div>
            <div class="chat-message">
              Lorem Ipsum is simpl.
            </div>
          </div>
          <div class="left">
            <div class="author-name">
              Alice Novak
              <small class="chat-date">
                08:45 pm
              </small>
            </div>
            <div class="chat-message active">
              Check this stock char.
            </div>
          </div>
          <div class="right">
            <div class="author-name">
              Anna Lamson
              <small class="chat-date">
                11:24 am
              </small>
            </div>
            <div class="chat-message">
              The standard chunk of Lorem Ipsum
            </div>
          </div>
          <div class="left">
            <div class="author-name">
              Mick Lane
              <small class="chat-date">
                08:45 pm
              </small>
            </div>
            <div class="chat-message active">
              I belive that. Lorem Ipsum is simply dummy text.
            </div>
          </div>


        </div><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 164.928px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.4; z-index: 90; right: 1px;"></div></div>
        <div class="form-chat">
          <div class="input-group input-group-sm">
            <input type="text" class="form-control">
            <span class="input-group-btn"> <button class="btn btn-primary" type="button">Send
            </button> </span></div>
          </div>

        </div>

        <div id="small-chat">

          <span class="badge badge-warning pull-right">5</span>
          <a class="open-small-chat">
            <i class="fa fa-comments"></i>

          </a>
        </div>
      </div> -->

      <script type="text/javascript">
        $(function(){
          $('a#logout').click(function(){
              if(confirm('Apakah anda yakin ingin logout?')) {
                  return true;
              }

              return false;
          });
      });
      </script>