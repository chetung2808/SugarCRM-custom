<?php

require_once('modules/Cus_ECT_Class/views/view.edit.php');

class ViewCustomXepLop extends ViewEdit
{
    public function __construct()
    {
        parent::__construct();
        $this->useForSubpanel = true;
    }

    public function display()
    {
        $this->lv = new ListViewSmarty();
        $this->lv->show_title = false;
        $this->lv->searchForm($this->module, $this->getSearchParams());
        $this->lv->setup($this->seed, 'include/ListView/ListViewGeneric.tpl', $this->where, $this->params);
        $this->lv->processSearchForm();
        echo $this->lv->display();
    }
}
