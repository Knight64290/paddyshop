<?php
// +----------------------------------------------------------------------
// | PaddyShop 全网多平台免费开源电商系统
// +----------------------------------------------------------------------
// | Copyright (c) 2021 https://paddyshop.net All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: Alan Leung
// +----------------------------------------------------------------------

namespace app\common\model;

class OrderDetail extends PaddyShop
{
    public function getImagesAttr($value)
    {
        return filePathHandle($value);
    }

    public function setImagesAttr($value)
    {
        return attachmentPathHandle($value);
    }

	/**
	 * 关联会员详情
	 * @Author: Alan Leung
	 */
	public function userInfo()
	{
		return $this->hasOne('user', 'id', 'user_id')->bind(['nickname', 'avatar']);
	}
}