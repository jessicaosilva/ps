<?php

namespace App\Http\Controllers;

use App\Models\Usuario\TipoDeUsuario;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TipoDeUsuarioController extends Controller
{
    public static function getListTipoDeUsuario(Request $request, $totalPage = 10, $currentPage = 1) {
        try {
            if ($request->path() == 'api/tipoDeUsuarios') {
                $list = TipoDeUsuario::getListTipoDeUsuario(false);
            } else {
                $list = TipoDeUsuario::getListTipoDeUsuario(true, $totalPage, $currentPage);
            }

            return $list;
            
        } catch (\Exception $ex) {
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

            return $tipoUsuario;
            
        } catch (\Exception $ex) {
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

            return $create;
            
        } catch (\Exception $ex) {
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

            return $update;
            
        } catch (\Exception $ex) {
            return response()->json([
                "data" => [],
                "message" => "Erro ao carregar os dados de lista de usuários",
                "error" => $ex->getMessage(),
                "status" => "error",
            ], Response::HTTP_NOT_FOUND);
        }
    }


    public static function deleteTipoDeUsuario(Request $request, $id) {
        try {
            $delete = TipoDeUsuario::deleteTipoDeUsuario($id);

            return $delete;
            
        } catch (\Exception $ex) {
            return response()->json([
                "data" => [],
                "message" => "Erro ao carregar os dados de lista de usuários",
                "error" => $ex->getMessage(),
                "status" => "error",
            ], Response::HTTP_NOT_FOUND);
        }
    }
}