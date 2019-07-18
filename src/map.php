<?php

return [
    /*
    |--------------------------------------------------------------------------
    | 商品API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=1&bustypeId=1
    |
    */
        'suning.custom.abnormal.query'              => 'queryAbnormal',                // 商户调用异常商品查询API接口
        'suning.custom.atmopic.modify'              => 'modifyAtmopic',                // 商家活动氛围图维护
        'suning.custom.featureword.modify'          => 'modifyFeatureword',            // 增亮点词维护接口
        'suning.custom.price.update'                => 'updatePrice',                  // 价格更新(单个)
        'suning.custom.getproductcode.query'        => 'queryGetproductcode',          // 根据返回申请编码获取苏宁商品编码
        'suning.custom.norm.modify'                 => 'modifyNorm',                   // 修改商品规格
        'suning.custom.videoinfo.query'             => 'queryVideoinfo',               // 商家视频信息查询
        'suning.custom.otoinfo.modify'              => 'modifyOtoinfo',                // C店商家修改商品O2O信息
        'suning.custom.storegroup.query'            => 'queryStoregroup',              // 商家门店组信息查询
        'suning.custom.lsyprice.query'              => 'queryLsyprice',                // 零售云商户价格查询接口
        'suning.custom.lsyprice.modify'             => 'modifyLsyprice',               // 零售云商户价格更新接口
        'suning.custom.picfiles.query'              => 'queryPicfiles',                // 查询图片文件夹信息
        'suning.custom.bookitem.get'                => 'item',                         // 我的商品库信息精确查询（文化制品类）
        'suning.custom.newbrand.query'              => 'queryNewbrand',                // 获取商品品牌信息新接口
        'suning.custom.culitem.add'                 => 'addCulitem',                   // 产品申请（文化制品类）新
        'suning.custom.culitemcontentrevise.modify' => 'modifyCulitemcontentrevise',   // 商品内容修改（文化制品类）新
        'suning.custom.product.query'               => 'product',                      // 获取苏宁产品信息
        'suning.custom.culitemcontents.modify'      => 'modifyCulitemcontents',        // 商品内容维护（文化制品类）新
        'suning.custom.judgeproduct.confirm'        => 'confirmJudgeproduct',          // 判断商品是否存在接口
        'suning.custom.culitemdetail.query'         => 'queryCulitemdetail',           // 获取我的商品库详情（文化制品类）新
        'suning.custom.norm.delete'                 => 'deleteNorm',                   // 删除商品规格
        'suning.custom.vedio.modify'                => 'modifyVedio',                  // SPS对外封装视频信息同步API
        'suning.custom.bookmainproduct.modify'      => 'mainProduct',                  // 商品内容纠错申请（文化制品类）
        'suning.custom.categoryredict.get'          => 'getCategoryredict',            // 获取类目预测信息
        'suning.custom.category.query'              => 'category',                     // 获取商品采购目录信息
        'suning.custom.book.brand.query'            => 'brand',                        // 获取商品品牌信息（文化制品类）
        'suning.custom.book.salescatalog.query'     => 'salesCatalog',                 // 获取商品销售目录信息（文化制品类）
        'suning.custom.productdetail.query'         => 'productDetail',                // 获取苏宁产品详情信息
        'suning.custom.book.productdetail.query'    => 'productDetail',                // 获取苏宁产品详情信息（文化制品类）
        'suning.custom.item.query'                  => 'item',                         // 获取我的商品库信息
        'suning.custom.book.item.query'             => 'item',                         // 获取我的商品库信息（文化制品类）
        'suning.custom.itemdetail.query'            => 'itemDetail',                   // 获取我的商品详情信息
        'suning.custom.itemparameters.query'        => 'itemParameters',               // 获取商品参数模板
        'suning.custom.item.add'                    => 'item',                         // 产品申请
        'suning.custom.itemcontents.add'            => 'itemContents',                 // 商品内容维护
        'suning.custom.itemsale.query'              => 'itemSale',                     // 商品销售情况查询
        'suning.custom.itemcontents.modify'         => 'itemContents',                 // 商品内容修改
        'suning.custom.shelves.add'                 => 'shelves',                      // 商品上架
        'suning.custom.shelves.move'                => 'shelves',                      // 商品下架
        'suning.custom.childitem.add'               => 'childItem',                    // 规格商品新增
        'suning.custom.pic.delete'                  => 'pic',                          // 图片删除
        'suning.custom.book.product.get'            => 'product',                      // 苏宁产品信息精确查询（文化制品类）
        'suning.custom.item.get'                    => 'item',                         // 我的商品库信息精确查询
        'suning.custom.book.item.get'               => 'item',                         // 我的商品库信息精确查询（文化制品类）
        'suning.custom.book.mainproduct.modify'     => 'mainProduct',                  // 商品内容纠错申请（文化制品类）
        'suning.custom.book.mainproduct.get'        => 'mainProduct',                  // 商品内容纠错申请结果查询（文化制品类）
        'suning.custom.mainproduct.modify'          => 'errCorreCont',                 // 商品内容纠错申请（非文化制品类）
        'suning.custom.mainproduct.get'             => 'mainProduct',                  // 查询商品内容纠错结果
        'suning.custom.product.get'                 => 'product',                      // 苏宁产品信息精确查询
        'suning.custom.item.delorres'               => 'item',                         // 商品删除，恢复与彻底删除
        'suning.custom.moduletemplet.get'           => 'getModuleTemplet',             // 获取模块模板
        'suning.custom.mobilerecommend.add'         => 'addMobileRecommend',           // 手机详情推荐模块新增
        'suning.custom.mobilerecommend.modify'      => 'modifyMobileRecommend',        // 手机详情推荐模块修改
        'suning.custom.mobilerecommend.query'       => 'queryMobileRecommend',         // 手机详情推荐模块查询
        'suning.custom.mobilesequence.modify'       => 'modifyMobileSequence',         // 手机详情模块顺序修改
        'suning.custom.mobilesequence.query'        => 'queryMobileSequence',          // 手机详情模块顺序查询
        'suning.custom.npic.add'                    => 'addNPic',                      // 新版图片上传接口
    /*
    |--------------------------------------------------------------------------
    | 价格API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=2&bustypeId=1
    |
    */
        'suning.custom.price.update' => 'updatePrice',   // 价格更新(单个)
        'suning.custom.price.get'    => 'getPrice',      // 价格查询(单个)
    /*
    |--------------------------------------------------------------------------
    | 库存API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=3&bustypeId=1
    |
    */
        'suning.custom.invaddress.add'            => 'invaddress',                // 新增仓库地址
        'suning.custom.code.get'                  => 'getCode',                   // 卷号查询
        'suning.custom.inventory.get'             => 'inventory',                 // 库存查询(单个)
        'suning.custom.code.modify'               => 'verificationInfo',          // 电子码核销API接口
        'suning.custom.invaddress.modify'         => 'invaddress',                // 修改仓库地址
        'suning.custom.invaddress.delete'         => 'invaddress',                // 删除仓库地址
        'suning.custom.invaddress.query'          => 'invaddress',                // 查询仓库地址(查询所有)
        'suning.custom.invaddress.get'            => 'invaddress',                // 查询仓库地址(查询单个)
        'suning.custom.invaddress.set'            => 'invaddress',                // 设置仓库地址属性
        'suning.custom.inventory.modify'          => 'inventory',                 // 库存修改(单个)
        'suning.custom.parallelinvaddress.add'    => 'parallelInvaddress',        // （平行仓模式）创建单个仓库
        'suning.custom.parallelinvaddress.modify' => 'parallelInvaddress',        // （平行仓模式）修改单个仓库
        'suning.custom.parallelinvaddress.get'    => 'parallelInvaddress',        // （平行仓模式）查询单个仓库
        'suning.custom.parallelinventory.get'     => 'parallelInventory',         // （平行仓模式）查询单个仓库单个商品库存
        'suning.custom.parallelinventory.modify'  => 'parallelInventory',         // （平行仓模式）修改单个仓库单个商品库存
        'suning.custom.parallelinvarea.set'       => 'parallelInvarea',           // （平行仓模式）设置仓库覆盖范围
        'suning.custom.parallelinvarea.get'       => 'parallelInvarea',           // （平行仓模式）查询仓库覆盖范围
        'suning.custom.parallelinvaddress.query'  => 'queryParallelInvaddress',   // 批量查询仓库信息（平行仓）
    /*
    |--------------------------------------------------------------------------
    | 销售准备API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=4&bustypeId=1
    |
    */
        'suning.custom.nation.query'                     => 'nation',                      // 国家代码获取
        'suning.custom.productsalearea.query'            => 'queryProductsalearea',        // 单品销售范围查询（新）
        'suning.custom.productsalearea.add'              => 'addProductsalearea',          // 单品销售范围维护 （新）
        'suning.custom.city.query'                       => 'city',                        // 城市代码获取
        'suning.custom.saleareatemplate.query'           => 'saleAreaTemplate',            // 销售范围模板批量查询
        'suning.custom.saleareatemplate.get'             => 'saleAreaTemplate',            // 销售范围模板精确查询
        'suning.custom.saleareatemplateitemgroup.add'    => 'saleAreaTemplateItemGroup',   // 销售范围模板关联商品组新增
        'suning.custom.saleareatemplateitemgroup.modify' => 'saleAreaTemplateItemGroup',   // 销售范围模板关联商品组修改
        'suning.custom.saleareatemplateitemgroup.delete' => 'saleAreaTemplateItemGroup',   // 销售范围模板关联商品组删除
        'suning.custom.saleareatemplateitemgroup.query'  => 'saleAreaTemplateItemGroup',   // 销售范围模板关联商品组批量查询
        'suning.custom.saleareatemplateitemgroup.get'    => 'saleAreaTemplateItemGroup',   // 销售范围模板关联商品组精确查询
        'suning.custom.freighttemplate.query'            => 'freightTemplate',             // 运费模板批量查询
        'suning.custom.freighttemplate.get'              => 'freightTemplate',             // 运费模板精确查询
    /*
    |--------------------------------------------------------------------------
    | 交易API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=5&bustypeId=1
    |
    */
        'suning.custom.returnorder.get'         => 'getReturnorder',           // 单笔退货查询接口（新）
        'suning.custom.deliverynew.add'         => 'addDeliverynew',           // 订单发货
        'suning.custom.ordmodtime.query'        => 'orderQuery',               // 根据订单修改时间批量查询已付未付订单信息
        'suning.custom.orders.query'            => 'queryOrders',              // C店订单支付及优惠信息查询
        'suning.custom.dicwhole.query'          => 'queryDicwhole',            // 支付及优惠信息编码查询（查询全部）
        'suning.custom.dicsingle.query'         => 'queryDicsingle',           // 支付及优惠信息编码查询（查询单个）
        'suning.custom.logisticsnews.query'     => 'logisticsnews',            // 物流动态查询
        'suning.custom.virtual.confirm'         => 'confirmVirtual',           // 虚拟充值订单状态回接API
        'suning.custom.virtual.get'             => 'getVirtual',               // API单笔虚拟订单行查询服务
        'suning.custom.dsrinfo.get'             => 'getDsrInfo',               // 获取店铺评分
        'suning.custom.merorderdirect.add'      => 'addMerOrderDirect',        // 商户订单直连接口
        'suning.custom.tickets.receive'         => 'receiveTickets',           // 电子门票状态回接
        'suning.custom.historyorder.query'      => 'historyOrderQuery',        // 批量获取历史订单（三个月前的历史订单）
        'suning.custom.order.query'             => 'orderQuery',               // 批量获取订单（三个月内的订单）
        'suning.custom.ordercode.query'         => 'orderCodeQuery',           // 批量获取订单号
        'suning.custom.order.get'               => 'orderGet',                 // 单笔订单查询
        'suning.custom.ordernote.modify'        => 'orderNote',                // 订单备注修改
        'suning.custom.ordernote.get'           => 'orderNote',                // 订单备注查询
        'suning.custom.orderdelivery.add'       => 'orderDelivery',            // 订单发货
        'suning.custom.orderdelivery.modify'    => 'orderDelivery',            // 发货信息修改
        'suning.custom.orderdelay.modify'       => 'orderDelay',               // 延迟交易收货时间
        'suning.custom.ordercountdown.query'    => 'orderCountDown',           // 倒计时获取
        'suning.custom.logisticcompany.get'     => 'logisticCompany',          // 获取物流公司代码（查询单个）
        'suning.custom.logisticcompany.query'   => 'logisticCompany',          // 获取物流公司代码（查询全部）
        'suning.custom.ord.query'               => 'orderQuery',               // 根据订单修改时间批量查询订单信息
        'suning.custom.unpaidorder.query'       => 'unpaidOrder',              // 未付款订单查询
        'suning.custom.orderselfdist.add'       => 'orderSelfDist',            // 订单发货（商家自配送）
        'suning.custom.comphandle.add'          => 'addComplaintHandle',       // 顾客投诉记录处理
        'suning.custom.comphandle.get'          => 'getComplaintHandle',       // 顾客投诉处理记录查询
        'suning.custom.complaint.get'           => 'getComplaint',             // 苏宁顾客投诉记录单笔查询
        'suning.custom.complaint.query'         => 'queryComplaint',           // 顾客投诉记录批量查询
        'suning.custom.seaorderdelivery.add'    => 'seaOrderDelivery',         // 订单发货（海外购）
        'suning.custom.packageorderdeliver.add' => 'addPackageOrderDeliver',   // 订单发货(包裹单号发货)
        'suning.custom.bsseaorderdeclare.add'   => 'addBsSeaOrderDeclare',     // 海外购订单申报（商家、苏宁保税仓发货）
        'suning.custom.seaorderdeclare.add'     => 'addSeaOrderDeclare',       // 海外购订单申报（海外直邮）
        'suning.custom.hisorderevaluate.query'  => 'queryHisOrderEvaluate',    // 订单评价批量查询（三个月前）
        'suning.custom.orderevaluate.query'     => 'queryOrderEvaluate',       // 订单评价批量查询（三个月内）
        'suning.custom.orderevaluate.get'       => 'getOrderEvaluate',         // 订单评价单笔查询查询
        'suning.custom.replycmreview.add'       => 'addReplyCmReview',         // 商家回复订单评价
        'suning.custom.transportfee.modify'     => 'modifyTransportFee',       // 未付款订单修改运费接口
        'suning.custom.electronicinvoice.get'   => 'queryElectronicInvoice',   // 查询已回传苏宁的电子发票
        'suning.custom.electronicinvoice.add'   => 'addElectronicInvoice',     // 电子发票回流苏宁接口
    /*
    |--------------------------------------------------------------------------
    | 退货退款API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=6&bustypeId=1
    |
    */
        'suning.custom.batchrejected.query'     => 'batchQueryRejected',      // 批量获取退货信息
        'suning.custom.batchrejectedOrd.query'  => 'batchQueryRejectedOrd',   // 批量获取退货订单号
        'suning.custom.singlerejected.get'      => 'singleGetRejected',       // 单笔查询退货信息
        'suning.custom.agreerejected.modify'    => 'agreeRejected',           // 退货信息处理(同意)
        'suning.custom.disagreerejected.modify' => 'disAgreeRejected',        // 退货信息处理(不同意)
        'suning.custom.disagreerefund.modify'   => 'disAgreeRefund',          // 退款信息处理(不同意)
        'suning.custom.delayrefund.modify'      => 'delayRefund',             // 退款信息处理(延期)
        'suning.custom.rejectedord.query'       => 'batchQueryRejected',      // 根据订单修改时间批量查询退货订单信息
        'suning.custom.agreerefund.modify'      => 'modifyAgreeRefund',       // 同意退款
        'suning.custom.verifycode.get'          => 'getVerifyCode',           // 同意退款验证码获取
        'suning.custom.returnorder.get'         => 'getReturnorder',          // 单笔退货查询接口（新）
    /*
    |--------------------------------------------------------------------------
    | 店铺API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=8&bustypeId=1
    |
    */
        'suning.custom.shopcategory.add'        => 'addCategory',          // 创建店铺分类
        'suning.custom.shopaddfavorite.add'     => 'addShopaddfavorite',   // 增加店铺关注接口
        'suning.custom.shopcategory.query'      => 'shopCategory',         // 店铺分类查询
        'suning.custom.shopcategoryitem.query'  => 'queryCategoryItem',    // 店铺分类商品查询
        'suning.custom.shopcategoryitem.add'    => 'addCategoryItem',      // 店铺分类商品添加
        'suning.custom.shopcategory.delete'     => 'deleteCategory',       // 店铺分类信息删除
        'suning.custom.shopcategory.modify'     => 'modifyCategory',       // 店铺分类信息修改
        'suning.custom.shopinfo.modify'         => 'modifyShopInfo',       // 店铺基本信息修改
        'suning.custom.shopinfo.get'            => 'getShopInfo',          // 获取店铺基本信息
        'suning.custom.shopcategoryitem.delete' => 'deleteCategoryItem',   // 店铺分类商品删除
        'suning.custom.dsrinfo.get'             => 'getDsrInfo',           // 获取店铺评分
    /*
    |--------------------------------------------------------------------------
    | 物流API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=9&bustypeId=1
    |
    */
        'suning.custom.logisticsstatus.get'   => 'getLogisticsStatus',   // 获取苏宁物流状态信息
        'suning.custom.logisticcompany.get'   => 'logisticCompany',      // 获取物流公司代码（查询单个）
        'suning.custom.logisticcompany.query' => 'logisticCompany',      // 获取物流公司代码（查询全部）
        'suning.waybilltrace.modify'          => 'wayBillTrace',         // 推送物流跟踪信息
    /*
    |--------------------------------------------------------------------------
    | 发票API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=110&bustypeId=1
    |
    */
        'suning.custom.invbalance.get'   => 'getInvbalance',     // 结存余量查询
        'suning.custom.invmacinfo.get'   => 'getInvmacinfo',     // 抄报清卡查询
        'suning.custom.invoiceinfo.get'  => 'getInvoiceinfo',    // 发票信息查询
        'suning.custom.invoverstock.get' => 'getInvoverstock',   // 积压总量查询
        'suning.custom.invorder.receive' => 'receiveInvorder',   // 发票订单接收接口
        'suning.custom.pzxxdatainfo.get' => 'getPzxxdatainfo',   // 票种信息查询
        'suning.custom.storage.query'    => 'queryStorage',      // 易购C店电子发票开票结果查询
    /*
    |--------------------------------------------------------------------------
    | 促销API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=10&bustypeId=1
    |
    */
        'suning.custom.memintegral.get'          => 'getMemintegral',            // 查询商家会员积分接口
        'suning.custom.activitycoupon.get'       => 'getActivitycoupon',         // 活动专享券领取
        'suning.custom.activitycoupon.create'    => 'createActivitycoupon',      // 活动专享券创建
        'suning.custom.activitycoupondetail.get' => 'getActivitycoupondetail',   // 活动专享券详情查询
        'suning.custom.memlabels.query'          => 'queryMemlabels',            // 会员在店铺下客群查询接口
        'suning.custom.shoplabels.query'         => 'queryShoplabels',           // 店铺标签和客群列表查询接口
        'suning.custom.shopfavorited.get'        => 'getShopfavorited',          // 查询店铺是否被收藏接口
        'suning.custom.memintegral.update'       => 'updateMemintegral',         // 店铺会员积分执行接口(加、减)
        'suning.custom.pricereduce.query'        => 'queryPriceReduce',          // 限时打折活动批量查询
        'suning.custom.pricereducedetail.get'    => 'getPriceReduce',            // 限时打折活动明细查询
        'suning.custom.shopcoupdetail.get'       => 'getShopCoupDetail',         // 店铺优惠券活动详情查询
        'suning.custom.shopcoupon.query'         => 'queryShopCoupon',           // 店铺优惠券活动批量查询
        'suning.custom.promotion.query'          => 'queryPromotion',            // 商品促销活动查询
        'suning.custom.salesmanage.modify'       => 'modifySalesManage',         // 促销活动管理
        'suning.custom.shopcoupon.add'           => 'addShopCoupon',             // 店铺优惠券活动新增
        'suning.custom.shopcoupon.modify'        => 'modifyShopCoupon',          // 店铺优惠券活动修改
        'suning.custom.direcoupon.add'           => 'addDireCoupon',             // 定向发券活动创建
        'suning.custom.direcoupon.query'         => 'queryDireCoupon',           // 定向发券活动批量查询
        'suning.custom.direcoupondetail.get'     => 'getDireCouponDetail',       // 定向发券活动详情查询
        'suning.custom.ordercoupon.add'          => 'addOrderCoupon',            // 订单优惠活动创建
        'suning.custom.ordercoupon.modify'       => 'modifyOrderCoupon',         // 订单优惠活动修改
        'suning.custom.ordercoupon.query'        => 'queryOrderCoupon',          // 订单优惠活动批量查询
        'suning.custom.ordercoupondetail.get'    => 'getOrderCouponDetail',      // 订单优惠活动详情查询
    /*
    |--------------------------------------------------------------------------
    | 分销API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=64&bustypeId=1
    |
    */
        'suning.custom.inventory.get'        => 'inventory',             // 库存查询(单个)
        'suning.custom.syncinventory.modify' => 'modifySyncinventory',   // 库存同步接口
        'suning.custom.batchorder.query'     => 'queryBatchorder',       // 批量获取采购订单（三个月内的订单）
        'suning.custom.orderid.query'        => 'queryOrderid',          // 批量获取采购订单号
        'suning.custom.oneorder.get'         => 'getOneorder',           // 单笔采购订单查询
        'suning.custom.sendgoods.modify'     => 'modifySendgoods',       // 采购订单发货信息下传
        'suning.custom.returngoods.query'    => 'queryReturngoods',      // 退货退款查询服务
        'suning.custom.singleinventory.get'  => 'getSingleinventory',    // 库存查询单个产品单个仓库
    /*
    |--------------------------------------------------------------------------
    | 招商API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=105&bustypeId=1
    |
    */
        'suning.oto.storegroup.add'          => 'addStoregroup',           // O2O商家门店组创建
        'suning.oto.storegroup.query'        => 'queryStoregroup',         // o2o商家门店组查询
        'suning.oto.store.query'             => 'queryStore',              // o2o商家门店查询
        'suning.oto.store.add'               => 'addStore',                // o2o商家门店创建
        'suning.oto.storestoregroup.modify'  => 'modifyStorestoregroup',   // o2o商家门店组更新
        'suning.oto.store.modify'            => 'modifyStore',             // o2o商家门店修改
        'suning.oto.storerelation.query'     => 'queryStorerelation',      // o2o商家门店组门店关联查询
        'suning.oto.storegroupref.add'       => 'addStoregroupref',        // o2o商家门店组门店关联
        'suning.custom.storegrouplist.query' => 'queryStoregrouplist',     // 商家门店组列表API接口
    /*
    |--------------------------------------------------------------------------
    | 苏宁开放物流API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=11&bustypeId=2
    |
    */
        'suning.logistics.task.get'                 => 'getLogisticsTask',                  // 获取苏宁物流任务派发信息
        'suning.logistics.sforderresender.add'      => 'addSforderresender',                // 海外购顺丰运单重推
        'suning.logistics.receiveexpection.add'     => 'addReceiveexpection',               // 外部公司异常提报接口
        'suning.logistics.task.query'               => 'queryLogisticsTask',                // 苏宁物流任务派发信息批量查询
        'suning.logistics.outsourcetask.query'      => 'queryLogisticsOutsourceTask',       // 苏宁物流外包任务派发批量查询
        'suning.logistics.outsourcetask.get'        => 'getLogisticsOutsourceTask',         // 苏宁物流外包任务派发信息单笔查询
        'suning.custom.logisticsorder.get'          => 'getLogisticsOrder',                 // 顾客面单单笔信息查询服务
        'suning.custom.logisticsorder.query'        => 'queryLogisticsOrder',               // 苏宁物流顾客面单打印信息批量查询
        'suning.custom.logisticsstatus.query'       => 'queryLogisticStatus',               // 状态信息批量查询服务
        'suning.logistics.crossbuyprdcustdecl.get'  => 'getLogisticsCrossbuyPrdCustDecl',   // 订单综合信息单笔查询
        'suning.logistics.crossbuytask.get'         => 'getLogisticsCrossbuyTask',          // 订单信息单笔查询
        'suning.logistics.crossbuytask.query'       => 'queryLogisticsCrossbuyTask',        // 订单信息批量查询
        'suning.logistics.taskstatusfeedback.add'   => 'addLogisticsTaskStatus',            // 接收第三方物流状态
        'suning.logistics.crossbuyinventory.modify' => 'modifyInventory',                   // 批量库存更新
        'suning.logistics.outerorder.add'           => 'addOuterOrder',                     // 外部订单创建接口
        'suning.logistics.outerorder.modify'        => 'modifyOuterOrder',                  // 外部订单修改接口
    /*
    |--------------------------------------------------------------------------
    | 联盟订单API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=12&bustypeId=3
    |
    */
        'suning.netalliance.order.get'         => 'getOrder',           // 网盟订单信息单独查询
        'suning.netalliance.leaderorder.query' => 'queryLeaderorder',   // 团长招商订单信息批量查询
        'suning.netalliance.order.query'       => 'queryOrder',         // 网盟订单信息批量查询
        'suning.netalliance.ordersettle.get'   => 'getOrderSettle',     // 网盟订单结算信息查询
    /*
    |--------------------------------------------------------------------------
    | 大聚惠API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=13&bustypeId=3
    |
    */
        'suning.netalliance.juinfomation.get'   => 'getJuInfomation',     // 单笔查询大聚会商品信息
        'suning.netalliance.juinfomation.query' => 'queryJuInfomation',   // 批量查询大聚会商品信息
    /*
    |--------------------------------------------------------------------------
    | 联盟商品API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=26&bustypeId=3
    |
    */
        'suning.netalliance.unioninfomation.get'         => 'getUnionInfomation',           // 单个查询联盟商品信息
        'suning.netalliance.extensionlink.get'           => 'getExtensionlink',             // 商品和券二合一接口
        'suning.netalliance.searchcommodity.query'       => 'querySearchcommodity',         // 关键字商品查询接口
        'suning.netalliance.inverstmentcategoryid.query' => 'queryInverstmentcategoryid',   // 高佣专区类目查询接口
        'suning.netalliance.inverstmentcommodity.query'  => 'queryInverstmentcommodity',    // 高佣专区商品查询接口
        'suning.netalliance.recommendcommodity.query'    => 'queryRecommendcommodity',      // 小编推荐商品查询接口
        'suning.netalliance.commoditycategory.query'     => 'queryCommoditycategory',       // 商品类目查询
        'suning.netalliance.commoditydetail.query'       => 'queryCommoditydetail',         // 推广商品详情信息接口
        'suning.netalliance.custnumandcommdity.query'    => 'queryCustnumandcommdity',      // 团长招商批量查询联盟商品信息
        'suning.netalliance.couponinfo.query'            => 'queryCouponinfo',              // 查询券领用情况
        'suning.netalliance.unioninfomation.query'       => 'queryUnionInfomation',         // 批量查询联盟商品信息
    /*
    |--------------------------------------------------------------------------
    | 招商推广活动API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=61&bustypeId=3
    |
    */
        'suning.netalliance.merchantactivity.query'     => 'queryMerchantactivity',       // 获取推广中的招商活动
        'suning.netalliance.merchantcommodity.query'    => 'queryMerchantcommodity',      // 获取招商活动的商品
        'suning.netalliance.citystrategycorpinfo.query' => 'queryCitystrategycorpinfo',   // 提供城市攻略推广数据给机构
    /*
    |--------------------------------------------------------------------------
    | 获取推广链接API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=71&bustypeId=3
    |
    */
        'suning.netalliance.homepagepositionurl.query'  => 'queryHomepagepositionurl',    // 获取首页推广权限的推广位链接
        'suning.netalliance.storepromotionurl.query'    => 'queryStorepromotionurl',      // 获取商品或店铺推广链接接口
        'suning.netalliance.custompromotionurl.query'   => 'queryCustompromotionurl',     // 获取自定义推广链接接口
        'suning.netalliance.thirdpartygetpromotion.get' => 'getThirdpartygetpromotion',   // 第三方平台获取联盟短链参数接口
    /*
    |--------------------------------------------------------------------------
    | 优惠券推广API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=73&bustypeId=3
    |
    */
        'suning.netalliance.couponproduct.query' => 'queryCouponproduct',   // 获取优惠券商品
    /*
    |--------------------------------------------------------------------------
    | 合同API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=14&bustypeId=4
    |
    */
        'suning.selfmarket.contract.query'      => 'queryContract',        // 批量获取苏宁电子承兑合同
        'suning.selfmarket.signcontract.handle' => 'handleSignContract',   // 苏宁电子承兑合同签章回传
    /*
    |--------------------------------------------------------------------------
    | 厂送API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=15&bustypeId=4
    |
    */
        'suning.selfmarket.orderdeliver.add'             => 'addOrderDeliver',               // 订单发货
        'suning.selfmarket.order.add'                    => 'addOrder',                      // 订单打包
        'suning.selfmarket.leaguerstatus.add'            => 'addLeaguerstatus',              // 虚拟商品订单短信和激活状态同步
        'suning.saleoff.electronicsheet.add'             => 'addElectronicsheet',            // 订单打印面单状态同步
        'suning.selfmarket.saleorderpromotioninfo.query' => 'querySaleorderpromotioninfo',   // 销售订单优惠信息查询接口
        'suning.selfmarket.refundlog.query'              => 'queryRefundlog',                // 退货处理记录查询
        'suning.selfmarket.unpaidorder.query'            => 'queryUnpaidorder',              // 批量获取未付订单
        'suning.selfmarket.agreeexchange.update'         => 'updateAgreeexchange',           // 同意换货
        'suning.selfmarket.exchangegoods.query'          => 'queryExchangegoods',            // 批量查询换货信息
        'suning.selfmarket.exchangegoodsdelivery.update' => 'updateExchangegoodsdelivery',   // 换货重新发货
        'suning.selfmarket.querysingleexchangegoods.get' => 'getQuerysingleexchangegoods',   // 查询单笔换货订单
        'suning.selfmarket.exchangepackage.modify'       => 'modifyExchangepackage',         // 换货打包API
        'suning.selfmarket.rejectexchangedeliver.modify' => 'modifyRejectexchangedeliver',   // 拒绝发货API
        'suning.selfmarket.ord.query'                    => 'queryOrd',                      // 根据订单修改时间批量查询订单信息
        'suning.selfmarket.disagreerefund.modify'        => 'modifyDisagreerefund',          // 厂送退货审核（拒绝退款）
        'suning.selfmarket.agreerejected.modify'         => 'modifyAgreerejected',           // 厂送退货审核（同意退货）
        'suning.selfmarket.factorygoodsinv.modify'       => 'modifyFactorygoodsinv',         // 厂送API修改库存接口
        'suning.selfmarket.factorygoodsinv.query'        => 'queryFactorygoodsinv',          // 厂送API查询库存接口
        'suning.selfmarket.receiveinfo.modify'           => 'modifyReceiveinfo',             // 修改顾客收货信息
        'suning.selfmarket.ordercode.query'              => 'queryOrdercode',                // 批量获取订单号
        'suning.selfmarket.order.get'                    => 'getOrder',                      // 单笔订单查询
        'suning.selfmarket.disagreerejected.modify'      => 'modifyDisagreerejected',        // 厂送退货审核（拒绝退货）
        'suning.selfmarket.agreerefund.modify'           => 'modifyAgreerefund',             // 厂送退货审核（同意退款）
        'suning.selfmarket.rejectexchange.modify'        => 'modifyRejectexchange',          // 拒绝换货
        'suning.selfmarket.orderdeliver.modify'          => 'modifyOrderdeliver',            // 订单发货单修改
        'suning.selfmarket.saleorder.get'                => 'getSaleOrder',                  // 单笔获取销售订单
        'suning.selfmarket.saleorder.query'              => 'querySaleOrder',                // 批量获取销售订单
        'suning.selfmarket.rejected.query'               => 'queryRejected',                 // 批量获取退货信息
        'suning.selfmarket.rejected.get'                 => 'getRejected',                   // 单笔获取退货信息
    /*
    |--------------------------------------------------------------------------
    | 品牌串码API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=29&bustypeId=4
    |
    */
        'suning.selfmarket.saleform.query'  => 'querySaleForm',    // 批量获取销售报表
        'suning.selfmarket.saleform.get'    => 'getSaleform',      // 单笔获取销售报表
        'suning.selfmarket.allotform.query' => 'queryAllotForm',   // 批量获取采购调拨报表
        'suning.selfmarket.stockform.query' => 'queryStockForm',   // 获取库存报表
    /*
    |--------------------------------------------------------------------------
    | 采购订单API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=35&bustypeId=4
    |
    */
        'suning.selfmarket.purchaseorderreport.query' => 'queryOrderReport',       // 获取采购订单报表
        'suning.purchaseorder.query'                  => 'purchaseOrder',          // 获取采购订单
        'suning.selfmarket.purchaseorder.add'         => 'purchaseOrderConfirm',   // 采购订单确认
        'suning.purchaseorder.confirm'                => 'purchaseOrderConfirm',   // 采购订单确认
        'suning.purchaseorderreport.query'            => 'queryOrderReport',       // 获取采购订单报表
    /*
    |--------------------------------------------------------------------------
    | 供应商收发货API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=36&bustypeId=4
    |
    */
        'suning.delivery.reserve' => 'deliveryReserve',   // 发货预约
        'suning.reserve.cancel'   => 'reserveCancel',     // 预约取消
        'suning.reserve.query'    => 'reserveQuery',      // 预约查询
        'suning.receipt.query'    => 'receiptQuery',      // 获取苏宁收货单
    /*
    |--------------------------------------------------------------------------
    | 供应商财务API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=37&bustypeId=4
    |
    */
        'suning.statementcode.query'         => 'queryStatementCode',          // 获取结算清单号
        'suning.statementhtml.get'           => 'getStatementHtml',            // 获取结算清单
        'suning.bindstatement.sign'          => 'signBindStatement',           // 合并对账单签章
        'suning.approvalresult.query'        => 'queryApprovalResult',         // 获取审批结果
        'suning.statement.sign'              => 'signStatement',               // 结算清单签章
        'suning.invoice.checkresult.query'   => 'queryInvoiceCheckResult',     // 发票预校验查询
        'suning.application.privilege.apply' => 'applyPrivilegeApplication',   // 优惠单活动函申请
        'suning.application.discount.apply'  => 'applyDiscountApplication',    // 商业折让对账单申请
        'suning.application.balance.apply'   => 'applyBalanceApplication',     // 销售补差确认函申请
        'suning.application.promotion.apply' => 'applyPromotionApplication',   // 促销服务协议确认函申请
        'suning.application.protocol.apply'  => 'applyProtocolApplication',    // 展示位使用协议申请
        'suning.application.query'           => 'queryApplication',            // 函件查询
        'suning.statement.query'             => 'queryStatement',              // 获取返利对账单
        'suning.statement.confirm'           => 'confirmStatement',            // 返利对账单金额确认
    /*
    |--------------------------------------------------------------------------
    | 主数据API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=38&bustypeId=4
    |
    */
        'suning.companyinfo.query'      => 'queryCompanyInfo',   // 获取公司信息
        'suning.selfmarket.plant.query' => 'queryPlant',         // 苏宁仓库地点信息查询
        'suning.plantinfo.query'        => 'queryPlantInfo',     // 获取地点信息
    /*
    |--------------------------------------------------------------------------
    | 售后服务API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=39&bustypeId=4
    |
    */
        'suning.selfmarket.snservice.add'      => 'snserviceadd',        // 苏宁安装订单信息反馈
        'suning.selfmarket.snservice.get'      => 'snserviceget',        // 获取苏宁安装订单信息
        'suning.selfmarket.snservicebatch.add' => 'addSnservicebatch',   // 苏宁安装订单信息批量反馈
        'suning.facservice.add'                => 'facserviceadd',       // 厂家安装订单信息反馈
        'suning.asmp.dispatchorder.add'        => 'addDispatchOrder',    // 厂派订单接入
        'suning.asmp.sninstallorder.add'       => 'addSnInstallOrder',   // 苏宁服务订单校验信息反馈
        'suning.asmp.statement.get'            => 'getStatement',        // 直连厂家结算单对账接口
    /*
    |--------------------------------------------------------------------------
    | 自营商品API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=62&bustypeId=4
    |
    */
        'suning.selfmarket.item.query'          => 'queryItem',             // 自营查询我的商品库信息
        'suning.selfmarket.protoprice.add'      => 'addProtoprice',         // C类样机价格文件申请
        'suning.selfmarket.protoprice.query'    => 'queryProtoprice',       // C类样机价格文件记录查询
        'suning.selfmarket.productdetail.query' => 'queryProductdetail',    // 自营 苏宁商品库查看详情
        'suning.selfmarket.mainproduct.modify'  => 'modifyMainproduct',     // 自营 商品纠错
        'suning.selfmarket.mainproduct.get'     => 'getMainproduct',        // 自营 商品纠错结果查询
        'suning.selfmarket.itemdetail.query'    => 'queryItemdetail',       // 自营查询我的商品详情信息
        'suning.selfmarket.childitem.add'       => 'addChilditem',          // 自营规格商品新增自营
        'suning.selfmarket.publish.modify'      => 'modifyPublish',         // 发布苏宁已有商品
        'suning.selfmarket.apply.add'           => 'addApply',              // 自营商品申请
        'suning.custom.judgeproduct.confirm'    => 'confirmJudgeproduct',   // 判断商品是否存在接口
        'suning.custom.category.query'          => 'category',              // 获取商品采购目录信息
        'suning.custom.itemparameters.query'    => 'itemParameters',        // 获取商品参数模板
        'suning.custom.newbrand.query'          => 'queryNewbrand',         // 获取商品品牌信息新接口
    /*
    |--------------------------------------------------------------------------
    | 订单API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=70&bustypeId=4
    |
    */
        'suning.selfmarket.purchaseorder.query' => 'purchaseOrder',   // 采购订单查询API
    /*
    |--------------------------------------------------------------------------
    | 易道报表API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=74&bustypeId=4
    |
    */
        'suning.selfmarket.reject.query'           => 'queryReject',             // 坏机报表API
        'suning.selfmarket.cloudsalesreport.query' => 'queryCloudsalesreport',   // 零售云TC销售报表API
        'suning.selfmarket.proto.query'            => 'queryProto',              // 样机报表API
        'suning.selfmarket.unsale.query'           => 'queryUnsale',             // 滞销报表API
        'suning.selfmarket.sale.query'             => 'querySale',               // 销售报表API
        'suning.selfmarket.stock.query'            => 'queryStock',              // 库存报表API
    /*
    |--------------------------------------------------------------------------
    | 采购计划API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=65&bustypeId=4
    |
    */
        'suning.selfmarket.fivedaysproduce.add'     => 'addFivedaysproduce',     // 5天排产计划反馈
        'suning.selfmarket.replenish.query'         => 'queryReplenish',         // 经销、代销供应商商品信息查询接口
        'suning.selfmarket.replenishorder.query'    => 'queryReplenishorder',    // 经销、代销供应商查询订单接口
        'suning.selfmarket.applyorder.query'        => 'queryApplyorder',        // 自营联营供应商查询订单接口
        'suning.selfmarket.suporderstatus.add'      => 'addSuporderstatus',      // 供应商订单状态共享
        'suning.selfmarket.purmonthplan.query'      => 'queryPurmonthplan',      // 查询月度采购计划行信息
        'suning.selfmarket.purweekplan.query'       => 'queryPurweekplan',       // 查询周度采购计划行信息
        'suning.selfmarket.supinventory.add'        => 'addSupinventory',        // 供应商库存反馈新接口
        'suning.selfmarket.purmonthplan.confirm'    => 'confirmPurmonthplan',    // 月度采购计划反馈确认
        'suning.selfmarket.replenishorder.create'   => 'createReplenishorder',   // 经销代销创单接口
        'suning.selfmarket.applyorder.create'       => 'createApplyorder',       // 自营联营创建采购订单
        'suning.selfmarket.inventory.add'           => 'addInventory',           // 供应商库存反馈
        'suning.selfmarket.monthproduce.add'        => 'addMonthproduce',        // 月度排产计划反馈
        'suning.selfmarket.ordersplit.add'          => 'addOrdersplit',          // 供应商拆单反馈
        'suning.selfmarket.orderdeparture.add'      => 'addOrderdeparture',      // 采购订单发车反馈
        'suning.selfmarket.purchaseplan.query'      => 'queryPurchaseplan',      // 查询采购计划行项目信息
        'suning.selfmarket.purchaseplanconfirm.add' => 'addPurchaseplan',        // 采购计划确认结果反馈
        'suning.selfmarket.reviewestatus.add'       => 'addReviewestatus',       // 供应商订单状态共享
        'suning.selfmarket.applycmmdty.query'       => 'queryApplycmmdty',       // 自营联营供应商查询商品信息接口
        'suning.selfmarket.purweekplan.confirm'     => 'confirmPurweekplan',     // 周度采购计划反馈确认
    /*
    |--------------------------------------------------------------------------
    | 收发货API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=69&bustypeId=4
    |
    */
        'suning.selfmarket.receipt.query'               => 'receiptQuery',           // 获取苏宁收货单
        'suning.selfmarket.reservesupplier.query'       => 'queryReservesupplier',   // 根据供应商编码查询预约单信息
        'suning.selfmarket.reservefps.query'            => 'queryReservefps',        // FPS预约单信息查询
        'suning.selfmarket.settlement.query'            => 'querySettlement',        // 供方样机开票通知单查询
        'suning.selfmarket.deliveryorder.add'           => 'addDeliveryorder',       // 发货自主预约
        'suning.selfmarket.receiptsupplier.query'       => 'receiptQuery',           // 根据供应商编码获取收货单
        'suning.selfmarket.purchaseordersupplier.query' => 'purchaseOrder',          // 根据供应商编码查询采购订单信息
        'suning.selfmarket.orderpackage.add'            => 'addOrderpackage',        // 保存采购订单包裹信息
        'suning.selfmarket.reserve.delete'              => 'deleteReserve',          // 预约取消
        'suning.selfmarket.deliveryreserve.add'         => 'deliveryReserve',        // 发货预约
        'suning.selfmarket.reserve.query'               => 'reserveQuery',           // 预约查询
        'suning.selfmarket.capacity.query'              => 'queryCapacity',          // 产能查询
    /*
    |--------------------------------------------------------------------------
    | 不良品API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=84&bustypeId=4
    |
    */
        'suning.selfmarket.rejectscheck.add' => 'addRejectsCheck',   // 批量反馈不良品数据核对结果
        'suning.selfmarket.rejects.query'    => 'queryRejects',      // 批量获取不良品信息
        'suning.selfmarket.appealdata.query' => 'queryAppealData',   // 获取申诉数据接口
        'suning.selfmarket.rejectsauth.add'  => 'addRejectsAuth',    // 批量反馈不良品鉴定结果
        'suning.selfmarket.appealresult.add' => 'addAppealResult',   // 反馈申诉结果
    /*
    |--------------------------------------------------------------------------
    | 自营财务API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=86&bustypeId=4
    |
    */
        'suning.selfmarket.expensescheckorder.query'      => 'queryExpensescheckorder',        // 返利对账单查询
        'suning.selfmarket.expensesrebateapply.query'     => 'queryExpensesRebateapply',       // 返利活动函查询
        'suning.selfmarket.applicationprivilege.create'   => 'createApplicationPrivilege',     // 返利优惠单活动函申请
        'suning.selfmarket.expenseorder.confirm'          => 'confirmExpenseorder',            // 返利对账单金额确认接口
        'suning.selfmarket.mergedcheckorderesign.confirm' => 'confirmMergedcheckorderesign',   // 合并对账单签章接口
    /*
    |--------------------------------------------------------------------------
    | 退厂API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=88&bustypeId=4
    |
    */
        'suning.selfmarket.rejectorder.query'  => 'queryRejectsOrd',     // 分页获取退货订单
        'suning.selfmarket.rejectsfail.query'  => 'queryRejectsFail',    // 获取退货资料审核未通过的拖机单
        'suning.selfmarket.rejectsconfirm.add' => 'addRejectsConfirm',   // 反馈退货确认书
        'suning.selfmarket.validateresult.add' => 'addValidateResult',   // 反馈退货订单数量确认结果
    /*
    |--------------------------------------------------------------------------
    | 服务商质检API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=16&bustypeId=5
    |
    */
        'suning.fws.chargeiteminfo.get'     => 'getChargeItemInfo',       // 查询收费项目属性接口
        'suning.fws.chargeitemremain.query' => 'queryChargeItemRemain',   // 批量查询指定收费项目服务剩余可使用数量
        'suning.fws.historyorder.get'       => 'getHistoryOrder',         // 单个查询订单记录接口
        'suning.fws.historyorder.query'     => 'queryHistoryOrder',       // 批量查询订单记录接口
        'suning.fws.report.get'             => 'getReport',               // 单笔查询检测报告
        'suning.fws.detectionform.add'      => 'addDetectionForm',        // 添加检测单接口
        'suning.fws.report.modify'          => 'modifyReport',            // 上传(更新)检测报告
        'suning.fws.detectionform.delete'   => 'deleteDetectionForm',     // 删除检测单接口
    /*
    |--------------------------------------------------------------------------
    | 云商城API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=17&bustypeId=6
    |
    */
        'suning.cloud.appcomplete.notice' => 'noticeAppComplete',   // 应用准备完成通知
        'suning.cloud.orderrel.get'       => 'getOrderRel',         // 订购关系查询
    /*
    |--------------------------------------------------------------------------
    | 供应商结算API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=20&bustypeId=7
    |
    */
    /*
    |--------------------------------------------------------------------------
    | 退厂API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=23&bustypeId=7
    |
    */
        'suning.badArticleOrder.add'               => 'queryBadArticleOrder',            // 三星不良品订单
        'suning.retuenBadArticleHandleResults.add' => 'retuenBadarticleHandleResults',   // 返回不良品处理结果
    /*
    |--------------------------------------------------------------------------
    | 购物广场API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=24&bustypeId=8
    |
    */
        'suning.shoppingmallsalesdata.add' => 'shoppingMallSalesData',   // 销售数据传输
    /*
    |--------------------------------------------------------------------------
    | 4PS接单管理API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=27&bustypeId=10
    |
    */
        'suning.fourps.orderdelivery.add'  => 'addOrderDelivery',    // 订单发货任务创建
        'suning.fourps.expressorder.query' => 'queryExpressorder',   // 揽件订单接收状态查询接口
        'suning.fourps.expressorder.add'   => 'addExpressorder',     // 4PS揽件订单下单接口
        'suning.fourps.result.add'         => 'addResult',           // 揽件和签收状态反馈接口
        'suning.fourps.orderreturn.add'    => 'addOrderReturn',      // 订单退货任务创建
        'suning.fourps.order.delete'       => 'deleteOrder',         // 商品订单取消
        'suning.fourps.orderdetail.get'    => 'getOrderDetail',      // 查询单个订单作业
        'suning.fourps.orderstatus.query'  => 'queryOrderStatus',    // 订单状态查询
        'suning.fourps.orderdetail.query'  => 'queryOrderDetail',    // 批量查询单个订单作业
    /*
    |--------------------------------------------------------------------------
    | 4PS任务作业API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=28&bustypeId=10
    |
    */
        'suning.fourps.logisticsdetail.get' => 'getLogisticsDetail',   // 任务单物流详情查询接口
    /*
    |--------------------------------------------------------------------------
    | 4PS商品查询API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=30&bustypeId=10
    |
    */
        'suning.fourps.iteminfo.query'        => 'queryItemInfo',          // 商品信息批量查询接口
        'suning.fourps.iteminfo.get'          => 'getItemInfo',            // 商品信息单笔查询接口
        'suning.fourps.itemdetail.get'        => 'getItemDetail',          // 商品详情查询接口
        'suning.fourps.brandmasdata.query'    => 'queryBrandMasData',      // 品牌主数据查询接口
        'suning.fourps.categorymasdata.query' => 'queryCategoryMasData',   // 类目主数据查询接口
    /*
    |--------------------------------------------------------------------------
    | 4PS商品管理API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=31&bustypeId=10
    |
    */
        'suning.fourps.item.add'    => 'addItem',      // 商品申请接口
        'suning.fourps.item.delete' => 'deleteItem',   // 商品删除接口
        'suning.fourps.item.modify' => 'modifyItem',   // 商品修改接口
    /*
    |--------------------------------------------------------------------------
    | 4PS仓库管理API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=32&bustypeId=10
    |
    */
        'suning.fourps.storagesub.query'      => 'queryStorageSub',        // 商品入库预约信息批量查询
        'suning.fourps.inventoryquantity.get' => 'getInventoryQuantity',   // 商品库存总量查询接口
        'suning.fourps.inventorydetail.get'   => 'getInventoryDetail',     // 商品库存明细查询接口
        'suning.fourps.realstorage.query'     => 'queryRealStorage',       // 商品实际入库信息查询
        'suning.fourps.celstoragesub.add'     => 'addCelStorageSub',       // 商品退库预约申请
        'suning.fourps.celstoragesub.get'     => 'getCelStorageSub',       // 商品退库预约信息单笔查询
        'suning.fourps.celstoragesub.query'   => 'queryCelstoragesub',     // 商品退库预约信息批量查询
        'suning.fourps.realcelstorage.get'    => 'getRealCelStorage',      // 商品实际退库信息查询
        'suning.fourps.refundworkinfo.delete' => 'deleteRefundWorkInfo',   // 商品预约信息取消(入库及退库)
        'suning.fourps.storagesub.add'        => 'addStoragesub',          // 商品入库预约申请
        'suning.fourps.storagesub.get'        => 'getStoragesub',          // 商品入库预约信息单笔查询
    /*
    |--------------------------------------------------------------------------
    | 4PS仓库库存API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=33&bustypeId=10
    |
    */
        'suning.fourps.inventoryquantity.get' => 'getInventoryQuantity',   // 商品库存总量查询接口
        'suning.fourps.inventorydetail.get'   => 'getInventoryDetail',     // 商品库存明细查询接口
    /*
    |--------------------------------------------------------------------------
    | 商家供应商交易API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=40&bustypeId=11
    |
    */
        'suning.supply.ordercode.query'     => 'queryOrderCode',       // 批量获取订单号
        'suning.supply.order.get'           => 'getOrder',             // 单个订单详情查询
        'suning.supply.orderdelivery.add'   => 'addOrderDelivery',     // 订单发货(合并包裹单号发货)
        'suning.supply.ordercode.add'       => 'addOrderCode',         // C店订单发货接口
        'suning.supply.orderbytime.query'   => 'queryOrderByTime',     // 按照订单修改时间获取订单号
        'suning.supply.seaorderjoin.add'    => 'addSeaOrderJoin',      // 海外购订单合单（海外直邮）
        'suning.supply.seaorderdeclare.add' => 'addSeaOrderDeclare',   // 海外购订单申报
        'suning.supply.reorderbytime.query' => 'queryReOrderByTime',   // 按照订单修改时间获取退货订单号
        'suning.supply.reorderdetail.get'   => 'getReOrderDetail',     // 单个订单退货详情查询
    /*
    |--------------------------------------------------------------------------
    | 入库API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=51&bustypeId=14
    |
    */
        'suning.swl.productstorage.add'     => 'addProductStorage',       // 商品入库预约申请
        'suning.swl.productstorage.modify'  => 'modifyProductStorage',    // 商品入库预约修改
        'suning.swl.productstorage.get'     => 'getProductStorage',       // 商品入库预约信息单笔查询
        'suning.swl.productstorage.query'   => 'queryProductStorage',     // 商品入库预约信息批量查询
        'suning.swl.productrealstorage.get' => 'getProductRealStorage',   // 商品实际入库信息查询
        'suning.swl.refundworkinfo.get'     => 'getRefundWorkInfo',       // 商品实际退库信息查询
    /*
    |--------------------------------------------------------------------------
    | 仓库API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=53&bustypeId=14
    |
    */
        'suning.swl.warehouseinfo.query' => 'queryWarehouseInfo',   // 批量查询仓库信息
        'suning.swl.warehouseinfo.get'   => 'getWarehouseInfo',     // 单个查询仓库信息
        'suning.swl.waresale.query'      => 'queryWareSale',        // 仓库可辐射范围批量查询
        'suning.swl.waresale.get'        => 'getWareSale',          // 单个仓库可辐射范围查询
        'suning.swl.inventory.get'       => 'getInventory',         // 库存查询
    /*
    |--------------------------------------------------------------------------
    | 退库API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=52&bustypeId=14
    |
    */
        'suning.swl.productbackstorage.add'   => 'addProductBackStorage',     // 商品退库预约申请
        'suning.swl.refundappoint.modify'     => 'modifyRefundAppoint',       // 商品退库预约修改
        'suning.swl.refundappointorder.get'   => 'getRefundAppointOrder',     // 商品退库预约信息单笔查询
        'suning.swl.refundappointorder.query' => 'queryRefundAppointOrder',   // 商品退库预约信息批量查询
        'suning.swl.refundworkinfo.get'       => 'getRefundWorkInfo',         // 商品实际退库信息查询
    /*
    |--------------------------------------------------------------------------
    | O2O订单API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=55&bustypeId=16
    |
    */
        'suning.oto.order.get'       => 'getOrder',         // 单笔订单查询
        'suning.oto.orderids.query'  => 'queryOrderids',    // 批量订单号查询
        'suning.oto.orderinfo.query' => 'queryOrderinfo',   // 批量订单信息分页查询
    /*
    |--------------------------------------------------------------------------
    | O2O商品API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=58&bustypeId=16
    |
    */
        'suning.oto.supplyapplying.query'      => 'querySupplyapplying',        // 商品供货状态查询批量
        'suning.custom.itemcontents.modify'    => 'itemContents',               // 商品内容修改
        'suning.custom.itemparameters.query'   => 'itemParameters',             // 获取商品参数模板
        'suning.custom.newbrand.query'         => 'queryNewbrand',              // 获取商品品牌信息新接口
        'suning.oto.addchild.add'              => 'addAddchild',                // O2O子商品新增接口
        'suning.oto.canshelves.query'          => 'queryCanshelves',            // 获取可上架商品
        'suning.oto.exactsupplyapplying.query' => 'queryExactsupplyapplying',   // O2O精确查看供货申请的商品
        'suning.oto.item.add'                  => 'addItem',                    // O2O商品申请
        'suning.oto.storeinfo.query'           => 'queryStoreinfo',             // 查询实体店信息
        'suning.oto.price.query'               => 'queryPrice',                 // 价格查询O2O
        'suning.oto.price.modify'              => 'modifyPrice',                // 价格更新O2O
        'suning.oto.publishcm.add'             => 'addPublishcm',               // O2O内容维护
        'suning.oto.salesstatus.modify'        => 'modifySalesstatus',          // 商品销售状态修改（云店/广场上架的商品）
        'suning.oto.salesstatus.query'         => 'querySalesstatus',           // 商品销售状态查询
        'suning.oto.supplyapplying.add'        => 'addSupplyapplying',          // 商品申请供货（超市申请供货、云店/广场上架商品）
        'suning.custom.itemdetail.query'       => 'itemDetail',                 // 获取我的商品详情信息
        'suning.custom.category.query'         => 'category',                   // 获取商品采购目录信息
    /*
    |--------------------------------------------------------------------------
    | O2O库存API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=63&bustypeId=16
    |
    */
        'suning.oto.factoryinventory.query'      => 'queryFactoryinventory',        // 厂送联营商品库存查询接口
        'suning.oto.factoryinventory.modify'     => 'modifyFactoryinventory',       // 同步厂送联营商品库存信息接口
        'suning.oto.warehousepool.query'         => 'queryWarehousepool',           // 线上联营查询仓库信息
        'suning.oto.warepoolcityaging.query'     => 'queryWarepoolcityaging',       // 联营厂送覆盖城市及时效查询
        'suning.oto.warepooldistrictaging.query' => 'queryWarepooldistrictaging',   // 联营厂送覆盖区域及时效查询
        'suning.oto.inventory.get'               => 'getInventory',                 // O2O库存查询
        'suning.oto.inventory.modify'            => 'modifyInventory',              // O2O同步库存
    /*
    |--------------------------------------------------------------------------
    | 招商API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=104&bustypeId=16
    |
    */
    /*
    |--------------------------------------------------------------------------
    | 拼购商品API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=87&bustypeId=32
    |
    */
        'suning.integrate.item.add'                    => 'item',                         // LPG产品申请
        'suning.integrate.itemdetail.query'            => 'queryItemdetail',              // LPG获取我的商品详情信息
        'suning.integrate.price.modify'                => 'modifyPrice',                  // 乐拼购价格更新
        'suning.integrate.culitemdetail.get'           => 'queryCulitemdetail',           // 乐拼购获取我的商品库详情（文化制品类）
        'suning.integrate.culitemcontents.modify'      => 'modifyCulitemcontents',        // 乐拼购商品内容维护（文化制品类）
        'suning.integrate.culitemcontentrevise.modify' => 'modifyCulitemcontentrevise',   // 乐拼购商品内容修改（文化制品类）新
        'suning.integrate.itemcontents.modify'         => 'itemContents',                 // 乐拼购商品内容修改
        'suning.integrate.itemcontents.add'            => 'itemContents',                 // 乐拼购商品内容维护
        'suning.integrate.itemsale.query'              => 'itemSale',                     // LPG商品销售情况查询
        'suning.integrate.price.query'                 => 'queryPrice',                   // 乐拼购价格查询
        'suning.integrate.culitem.add'                 => 'addCulitem',                   // 乐拼购产品申请（文化制品类）
        'suning.integrate.childitem.add'               => 'childItem',                    // LPG规格商品新增
        'suning.custom.getproductcode.query'           => 'queryGetproductcode',          // 根据返回申请编码获取苏宁商品编码
        'suning.custom.categoryredict.get'             => 'getCategoryredict',            // 获取类目预测信息
        'suning.custom.newbrand.query'                 => 'queryNewbrand',                // 获取商品品牌信息新接口
        'suning.custom.product.query'                  => 'product',                      // 获取苏宁产品信息
        'suning.custom.judgeproduct.confirm'           => 'confirmJudgeproduct',          // 判断商品是否存在接口
        'suning.custom.category.query'                 => 'category',                     // 获取商品采购目录信息
        'suning.custom.book.brand.query'               => 'brand',                        // 获取商品品牌信息（文化制品类）
        'suning.custom.productdetail.query'            => 'productDetail',                // 获取苏宁产品详情信息
        'suning.custom.book.productdetail.query'       => 'productDetail',                // 获取苏宁产品详情信息（文化制品类）
        'suning.custom.item.query'                     => 'item',                         // 获取我的商品库信息
        'suning.custom.book.item.query'                => 'item',                         // 获取我的商品库信息（文化制品类）
        'suning.custom.itemparameters.query'           => 'itemParameters',               // 获取商品参数模板
        'suning.custom.shelves.add'                    => 'shelves',                      // 商品上架
        'suning.custom.shelves.move'                   => 'shelves',                      // 商品下架
        'suning.custom.pic.delete'                     => 'pic',                          // 图片删除
        'suning.custom.book.product.get'               => 'product',                      // 苏宁产品信息精确查询（文化制品类）
        'suning.custom.item.get'                       => 'item',                         // 我的商品库信息精确查询
        'suning.custom.book.item.get'                  => 'item',                         // 我的商品库信息精确查询（文化制品类）
        'suning.custom.book.mainproduct.get'           => 'mainProduct',                  // 商品内容纠错申请结果查询（文化制品类）
        'suning.custom.mainproduct.get'                => 'mainProduct',                  // 查询商品内容纠错结果
        'suning.custom.product.get'                    => 'product',                      // 苏宁产品信息精确查询
        'suning.custom.item.delorres'                  => 'item',                         // 商品删除，恢复与彻底删除
        'suning.custom.moduletemplet.get'              => 'getModuleTemplet',             // 获取模块模板
        'suning.custom.mobilerecommend.add'            => 'addMobileRecommend',           // 手机详情推荐模块新增
        'suning.custom.mobilerecommend.modify'         => 'modifyMobileRecommend',        // 手机详情推荐模块修改
        'suning.custom.mobilerecommend.query'          => 'queryMobileRecommend',         // 手机详情推荐模块查询
        'suning.custom.mobilesequence.modify'          => 'modifyMobileSequence',         // 手机详情模块顺序修改
        'suning.custom.mobilesequence.query'           => 'queryMobileSequence',          // 手机详情模块顺序查询
        'suning.custom.npic.add'                       => 'addNPic',                      // 新版图片上传接口
    /*
    |--------------------------------------------------------------------------
    | 商品API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=78&bustypeId=30
    |
    */
        'suning.custom.getproductcode.query' => 'queryGetproductcode',   // 根据返回申请编码获取苏宁商品编码
        'suning.custom.lsyprice.modify'      => 'modifyLsyprice',        // 零售云商户价格更新接口
        'suning.custom.lsyprice.query'       => 'queryLsyprice',         // 零售云商户价格查询接口
        'suning.custom.item.query'           => 'item',                  // 获取我的商品库信息
        'suning.custom.itemdetail.query'     => 'itemDetail',            // 获取我的商品详情信息
        'suning.custom.itemsale.query'       => 'itemSale',              // 商品销售情况查询
        'suning.custom.itemcontents.modify'  => 'itemContents',          // 商品内容修改
        'suning.custom.item.get'             => 'item',                  // 我的商品库信息精确查询
        'suning.custom.item.delorres'        => 'item',                  // 商品删除，恢复与彻底删除
        'suning.custom.shelves.add'          => 'shelves',               // 商品上架
        'suning.custom.shelves.move'         => 'shelves',               // 商品下架
    /*
    |--------------------------------------------------------------------------
    | 订单API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=79&bustypeId=30
    |
    */
        'suning.custom.order.query'        => 'orderQuery',          // 批量获取订单（三个月内的订单）
        'suning.custom.historyorder.query' => 'historyOrderQuery',   // 批量获取历史订单（三个月前的历史订单）
        'suning.custom.order.get'          => 'orderGet',            // 单笔订单查询
        'suning.custom.unpaidorder.query'  => 'unpaidOrder',         // 未付款订单查询
    /*
    |--------------------------------------------------------------------------
    | 发货API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=80&bustypeId=30
    |
    */
        'suning.custom.orderdelivery.add' => 'orderDelivery',    // 订单发货
        'suning.custom.deliverynew.add'   => 'addDeliverynew',   // 订单发货
        'suning.custom.orderselfdist.add' => 'orderSelfDist',    // 订单发货（商家自配送）
    /*
    |--------------------------------------------------------------------------
    | 退货API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=81&bustypeId=30
    |
    */
        'suning.custom.batchrejected.query'     => 'batchQueryRejected',   // 批量获取退货信息
        'suning.custom.singlerejected.get'      => 'singleGetRejected',    // 单笔查询退货信息
        'suning.custom.agreerejected.modify'    => 'agreeRejected',        // 退货信息处理(同意)
        'suning.custom.disagreerejected.modify' => 'disAgreeRejected',     // 退货信息处理(不同意)
        'suning.custom.disagreerefund.modify'   => 'disAgreeRefund',       // 退款信息处理(不同意)
        'suning.custom.delayrefund.modify'      => 'delayRefund',          // 退款信息处理(延期)
        'suning.custom.agreerefund.modify'      => 'modifyAgreeRefund',    // 同意退款
    /*
    |--------------------------------------------------------------------------
    | 销售报表API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=83&bustypeId=30
    |
    */
        'suning.retail.xdsales.query'       => 'queryXdsales',         // 获取苏宁小店线下销售数据
        'suning.retail.xdsalesdetail.query' => 'queryXdsalesdetail',   // 获取苏宁小店销售数据明细
    /*
    |--------------------------------------------------------------------------
    | 采购API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=97&bustypeId=37
    |
    */
        'suning.retailer.purchaseorders.query'          => 'queryOrder',                     // 零售云采购单信息查询接口
        'suning.retailer.jsydbtborderrefunded.receive'  => 'receiveJsydbtborderrefunded',    // 零售云jsyd订单退款结果通知接口
        'suning.retailer.jsydbtborderpay.receive'       => 'receiveJsydbtborderpay',         // 零售云jsydB2b订单支付成功通知
        'suning.retailer.jsydbtborderinvoice.query'     => 'queryJsydbtborderinvoice',       // 零售云jsydB2b订单发票查询接口
        'suning.retailer.jsydbtborderdelivery.get'      => 'getJsydbtborderdelivery',        // 零售云jsydB2b订单配送信息查询接口
        'suning.retailer.jsydbtborderdetail.get'        => 'getJsydbtborderdetail',          // 零售云jsydB2b订单详情获取接口
        'suning.retailer.jsydbtborderdelivered.receive' => 'receiveJsydbtborderdelivered',   // 零售云jsydB2b订单确认收货通知接口
        'suning.retailer.jsydbtborder.create'           => 'createJsydbtborder',             // 零售云jsydB2b订单确认开单
        'suning.retailer.jsydbtborder.cancel'           => 'cancelJsydbtborder',             // 零售云jsydB2b订单未支付取消接口
        'suning.retailer.sapsaleorderstob.query'        => 'querySapsaleordertob',           // 零售云sap采购单查询列表接口
        'suning.retailer.saleorders.query'              => 'querySaleorders',                // 零售云销售订单列表查询接口
        'suning.retailer.refundorders.query'            => 'queryRefundorders',              // 零售云退货订单查询接口
        'suning.retailer.jsydbtbordersnorderid.get'     => 'getJsydbtbordersnorderid',       // 零售云jsydB2b订单反查接口
    /*
    |--------------------------------------------------------------------------
    | 订单API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=98&bustypeId=37
    |
    */
        'suning.retailer.refundorders.cancel'    => 'cancelRefundorders',      // 零售云退货成功通知接口
        'suning.retailer.shoppingorders.create'  => 'createShoppingorders',    // 零售云购物车确认开单接口
        'suning.retailer.order.cancel'           => 'cancelOrder',             // 零售云取消订单接口
        'suning.retailer.orderpayment.confirm'   => 'confirmOrderpayment',     // 零售云订单支付成功接口
        'suning.retailer.returnorders.create'    => 'createReturnorders',      // 零售云退货申请通知接口
        'suning.retailer.saleorderstoc.query'    => 'querySaleorderstoc',      // 零售云B2C销售订单列表查询接口
        'suning.retailer.sapsaleorderstoc.query' => 'querySapsaleorderstoc',   // 零售云sap销售订单列表查询接口
    /*
    |--------------------------------------------------------------------------
    | 库存API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=99&bustypeId=37
    |
    */
        'suning.retailer.inventory.add'        => 'addWarehouse',          // 零售云商品入库通知接口
        'suning.retailer.storeinventory.query' => 'queryStoreinventory',   // 零售云门店库存查询接口
    /*
    |--------------------------------------------------------------------------
    | 价格API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=100&bustypeId=37
    |
    */
        'suning.retailer.price.update' => 'updatePrice',   // 零售云销售价格修改接口
    /*
    |--------------------------------------------------------------------------
    | 商品API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=101&bustypeId=37
    |
    */
        'suning.retailer.commodity.get'                => 'getCommodity',                  // 零售云商品基本信息查询接口
        'suning.retailer.jsydcmmdtystatus.query'       => 'queryJsydcmmdtystatus',         // 零售云jsyd商品上下架状态查询接口
        'suning.retailer.jsydcmmdtysimilar.query'      => 'queryJsydcmmdtysimilar',        // 零售云jsyd同类商品查询接口
        'suning.retailer.jsydcmmdtysalestate.query'    => 'queryJsydcmmdtysalestate',      // 零售云jsyd商品区域购买限制查询接口
        'suning.retailer.jsydcmmdtyimgs.query'         => 'queryJsydcmmdtyimgs',           // 零售云jsyd商品图片查询接口
        'suning.retailer.jsydcmmdtydetail.get'         => 'getJsydcmmdtydetail',           // 零售云jsyd获取商品详情接口
        'suning.retailer.jsydcmmdtycategory.query'     => 'queryJsydcmmdtycategory',       // 零售云jsyd分页查询商品类别接口
        'suning.retailer.jsydcmmdtycartsourcing.query' => 'queryJsydcmmdtycartsourcing',   // 零售云jsyd商品批量获取库存接口
        'suning.retailer.distributorcode.get'          => 'getCmmdtydistributor',          // 零售云商品分销商编码查询接口
        'suning.retailer.cmmdtyprice.query'            => 'queryCmmdtyprice',              // 零售云商品价格查询接口
        'suning.retailer.commodity.query'              => 'queryCommodity',                // 零售云商品详情查询接口
        'suning.retailer.jsydcmmdtypool.query'         => 'queryJsydcmmdtypool',           // 零售云jsyd商品池查询接口
    /*
    |--------------------------------------------------------------------------
    | 报表API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=102&bustypeId=37
    |
    */
    /*
    |--------------------------------------------------------------------------
    | 消息服务API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=103&bustypeId=37
    |
    */
        'suning.retailer.message.confirm'     => 'confirmMessage',       // 零售云消息确认消费接口
        'suning.retailer.message.query'       => 'queryMessage',         // 零售云消息查询接口
        'suning.retailer.jsydmessage.confirm' => 'confirmJsydmessage',   // 零售云jsyd消息确认接口
        'suning.retailer.jsydmessage.query'   => 'queryJsydmessage',     // 零售云jsyd消息查询接口
    /*
    |--------------------------------------------------------------------------
    | 基础数据API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=108&bustypeId=37
    |
    */
        'suning.retailer.storearea.query'        => 'queryStorearea',          // 零售云省市区信息查询接口
        'suning.retailer.storelocation.get'      => 'getStorelocation',        // 零售云门店归属信息接口
        'suning.retailer.jsydareacity.query'     => 'queryJsydareacity',       // 零售云jsyd获取二级地址接口
        'suning.retailer.jsydareacounty.query'   => 'queryJsydareacounty',     // 零售云jsyd获取三级地址接口
        'suning.retailer.jsydareaprovince.query' => 'queryJsydareaprovince',   // 零售云jsy获取一级地址接口
        'suning.retailer.jsydareatown.query'     => 'queryJsydareatown',       // 零售云jsyd获取四级地址接口
    /*
    |--------------------------------------------------------------------------
    | 物流API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=109&bustypeId=37
    |
    */
        'suning.retailer.cmmdtyinstall.query'  => 'queryCmmdtyinstall',    // 零售云安装信息查询接口
        'suning.retailer.orderlogistics.query' => 'queryOrderlogistics',   // 零售云订单物流信息查询接口
        'suning.retailer.cmmdtyfreight.query'  => 'queryCmmdtyfreight',    // 零售云商品物流运费查询接口
    /*
    |--------------------------------------------------------------------------
    | 零售商认证API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=116&bustypeId=37
    |
    */
        'suning.retailer.membervatinvoiceinfo.get'        => 'getMembervatinvoiceinfo',          // 零售云会员增票信息查询接口
        'suning.retailer.membervatinvoiceregister.create' => 'createMembervatinvoiceregister',   // 零售云会员增票信息注册接口
    /*
    |--------------------------------------------------------------------------
    | 云信API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=42&bustypeId=12
    |
    */
        'suning.cloudinfo.subaccount.query'   => 'querySubAccount',     // 子账号批量查询
        'suning.cloudinfo.custinstatus.query' => 'queryCustInStatus',   // 客服在线状态查询
        'suning.cloudinfo.custopinion.get'    => 'getCustOpinion',      // 客服评价详情查询
        'suning.cloudinfo.chatuser.query'     => 'queryChatUser',       // 聊天对象列表查询
        'suning.cloudinfo.chatcontent.query'  => 'queryChatContent',    // 聊天内容详情查询
    /*
    |--------------------------------------------------------------------------
    | 政企商品API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=43&bustypeId=13
    |
    */
        'suning.govbus.category.get'            => 'getCategory',              // 获取商品目录接口
        'suning.govbus.productsearch.query'     => 'queryProductsearch',       // 政企商品搜索接口
        'suning.govbus.categorysearch.query'    => 'queryCategorysearch',      // 政企商品类目搜索
        'suning.govbus.productmapping.query'    => 'queryProductmapping',      // 查询商品映射关系接口
        'suning.govbus.getproductcluster.get'   => 'getGetproductcluster',     // 获取商品簇信息接口
        'suning.govbus.judgefacproduct.get'     => 'getJudgefacproduct',       // 判断商品是否厂送接口
        'suning.govbus.prodextend.get'          => 'getProdextend',            // 查询商品扩展信息接口
        'suning.govbus.getspecialgoods.query'   => 'queryGetspecialgoods',     // 获取特殊商品池
        'suning.govbus.prodpool.query'          => 'queryProdPool',            // 获取商品池
        'suning.govbus.proddetail.get'          => 'getProdDetail',            // 获取商品详情接口
        'suning.govbus.prodimage.query'         => 'queryProdImage',           // 获取商品图片接口
        'suning.govbus.batchprodsalestatus.get' => 'getBatchProdSaleStatus',   // 商品上下架状态查询接口
        'suning.govbus.prodreview.query'        => 'queryProdReview',          // 获取商品评价接口
        'suning.govbus.combinationprod.query'   => 'queryCombinationProd',     // 获取套餐清单
    /*
    |--------------------------------------------------------------------------
    | 政企价格API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=44&bustypeId=13
    |
    */
        'suning.govbus.price.query' => 'queryPrice',   // 批量查询商品价格接口
    /*
    |--------------------------------------------------------------------------
    | 政企库存API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=45&bustypeId=13
    |
    */
        'suning.govbus.inventory.get'    => 'getInventory',   // 单个商品的精准库存查询接口
        'suning.govbus.mprodstock.query' => 'queryMpStock',   // 多商品的库存批量查询接口
    /*
    |--------------------------------------------------------------------------
    | 政企订单API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=50&bustypeId=13
    |
    */
        'suning.govbus.alipay.create'         => 'createAlipay',           // 支付宝支付接口
        'suning.govbus.serviceschedule.query' => 'queryServiceschedule',   // 售后进度查询接口
        'suning.govbus.getperiodlimit.query'  => 'queryGetperiodlimit',    // 客户账期额度查询接口
        'suning.govbus.getbill.query'         => 'queryGetbill',           // 获取账单信息接口
        'suning.govbus.orderitemdetail.get'   => 'getOrderitemdetail',     // 批量查询订单行接口
        'suning.govbus.orderitem.query'       => 'queryOrderitem',         // 订单行对账接口
        'suning.govbus.mixconfirmorder.add'   => 'addMixconfirmorder',     // 确认预占接口（新）
        'suning.govbus.unpaidorder.cancel'    => 'cancelUnpaidorder',      // 未支付订单取消接口
        'suning.govbus.mixpayorder.add'       => 'addMixpayorder',         // 创建订单接口（新）
        'suning.govbus.lognumsubmit.add'      => 'addLognumsubmit',        // 物流信息提交接口
        'suning.govbus.rejectorder.delete'    => 'deleteRejectOrder',      // 取消预占库存订单接口
        'suning.govbus.orderdetail.get'       => 'getOrderDetail',         // 查询单个订单详细
        'suning.govbus.orderstatus.get'       => 'getOrderStatus',         // 获取订单状态接口
        'suning.govbus.orderaccount.query'    => 'queryOrderAccount',      // 订单对账接口
    /*
    |--------------------------------------------------------------------------
    | 政企物流API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=47&bustypeId=13
    |
    */
        'suning.govbus.orderlogist.get'    => 'getOrderLogist',      // 获取订单物流详情
        'suning.govbus.orderlogistnew.get' => 'getOrderlogistnew',   // 获取订单物流详情（新）
        'suning.govbus.logistdetail.get'   => 'getLogistdetail',     // 获取订单包裹信息接口
        'suning.govbus.shiptime.get'       => 'getShipTime',         // 物流时效接口
        'suning.govbus.shipcarriage.get'   => 'getShipCarriage',     // 物流运费接口
        'suning.govbus.facproduct.confirm' => 'confirmFacProduct',   // 厂送商品确认收货接口
    /*
    |--------------------------------------------------------------------------
    | 政企发票API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=59&bustypeId=13
    |
    */
        'suning.govbus.invoice.confirm'  => 'confirmInvoice',    // 政企订单补开发票
        'suning.govbus.eleinvoice.get'   => 'getEleinvoice',     // 电子发票查询接口
        'suning.govbus.getinvoice.query' => 'queryGetinvoice',   // 发票信息查询
    /*
    |--------------------------------------------------------------------------
    | 政企售后API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=130&bustypeId=13
    |
    */
        'suning.govbus.retchggoods.cancel'        => 'cancelRetchggoods',          // 取消退换货接口
        'suning.govbus.repairgoods.cancel'        => 'cancelRepairgoods',          // 取消维修申请接口
        'suning.govbus.applyexchangegoods.create' => 'createApplyexchangegoods',   // 换货申请接口
        'suning.govbus.applyrepairgoods.create'   => 'createApplyrepairgoods',     // 维修申请接口
        'suning.govbus.repairmethod.query'        => 'queryRepairmethod',          // 维修方式查询接口
        'suning.govbus.afterservice.query'        => 'queryAfterservice',          // 售后服务类型查询接口
        'suning.govbus.lognumsubmit.add'          => 'addLognumsubmit',            // 物流信息提交接口
        'suning.govbus.serviceschedule.query'     => 'queryServiceschedule',       // 售后进度查询接口
        'suning.govbus.returnpartorder.add'       => 'addReturnpartorder',         // 退货申请接口（新）
    /*
    |--------------------------------------------------------------------------
    | 政企其他API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=48&bustypeId=13
    |
    */
        'suning.govbus.fulladdress.get'        => 'getFullAddress',          // 全量地址接口
        'suning.govbus.setsecretkey.update'    => 'updateSetsecretkey',      // 设置公钥信息接口
        'suning.govbus.getcardsecretkey.query' => 'queryGetcardsecretkey',   // 在线获取礼品卡卡密接口
        'suning.govbus.onlinepay.create'       => 'createOnlinepay',         // 在线支付接口
        'suning.govbus.pricemessage.query'     => 'queryPricemessage',       // 价格变动消息查询接口
        'suning.govbus.paymentway.get'         => 'getPaymentway',           // 是否支持货到付款接口
        'suning.govbus.servicerates.get'       => 'getServicerates',         // 查询服务进度信息
        'suning.govbus.predepositbalance.get'  => 'getPreDepositBalance',    // 查询预存款金额接口
        'suning.govbus.message.get'            => 'getMessage',              // 查询消息
        'suning.govbus.message.delete'         => 'deleteMessage',           // 删除消息接口
    /*
    |--------------------------------------------------------------------------
    | 政企易企购API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=115&bustypeId=13
    |
    */
        'suning.govbus.unionlogin.add'     => 'addUnionlogin',       // 易企购联合登录接口
        'suning.govbus.orderconfirm.add'   => 'addOrderconfirm',     // 易企购订单确认预占接口
        'suning.govbus.ordercancel.delete' => 'deleteOrdercancel',   // 易企购订单取消预占接口
    /*
    |--------------------------------------------------------------------------
    | 效果报表API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=60&bustypeId=17
    |
    */
        'suning.advertise.bjcpmmurl.get'         => 'getBjcpmmurl',           // 宝洁CPM推广素材
        'suning.advertise.bjcpt.query'           => 'queryBjcpt',             // 宝洁CPT
        'suning.advertise.bjcptmurl.get'         => 'getBjcptmurl',           // 宝洁CPT推广素材
        'suning.advertise.bjcpm.query'           => 'queryBjcpm',             // 宝洁CPM
        'suning.advertise.baojieapi.query'       => 'queryBaojieapi',         // 宝洁api接口
        'suning.advertise.bjcpcunitdetail.query' => 'queryBjcpcunitdetail',   // cpc宝洁推广单元明细
    /*
    |--------------------------------------------------------------------------
    | 工具API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=57&bustypeId=21
    |
    */
        'suning.common.systime.get' => 'getSystime',   // 查询苏宁系统当前时间
    /*
    |--------------------------------------------------------------------------
    | 特卖商品API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=66&bustypeId=23
    |
    */
        'suning.saleoff.price.query'         => 'queryPrice',            // 特卖挂牌价查询
        'suning.saleoff.price.modify'        => 'modifyPrice',           // 特卖更新挂牌价
        'suning.custom.getproductcode.query' => 'queryGetproductcode',   // 根据返回申请编码获取苏宁商品编码
        'suning.custom.category.query'       => 'category',              // 获取商品采购目录信息
        'suning.custom.newbrand.query'       => 'queryNewbrand',         // 获取商品品牌信息新接口
        'suning.custom.itemparameters.query' => 'itemParameters',        // 获取商品参数模板
        'suning.custom.product.query'        => 'product',               // 获取苏宁产品信息
        'suning.custom.productdetail.query'  => 'productDetail',         // 获取苏宁产品详情信息
        'suning.saleoff.publishcm.add'       => 'addPublishcm',          // 联营特卖发布已有接口
        'suning.saleoff.item.add'            => 'addItem',               // 联营特卖发布新商品
        'suning.saleoff.itemcontents.query'  => 'queryItemcontents',     // 获取我的商品详细信息
        'suning.saleoff.mylibary.query'      => 'queryMylibary',         // 联营特卖我的商品库精确查询接口
        'suning.saleoff.mylibarybatch.query' => 'queryMylibarybatch',    // 联营特卖批量获取我的商品库信息
        'suning.saleoff.cmmdtyinfo.modify'   => 'modifyCmmdtyinfo',      // 联营特卖商品修改接口
        'suning.saleoff.mainproduct.modify'  => 'modifyMainproduct',     // 商品内容纠错申请联营特卖
        'suning.saleoff.mainproduct.get'     => 'getMainproduct',        // 查询商品内容纠错结果-联营特卖
        'suning.saleoff.addchild.add'        => 'addAddchild',           // 联营特卖子商品新增
        'suning.custom.pic.delete'           => 'pic',                   // 图片删除
        'suning.custom.moduletemplet.get'    => 'getModuleTemplet',      // 获取模块模板
    /*
    |--------------------------------------------------------------------------
    | 特卖交易API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=67&bustypeId=23
    |
    */
        'suning.selfmarket.ord.query'               => 'queryOrd',                 // 根据订单修改时间批量查询订单信息
        'suning.saleoff.electronicsheet.add'        => 'addElectronicsheet',       // 订单打印面单状态同步
        'suning.selfmarket.orderdeliver.add'        => 'addOrderDeliver',          // 订单发货
        'suning.selfmarket.order.add'               => 'addOrder',                 // 订单打包
        'suning.selfmarket.order.get'               => 'getOrder',                 // 单笔订单查询
        'suning.selfmarket.ordercode.query'         => 'queryOrdercode',           // 批量获取订单号
        'suning.selfmarket.rejected.query'          => 'queryRejected',            // 批量获取退货信息
        'suning.selfmarket.rejected.get'            => 'getRejected',              // 单笔获取退货信息
        'suning.selfmarket.refundlog.query'         => 'queryRefundlog',           // 退货处理记录查询
        'suning.selfmarket.disagreerejected.modify' => 'modifyDisagreerejected',   // 厂送退货审核（拒绝退货）
        'suning.selfmarket.disagreerefund.modify'   => 'modifyDisagreerefund',     // 厂送退货审核（拒绝退款）
        'suning.selfmarket.agreerejected.modify'    => 'modifyAgreerejected',      // 厂送退货审核（同意退货）
        'suning.selfmarket.agreerefund.modify'      => 'modifyAgreerefund',        // 厂送退货审核（同意退款）
    /*
    |--------------------------------------------------------------------------
    | 特卖库存API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=68&bustypeId=23
    |
    */
        'suning.oto.warehousepool.query'     => 'queryWarehousepool',       // 线上联营查询仓库信息
        'suning.oto.factoryinventory.modify' => 'modifyFactoryinventory',   // 同步厂送联营商品库存信息接口
        'suning.oto.factoryinventory.query'  => 'queryFactoryinventory',    // 厂送联营商品库存查询接口
    /*
    |--------------------------------------------------------------------------
    | 字体服务商API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=72&bustypeId=27
    |
    */
        'suning.fontorder.serviceinformation.query' => 'queryServiceinformation',   // 服务商查询字体服务订购信息
        'suning.fontorder.shippiingnotice.confirm'  => 'confirmShippiingnotice',    // 服务商字体发货通知服务市场
    /*
    |--------------------------------------------------------------------------
    | 订购关系查询API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=77&bustypeId=27
    |
    */
        'suning.fontorder.isvorder.query' => 'queryIsvorder',   // 服务商查询ISV服务订购信息
    /*
    |--------------------------------------------------------------------------
    | 消息服务清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=75&bustypeId=28
    |
    */
        'suning.message.user.permit' => 'permitUser',   // 为已授权的用户开通消息服务
        'suning.message.user.cancel' => 'cancelUser',   // 取消已授权用户的消息服务
    /*
    |--------------------------------------------------------------------------
    | 充值API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=85&bustypeId=31
    |
    */
        'suning.operasale.agentrecharge.add' => 'addAgentrecharge',   // 代理商充值接口
        'suning.operasale.agentrecharge.get' => 'getAgentrecharge',   // 代理商充值订单查询接口
    /*
    |--------------------------------------------------------------------------
    | 预配卡开户API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=112&bustypeId=31
    |
    */
        'suning.operasale.prebindcard.create' => 'createPrebindcard',   // 预配卡开户接口
    /*
    |--------------------------------------------------------------------------
    | 白卡开户API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=111&bustypeId=31
    |
    */
        'suning.operasale.writecarddata.get'     => 'getWritecarddata',       // 获取写卡数据接口
        'suning.operasale.preoccupyphnum.update' => 'updatePreoccupyphnum',   // 号码预占接口
        'suning.operasale.customercheck.get'     => 'getCustomercheck',       // 客户资料校验接口
        'suning.operasale.channeluser.create'    => 'createChanneluser',      // 分销开户接口
        'suning.operasale.createuserfee.get'     => 'getCreateuserfee',       // 分销商开户算费接口
        'suning.operasale.writecardresult.add'   => 'addWritecardresult',     // 写卡结果反馈接口
    /*
    |--------------------------------------------------------------------------
    | 订单API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=106&bustypeId=38
    |
    */
        'suning.offline.order.update'   => 'updateOrder',     // 订单交易结果通知
        'suning.offline.refund.confirm' => 'confirmRefund',   // 订单退款校验及处理
        'suning.offline.refund.update'  => 'updateRefund',    // 订单退款结果通知
        'suning.offline.order.confirm'  => 'confirmOrder',    // 订单支付校验及处理
        'suning.offline.order.query'    => 'queryOrder',      // 待支付订单查询
    /*
    |--------------------------------------------------------------------------
    | 商品API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=89&bustypeId=34
    |
    */
        'suning.online.catalogcommodity.query' => 'queryCatalogcommodity',   // 查询目录下的商品列表
        'suning.online.catalog.query'          => 'queryCatalog',            // 获取平台的目录
        'suning.online.cmmdtybaseinfo.query'   => 'queryCmmdtybaseinfo',     // 获取商品基本信息
        'suning.online.cmmdtypic.query'        => 'queryCmmdtypic',          // 查询商品主图信息
        'suning.online.cmmdtyfullinfo.get'     => 'getCmmdtyfullinfo',       // 获取商品详细信息
        'suning.online.commodityparam.query'   => 'queryCommodityparam',     // 获取商品参数
        'suning.online.commdtypackage.query'   => 'queryCommdtypackage',     // 商品包基本信息查询
    /*
    |--------------------------------------------------------------------------
    | 价格API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=90&bustypeId=34
    |
    */
        'suning.online.cmmdtyprice.query'       => 'queryCmmdtyprice',         // 查询商品价格
        'suning.online.price.query'             => 'queryCmmdtyprice',         // 查询商品价格（定制）
        'suning.online.priceforcart.query'      => 'queryPriceforcart',        // 购物车价格查询
        'suning.online.cmmdtylistprice.query'   => 'queryCmmdtylistprice',     // 商品列表页价格查询
        'suning.online.cmmdtydetailprice.query' => 'queryCmmdtydetailprice',   // 商品详情页价格查询
        'suning.online.settlementprice.query'   => 'querySettlementprice',     // 商品结算信息查询
    /*
    |--------------------------------------------------------------------------
    | 订单API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=91&bustypeId=34
    |
    */
        'suning.online.refundordersync.create'  => 'createRefundordersync',    // 退款订单同步
        'suning.online.refundrecord.query'      => 'queryRefundrecord',        // 查询退换货记录
        'suning.online.cmmdtyreceive.confirm'   => 'confirmCmmdtyreceive',     // 确认收货出账单
        'suning.online.searchinstall.query'     => 'querySearchinstall',       // 查询安装时效信息
        'suning.online.applyreturngoods.create' => 'createApplyreturngoods',   // 退换货申请
        'suning.online.refundstatus.query'      => 'queryRefundstatus',        // 退款状态查询
        'suning.online.elecinvoice.query'       => 'queryElecinvoice',         // 查询电子发票信息
        'suning.online.order.cancel'            => 'cancelOrder',              // 支付前取消订单
        'suning.online.order.confirm'           => 'confirmOrder',             // 订单支付前检查
        'suning.online.order.create'            => 'createOrder',              // 订单信息提交
        'suning.online.order.update'            => 'updateOrder',              // 支付结果通知
        'suning.online.ordersubmit.create'      => 'createOrdersubmit',        // 订单信息提交(新)
    /*
    |--------------------------------------------------------------------------
    | 营销API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=94&bustypeId=34
    |
    */
        'suning.online.activity.get'            => 'getActivity',              // 获取大聚惠活动信息
        'suning.online.activity.confirm'        => 'confirmActivity',          // 营销资格检查
        'suning.online.batchactivityinfo.query' => 'queryBatchactivityinfo',   // 聚惠价商品活动信息批量查询
    /*
    |--------------------------------------------------------------------------
    | 基础数据API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=92&bustypeId=34
    |
    */
        'suning.online.addressset.query'            => 'queryAddressset',              // 查询苏宁地址库信息
        'suning.online.messagepoolnotify.query'     => 'queryMessagepoolnotify',       // 消息池通知信息查询
        'suning.online.messagepoolcallback.confirm' => 'confirmMessagepoolcallback',   // 消息池回执信息确认
    /*
    |--------------------------------------------------------------------------
    | 物流API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=93&bustypeId=34
    |
    */
        'suning.online.transport.get'      => 'getTransport',        // 查询物流状态
        'suning.online.lgsstatus.query'    => 'queryLgsstatus',      // 查询物流详情
        'suning.online.retlgsstatus.query' => 'queryRetlgsstatus',   // 查询订单及换货单物流详情
    /*
    |--------------------------------------------------------------------------
    | 会员API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=129&bustypeId=34
    |
    */
        'suning.online.member.query' => 'queryMember',   // 会员绑定关系查询
    /*
    |--------------------------------------------------------------------------
    | 优惠券定制业务API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=114&bustypeId=34
    |
    */
        'suning.online.freevoucher.create' => 'createFreevoucher',   // 免费领券接口
        'suning.online.couponinfo.query'   => 'queryCouponinfo',     // 批量券状态查询
    /*
    |--------------------------------------------------------------------------
    | 促销API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=107&bustypeId=34
    |
    */
        'suning.online.fourpagedyna.query'          => 'queryFourpagedynamicdata',     // 四级页领券动态数据查询
        'suning.online.accountcouponlist.query'     => 'queryAccountcouponlist',       // 账户券列表查询
        'suning.online.caronecangetcoupon.query'    => 'queryCaronecangetcoupon',      // 购物车1可领券判断查询
        'suning.online.caronegetcoupon.query'       => 'queryCaronegetcoupon',         // 批量查询免费领券接口
        'suning.online.fourpageactivity.query'      => 'queryFourpageactivity',        // 四级页查询促销活动
        'suning.online.receivefreecoupon.create'    => 'createReceivefreecoupon',      // 免费领券接口
        'suning.online.pagefourcoupon.query'        => 'queryPagefourcoupon',          // 四级页可用券查询
        'suning.online.searchcarttwocoupon.query'   => 'querySearchcarttwocoupon',     // 购物车2可用券查询
        'suning.online.searchcartonecoupon.query'   => 'querySearchcartonecoupon',     //  购物车1可用券查询
        'suning.online.carttwoactandcoupon.confirm' => 'confirmCarttwoactandcoupon',   // 购物车2促销活动查询和用券校验
        'suning.online.cartwoact.query'             => 'queryCartwoquerycompute',      // 购物车2页促销活动查询计算
        'suning.online.caroneact.query'             => 'queryCaronequerycompute',      // 购物车1页促销活动查询计算
        'suning.online.cmmdtybycouponoract.query'   => 'queryCmmdtybycouponoract',     // 促销活动或券凑单接口
    /*
    |--------------------------------------------------------------------------
    | 门店API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=117&bustypeId=40
    |
    */
        'suning.store.appstore.modify' => 'modifyAppstore',   // 苏宁小店设置门店营业状态
        'suning.store.appstore.update' => 'updateAppstore',   // 苏宁小店对外更新门店信息接口
        'suning.store.appstore.query'  => 'queryAppstore',    // 苏宁小店批量门店信息查询
    /*
    |--------------------------------------------------------------------------
    | 商品API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=118&bustypeId=40
    |
    */
        'suning.store.category.query'          => 'queryCategory',            // 查询类目(身边苏宁小店)
        'suning.store.salesstatus.query'       => 'querySalesstatus',         // 查询商品上下架(身边苏宁小店)
        'suning.store.productlist.query'       => 'queryProductlist',         // 身边苏宁查询商品列表
        'suning.store.productinventory.modify' => 'modifyProductinventory',   // 修改商品库存（身边苏宁小店）
        'suning.store.productinventory.get'    => 'getProductinventory',      //  查询商品库存（身边苏宁小店）
        'suning.store.product.delete'          => 'deleteProduct',            // 删除商品(身边苏宁小店)
        'suning.store.paramtemplate.query'     => 'queryParamtemplate',       // 查询参数模板(身边苏宁小店)
        'suning.store.commodityprice.query'    => 'queryCommodityprice',      // 查看商品价格
        'suning.store.commodityprice.modify'   => 'modifyCommodityprice',     // 修改商品价格
        'suning.store.commodityedit.create'    => 'createCommodityedit',      // 新建修改编辑商品信息
        'suning.store.commoditydetail.query'   => 'queryCommoditydetail',     // 查询商品详情信息（苏宁小店）
        'suning.store.commodityaudit.query'    => 'queryCommodityaudit',      // 查询审核商品信息
        'suning.store.salesstatus.update'      => 'updateSalesstatus',        // 商品上下架（支持批量）
    /*
    |--------------------------------------------------------------------------
    | 店铺分类API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=119&bustypeId=40
    |
    */
        'suning.store.sidesecassortappservice.query'    => 'querySidesecassortappservice',      // 查询小店店内二级分类
        'suning.store.sidestoreassortappservice.update' => 'updateSidestoreassortappservice',   // 分类新增修改删除排序
        'suning.store.sidestoreassortlinkapp.query'     => 'querySidestoreassortlinkapp',       // 查询商品分类
        'suning.store.sidestoreassortlinkapp.update'    => 'updateSidestoreassortlinkapp',      // 商品添加分类
        'suning.store.sidestorefirstassortapp.query'    => 'querySidestorefirstassortapp',      // 查询店内一级分类
    /*
    |--------------------------------------------------------------------------
    | 配送范围API 清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=120&bustypeId=40
    |
    */
        'suning.store.scope.query' => 'queryScope',   // 门店配送范围查询
        'suning.store.scope.add'   => 'addScope',     // 门店配送范围维护
    /*
    |--------------------------------------------------------------------------
    | 促销API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=121&bustypeId=40
    |
    */
        'suning.store.orderdiscount.get'    => 'getOrderdiscount',          // 苏宁小店查询单个活动信息API
        'suning.store.orderdiscount.query'  => 'queryOrderdiscount',        // 苏宁小店订单优惠查询多条活动数据API
        'suning.store.orderdiscount.cancel' => 'cancelOrderdiscount',       // 苏宁小店订单优惠活动终止API
        'suning.store.orderdiscount.create' => 'createOrderdiscountside',   // 苏宁小店订单优惠创建API
        'suning.store.ssprice.create'       => 'createSsprice',             // 身边苏宁限时打折创建和修改活动
        'suning.store.ssprice.get'          => 'getSsprice',                // 身边苏宁限时打折活动详情
        'suning.store.ssprice.move'         => 'moveSsprice',               // 身边苏宁限时打折活动终止
        'suning.store.ssprice.query'        => 'querySsprice',              // 身边苏宁限时打折活动列表查询接口
        'suning.store.ssshopcoupon.add'     => 'addSsshopcoupon',           // 身边苏宁店铺优惠券创建活动
        'suning.store.ssshopcoupon.query'   => 'querySsshopcoupon',         // 身边苏宁店铺优惠券活动列表查询接口
        'suning.store.ssshopcoupon.cancel'  => 'cancelSsshopcoupon',        // 身边苏宁店铺优惠券终止活动
        'suning.store.ssshopcoupon.get'     => 'getSsshopcoupon',           // 身边苏宁优惠券活动详情查询接口
        'suning.store.ssshopcoupon.modify'  => 'modifySsshopcoupon',        // 身边苏宁店铺优惠券编辑活动
        'suning.store.orderdiscount.modify' => 'modifyOrderdiscount',       // 苏宁小店订单优惠活动编辑API
    /*
    |--------------------------------------------------------------------------
    | 订单API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=122&bustypeId=40
    |
    */
        'suning.store.sidesnorder.confirm'            => 'confirmSidesnorder',              // 苏宁小店确认接单API
        'suning.store.sidesnoneorder.query'           => 'querySidesnoneorder',             // 苏宁小店单笔订单查询API
        'suning.store.sidesnordersbymodifytime.query' => 'querySidesnordersbymodifytime',   // 苏宁小店根据订单修改时间查订单详情API
        'suning.store.sidesnordernos.query'           => 'querySidesnordernos',             // 苏宁小店批量获取订单号API
    /*
    |--------------------------------------------------------------------------
    | 取消退款API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=123&bustypeId=40
    |
    */
        'suning.store.sidesnapplyrefund.add'           => 'addSidesnapplyrefund',             // 发起退款申请
        'suning.store.sidesnrefundreasonlist.query'    => 'querySidesnrefundreasonlist',      // 获取商家退款原因
        'suning.store.sidesnagreereturn.update'        => 'updateSidesnagreereturn',          // 同意退货请求
        'suning.store.sidesnagreerefund.update'        => 'updateSidesnagreerefund',          // 同意退款请求
        'suning.store.sidesnrejectrefund.update'       => 'updateSidesnrejectrefund',         // 商家拒绝退款请求
        'suning.store.sidesnexternalqueryrefund.query' => 'querySidesnexternalqueryrefund',   // 获取可发起退款的商品信息
        'suning.store.snreturnorderinfo.query'         => 'querySnreturnorderinfo',           // 获取退款请求信息
    /*
    |--------------------------------------------------------------------------
    | 联合付费API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=125&bustypeId=42
    |
    */
        'suning.superext.paidsuper.add'            => 'addPaidsuper',              // 第三方购买super
        'suning.superext.unsubscribe.delete'       => 'deleteUnsubscribe',         // 第三方退订
        'suning.superext.checkpaidthreshold.query' => 'queryCheckpaidthreshold',   // 校验购买付费会员资格
    /*
    |--------------------------------------------------------------------------
    | 联名会员推广API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=131&bustypeId=42
    |
    */
    /*
    |--------------------------------------------------------------------------
    | 联名会员推广API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=132&bustypeId=45
    |
    */
    /*
    |--------------------------------------------------------------------------
    | 会员账号API清单
    |--------------------------------------------------------------------------
    |
    | @see http: //open.suning.com/ospos/apipage/toApiAccessMenu.do?interTypePageId=133&bustypeId=45
    |
    */
    ];