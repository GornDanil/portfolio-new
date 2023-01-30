@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'title',
        'label' => 'Заголовок',
        'translated' => true,
        'maxlength' => 150
    ])

    @formField('input', [
    'name' => 'task',
    'label' => 'Задача',
    'translated' => true,
    'type' => 'textarea',
    ])

    @formField('input', [
    'name' => 'description_col_1',
    'label' => 'Первая колонка текста',
    'translated' => true,
    'type' => 'textarea',
    ])

    @formField('input', [
    'name' => 'description_col_2',
    'label' => 'Вторая колонка текста',
    'translated' => true,
    'type' => 'textarea',
    ])

    @formField('medias', [
    'name' => 'intro',
    'label' => 'Превью',
    ])

    @formField('medias', [
    'name' => 'image',
    'label' => 'Изображения',
    'max' => 500,
    ])
@stop
