<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link  href="./css/app.css" rel="stylesheet"/>
        <title>Real time chat app</title>

        
    </head>
    <body>
        <div class="app">
            <header>
            <h1>lets chat</h1>
            <input type="text" name="username" id="username" placeholder="please enter username">
</header>
<div id="messages"></div>
<form id="message_form">
<input type="text" name="message" id="message_input" placeholder="write a message">
<button type="submit" id="message_send">Send message</button>

</form>
        </div>

        <script src="./js/app.js"></script>
    </body>
</html>
