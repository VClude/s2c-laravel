<?php

namespace App\Helper;

use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class FileHelper
{
public static $path = 'public/';
    public function ValidateFile($arr){
        $validator = Validator::make($arr, [
            'directory' => 'required|string|max:255',
            'file' => 'required|mimes:jpeg,pdf,png,rar,zip,7z',
        ]);

        if ($validator->fails()) {
            return response(['errors' => $validator->errors()->all()], 422);
        }

        return 'OK';

    }

    public function UploadNonEnc($dir, $file, $saveas){
        
        
        try {
            Storage::disk('local')->putFileAs(self::$path . $dir, $file, Carbon::now()->toDateString() . '-' . $saveas);
            return response()->json(['status' => 'success', 'folder' => $dir , 'file' =>  Carbon::now()->toDateString() . '-' . $saveas], 200);
        } catch (\Throwable $e) {
            return response()->json(['status' => 'failed', 'message' => $e->getMessage()], 422);

        }

    }

    public function UploadEnc($dir, $file){
        try {
            Storage::disk('local')->putFile(self::$path . $dir, $file);
            return response()->json(['status' => 'success', 'folder' => $dir , 'file' =>  $file->hashName()], 200);
        } catch (\Throwable $e) {
            return response()->json(['status' => 'failed', 'message' => $e->getMessage()], 422);

        }
    }

    public function ValidateDelete($arr){
        $validator = Validator::make($arr, [
            'directory' => 'required|string|max:255',
            'file' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response(['errors' => $validator->errors()->all()], 422);
        }

        return 'OK';

    }

    public function DeleteFile($dir, $filename){
        $exists = Storage::disk('local')->exists(self::$path . $dir . '/' . $filename);
        
        if($exists){
            try {
                Storage::disk('local')->delete(self::$path . $dir . '/' . $filename);
                return response()->json(['status' => 'success', 'file' => $dir . '/' . $filename], 200);
            } 
            catch (\Throwable $e) {
                return response()->json(['status' => 'failed', 'message' => $e->getMessage()], 422);

            }

        }
                return response()->json(['status' => 'failed', 'message' => 'file not found'], 404);                

    }
}