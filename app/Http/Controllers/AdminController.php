<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected $user;
    /**
     * El modelo User se inyecta automáticamente en el constructor.
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Mostrar la vista de administrador con los datos del usuario.
     */
    public function index()
    {
        // Obtener todos los usuarios
        $users = $this->user->all();
        
        // Pasar los datos de los usuarios a la vista
        return view('admin.index', compact('users'));
    }
}
