<?php

class Actions_404 extends Actions_Abstract_Default
{
    public function run() {
        header('HTTP/1.0 404 Not Found');
    }
}
