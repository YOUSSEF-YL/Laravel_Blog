<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Snippet - GoSNippets</title>
                                <link href='' rel='stylesheet'>
                                <link href='https://use.fontawesome.com/releases/v5.8.1/css/all.css' rel='stylesheet'>
                                <style> * {
     margin: 0;
     padding: 0;
     -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
     box-sizing: border-box;
 }

 a {
     color: #03658c;
     text-decoration: none;
 }

 ul {
     list-style-type: none;
 }

 body {
     font-family: 'Roboto', Arial, Helvetica, Sans-serif, Verdana;
    
 }

 /** ====================
 * Comments List 
 =======================*/
 .comments-container {
     margin: 60px auto 15px;
     width: 768px;
 }

 .comments-container h1 {
     font-size: 36px;
     color: #283035;
     font-weight: 400;
 }

 .comments-container h1 a {
     font-size: 18px;
     font-weight: 700;
 }

 .comments-list {
     margin-top: 30px;
     position: relative;
 }

 /**
 * Comments - details
 -----------------------*/
 .comments-list:before {
     content: '';
     width: 2px;
     height: 100%;
     background: #c7cacb;
     position: absolute;
     left: 32px;
     top: 0;
 }

 .comments-list:after {
     content: '';
     position: absolute;
     background: #c7cacb;
     bottom: 0;
     left: 27px;
     width: 7px;
     height: 7px;
     border: 3px solid #dee1e3;
     -webkit-border-radius: 50%;
     -moz-border-radius: 50%;
     border-radius: 50%;
 }

 .reply-list:before,
 .reply-list:after {
     display: none;
 }

 .reply-list li:before {
     content: '';
     width: 60px;
     height: 2px;
     background: #c7cacb;
     position: absolute;
     top: 25px;
     left: -55px;
 }


 .comments-list li {
     margin-bottom: 15px;
     display: block;
     position: relative;
 }

 .comments-list li:after {
     content: '';
     display: block;
     clear: both;
     height: 0;
     width: 0;
 }

 .reply-list {
     padding-left: 88px;
     clear: both;
     margin-top: 15px;
 }

 /**
 * Profile Avatar - ---------------------------*/
 .comments-list .comment-avatar {
     width: 65px;
     height: 65px;
     position: relative;
     z-index: 99;
     float: left;
     border: 3px solid #FFF;
     -webkit-border-radius: 4px;
     -moz-border-radius: 4px;
     border-radius: 4px;
     -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
     -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
     box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
     overflow: hidden;
 }

 .comments-list .comment-avatar img {
     width: 100%;
     height: 100%;
 }

 .reply-list .comment-avatar {
     width: 50px;
     height: 50px;
 }

 .comment-main-level:after {
     content: '';
     width: 0;
     height: 0;
     display: block;
     clear: both;
 }

 /**
 * -------------- Comment Box ---------------------------*/
 .comments-list .comment-box {
     width: 680px;
     float: right;
     position: relative;
     -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15);
     -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15);
     box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15);
 }

 .comments-list .comment-box:before,
 .comments-list .comment-box:after {
     content: '';
     height: 0;
     width: 0;
     position: absolute;
     display: block;
     border-width: 10px 12px 10px 0;
     border-style: solid;
     border-color: transparent #FCFCFC;
     top: 8px;
     left: -11px;
 }

 .comments-list .comment-box:before {
     border-width: 11px 13px 11px 0;
     border-color: transparent rgba(0, 0, 0, 0.05);
     left: -12px;
 }

 .reply-list .comment-box {
     width: 610px;
 }

 .comment-box .comment-head {
     background: #FCFCFC;
     padding: 10px 12px;
     border-bottom: 1px solid #ffdede;
     overflow: hidden;
     -webkit-border-radius: 4px 4px 0 0;
     -moz-border-radius: 4px 4px 0 0;
     border-radius: 4px 4px 0 0;
 }

 .comment-box .comment-head i {
     float: right;
     margin-left: 14px;
     position: relative;
     top: 2px;
     color: #A6A6A6;
     cursor: pointer;
     -webkit-transition: color 0.3s ease;
     -o-transition: color 0.3s ease;
     transition: color 0.3s ease;
 }

 .comment-box .comment-head i:hover {
     color: #03658c;
 }

 .comment-box .comment-name {
     color: #283035;
     font-size: 14px;
     font-weight: 700;
     float: left;
     margin-right: 10px;
 }

 .comment-box .comment-name a {
     color: #283035;
 }

 .comment-box .comment-head span {
     float: left;
     color: #999;
     font-size: 13px;
     position: relative;
     top: 1px;
 }

 .comment-box .comment-content {
     background: #FFF;
     padding: 12px;
     font-size: 15px;
     color: #595959;
     -webkit-border-radius: 0 0 4px 4px;
     -moz-border-radius: 0 0 4px 4px;
     border-radius: 0 0 4px 4px;
 }

 .comment-box .comment-name.by-author,
 .comment-box .comment-name.by-author a {
     color: #03658c;
 }

 .comment-box .comment-name.by-author:after {
     content: 'author';
     background: #03658c;
     color: #FFF;
     font-size: 12px;
     padding: 3px 5px;
     font-weight: 700;
     margin-left: 10px;
     -webkit-border-radius: 3px;
     -moz-border-radius: 3px;
     border-radius: 3px;
 }

 /** =====================
 * Responsive
 ========================*/
 @media only screen and (max-width: 766px) {
     .comments-container {
         width: 480px;
     }

     .comments-list .comment-box {
         width: 390px;
     }

     .reply-list .comment-box {
         width: 320px;
     }
 }</style>
                                <script type='text/javascript' src=''></script>
                                <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
                                <script type='text/javascript' src=''></script>
                            </head>
                            <body oncontextmenu='return false' class='snippet-body'>
                            <!-- Main Container -->
