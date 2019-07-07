<?php

namespace App\Nova;

use Benjaminhirsch\NovaSlugField\Slug;
use Benjaminhirsch\NovaSlugField\TextWithSlug;
use Ctessier\NovaAdvancedImageField\AdvancedImage;
use Davidpiesse\NovaToggle\Toggle;
use Fourstacks\NovaRepeatableFields\Repeater;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Markdown;
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
            Toggle::make(__('Video Display'), 'video_display')
                ->rules('required')
                ->sortable()
                ->trueValue('Yes')
                ->falseValue('No')
            ,
            Text::make(__('Video Link'), 'video_link')
                ->sortable()
            ,
            AdvancedImage::make(__('Video Image'), 'video_image')
                ->disk('spaces')
                ->croppable(16/9)
                ->sortable()
            ,
            Repeater::make(__('Sub Services'), 'sub_services')
                ->addField(
                    [
                        'label' => 'Service Name',
                        'name' => 'sub_service_name',
                        'type' => 'text',
                        'placeholder' => 'Type the Sub Service Name'
                    ])
                ->addField([
                    'label' => 'Service Shortcode',
                    'name' => 'sub _service_shortcode',
                    'type' => 'text',
                    'placeholder' => 'Type the Sub Service Shortcode'
                ])
                ->addField([
                    'label' => 'Service Description',
                    'name' => 'sub _service_description',
                    'type' => 'textarea',
                    'placeholder' => 'Type the sub-service Description'
                ])
                ->displayStackedForm()
            ,
            AdvancedImage::make(__('Cta Image'), 'cta_image')
                ->disk('spaces')
                ->croppable(16/9)
                ->sortable()
            ,
            Repeater::make(__('Cta Skills'), 'cta_skills')
                ->addField(
                    [
                        'label' => 'Skill Name',
                        'name' =>'skill_name',
                        'type' => 'text',
                    ])
                ->addField([
                    'label' => 'Skill Value',
                    'name' => 'skill_value',
                    'type' => 'text',
                ])
                ->displayStackedForm()

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
            AdvancedImage::make(__('Featured Img'), 'featured_img')
                ->rules('required')
                ->croppable(16/9)
                ->sortable()
            ,
            Text::make(__('Featured Img Alt'), 'featured_img_alt')
                ->sortable()
            ,
            Text::make(__('Featured Icon'), 'featured_icon')
                ->rules('required')
                ->sortable()
            ,
            Toggle::make(__('Published'), 'published')
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
