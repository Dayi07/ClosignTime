<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentoController extends DatabaseController
{
    protected $TipoArc="";
    protected $FechaHora="";		
    protected $Archivo="";
    protected $NomArchivo="";


    public function Nuevo(){
        return view('Agregar_documento');
    }

    public function ModificarView(){
        return view('Modificar');
    }

    public function insertarArchivo($id, $TipoArc, $FechaHora, $NomArchivo, $Estado){
        $sql = "INSERT INTO documentos (usuarioID, Fecha_Hora_entrega, Tipo_documento, Archivo, Estado_documento) VALUES ($id, '$FechaHora', '$TipoArc','$NomArchivo', '$Estado') ";
        $res = mysqli_query($this->con, $sql);

        if($res){
              return true;
        }else{
            return false;
        }		
    }


    public function documentos($Idusuario){
        $sql = "SELECT * FROM Documentos WHERE usuarioID = $Idusuario";
        $res = mysqli_query($this->con, $sql);

        if($res){
            return $res;
      }else{
          return false;
      } 
  }

    public function eliminarDocumento($Id){
        $sql = "DElETE FROM documentos WHERE Codigo_documento = $Id";
        $res = mysqli_query($this->con, $sql);

        if($res){
              return true;
        }else{
            return false;
        }		

    }

    public function modificar($TipoArc, $FechaHora, $Archivo, $id){
        
        $sql = "UPDATE Documentos SET Fecha_Hora_entrega='$FechaHora', Tipo_documento='$TipoArc', Archivo='$Archivo' WHERE usuarioID = $id";
        $res = mysqli_query($this->con, $sql);
        
        if($res){
              return true;
        }else{
            return false;
        } 

    }

    public function buscarDocumento($id){
        $sql = "SELECT * FROM Documentos WHERE Codigo_documento = $id";
        $res = mysqli_query($this->con, $sql);

        if($res){
            return $res;
      }else{
          return false;
      } 

    }


    
}
