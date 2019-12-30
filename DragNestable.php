<?php

namespace toir427\nestable;

use yii\helpers\Html;

/**
 * This is just an example.
 */
class DragNestable extends \yii\base\Widget
{
    /**
     * @var array
     */
    public $items = [];

    public function run()
    {
        AppAsset::register($this->view);

        $id = $this->id . '-nestable';

        $this->view->registerJs('$("#' . $id . '").nestable();');

        return Html::tag(
            'div',
            $this->renderItems(),
            ['class' => 'dd', 'id' => $id]
        );
    }

    public function renderItems($items = [])
    {
        $out   = '';
        $items = count($items) ? $items : $this->items;

        if (!empty($items) && count($items)) {
            $out = Html::ol($items, [
                'class' => 'dd-list',
                'item'  => function ($item, $index) {

                    $children = '';
                    if (isset($item['children']) && count($item['children'])) {
                        $children = $this->renderItems($item['children']);
                    }

                    return Html::tag(
                        'li',
                        Html::tag(
                            'div',
                            'Drag',
                            ['class' => 'dd-handle dd3-handle']
                        ) .
                        Html::tag(
                            'div',
                            $item['content'],
                            ['class' => 'dd3-content']
                        ) . $children,
                        ['class' => 'dd-item dd3-item', 'data-id' => $item['id']]
                    );
                },
            ]);
        }
        
        return $out;
    }
}