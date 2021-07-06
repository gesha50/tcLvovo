<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SliderImages;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Storage;

class SliderImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        return view('admin.slider-images.index')->with([
            'sliderImages' => SliderImages::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function store(Request $request)
    {
        if ($request->hasFile('sliderImgDownload')) {
            $path = $request->file('sliderImgDownload')->store('slider');
//            $pathToImage = \Storage::url($path);
            $sliderImages = SliderImages::create([
                'pathToImage' => $path
            ]);
            $sliderImages->save();
            $sliderImages->refresh();
        }
        $request->flash();
        return redirect(route('admin.slider-images.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SliderImages  $sliderImage
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function destroy(SliderImages $sliderImage)
    {
        $path = SliderImages::all()->where('id','=',$sliderImage->id)->first();
        if (isset($path->pathToImage)) {
            Storage::delete($path->pathToImage);
        }
        $sliderImage->delete();
        flash('Изображение успешно удалено')->warning()->important();
        return redirect(route('admin.slider-images.index'));
    }
}
