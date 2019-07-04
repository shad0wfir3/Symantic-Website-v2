<?php

namespace App\Nova;

use Benjaminhirsch\NovaSlugField\Slug;
use Benjaminhirsch\NovaSlugField\TextWithSlug;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Code;
use Laravel\Nova\Fields\DateTime;


class Service extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var  string
     */
    public static $model = \App\Service::class;

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
        return __('Services');
    }

    /**
     * Get the displayable singular label of the resource.
     *
     * @return  string
     */
    public static function singularLabel()
    {
        return __('Service');
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
            TextWithSlug::make(__('Title'), 'title')
                ->rules('required')
                ->slug('slug')
                ->sortable()
            ,
            Slug::make(__('Slug'), 'slug')
                ->rules('required')
                ->sortable()
            ,
            Textarea::make(__('Short Description'), 'short_description')
                ->sortable()
            ,
            Textarea::make(__('Long Description'), 'long_description')
                ->sortable()
            ,
            Text::make(__('Header Intro'), 'header_intro')
                ->sortable()
            ,
            Text::make(__('Header Description'), 'header_description')
                ->sortable()
            ,
            Boolean::make(__('Video Display'), 'video_display')
                ->rules('required')
                ->sortable()
                ->trueValue('Yes')
                ->falseValue('No')
            ,
            Text::make(__('Video Link'), 'video_link')
                ->sortable()
            ,
            Image::make(__('Video Image'), 'video_image')
                ->sortable()
            ,
            Code::make(__('Sub Services'), 'sub_services')
                ->sortable()
                ->json()
            ,
            Text::make(__('Cta Image'), 'cta_image')
                ->sortable()
            ,
            Code::make(__('Cta Skills'), 'cta_skills')
                ->sortable()
                ->json()
            ,
            Text::make(__('Cta Pre Title'), 'cta_pre_title')
                ->sortable()
            ,
            Text::make(__('Cta Title'), 'cta_title')
                ->sortable()
            ,
            Text::make(__('Cta Subtext'), 'cta_subtext')
                ->sortable()
            ,
            Text::make(__('Quote Text'), 'quote_text')
                ->sortable()
            ,
            Textarea::make(__('Quote Description'), 'quote_description')
                ->sortable()
            ,
            Text::make(__('Quote Link'), 'quote_link')
                ->sortable()
            ,
            Code::make(__('Content'), 'content')
                ->rules('required')
                ->sortable()
            ,
            Image::make(__('Featured Img'), 'featured_img')
                ->rules('required')
                ->sortable()
            ,
            Text::make(__('Featured Img Alt'), 'featured_img_alt')
                ->sortable()
            ,
            Text::make(__('Featured Icon'), 'featured_icon')
                ->rules('required')
                ->sortable()
            ,
            Boolean::make(__('Published'), 'published')
                ->sortable()
            ,
            DateTime::make(__('Published Date'), 'published_date')
                ->sortable()
            ,
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
}
