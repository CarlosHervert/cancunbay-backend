<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BannerPrincipal;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Database\QueryException;

class BannerPrincipalController extends Controller
{
    function getBannerPrincipal()
    {
        $res = BannerPrincipal::orderBy('alt', 'ASC')->get();
        foreach ($res as $item) {
            $item->idioma = ($item->languages_id == 1) ? 'Español' : 'Ingles';
        }
        return response()->json($res);
    }

    function addBannerPrincipal(Request $request)
    {
        try {
            $url = null;
            if ($request->hasFile('image')) {
                $timeStamp = uniqid();
                $url = '/bannerhome/' . $timeStamp . '_' . $request->file('image')->getClientOriginalName();
                Storage::disk('public')->put($url, File::get($request->file('image')));
            } else {
                return response()->json(['message' => 'Image is required'], 400);
            }

            $add = new BannerPrincipal();
            $add->img = $url;
            $add->alt = $request->alt;
            $add->languages_id = $request->idioma;
            $add->save();
            return response()->json(['message' => 'success'], 200);
        } catch (\Exception $ex) {
            return response()->json(['message' => $ex->getMessage()], 500);
        }
    }

    function editBannerPrincipal(Request $request)
    {
        try {
            $data = [
                "alt" => $request->alt,
            ];

            if ($request->image != 'null' && $request->hasFile('image')) {
                $timeStamp = uniqid();
                $url = '/bannerhome/' . $timeStamp . '_' . $request->file('image')->getClientOriginalName();
                Storage::disk('public')->put($url, File::get($request->file('image')));
                $data["img"] = $url;
            }

            BannerPrincipal::where('id', $request->id)->update($data);

            return response()->json(['message' => 'success'], 200);
        } catch (\Exception $ex) {
            return response()->json(['message' => $ex->getMessage()], 500);
        }
    }

    function deleteBannerPrincipal(Request $request)
    {
        try {
            $cat = BannerPrincipal::where('id', $request->id)->first();
            if ($cat) {
                $cat->delete();
                return response()->json(['message' => 'success'], 200);
            } else {
                return response()->json(['message' => 'banner not found'], 404);
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'error deleting banner: ' . $e->getMessage()], 500);
        }
    }
}
