<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClienteController extends Controller
{
    //
    public function create() {
        return view('create-cliente');
    }
    public function creating(Request $r) {
        /* dd($r->only(
            ['type','doc_id','name','telefone', 'address',' responsavel'])); */

        $rs = $r->validate([
            'type' => 'required',
            'doc_id' => 'numeric|min:11',
            'name' => 'required|min:5',
            'telefone' => 'required|min:9',
            'responsavel' => 'required',
            'address' => 'required'
        ]);
        $rs['user_id'] = Auth::user()->id;
        //dd($rs);

        Cliente::create($rs);

        return redirect(route('showClientes'));
        
    }
    public function showClientes() {
        $clientes = Cliente::where('user_id', '=', Auth::user()->id)->get();

        return view('show-clientes', [
            'clientes' => $clientes
        ]);
    }

    public function editar(Request $r) {
        try {
            $clienteForUpdate = Cliente::where('id', '=', $r->only(['id']))->get()[0];
        } catch (Exception $e) {
            return redirect(route('showClientes'));
        }
        return view('components.actions.editar-cliente', [
            'id' => $clienteForUpdate['id'],
            'doc_id' => $clienteForUpdate['doc_id'],
            'name' => $clienteForUpdate['name'],
            'type' => $clienteForUpdate['type'],
            'responsavel' => $clienteForUpdate['responsavel'],
            'address' => $clienteForUpdate['address'],
            'telefone' => $clienteForUpdate['telefone'],
        ]);
    }
    public function updating(Request $r) {
        try {
            Cliente::where('id','=', $r['id'])->update([
                'doc_id' => $r['doc_id'],
                'name' => $r['name'],
                'type' => $r['type'],
                'responsavel' => $r['responsavel'],
                'address' => $r['address'],
                'telefone' => $r['telefone'],
            ]);
    
        } catch (Exception $e) {
            return redirect(route('editarCliente'));
        }        //dd($r);

        return redirect(route('showClientes'));
    }

    public function delete(Request $r) {
        try {
            Cliente::where('id','=', $r['id'])->delete();
        } catch (Exception $e) {
            return redirect(route('showClientes'));
        }
        
        return redirect(route('showClientes'));
    }
}
