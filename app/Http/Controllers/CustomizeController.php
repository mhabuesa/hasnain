<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\GeneralInfo;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Traits\ImageSaveTrait;
use Illuminate\Support\Facades\Log;

class CustomizeController extends Controller
{
    use ImageSaveTrait;

    public function generalInfo()
    {
        $general_info = GeneralInfo::first();
        return view('backend.general_info.index', [
            'general_info' => $general_info,
        ]);
    }


    public function generalInfo_update(Request $request)
    {
        // Get the first GeneralInfo record or create a new instance if not exists
        $general_info = GeneralInfo::firstOrNew(['id' => 1]); // Assuming you want the first record with id = 1

        // Initialize variables for logo and favicon
        $logo = $general_info->logo;
        $favicon = $general_info->favicon;

        // Handle logo upload if present
        if ($request->hasFile('logo')) {
            if ($general_info->logo) {
                $this->deleteImage(public_path($general_info->logo)); // Delete old logo if exists
            }
            $logo = $this->saveImage('logo', $request->file('logo')); // Save new logo
        }

        // Handle favicon upload if present
        if ($request->hasFile('favicon')) {
            if ($general_info->favicon) {
                $this->deleteImage(public_path($general_info->favicon)); // Delete old favicon if exists
            }
            $favicon = $this->saveImage('favicon', $request->file('favicon')); // Save new favicon
        }

        // Update or create the GeneralInfo record
        $general_info->fill([
            'site_name' => $request->site_name,
            'logo' => $logo,
            'favicon' => $favicon,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'youtube' => $request->youtube,
            'linkedin' => $request->linkedin,
        ]);

        $general_info->save(); // Save the record

        return redirect()->route('general.info')->with('success', 'General Info Updated Successfully');
    }
}
