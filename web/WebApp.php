<?php
namespace liw\web;

class WebApp
{
    public function add_cron_task()
    {
        exec("crontab -e > '* * * * * php -v'");
    }
}
