<?php
class Empresa extends Eloquent{

    protected $table = "tbl_empresas";
    protected  $fillable = ["nombre", "razon_social", "fecha_creacion", "trabajadores", "rfc", "estado"];
    protected $guarded = ["id"];

}