<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel canberkdeniz95\players\models\TransferSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Transfers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transfer-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Transfer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'player_id',
            'team_id1',
            'team_id2',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
