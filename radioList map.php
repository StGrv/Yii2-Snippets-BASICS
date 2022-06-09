<?= $form->field( $model, 'db_field' )
        ->radioList( ArrayHelper::map( TestDB::find()->where( [ 'active' => 1 ] )->all(), 'id', 'title' ), [
            'item'     => function ( $index, $label, $name, $checked, $value ) {
                $return = '<label>';
                $return .= '<input type="radio" name="' . $name . '" value="' . $value . '" ' . ( $checked == 1 ? 'checked' : NULL ) . ' >';
                $return .= '<span style="margin-left: 5px;">' . ucwords( $label ) . '</span>';
                $return .= '</label>';
                return $return;
            },
            'unselect' => NULL,
        ]);
?>
