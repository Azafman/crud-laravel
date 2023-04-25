<?php

namespace App\Http\Controllers;

use App\Models\Equipamento;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EquipamentoController extends Controller
{
    //
    public function create()
    {
        return view('create-equipamento');
    }
    public function creating(Request $r)
    {

        $data = $r->only(['descricao', 'modelo', 'marca']);
        $data['user_id'] = Auth::user()->id;

        //dd($data);
        Equipamento::create($data);

        return redirect()->route('showEquipamentos');
    }
    public function showEquipamentos()
    {
        $equipamentos = Equipamento::where(
            'user_id',
            '=',
            Auth::user()->id
        )->get();

        return view('show-equipamentos', [
            'equipamentos' => $equipamentos
        ]);
    }
    public function editar(Request $r)
    {
        //dd($r->only(['id']));
        try {
            $equipamentoForUpdate = Equipamento::where('id', '=', $r->only(['id']))->get()[0];
        } catch (Exception $e) {
            return redirect(route('showEquipamentos'));
        }
        
        return view('components.actions.editar-equipamento', [
            'id' => $equipamentoForUpdate['id'],
            'modelo' => $equipamentoForUpdate['modelo'],
            'marca' => $equipamentoForUpdate['marca'],
            'descricao' => $equipamentoForUpdate['descricao']
        ]);
    }
    public function updating(Request $r)
    {
        //dd($r['id']);
        try {
            Equipamento::where('id', '=', $r['id'])->update([
                'modelo' => $r['modelo'],
                'marca' => $r['marca'],
                'descricao' => $r['descricao'] ?? ''
            ]);
        } catch (Exception $e) {
            return redirect(route('editarEquipamento'));
        }

        return redirect(route('showEquipamentos'));
    }
    public function delete(Request $r)
    {
        //dd($r['id']);
        $id = $r->only(['id']);
        try {
            Equipamento::where('id','=',$id)->delete();
        } catch (Exception $e) {
            return redirect(route('showEquipamentos'));
        }
        return redirect(route('showEquipamentos'));

    }
}
