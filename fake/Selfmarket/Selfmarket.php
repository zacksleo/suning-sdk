<?php

namespace Zacksleo\SuningSdk\Fake\Selfmarket;

/**
 * Selfmarket Class
 *
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Contract $contract
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Signcontract $signcontract
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Orderdeliver $orderdeliver
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Order $order
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Leaguerstatus $leaguerstatus
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Saleorderpromotioninfo $saleorderpromotioninfo
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Refundlog $refundlog
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Unpaidorder $unpaidorder
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Agreeexchange $agreeexchange
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Exchangegoods $exchangegoods
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Exchangegoodsdelivery $exchangegoodsdelivery
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Querysingleexchangegoods $querysingleexchangegoods
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Exchangepackage $exchangepackage
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Rejectexchangedeliver $rejectexchangedeliver
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Ord $ord
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Disagreerefund $disagreerefund
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Agreerejected $agreerejected
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Factorygoodsinv $factorygoodsinv
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Receiveinfo $receiveinfo
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Ordercode $ordercode
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Disagreerejected $disagreerejected
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Agreerefund $agreerefund
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Rejectexchange $rejectexchange
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Saleorder $saleorder
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Rejected $rejected
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Saleform $saleform
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Allotform $allotform
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Stockform $stockform
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Purchaseorderreport $purchaseorderreport
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Purchaseorder $purchaseorder
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Plant $plant
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Snservice $snservice
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Snservicebatch $snservicebatch
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Item $item
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Protoprice $protoprice
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Productdetail $productdetail
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Mainproduct $mainproduct
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Itemdetail $itemdetail
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Childitem $childitem
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Publish $publish
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Apply $apply
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Reject $reject
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Cloudsalesreport $cloudsalesreport
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Proto $proto
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Unsale $unsale
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Sale $sale
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Stock $stock
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Fivedaysproduce $fivedaysproduce
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Replenish $replenish
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Replenishorder $replenishorder
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Applyorder $applyorder
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Suporderstatus $suporderstatus
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Purmonthplan $purmonthplan
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Purweekplan $purweekplan
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Supinventory $supinventory
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Inventory $inventory
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Monthproduce $monthproduce
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Ordersplit $ordersplit
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Orderdeparture $orderdeparture
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Purchaseplan $purchaseplan
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Purchaseplanconfirm $purchaseplanconfirm
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Reviewestatus $reviewestatus
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Applycmmdty $applycmmdty
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Receipt $receipt
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Reservesupplier $reservesupplier
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Reservefps $reservefps
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Settlement $settlement
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Deliveryorder $deliveryorder
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Receiptsupplier $receiptsupplier
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Purchaseordersupplier $purchaseordersupplier
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Orderpackage $orderpackage
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Reserve $reserve
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Deliveryreserve $deliveryreserve
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Capacity $capacity
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Rejectscheck $rejectscheck
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Rejects $rejects
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Appealdata $appealdata
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Rejectsauth $rejectsauth
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Appealresult $appealresult
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Expensescheckorder $expensescheckorder
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Expensesrebateapply $expensesrebateapply
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Applicationprivilege $applicationprivilege
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Expenseorder $expenseorder
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Mergedcheckorderesign $mergedcheckorderesign
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Rejectorder $rejectorder
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Rejectsfail $rejectsfail
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Rejectsconfirm $rejectsconfirm
 * @property \Zacksleo\SuningSdk\Fake\Selfmarket\Validateresult $validateresult
 */
class Selfmarket
{
}
