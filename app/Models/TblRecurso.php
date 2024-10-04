<?php

// app/Models/TblRecurso.php
namespace App\Models;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class TblRecurso extends Authenticatable
{
    //protected $table = 'tbl_recurso'; // Asegúrate de que el nombre de la tabla sea correcto

    use Notifiable;

    // Especificar la tabla si no sigue la convención de Laravel
    protected $table = 'tbl_recurso';

    // Los atributos que son asignables en masa.
    protected $fillable = [
        'Rcso_Cod',
        'Rcso_CodRank',
        'Rcso_TDoc',
        'Rcso_Doc',
        'Rcso_Apellidos',
        'Rcso_Nombres',
        'Rcso_Ingreso',
        'Rcso_Cese',
        'Rcso_Estado',
        'Rcso_RazonSocial',
        'Rcso_Cargo',
        'Rcso_Gerencia',
        'Rcso_Area',
        'Rcso_CeCo',
        'Rcso_Telefono1',
        'Rcso_Telefono2',
        'Rcso_DirDesc',
        'Rcso_DirDist',
        'Rcso_ECivil',
        'Rcso_Genero',
        'Rcso_Nac',
        'Rcso_Base',
        'Rcso_Horario',
        'Rcso_Guardia',
        'Rcso_Email1',
        'Rcso_Email2',
        'Rcso_Note',
        'Rcso_Grupo',
        'Rcso_Contrasena',
    ];

    // Atributos que deben ser ocultados para arrays (como JSON o respuesta de API).
    protected $hidden = [
        'Rcso_Contrasena',
    ];

    // // Convertir atributos a un tipo de dato específico.
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];

}