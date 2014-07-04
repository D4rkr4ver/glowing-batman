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
                $htmlFormatter = new CapsLockFormatter(new HtmlFormatter());
                break;
            case $this->comicSansDay:
                $htmlFormatter = new ComicSansFormatter(new HtmlFormatter());
                break;
            default:
                $htmlFormatter = new HtmlFormatter();
                break;
        }

        return $htmlFormatter;
    }

    public function getTextFormatter()
    {
        switch (date('Y-m-d')) {
            case $this->capsLockDay:
                $htmlFormatter = new CapsLockFormatter(new TextFormatter());
                break;
            default:
                $htmlFormatter = new TextFormatter();
                break;
        }

        return $htmlFormatter;
    }
}
