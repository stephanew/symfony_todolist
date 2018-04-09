<?php
/**
 * Created by PhpStorm.
 * User: stephanew
 * Date: 2018/4/6
 * Time: 下午5:54
 */
namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Data;

class BaseController extends Controller
{
    protected function setDefaultParam($datum, $type)
    {
        if ($type == "create") {
            $datum->setCreateTime(time());
        }
        $datum->setUpdateTime(time());
        $datum->setStatus(1);
        return true;
    }
}