<?php

namespace toir427\nestable;

use yii\helpers\Html;

/**
 * This is just an example.
 */
class Nestable extends \yii\base\Widget
{
    /**
     * @var array
     */
    public $items = [];

    public function run()
    {
        AppAsset::register($this->view);

        $id = $this->id . '-nestable';

        $this->view->registerJs('
            $("#' . $id . '").nestable({group: 1}).on("change", updateOutput);
            updateOutput($("#' . $id . '").data("output", $("#nestable-output")));
        ');

        return Html::tag(
            'div',
            Html::tag(
                'div',
                $this->renderItems(),
                ['class' => 'dd', 'id' => $id]
            ),
            ['class' => 'cf nestable-lists']
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
                            $item['content'],
                            ['class' => 'dd-handle']
                        ) . $children,
                        ['class' => 'dd-item', 'data-id' => $item['id']]
                    );
                },
            ]);
        }

        return $out;
    }
}