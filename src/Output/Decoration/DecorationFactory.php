<?php

namespace Output\Decoration;

use Output\Html\HtmlFormatter;
use Output\Text\TextFormatter;

class DecorationFactory
{
    public $capsLockDay = '2014-10-22';

    public $comicSansDay = '2014-07-04';

    public function getHtmlFormatter()
    {
        switch (date('Y-m-d')) {
            case $this->capsLockDay:
                $formatter = new CapsLockFormatter(new HtmlFormatter());
                break;
            case $this->comicSansDay:
                $formatter = new ComicSansFormatter(new HtmlFormatter());
                break;
            default:
                $formatter = new HtmlFormatter();
                break;
        }

        return $formatter;
    }

    public function getTextFormatter()
    {
        switch (date('Y-m-d')) {
            case $this->capsLockDay:
                $formatter = new CapsLockFormatter(new TextFormatter());
                break;
            default:
                $formatter = new TextFormatter();
                break;
        }

        return $formatter;
    }
}
