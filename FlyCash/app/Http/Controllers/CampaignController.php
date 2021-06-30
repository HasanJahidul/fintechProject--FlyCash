<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

class CampaignController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        return view('users.index', ['users' => $model->paginate(15)]);
    }
    public function addcampaign()
    {
        return view('pages.admin.campaign.addcampaign');
    }
    public function ongoingcampaign()
    {
        return view('pages.admin.campaign.ongoingcampaign');
    }
    
    public function removecampaign()
    {
        return view('pages.admin.campaign.removecampaign');
    }
    
}
