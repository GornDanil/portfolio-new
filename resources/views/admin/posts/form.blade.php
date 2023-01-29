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
    'maxlength' => 1000
    ])

    @formField('input', [
    'name' => 'description_col_1',
    'label' => 'Первая колонка текста',
    'translated' => true,
    ])

    @formField('input', [
    'name' => 'description_col_2',
    'label' => 'Вторая колонка текста',
    'translated' => true,
    ])

    @formField('input', [
    'name' => 'intro',
    'label' => 'текст',
    'translated' => true,
    ])

    @formField('medias', [
    'name' => 'image',
    'label' => 'Изображения',
    'max' => 500,
    ])
@stop
