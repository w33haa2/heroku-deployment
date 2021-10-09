<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EmailCampaign;

class EmailCampaignController extends Controller
{
    public function show($id)
    {
        $emailCampaign = EmailCampaign::findOrFail($id);

        return response(['data' => $emailCampaign]);
    }

    public function store(Request $request)
    {
        $emailCampaign = $request->isMethod('put') ? 
            EmailCampaign::findOrFail($request->id) : new EmailCampaign;

        $emailCampaign->name = $request->input('name');
        $emailCampaign->subject = $request->input('subject');
        $emailCampaign->message = $request->input('message');

        if ($emailCampaign->save()) {
            return response(['success' => $emailCampaign]);
        } else {
            return response(['error' => $emailCampaign]);
        }
    }

    public function destroy($id)
    {
        $emailCampaign = EmailCampaign::findOrFail($id);

        if ($emailCampaign->delete()) {
            return response(['success' => 'Successfully deleted email campaign.']);
        } else {
            return response(['error' => 'A problem occurred when deleting email campaign.']);
        }
    }
}
