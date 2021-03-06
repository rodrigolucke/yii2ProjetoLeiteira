<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Movimento Estoques';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movimento-estoque-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Movimento Estoque', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'COD_MOVIMENTO_ESTOQUE',
            'TIPO_MOVIMENTO',
            'COD_EMPRESA',
            'COD_TANQUE',
            'PRECO_LITRO',
            // 'QUANTIDADE',
            // 'DATA_VENDA',
            // 'DATA_ENTREGA',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
