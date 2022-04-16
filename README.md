# Five-Server with PHP

Open 2 terminals:

1. Start PHP server: `php -S localhost:8000 -t www/ www/router.php`
2. Start five-server: ` npx -y five-server@latest --open=http://localhost:8000`

The script to connect to Five Server (`<script async data-id="five-server" src="http://localhost:5500/fiveserver.js"></script>`) has been added to `header.php`.
