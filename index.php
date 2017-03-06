<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chatty</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div id="chatty">
    <div class="col-md-3" id="sidebar">
        <div id="top-bar" class="clearfix">
            <a href="http://pintilei.ro"><img src="assets/images/logo.png" alt="Chatty Logo"></a>
        </div>

        <div class="row" id="users-list">

            <div class="user clearfix">
                <div class="col-md-2">
                    <div class="avatar">
                        <img src="assets/images/ui-face.jpg" alt="" class="user-avatar img-responsive img-circle">
                    </div>
                </div>
                <div class="col-md-10">
                    <h3 class="user-name">John Faustino</h3>
                    <p class="user-status">Aldus PageMaker including vers of Lorem...</p>
                    <span class="offline-time">52m</span>
                </div>
            </div>

            <div class="user online clearfix">
                <div class="col-md-2">
                    <div class="avatar">
                        <img src="assets/images/ui-face-female.jpg" alt=""
                             class="user-avatar img-responsive img-circle">
                    </div>
                </div>
                <div class="col-md-10">
                    <h3 class="user-name">Maria Jane</h3>
                    <p class="user-status">Aldus PageMaker including vers of Lorem...</p>
                    <span class="offline-time">1h</span>
                </div>
            </div>

        </div>
    </div>
    <div class="col-md-9" id="chat-box">
        <div id="message-input">
            <form action="#">
                <div class="form-group">
                    <label for="message" class="sr-only">Message</label>
                    <input type="text" id="message" class="form-control" placeholder="Type something...">
                </div>
            </form>
        </div>
    </div>
</div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/chat.js"></script>
</body>
</html>