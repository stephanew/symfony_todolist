<?php
/**
 * Created by PhpStorm.
 * User: stephanew
 * Date: 2018/4/4
 * Time: 下午5:19
 */

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;


$collection = new RouteCollection();
$collection->add('listIndex', new Route('/list/index', array(
    '_controller' => 'AppBundle:List:index',
)));
/*$collection->add('blog_show', new Route('/blog/{slug}', array(
    '_controller' => 'AppBundle:Blog:show',
)));*/

return $collection;