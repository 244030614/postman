<?php
//活动配置第一页入口
class init
{
    var $registry;

    public function __construct($registry)
    {
        $this->registry = $registry;
    }

    function __destruct()
    {
    }

    public function main()
    {

        ddl_output_view('', '', 1, 0, 0);
    }
}
