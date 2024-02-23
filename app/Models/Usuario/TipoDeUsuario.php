<?php

namespace App\Models\Usuario; 

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Response;

class TipoDeUsuario extends Model
{
    use softDeletes;

    protected $table = 'tipo_usuarios';
    protected $fillable = [
        'Tipo', // descricao
    ];

    protected $hidden = [
        'TipoUsuarioID',
    ];

    public static function getListTipoDeUsuario() {
        try {
            
            $list = self::select("TipoUsuarioID as ID", "Tipo as Descricao")
            ->paginate(10);

            return response()->json([
                "data" => $list->items(),
                "message" => "Lista de usuários carregada com sucesso.",
                "status" => "success",
                "total" => $list->total(),
                "currentPage" => $list->currentPage(),
                "lastPage" => $list->lastPage(),
            ], Response::HTTP_OK);

        } catch (\Exception $ex) {
            return response()->json([
                "data" => [],
                "message" => "Erro ao carregar os dados de lista de usuários.",
                "error" => $ex->getMessage(),
                "status" => "error",
            ], Response::HTTP_NOT_FOUND);
        }
    }

    public static function getTipoDeUsuario($id) {
        try {

            $tipoUsuario = self::select("TipoUsuarioID as ID", "Tipo as Descricao")
            ->where("TipoUsuarioID", $id)
            ->get()
            ->toArray();

            return response()->json([
                "data" => $tipoUsuario,
                "message" => "Tipo de Usuário carregado com sucesso.",
                "status" => "success",
            ], Response::HTTP_OK);

        } catch (\Exception $ex) {
            return response()->json([
                "data" => [],
                "message" => "Erro ao carregar Tipo de Usuário.",
                "error" => $ex->getMessage(),
                "status" => "error",
            ], Response::HTTP_NOT_FOUND);
        }
    }

    public static function createTipoDeUsuario($values) {
        try {
            
            $obj = new TipoDeUsuario();
            $obj->Tipo = $values['descricao'];
            $create = $obj->save($values);

            return response()->json([
                "data" => $create,
                "message" => "Tipo de usuário criado com sucesso.",
                "status" => "success",
            ], Response::HTTP_OK);

        } catch (\Exception $ex) {
            return response()->json([
                "data" => [],
                "message" => "Erro ao criar tipo de usuário.",
                "error" => $ex->getMessage(),
                "status" => "error",
            ], Response::HTTP_NOT_FOUND);
        }
    }

    public static function updateTipoDeUsuario($values) {
        try {

            $result = TipoDeUsuario::where("TipoUsuarioID", $values['id'])
                ->update(['Tipo' => $values['descricao']]);

            if ($result) {
                return response()->json([
                    "data" => [],
                    "message" => "Tipo de usuário alterado com sucesso.",
                    "status" => "success",
                ], Response::HTTP_OK);
                
            } else {
                return response()->json([
                    "data" => [],
                    "message" => "Tipo de usuário não encontrado para alterar.",
                    "status" => "success",
                ], Response::HTTP_NOT_FOUND);
            }

        } catch (\Exception $ex) {
            return response()->json([
                "data" => [],
                "message" => "Erro ao alterar tipo de usuário.",
                "error" => $ex->getMessage(),
                "status" => "error",
            ], Response::HTTP_NOT_FOUND);
        }
    }

    public static function deleteTipoDeUsuario($id) {
        try {
            
            $delete = self::where('TipoUsuarioID', $id)->delete();

            return response()->json([
                "data" => $delete,
                "message" => "Tipo de usuário excluído com sucesso.",
                "status" => "success",
            ], Response::HTTP_OK);

        } catch (\Exception $ex) {
            return response()->json([
                "data" => [],
                "message" => "Erro ao excluir tipo de usuário.",
                "error" => $ex->getMessage(),
                "status" => "error",
            ], Response::HTTP_NOT_FOUND);
        }
    }
}
