<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class PreviewFileController extends Controller
{
public function index(Request $request)
    {

$modifiedSentence = this6>replaceTextUpToWord($request->url(), "uploads/", "");
dd($modifiedSentence);
        $filePath = $request->input("storage/uploads/.");

        if (!$filePath) {
            return response()->json(['error' => 'File path is required.'], 400);
        }

        try {
            if (Storage::exists($filePath)) {
                $fileSize = Storage::size($filePath);
                return response()->json(['file_size' => $fileSize]);
            } else {
                return response()->json(['error' => 'File not found.'], 404);
            }
        } catch (\Exception $e) {
            Log::error('Error retrieving file size: ' . $e->getMessage());
            return response()->json(['error' => 'Unable to retrieve file size. Please check the logs.'], 500);
        }
    }

    public function getFileSizeWithAbsolutePath(Request $request)
    {
        $absoluteFilePath = $request->input('absolute_file_path');

        if (!$absoluteFilePath) {
            return response()->json(['error' => 'Absolute file path is required.'], 400);
        }

        try {
            if (file_exists($absoluteFilePath)) {
                $fileSize = filesize($absoluteFilePath);
                return response()->json(['file_size' => $fileSize]);
            } else {
                return response()->json(['error' => 'File not found.'], 404);
            }
        } catch (\Exception $e) {
            Log::error('Error retrieving absolute file size: ' . $e->getMessage());
            return response()->json(['error' => 'Unable to retrieve file size. Please check the logs.'], 500);
        }
    }

    public function getFileSizeFromPublic(Request $request) {
        $filePath = $request->input('file_path');
        if(!$filePath){
            return response()->json(['error'=>'File path is required'], 400);
        }

        $fullPath = public_path($filePath);

        try{
            if(file_exists($fullPath)){
                $fileSize = filesize($fullPath);
                return response()->json(['file_size'=>$fileSize]);
            } else{
                return response()->json(['error'=>'File not found'], 404);
            }

        } catch (\Exception $e) {
            Log::error('Error retrieving file size: ' . $e->getMessage());
            return response()->json(['error' => 'Unable to retrieve file size. Please check the logs.'], 500);
        }

    }

    protected function replaceTextUpToWord(string $sentence, string $targetWord, string $replacement): string {
    $position = strpos($sentence, $targetWord);

    if ($position === false) {
        // Target word not found, return the original sentence
        return $sentence;
    }

    // Find the position of the target word, including the word itself
    $endPosition = $position + strlen($targetWord);

    // Replace the text from the beginning up to the target word
    return $replacement . substr($sentence, $endPosition);
}

}
