<?php
/***************************************************************************
*                                                                          *
*   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
*                                                                          *
* This  is  commercial  software,  only  users  who have purchased a valid *
* license  and  accept  to the terms of the  License Agreement can install *
* and use this program.                                                    *
*                                                                          *
****************************************************************************
* PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
* "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
****************************************************************************/

namespace Tygh\Payments\Addons\Pingpp\Channels;

use Tygh\Enum\Addons\Pingpp\Channels;

class JdpayWap implements IFormPayment
{
    /**
     * @var array $settings
     */
    protected $settings = array();

    /**
     * @var string $notification_url
     */
    protected $notification_url;

    /**
     * @var string $cancel_url
     */
    protected $cancel_url;

    /**
     * @var string $fail_url
     */
    protected $fail_url;

    /**
     * @var string $order_number
     */
    protected $order_number;

    /**
     * @var array $extra
     */
    protected $extra = array();

    /** @inheritdoc */
    public function __construct(array $settings)
    {
        $this->settings = $settings;
    }

    /** @inheritdoc */
    public function getExtra()
    {
        return array_merge(
            $this->settings,
            array(
                'success_url' => $this->notification_url,
                'fail_url'    => $this->fail_url,
            )
        );
    }

    /** @inheritdoc */
    public function setExtra($key, $value)
    {
        $this->extra[$key] = $value;
    }

    /** @inheritdoc */
    public function setNotificationUrl($url)
    {
        $this->notification_url = $url;
    }

    /** @inheritdoc */
    public function setFailUrl($url)
    {
        $this->fail_url = $url;
    }

    /** @inheritdoc */
    public function setCancelUrl($url)
    {
        $this->cancel_url = $url;
    }

    /** @inheritdoc */
    public function setOrderNumber($number)
    {
        $this->order_number = $number;
    }

    /** @inheritdoc */
    public function getFormUrl(array $charge)
    {
        if (isset($charge['credential'][Channels::JDPAY_WAP]['channelUrl'])) {
            return $charge['credential'][Channels::JDPAY_WAP]['channelUrl'];
        } elseif (isset($charge['credential'][Channels::JDPAY_WAP]['merchantRemark'])) {
            return 'https://m.jdpay.com/wepay/web/pay';
        } else {
            return 'https://h5pay.jd.com/jdpay/saveOrder';
        }
    }

    /** @inheritdoc */
    public function getFormData(array $charge)
    {
        return $charge['credential'][Channels::JDPAY_WAP];
    }

    /** @inheritdoc */
    public function getFormMethod(array $charge)
    {
        return 'post';
    }
}