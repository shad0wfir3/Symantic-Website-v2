<?php

namespace App\Nova;

use Ctessier\NovaAdvancedImageField\AdvancedImage;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\DateTime;
use NovaAttachMany\AttachMany;


class Post extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var  string
     */
    public static $model = \App\Post::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var  string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var  array
     */
    public static $search = [
        'id'
    ];

    /**
     * Get the displayable label of the resource.
     *
     * @return  string
     */
    public static function label()
    {
        return __('Posts');
    }

    /**
     * Get the displayable singular label of the resource.
     *
     * @return  string
     */
    public static function singularLabel()
    {
        return __('Post');
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param    \Illuminate\Http\Request $request
     * @return  array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('Id'), 'id')
                ->rules('required')
                ->sortable()
            ,
            BelongsTo::make('User')
                ->rules('required')
                ->searchable()
                ->sortable()
            ,
            Boolean::make(__('Featured'), 'featured')
                ->rules('required')
                ->sortable()
            ,
            Text::make(__('Title'), 'title')
                ->rules('required')
                ->sortable()
            ,
            Text::make(__('Slug'), 'slug')
                ->rules('required')
                ->sortable()
            ,
            Textarea::make(__('Excerpt'), 'excerpt')
                ->rules('required')
                ->sortable()
            ,
            Markdown::make(__('Content'), 'content')
                ->rules('required')
                ->sortable()
            ,
            AdvancedImage::make(__('Featured Img'), 'featured_img')
                ->rules('sometimes','mimes:jpeg,jpg,png')
                ->sortable()
                ->disk('spaces')
                ->croppable(16/9)
                ->prunable()
            ,
            DateTime::make(__('Published Date'), 'published_date')
                ->sortable()
                ->rules('required')
            ,
            AttachMany::make('Category','categories',Category::class),
            AttachMany::make('Tags','tags',Tag::class),

            BelongsToMany::make('Tags','tags',Tag::class),
            BelongsToMany::make('Categories','categories',Category::class)
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param    \Illuminate\Http\Request $request
     * @return  array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param    \Illuminate\Http\Request $request
     * @return  array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param    \Illuminate\Http\Request $request
     * @return  array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param    \Illuminate\Http\Request $request
     * @return  array
     */
    public function actions(Request $request)
    {
        return [];
    }

    protected function postPanel(){
        return [
            Text::make('Address Line 2')->hideFromIndex(),
            Text::make('City')->hideFromIndex(),
            Text::make('State')->hideFromIndex(),
            Text::make('Postal Code')->hideFromIndex(),
            Country::make('Country')->hideFromIndex(),
        ];
    }
}
