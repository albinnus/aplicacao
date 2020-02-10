<?php


namespace App\Helpers;



use App\Models\Root\File as Files;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Uuid;
use File;
class FileUploadHelper
{
    public function upload($file, $folder  = null){
       return Files::create([
            'nome' => $file->getClientOriginalName(),
            'mime' => $file->getMimeType(),
            'tamanho' =>  $file->getSize(),
            'path' => $this->storageFile($file)
        ]);
    }

    private function storageFile($file, $folder = null){
        if(!$folder){
            $folder = 'documents';
        }
        $upload_arquivo = Uuid::uuid1()->toString() . '.' . $file->getClientOriginalExtension();
        Storage::disk($folder)->put($upload_arquivo, File::get($file));
        return $upload_arquivo;
    }
}
