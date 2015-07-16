<?php

namespace Output\Decoration;

use Output\Html\HtmlFormatter;
use Output\Text\TextFormatter;

final class DecorationFactory
{
    const CAPS_LOCK_DAY  = '2014-10-22';
    const COMIC_SANS_DAY = '2014-07-04';

    /**
     * @return CapsLockFormatter|ComicSansFormatter|HtmlFormatter
     */
    public function getHtmlFormatter()
    {
        switch (date('Y-m-d')) {
            case self::CAPS_LOCK_DAY:
                $formatter = new CapsLockFormatter(new HtmlFormatter());
                break;
            case self::COMIC_SANS_DAY:
                $formatter = new ComicSansFormatter(new HtmlFormatter());
                break;
            default:
                $formatter = new HtmlFormatter();
                break;
        }

        return $formatter;
    }

    /**
     * @return CapsLockFormatter|TextFormatter
     */
    public function getTextFormatter()
    {
        switch (date('Y-m-d')) {
            case self::CAPS_LOCK_DAY:
                $formatter = new CapsLockFormatter(new TextFormatter());
                break;
            default:
                $formatter = new TextFormatter();
                break;
        }

        return $formatter;
    }
}
