<!Doctype html>
<html lang="ja">

<head>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="https://cdn.mlkcca.com/v0.6.0/milkcocoa.js"></script>
    <script src="{{ asset('chat/js/chat.js') }}" type="text/javascript"></script>

    <style>
        ul > li:first-child {
            color: black;
            font-size: 25px;
        }
        ul > li:nth-child(2n) {
            color: blue;
        }
        ul > li:nth-child(2n):before {
            content:"ユーザー名："
        }
    </style>
</head>

<body>
<div>
    <!-- 投稿者 -->
    <div>
        <p>ユーザ名</p>
        <textarea name="" id="jsi-name" cols="10" rows="1"></textarea>
    </div>

    <!-- メッセージを打ち込む部分 -->
    <div>
        <p>内容</p>
        <textarea name="" id="jsi-msg" cols="30" rows="4"></textarea>
    </div>
</div>

<!-- メッセージを送る部分 -->
<button name="button" id="jsi-button">send message!</button>

<!-- チャット内容が動的に生成される部分 -->
<ul id="jsi-board" style="list-style:none;">
    <li>〜チャット内容〜</li>
</ul>
</body>

</html>