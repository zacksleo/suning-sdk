<?php

namespace Zacksleo\SuningSdk;

use Hanson\Foundation\Foundation;
use Pimple\Exception\UnknownIdentifierException;

/**
 * SuningClass
 *
 * @property \Zacksleo\SuningSdk\Api   $api
 * @property \Zacksleo\SuningSdk\Fake\Custom\Custom $custom
 * @property \Zacksleo\SuningSdk\Fake\Waybilltrace\Waybilltrace $waybilltrace
 * @property \Zacksleo\SuningSdk\Fake\Oto\Oto $oto
 * @property \Zacksleo\SuningSdk\Fake\Logistics\Logistics $logistics
 * @property \Zacksleo\SuningSdk\Fake\Netalliance\Netalliance $netalliance
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Selfmarket $selfmarket
 * @property \Zacksleo\SuningSdk\Fake\Saleoff\Saleoff $saleoff
 * @property \Zacksleo\SuningSdk\Fake\Purchaseorder\Purchaseorder $purchaseorder
 * @property \Zacksleo\SuningSdk\Fake\Purchaseorderreport\Purchaseorderreport $purchaseorderreport
 * @property \Zacksleo\SuningSdk\Fake\Delivery\Delivery $delivery
 * @property \Zacksleo\SuningSdk\Fake\Reserve\Reserve $reserve
 * @property \Zacksleo\SuningSdk\Fake\Receipt\Receipt $receipt
 * @property \Zacksleo\SuningSdk\Fake\Statementcode\Statementcode $statementcode
 * @property \Zacksleo\SuningSdk\Fake\Statementhtml\Statementhtml $statementhtml
 * @property \Zacksleo\SuningSdk\Fake\Bindstatement\Bindstatement $bindstatement
 * @property \Zacksleo\SuningSdk\Fake\Approvalresult\Approvalresult $approvalresult
 * @property \Zacksleo\SuningSdk\Fake\Statement\Statement $statement
 * @property \Zacksleo\SuningSdk\Fake\Invoice\Invoice $invoice
 * @property \Zacksleo\SuningSdk\Fake\Application\Application $application
 * @property \Zacksleo\SuningSdk\Fake\Companyinfo\Companyinfo $companyinfo
 * @property \Zacksleo\SuningSdk\Fake\Plantinfo\Plantinfo $plantinfo
 * @property \Zacksleo\SuningSdk\Fake\Facservice\Facservice $facservice
 * @property \Zacksleo\SuningSdk\Fake\Asmp\Asmp $asmp
 * @property \Zacksleo\SuningSdk\Fake\Fws\Fws $fws
 * @property \Zacksleo\SuningSdk\Fake\Cloud\Cloud $cloud
 * @property \Zacksleo\SuningSdk\Fake\BadArticleOrder\BadArticleOrder $badArticleOrder
 * @property \Zacksleo\SuningSdk\Fake\RetuenBadArticleHandleResults\RetuenBadArticleHandleResults $retuenBadArticleHandleResults
 * @property \Zacksleo\SuningSdk\Fake\Shoppingmallsalesdata\Shoppingmallsalesdata $shoppingmallsalesdata
 * @property \Zacksleo\SuningSdk\Fake\Fourps\Fourps $fourps
 * @property \Zacksleo\SuningSdk\Fake\Supply\Supply $supply
 * @property \Zacksleo\SuningSdk\Fake\Swl\Swl $swl
 * @property \Zacksleo\SuningSdk\Fake\Integrate\Integrate $integrate
 * @property \Zacksleo\SuningSdk\Fake\Retail\Retail $retail
 * @property \Zacksleo\SuningSdk\Fake\Retailer\Retailer $retailer
 * @property \Zacksleo\SuningSdk\Fake\Cloudinfo\Cloudinfo $cloudinfo
 * @property \Zacksleo\SuningSdk\Fake\Govbus\Govbus $govbus
 * @property \Zacksleo\SuningSdk\Fake\Advertise\Advertise $advertise
 * @property \Zacksleo\SuningSdk\Fake\Common\Common $common
 * @property \Zacksleo\SuningSdk\Fake\Fontorder\Fontorder $fontorder
 * @property \Zacksleo\SuningSdk\Fake\Message\Message $message
 * @property \Zacksleo\SuningSdk\Fake\Operasale\Operasale $operasale
 * @property \Zacksleo\SuningSdk\Fake\Offline\Offline $offline
 * @property \Zacksleo\SuningSdk\Fake\Online\Online $online
 * @property \Zacksleo\SuningSdk\Fake\Store\Store $store
 * @property \Zacksleo\SuningSdk\Fake\Superext\Superext $superext
 */
class Suning extends Foundation
{
    private $method = 'suning';

    protected $providers = [
        ServiceProvider::class,
    ];

    /**
     * API请求
     *
     * @param string|array $method
     * @param array $params
     * @param array $files
     * @return array
     */
    public function request($method, $params = [], $files = [])
    {
        return $this->api->request($method, $params, $files);
    }

    public function __get($id)
    {
        try {
            return parent::__get($id);
        } catch (UnknownIdentifierException $exception) {
            $this->method .= '.'.$id;

            return $this;
        }
    }

    /**
     * 链式设置 appMethod
     *
     * @param string $method
     * @param mix $arguments
     * @return $this
     */
    public function __call($method, $arguments)
    {
        $this->method .= '.'.$method;

        if (isset($arguments)) {
            return $this->api->request($this->method, ...$arguments);
        }
        $this->method = 'suning';

        return $this;
    }
}
