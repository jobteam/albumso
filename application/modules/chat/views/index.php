<!doctype html>
<html>
    <head>
        <title>Team ALBUMSO chat</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width">
        <style>
            * { margin: 0; padding: 0; box-sizing: border-box; }
            body { font: 13px Helvetica, Arial; }
            form { background: #000; padding: 3px; position: fixed; bottom: 0; width: 100%; }
            form input { border: 0; padding: 10px; width: 90%; margin-right: .5%; }
            form button { width: 9%; background: rgb(130, 224, 255); border: none; padding: 10px; }
            #messages { list-style-type: none; margin: 0; padding: 0; }
            #messages li { padding: 5px 10px; }
            #messages li:nth-child(odd) { background: #eee; }
        </style>

        <script>
            (function () {
                var params = {},
                        r = /([^&=]+)=?([^&]*)/g;
                function d(s) {
                    return decodeURIComponent(s.replace(/\+/g, ' '));
                }
                var match, search = window.location.search.toLowerCase();
                while (match = r.exec(search.substring(1)))
                    params[d(match[1])] = d(match[2]);
                window.params = params;
            })();
            if (!params.name) {
                location.href = location.href.replace(location.search, '') + '?name=Tungns';
            }
        </script>
    </head>
    <body>
        <div id="sound"></div>
        <ul id="messages"></ul>
        <form action="">
            <input id="m" autocomplete="off" /><button>Send</button>
        </form>
        <script src="https://cdn.socket.io/socket.io-1.2.0.js"></script>
        <script src="http://code.jquery.com/jquery-1.11.1.js"></script>
        <script>
            var socket = io('http://albumso.com:3005');
            var infor = {
                name: params.name
            };
            socket.emit('getUser', infor);
            socket.on('sendInfor', function (data) {
                $('#messages').append($('<li>').text(data.name + ': Join room'));
            });
            
            socket.on('sendInforInduavial', function (data) {
                infor.avt = data.avt;
                
            });

            function playSound() {
                document.getElementById("sound").innerHTML = '<audio autoplay="autoplay"><source src="/nodejs/chat-example/img/solemn.mp3" type="audio/mpeg" /><source src="/nodejs/chat-example/img/solemn.ogg" type="audio/ogg" /><embed hidden="true" autostart="true" loop="false" src="/nodejs/chat-example/img/solemn.mp3" /></audio>';
            }
            
            $('form').submit(function () {
                infor.msg = $('#m').val();
                console.log('infor--->',infor);
                socket.emit('chat message', infor);

                $('#messages').append($('<li>').text(infor.name + ' says: '+ $('#m').val()));
                $('#m').val('');
                return false;
            });
            socket.on('chat message', function (data) {
                console.log('data-->',data);
                notifyMe(data);
            });

            function notifyMe(data) {
                // Let's check if the browser supports notifications
                if (!("Notification" in window)) {
                    alert("This browser does not support desktop notification");
                }

                // Let's check whether notification permissions have already been granted
                else if (Notification.permission === "granted") {
                    // If it's okay let's create a notification

                    var options = {
                        body: data.msg,
                        icon: data.avt || '/nodejs/chat-example/img/emo.png'
                    }

                    var notification = new Notification(data.name + ' says: ', options);
                    playSound();
                    setTimeout(notification.close.bind(notification), 4000);
//                    var notification = new Notification(msg);
                }

                // Otherwise, we need to ask the user for permission
                else if (Notification.permission !== 'denied') {
                    Notification.requestPermission(function (permission) {
                        // If the user accepts, let's create a notification
                        if (permission === "granted") {
                            var options = {
                                body: data.msg,
                                icon: data.avt || '/nodejs/chat-example/img/emo.png'
                            }

                            var notification = new Notification(data.name + ' says: ', options);
                            playSound();
                            setTimeout(notification.close.bind(notification), 4000);
                        }
                    });
                }

                $('#messages').append($('<li>').text(data.name + ' says: '+ data.msg));
            }
        </script>
    </body>
</html>
