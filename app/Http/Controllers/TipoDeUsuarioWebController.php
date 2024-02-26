<?php

namespace App\Http\Controllers;

use App\Models\Usuario\TipoDeUsuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TipoDeUsuarioWebController extends Controller
{
    public static function listTipoDeUsuario() {
        try {

            $list = TipoDeUsuario::getListTipoDeUsuario(true, 10, 1);
            
            return view('tipoDeUsuario', ['list' => $list]);
        
        } catch (\Exception $ex) {
            Log::error($ex->getMessage());
            return redirect()->route('tipoDeUsuario')->with(['success' => 'false', 'message' => 'Erro ao exibir lista de tipo de usuário']);
        }
    }

    public static function editTipoDeUsuario($id) {
        try {

            $tipoUsuario = TipoDeUsuario::getTipoDeUsuario($id);
            
            return view('newTipoDeUsuario', ['tipoUsuario' => $tipoUsuario]);
        
        } catch (\Exception $ex) {
            Log::error($ex->getMessage());
            return redirect()->route('tipoDeUsuario')->with(['success' => 'false', 'message' => 'Erro ao exibir edição de tipo de usuário']);
        }
    }

    public static function updateTipoDeUsuario(Request $request) {
        try {

            $values = $request->all();
            $update = TipoDeUsuario::updateTipoDeUsuario($values);

            return redirect()->route('tipoDeUsuario')->with(['success' => $update['status'], 'message' => $update['message']]);
            
        } catch (\Exception $ex) {
            Log::error($ex->getMessage());
            return redirect()->route('tipoDeUsuario')->with(['success' => 'false', 'message' => 'Erro ao editar de tipo de usuário']);
        }
    }

    public static function newTipoDeUsuario() {
        try {

            return view('newTipoDeUsuario', ['list' => []]);
        
        } catch (\Exception $ex) {
            Log::error($ex->getMessage());
            return redirect()->route('tipoDeUsuario')->with(['success' => 'false', 'message' => 'Erro ao exibir criação de tipo de usuário']);
        }
    }

    public static function createTipoDeUsuario(Request $request) {
        try {

            $values = $request->all();
            $create = TipoDeUsuario::createTipoDeUsuario($values);
            
            return redirect()->route('tipoDeUsuario')->with(['success' => $create['status'], 'message' => $create['message']]);

        } catch (\Exception $ex) {
            Log::error($ex->getMessage());
            return redirect()->route('tipoDeUsuario')->with(['success' => 'false', 'message' => 'Erro ao criar tipo de usuário']);
        }
    }

    public static function deleteTipoDeUsuario($id) {
        try {

            TipoDeUsuario::getTipoDeUsuario($id);
            $result = TipoDeUsuario::deleteTipoDeUsuario($id);
            
            return redirect()->route('tipoDeUsuario')->with(['success' => $result['status'], 'message' => $result['message']]);

        } catch (\Exception $ex) {
            Log::error($ex->getMessage());
            return redirect()->route('tipoDeUsuario')->with(['success' => 'false', 'message' => 'Erro ao deletar tipo de usuário']);
        }
    }
}