<?php

namespace Sb\Phalcon\Helpers;

use Sb\Phalcon\Helpers\Analytics\YandexMetrika;
use Sb\Phalcon\Helpers\Analytics\GoogleAnalytics;
use Sb\Phalcon\Helpers\Analytics\LiveInternet;
use Sb\Phalcon\Helpers\Analytics\RatingMail;

class AnalyticsHelper
{
    const SERVICE_NAME = 'analytics-helper';

    private $di = null;
    private $yandexMetrika = null;
    private $googleAnalytics = null;
    private $liveInternet = null;
    private $ratingMail = null;

    public function __construct($di)
    {
        $this->di = $di;
    }

    public function render()
    {
        $result = '';
        $result .= $this->getYandexMetrika()->render();
        $result .= $this->getGoogleAnalytics()->render();
        $result .= $this->getLiveInternet()->render();
        $result .= $this->getRatingMail()->render();
        return $result;
    }

    /**
     * @return \Sb\Phalcon\Helpers\Analytics\YandexMetrika
     */
    public function getYandexMetrika()
    {
        if (!$this->yandexMetrika) {
            $this->yandexMetrika = new YandexMetrika();
        }
        return $this->yandexMetrika;
    }

    /**
     * @return \Sb\Phalcon\Helpers\Analytics\GoogleAnalytics
     */
    public function getGoogleAnalytics()
    {
        if (!$this->googleAnalytics) {
            $this->googleAnalytics = new GoogleAnalytics();
        }
        return $this->googleAnalytics;
    }

    /**
     * @return \Sb\Phalcon\Helpers\Analytics\LiveInternet
     */
    public function getLiveInternet()
    {
        if (!$this->liveInternet) {
            $this->liveInternet = new LiveInternet();
        }
        return $this->liveInternet;
    }

    /**
     * @return \Sb\Phalcon\Helpers\Analytics\RatingMail
     */
    public function getRatingMail()
    {
        if (!$this->ratingMail) {
            $this->ratingMail = new RatingMail();
        }
        return $this->ratingMail;
    }

} 