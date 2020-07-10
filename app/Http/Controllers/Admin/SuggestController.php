<?php

namespace App\Http\Controllers\Admin;

use App\Enums\OrderStatus;
use App\Http\Controllers\Controller;
use App\Mail\MailSuggestDeny;
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
        $suggest = $this->suggestRepository->update($id, [
            'status' => $request->status,
        ]);
        $user = $suggest->user;
        if ($request->status == OrderStatus::approved)
        {
            Mail::to($user)->send(new MailSuggestApprove());
        }
        elseif ($request->status == OrderStatus::denied)
        {
            Mail::to($user)->send(new MailSuggestDeny());
        }

        return redirect()->route('admin.suggests.index');
    }
}
