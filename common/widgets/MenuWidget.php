<?php


namespace common\widgets;
use frontend\models\SunMenu;
use yii\base\Widget;


class MenuWidget extends Widget
{
    public $formfactor;
    public $data;
    public $tree;
    public $menuFinal;
    public $sunitem;

    public function init()
    {
        parent::init();
        if ($this->formfactor === null) {
            $this->formfactor = 'sun';
        }
        $this->formfactor .= '.php';
    }
    public function run()
    {
        $this->data = SunMenu::find()->indexBy('id')->asArray()->all();
        if ($this->formfactor = 'sun') {
            $this->tree = $this->getBranch();
            $this->menuFinal = $this->getMenuSVG($this->tree);
            return $this->menuFinal;
        }
        if ($this->formfactor = 'html') {
            $this->tree = $this->getTree();
            $this->menuFinal = $this->getMenuHtml($this->tree);
            return $this->menuFinal;
        }



    }
    protected function getTree()
    {
        $tree = [];
        foreach ($this->data as $id => &$value) {
            if (empty($value['parent_id'])) {
                $tree[$id] = &$value;
            } else {
                $this->data[$value['parent_id']]['childs'][$value['id']] = &$value;
            }
        }
        return $tree;
    }
    protected function getBranch()
    {
        $branch = [];

        foreach ($this->data as $id => &$value) {
            if ($this->sunitem == $value['id']) {
                $parent = $value['parent_id'];
                $branch['current'] = &$value;

                foreach ($this->data as $id2 => &$value2) {
                    //parent
                    if ($parent == $value2['id']) {
                       $branch['parent'] = &$value2;
                        //grandparent
                        if ($branch['parent']['parent_id']!= 0){
                            foreach ($this->data as $id2g => &$value2g) {
                                if ($branch['parent']['parent_id'] == $value2g['id']) {
                                    $branch['grandparent'] = &$value2g;
                                }
                            }
                        }
                    }
                    //childs
                    if ($value2['parent_id'] == $this->sunitem) {
                        $branch['childs'][$value2['id']] = &$value2;
                        //haschild
                        foreach ($this->data as $id3) {
                            if ($id3['parent_id'] == $value2['id']) {
                                $branch['childs'][$value2['id']]['haschild'][$id3['name']] = $id3['id'];

                            }
                        }
                    }
                }
            }
        }
        return $branch;
//       debug($branch);
    }

    protected function getMenuSVG($tree)
    {
        $sunitem = $this->sunitem;
        $beamlocation = [];
        $beamlocation[1] = 'M-50,248l355.5-249';
        $beamlocation[2] = 'M-50,248L333.2,44.3';
        $beamlocation[3] = 'M-50,248L355.2,92.5';
        $beamlocation[4] = 'M-50.1,248L371,143';
        $beamlocation[5] = 'M-50,248l430.8-52.9';
        $beamlocation[6] = 'M-50,248h434';
        $beamlocation[7] = 'M-50,248l430.8,52.9';
        $beamlocation[8] = 'M-50.1,248L371,353';
        $beamlocation[9] = 'M-50,248l405.2,155.5';
        $beamlocation[10] = 'M-50.1,248l383.2,203.8';
        $beamlocation[11] = 'M-50.1,248l355.5,249';
        $beamlocation[12] = 'M-50.1,248l322.6,290.4';
        $beamlocation[13] = 'M-50,248l284.8,327.6';

        $centerlocation = [];
        $centerlocation[1] = 'M0,106.6c58.2,20.6,99.9,76.1,99.9,141.4S58.2,368.8,0,389.4';
        $centerlocation[2] = 'M0,133.5c44.1,19.3,74.8,63.3,74.8,114.5c0,51.2-30.8,95.2-74.8,114.5';
        $centerlocation[3] = 'M0,160.9c29.9,17.3,50,49.6,50,86.6c0,37-20.1,69.3-50,86.6';

        include __DIR__ . '/menu_formfactor/svg_construct.php';


//        return $svg;
    }

        protected function getMenuHtml($tree)
    {
        $str = '';
        foreach ($tree as $item ) {
            $str .=$this->itemToTemplate($item);
        }
        return $str;
    }
    protected function itemToTemplate($item)
    {
        ob_start();
        include __DIR__ . '/menu_formfactor/'. $this->formfactor;
        return ob_get_clean();
    }
}