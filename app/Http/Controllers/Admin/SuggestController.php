<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\MailSuggestDeny;
use App\Models\Image;
use App\Models\Product;
use App\Models\Suggest;
use App\Models\User;
use App\Repositories\Suggest\SuggestRepositoryInterface;
use Illuminate\Contracts\View\Factory;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use App\Mail\MailSuggestApprove;

class SuggestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    protected $suggestRepository;

    public function __construct(SuggestRepositoryInterface $suggestRepository)
    {
        $this->suggestRepository = $suggestRepository;
    }

    public function index()
    {
        $suggests =$this->suggestRepository->getAll();
        return view('admin.suggests.index', compact('suggests'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $suggest = $this->suggestRepository->find($id);
        $suggest->status = $request->status;
        $suggest->save();
        return redirect()->route('admin.suggests.index');
    }
}
