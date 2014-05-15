<?php

class Model {

    protected $conexion;

    public function __construct($dbname, $dbuser, $dbpass, $dbhost) {
        $mvc_bd_conexion = @mysql_connect($dbhost, $dbuser, $dbpass);
        if (!$mvc_bd_conexion) {
            die('No ha sido posible realizar la conexión con la base de datos: ' . mysql_error());
        }
        mysql_select_db($dbname, $mvc_bd_conexion);
        mysql_set_charset('utf8');
        $this->conexion = $mvc_bd_conexion;
    }

    public function bd_conexion() {
        
    }

    public function dameAlimentos() {
        $sql = "select * from alimentos order by energia desc";
        $result = mysql_query($sql, $this->conexion);
        $alimentos = array();
        while ($row = mysql_fetch_assoc($result)) {
            $alimentos[] = $row;
        }
        return $alimentos;
    }

    public function buscarAlimentosPorNombre($nombre) {
        $nombre = htmlspecialchars($nombre);
        $sql = "select * from alimentos where nombre like '" . $nombre . "' order by energia desc";
        $result = mysql_query($sql, $this->conexion);
        $alimentos = array();
        while ($row = mysql_fetch_assoc($result)) {
            $alimentos[] = $row;
        }
        return $alimentos;
    }

    public function buscarAlimentosPorEnergia($energia) {
        $energia = htmlspecialchars($energia);
        $sql = "select * from alimentos where energia like '" . $energia . "' order by nombre desc";
        $result = mysql_query($sql, $this->conexion);
        $alimentos = array();
        while ($row = mysql_fetch_assoc($result)) {
            $alimentos[] = $row;
        }
        return $alimentos;
    }

    public function buscarAlimentosCombinado($n, $e, $p, $hc, $f, $g) {
        $n = htmlspecialchars($n);
        $e = htmlspecialchars($e);
        $p = htmlspecialchars($p);
        $hc = htmlspecialchars($hc);
        $f = htmlspecialchars($f);
        $g = htmlspecialchars($g);
        $contenido = "%";
        $sql = "select * from alimentos where";
        if ($n !== ""){
            if ($contenido === "")
                $sql = $sql . " AND nombre like '" . $n . "'";
            else {
                $sql = $sql . " nombre like '" . $n . "'";
                $contenido = "";
            }
        }
        if ($e !== ""){
            if ($contenido === "")
                $sql = $sql . " AND energia = '" . $e . "'";
            else {
                $sql = $sql . " energia = '" . $e . "'";
                $contenido = "";
            }
        }
        if ($p !== ""){
            if ($contenido === "")
                $sql = $sql . " AND proteina = '" . $p . "'";
            else {
                $sql = $sql . " proteina = '" . $p . "'";
                $contenido = "";
            }
        }
        if ($hc !== ""){
            if ($contenido === "")
                $sql = $sql . " AND hidratocarbono = '" . $hc . "'";
            else {
                $sql = $sql . " hidratocarbono = '" . $hc . "'";
                $contenido = "";
            }
        }
        if ($f !== ""){
            if ($contenido === "")
                $sql = $sql . " AND fibra = '" . $f . "'";
            else {
                $sql = $sql . " fibra = '" . $f . "'";
                $contenido = "";
            }
        }
        if ($g !== ""){
            if ($contenido === "")
                $sql = $sql . " AND grasatotal = '" . $g . "'";
            else {
                $sql = $sql . " grasatotal = '" . $g . "'";
                $contenido = "";
            }
        }

        if ($contenido === "")
            $sql = $sql . " order by nombre desc";
        else 
            $sql = $sql . " nombre like '%' order by nombre desc";

        $result = mysql_query($sql, $this->conexion);
        $alimentos = array();
        while ($row = mysql_fetch_assoc($result)) {
            $alimentos[] = $row;
        }
        return $alimentos;
    }

    public function dameAlimento($id) {
        $id = htmlspecialchars($id);
        $sql = "select * from alimentos where id=" . $id;
        $result = mysql_query($sql, $this->conexion);
        $alimentos = array();
        $row = mysql_fetch_assoc($result);
        return $row;
    }

    public function insertarAlimento($n, $e, $p, $hc, $f, $g) {
        $n = htmlspecialchars($n);
        $e = htmlspecialchars($e);
        $p = htmlspecialchars($p);
        $hc = htmlspecialchars($hc);
        $f = htmlspecialchars($f);
        $g = htmlspecialchars($g);
        $sql = "insert into alimentos (nombre, energia, proteina, hidratocarbono, fibra, grasatotal) values ('" .
                $n . "'," . $e . "," . $p . "," . $hc . "," . $f . "," . $g . ")";
        $result = mysql_query($sql, $this->conexion);
        return $result;
    }

    public function validarDatos($n, $e, $p, $hc, $f, $g) {
        return (is_string($n) &
                is_numeric($e) &
                is_numeric($p) &
                is_numeric($hc) &
                is_numeric($f) &
                is_numeric($g));
    }

}
