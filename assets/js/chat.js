$(document).ready(function () {
    $.ajax({
        url: '../users.json',
        dataType: 'json',
        success: function(data) {
            var users = data.results;

            users.forEach(function (user) {
                var name = user.name.first + ' ' + user.name.last;
                var status = user.email;
                var picture = user.picture.thumbnail;
                var offlineTime = Math.floor(Math.random() * 100);
                console.log(offlineTime);

                var html = '<div class="user clearfix">'
                    +'<div class="col-md-2">'
                    +'<div class="avatar">'
                    +'<img src="'+picture+'" alt="" class="user-avatar img-responsive img-circle">'
                    +'</div>'
                    + '</div>'
                    +'<div class="col-md-10">'
                    +'<h3 class="user-name">'+ name +'</h3>'
                    +'<p class="user-status">'+ status +'</p>'
                    +'<span class="offline-time">' + offlineTime + 'm</span>'
                    +'</div>'
                    +'</div>';

                $('#users-list').append(html);


            });
        }
    });

});