<div class="comments-container">
    <h1>Comments <a href="">Go Snippets</a></h1>

    <ul id="comments-list" class="comments-list">
        <li>
            <div class="comment-main-level">
                <!-- Avatar -->
                <div class="comment-avatar"><img src="https://i.imgur.com/k7XVwpB.jpeg" alt=""></div>
                <!-- Comments  -->
                <div class="comment-box">
                    <div class="comment-head">
                        <h6 class="comment-name by-author"><a href="#">Ravi Raushan</a></h6>
                        <span>55 minutes ago</span>
                        <i class="fa fa-reply"></i>
                        <i class="fa fa-heart"></i>
                    </div>
                    <div class="comment-content">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                    </div>
                </div>
            </div>
            <!-- Comment list -->
            <ul class="comments-list reply-list">
                <li>
                    <!-- Avatar -->
                    <div class="comment-avatar"><img src="{{asset('asset/images/avatars/user-03.jpg')}}" alt=""></div>
                    <!-- Comment Container -->
                    <div class="comment-box">
                        <div class="comment-head">
                            <h6 class="comment-name"><a href="">Laddu Singh</a></h6>
                            <span>10 minutes ago</span>
                            <i class="fa fa-reply"></i>
                            <i class="fa fa-heart"></i>
                        </div>
                        <div class="comment-content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                        </div>
                    </div>
                </li>

                <li>
                    <!-- Avatar -->
                    <div class="comment-avatar"><img src="{{asset('asset/images/avatars/user-02.jpg')}}" alt=""></div>
                    <!-- Comment Container -->
                    <div class="comment-box">
                        <div class="comment-head">
                            <h6 class="comment-name by-author"><a href="#">Ravi Raushan</a></h6>
                            <span>10 minutes ago</span>
                            <i class="fa fa-reply"></i>
                            <i class="fa fa-heart"></i>
                        </div>
                        <div class="comment-content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                        </div>
                    </div>
                </li>
            </ul>
        </li>

        <li>
            <div class="comment-main-level">
                <!-- Avatar -->
                <div class="comment-avatar"><img src="{{asset('asset/images/avatars/user-01.jpg')}}" alt=""></div>
                <!-- Contenedor del Comentario -->
                <div class="comment-box">
                    <div class="comment-head">
                        <h6 class="comment-name"><a href="#">Ramdas Gupta</a></h6>
                        <span>10 minutes ago</span>
                        <i class="fa fa-reply"></i>
                        <i class="fa fa-heart"></i>
                    </div>
                    <div class="comment-content">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
                            <script type='text/javascript'></script>
                            </body>
                        </html>