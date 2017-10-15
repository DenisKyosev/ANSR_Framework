<?php
/**
 * Created by IntelliJ IDEA.
 * User: RoYaL
 * Date: 10/14/2017
 * Time: 8:24 PM
 */

namespace ANSR\Core\Annotation\Type;


use ANSR\Core\Annotation\AnnotationAbstract;

class Value extends AnnotationAbstract
{
    private $param = "";

    public function getParam(): string
    {
        return $this->param;
    }

    public function setParam(string $param)
    {
        $this->param = $param;
    }


}