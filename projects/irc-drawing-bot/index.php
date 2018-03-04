<!DOCTYPE html>
<html lang="en">

<!--Copyright Jamie Scaife-->
<!--Legal Information at https://www.jamieweb.net/contact-->

<head>
    <title>IRC Drawing Bot</title>
    <meta name="description" content="IRC Drawing Bot">
    <meta name="keywords" content="Jamie, Scaife, jamie scaife, jamiescaife, jamieonubuntu, jamie90437, jamie90437x, jamieweb, jamieweb.net">
    <meta name="author" content="Jamie Scaife">
    <link href="/jamie.css" rel="stylesheet">
    <link href="https://www.jamieweb.net/projects/irc-drawing-bot/" rel="canonical">
</head>

<body>

<?php include "navbar.php"; ?>

<div class="body">
    <h1>IRC Drawing Bot</h1>
    <hr><br>
<div class="centertext"><table class="centertable irc">
<?php set_time_limit(1); echo "<tr><td bgcolor=\"" . str_replace(":", "\"></td></tr>\n<tr><td bgcolor=\"", str_replace(" ", "\"></td><td bgcolor=\"", str_replace("\n", "", preg_replace("/[^a-eghiklnoprtuwy: ]/", "", filter_var(strtolower(rtrim(substr(file_get_contents("config.txt"), 0, 1536))), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH))))) . "\"></td></tr>\n"; ?>
</table></div>
    <h2>What is this?</h2>
    <p>The IRC Drawing Bot is an <a href="https://simple.wikipedia.org/wiki/Internet_Relay_Chat" target="_blank">Internet Relay Chat</a> bot that <b>you</b> can control, allowing you to paint pixels on the canvas above.</p>
    <p>This is not a fancy art project, it is designed to demonstrate how IRC can be used to securely control a web page. The collaborative pixel canvas is inspired by <a href="https://www.reddit.com/r/place" target="_blank">Reddit's r/place</a>.</p>
    <p>In order to paint your own pixels, you must join the ##jamieweb channel on Freenode IRC. Details for this are available <a href="/irc/" target="_blank">here</a>.</p>
    <h2>How do I control it?</h2>
    <p>Once you are connected to the IRC server, make sure you have joined the channel ##jamieweb. If not, use the command "/join ##jamieweb". Just enter "/join ##jamieweb" into the chat input of your IRC client.</p>
    <p>The bot is controlled using commands, all of which must be prefixed with an exclamation mark (!). All available commands are listed below:</p>
    <pre><b>!hello</b> - Make sure that the bot is responding. The bot should reply with "Hello!".
<b>!help</b> - Displays a link back to this page and the blog post for technical details.
<b>!move &lt;x&gt; &lt;y&gt;</b> - Select a pixel coordinate. Must be an integer 1-20 for x and 1-10 for y. Example: "!move 12 4"
<b>!colour &lt;colour&gt;</b> - Select a colour. Example: "!colour red"
<b>!colours</b> - View a list of supported colours.
<b>!draw</b> - Draws a pixel at the coordinates you selected using the colour you selected.</pre>
    <p>In order to enter a command, enter it into the chat input of your IRC client.</p>
    <p>Once you have painted a pixel, refresh this page to see it!</p>
    <h2>Why are there so many steps to draw one pixel?</h2>
    <p>I decided to have separate commands for selecting the coordinates and colour in order to allow people to either collaborate or conflict with eachother. This is similar to how it worked on r/place, however in my implementation, people can fight over where to place the pixel as well.</p>
    <h2>How does it work?</h2>
    <p>For technical details, please see the <a href="/blog/irc-drawing-bot/" target="_blank">associated blog post</a>, and view the <a href="https://github.com/JamieOnUbuntu/irc-drawing-bot/" target="_blank">project on GitHub</a>. Thank you!</p>
</div>

<?php include "footer.php" ?>

</body>

</html>
