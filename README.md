# Five-Server with PHP

This examples shows how to use five-server (from npm) with PHP for enabling auto-reload.

## Why?

The Five Server VSCode extension can only render PHP, but does not provide a full PHP Server. Therefore simple thing like post requests for form do not work.

## Run

We simply run a PHP Server on port 8000 and connect it to five-server running on port 5500.

Open 2 terminals:

1. Start PHP server: `php -S 127.0.0.1:8000 -t www/`  
   _If this gives an error, please install PHP first._
2. Start five-server: `npx -y five-server@latest --port=5500 --open=http://localhost:8000`  
   _If this gives an error, please install Nodejs first._

The script to connect to Five Server (`<script async data-id="five-server" src="http://localhost:5500/fiveserver.js"></script>`) has been added to [`header.php`](www/layout/header.php).

## Video

Maybe you're also interested in watching this video:  
https://youtu.be/Qk3WRkzUB88
