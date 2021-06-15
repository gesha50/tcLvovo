<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feedbacks;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        return view('admin.feedbacks.index')->with([
            'feedbacks' => Feedbacks::all()->sortDesc(),
        ]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feedbacks  $feedback
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function destroy(Feedbacks $feedback)
    {
        $feedback->delete();
        flash('Обратная связь от пользователя успешна удалена')->warning()->important();
        return redirect(route('admin.feedbacks.index'));
    }
}
