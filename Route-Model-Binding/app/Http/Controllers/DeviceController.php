<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
// call
    public function index($key)
    {
        $device = Device::find($key);

        if (!$device) {
            return response()->json(['message' => 'Device not found'], 404);
        }

        return response()->json([
            'id' => $device->id,
            'name' => $device->name,
            'member_id' => $device->member_id
        ]);
    }

    
}
