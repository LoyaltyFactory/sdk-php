<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Model\Billing;
use Easir\SDK\Model\Locale;
use Easir\SDK\Model\Timezone;
use Easir\SDK\Request\Model;

class CreateCompany extends Model
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var Timezone
     */
    public $timezone;
    /**
     * @var string
     */
    public $vat;
    /**
     * @var Billing
     */
    public $billing;
    /**
     * @var string
     */
    public $phone_number;
    /**
     * @var string
     */
    public $website;
    /**
     * @var Locale
     */
    public $locale;
    /**
     * @var string
     */
    public $currency = 'dkk';
    /**
     * @var string
     */
    public $language = 'da';
    /**
     * @var CreateUser
     */
    public $user;
}
