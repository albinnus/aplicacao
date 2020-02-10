<?php

namespace App\Http\Controllers;

use App\Http\Requests\Contact\NewContactRequest;
use App\Mail\ContactMailNotify;
use App\Models\Contact\Contact;
use Illuminate\Http\Request;
use Facades\App\Helpers\FileUploadHelper;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function getIndex()
    {
        return view('contact.new');
    }

    public function postCreate(NewContactRequest $request)
    {
        try {
            $contact = Contact::create([
                'nome' => $request->nome,
                'telefone' => $request->telefone,
                'email' => $request->email,
                'mensagem' => $request->mensagem,
                'visitante' => $request->ip(),
                'file' => FileUploadHelper::upload($request->arquivo)->id
            ]);

            Mail::queue(new ContactMailNotify($contact));
            return redirect()->back()->with(['mensagem' => 'Informações adicionadas com sucesso']);
        } catch (\Exception $e) {
dd($e->getMessage());
            return redirect()->back()->with(['mensagemErro' => 'Erro ao realizar operação']);

        }
    }
}
