<?php

namespace App\Http\Controllers;

use App\Models\Usuario\TipoDeUsuario;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class TipoDeUsuarioController extends Controller
{
    public static function getListTipoDeUsuario($totalPage = null, $currentPage = null) {
        try {
            
            if ($totalPage == null && $currentPage == null) {
                $list = TipoDeUsuario::getListTipoDeUsuario(false);
            } else {
                $list = TipoDeUsuario::getListTipoDeUsuario(true, $totalPage, $currentPage);
            }

            return response()->json($list, Response::HTTP_OK);
            
        } catch (\Exception $ex) {
            Log::error($ex->getMessage());
            return response()->json([
                "data" => [],
                "message" => "Erro ao carregar os dados de lista de usuários",
                "error" => $ex->getMessage(),
                "status" => "error",
            ], Response::HTTP_NOT_FOUND);
        }
    }

    public static function getTipoDeUsuario($id) {
        try {

            $tipoUsuario = TipoDeUsuario::getTipoDeUsuario($id);

            return response()->json($tipoUsuario, Response::HTTP_OK);
            
        } catch (\Exception $ex) {
            Log::error($ex->getMessage());
            return response()->json([
                "data" => [],
                "message" => "Erro ao carregar os dados de lista de usuários",
                "error" => $ex->getMessage(),
                "status" => "error",
            ], Response::HTTP_NOT_FOUND);
        }
    }

    public static function createTipoDeUsuario(Request $request) {
        try {
            
            $values = $request->all();
            $create = TipoDeUsuario::createTipoDeUsuario($values);

            return response()->json($create, Response::HTTP_OK);
            
        } catch (\Exception $ex) {
            Log::error($ex->getMessage());
            return response()->json([
                "data" => [],
                "message" => "Erro ao carregar os dados de lista de usuários",
                "error" => $ex->getMessage(),
                "status" => "error",
            ], Response::HTTP_NOT_FOUND);
        }
    }

    public static function updateTipoDeUsuario(Request $request) {
        try {

            $values = $request->all();
            $update = TipoDeUsuario::updateTipoDeUsuario($values);

            return response()->json($update, Response::HTTP_OK);
            
        } catch (\Exception $ex) {
            Log::error($ex->getMessage());
            return response()->json([
                "data" => [],
                "message" => "Erro ao carregar os dados de lista de usuários",
                "error" => $ex->getMessage(),
                "status" => "error",
            ], Response::HTTP_NOT_FOUND);
        }
    }


    public static function deleteTipoDeUsuario($id) {
        try {

            $delete = TipoDeUsuario::deleteTipoDeUsuario($id);

            return response()->json($delete, Response::HTTP_OK);
            
        } catch (\Exception $ex) {
            Log::error($ex->getMessage());
            return response()->json([
                "data" => [],
                "message" => "Erro ao carregar os dados de lista de usuários",
                "error" => $ex->getMessage(),
                "status" => "error",
            ], Response::HTTP_NOT_FOUND);
        }
    }
}