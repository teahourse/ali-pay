<?php
namespace zhangv\alipay\service;

use zhangv\alipay\AliPay;

/**
 * 手机网站支付
 * @license MIT
 * @author zhangv
 * @link https://docs.open.alipay.com/203
 * @method mixed query($orderId, $txnTime, $ext = [])
 * @method mixed fileDownload($settleDate, $fileType)
 */
class Wap extends AliPay {

	/**
	 * 支付
	 * @param $orderId
	 * @param $txnAmt
	 * @param array $ext
	 * @return string
	 */
	public function pay($orderId, $txnAmt, $ext = []) {
		$ext['channelType'] = UnionPay::CHANNELTYPE_MOBILE;
		return parent::pay($orderId, $txnAmt, $ext);
	}

	/**
	 * 消费撤销
	 * @param string $orderId
	 * @param string $origQryId
	 * @param string $txnAmt
	 * @param array $ext
	 * @return mixed
	 */
	public function payUndo($orderId, $origQryId, $txnAmt, $ext = []) {
		$ext['channelType'] = UnionPay::CHANNELTYPE_MOBILE;
		return parent::payUndo($orderId, $origQryId, $txnAmt, $ext);
	}

	/**
	 * 退款
	 * @param $orderId
	 * @param $origQryId
	 * @param $refundAmt
	 * @param array $ext
	 * @return mixed
	 */
	public function refund($orderId, $origQryId, $refundAmt, $ext = []) {
		$ext['channelType'] = UnionPay::CHANNELTYPE_MOBILE;
		return parent::refund($orderId, $origQryId, $refundAmt, $ext);
	}

}