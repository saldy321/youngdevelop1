<?php

$port = $_ENV['PORT'] ?? 3000;

passthru("php -S 0.0.0.0:$port -t public");