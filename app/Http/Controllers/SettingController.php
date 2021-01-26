<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Http\Requests\SettingRequest;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function index()
    {
        return view('settings.index');
    }

    public function update(SettingRequest $request, Setting $setting)
    {
        $data = $request->all();

        if ($request->hasFile('logo')) {
            $data['logo'] = $this->storeLogo($request);
        }

        $setting->update($data);

        return redirect('settings')->withToastSuccess('Configurações salvas com sucesso!');
    }

    public function storeLogo($request)
    {
        Storage::delete($request->old_logo);
        return Storage::putFile('settings', $request->logo);
    }
}
