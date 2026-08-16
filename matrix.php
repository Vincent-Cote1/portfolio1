<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrix Portal</title>
    <link rel="stylesheet" href="css/matrix.css">
</head>
<body>
    <div class="chat-shell">
        <aside class="panel panel-rooms" aria-label="Rooms">
            <h2>ROOMS</h2>
            <ul>
                <li><a href="#" aria-current="true"># general</a></li>
                <li><a href="#"># cs2</a></li>
                <li><a href="#"># gaming</a></li>
            </ul>
        </aside>

        <main class="panel panel-chat" aria-label="Chat">
            <header class="chat-header"># general</header>

            <section class="messages" aria-label="Messages">
                <article class="message">
                    
                </article>

                <article class="message">
                    
                </article>
            </section>

            <form class="composer" action="#" method="post">
                <label for="message" class="visually-hidden">Message</label>
                <input id="message" name="message" type="text" placeholder="Message...">
                <button type="submit" aria-label="Send message">➤</button>
            </form>
        </main>

        <aside class="panel panel-members" aria-label="Members">
            <h2>MEMBERS</h2>
            <ul>
                <li>Vincent</li>
                <li>Alice</li>
                <li>Bob</li>
            </ul>
        </aside>
    </div>
</body>
</html>