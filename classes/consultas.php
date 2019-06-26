<?php

/**
 * Realiza consultas a la base de datos y devuelve un valor de retorno
 */
require 'conexion.php';

class consultas {

    public function consultaCorreo($correo) {
        $newConexion = new Conexion();
        $conexion = $newConexion->getConnection();
        $resultado = 'false';
        if ($correo) {
            $statement = $conexion->prepare('SELECT correo FROM usuario WHERE correo=?');
            $statement->bind_param('s', $correo);
            $statement->execute();
            $rs = $statement->get_result();
            while ($columna = mysqli_fetch_array($rs)) {
                $var = $columna['correo'];
            }
            $rs->close();
            if (empty($var)) {
                $resultado = 'true';
            } else {
                $resultado = 'false';
            }
        } else {
            $resultado = 'false';
        }
        $conexion->close();
        return $resultado;
    }

    public function validaContrasena($username, $passwd) {
        $newConexion = new Conexion();
        $conexion = $newConexion->getConnection();
        $resultado = 'false';
        if ($passwd) {
            $statement = $conexion->prepare("SELECT usuario FROM login WHERE usuario=? AND contrasena=AES_ENCRYPT(?,'sUp3r?M4rI0')");
            $statement->bind_param('ss', $username, $passwd);
            $statement->execute();
            $rs = $statement->get_result();
            while ($columna = mysqli_fetch_array($rs)) {
                $var = $columna['usuario'];
            }
            $rs->close();
            if (!empty($var)) {
                $resultado = 'true';
            } else {
                $resultado = 'false';
            }
        } else {
            $resultado = 'false';
        }
        $conexion->close();
        return $resultado;
    }

    public function restableceContrasena($username, $passwd) {
        $newConexion = new Conexion();
        $conexion = $newConexion->getConnection();
        $resultado = 'false';
        $statement = $conexion->prepare("UPDATE login SET contrasena=AES_ENCRYPT(?,'sUp3r?M4rI0') WHERE usuario=?");
        $statement->bind_param("ss", $passwd, $username);
        $statement->execute();
        if ($statement->affected_rows === 0) {
            $resultado = 'false';
        } else {
            $resultado = 'true';
        }
        $statement->close();
        $conexion->close();
        return $resultado;
    }

    public function validaInscripcion($idUsuario, $idTaller) {
        $newConexion = new Conexion();
        $conexion = $newConexion->getConnection();
        $resultado = 'false';
        if ($idUsuario && $idTaller) {
            $statement = $conexion->prepare("SELECT id_usuario FROM usuario_taller WHERE id_usuario=? AND id_taller=? LIMIT 1");
            $statement->bind_param('ss', $idUsuario, $idTaller);
            $statement->execute();
            $rs = $statement->get_result();
            while ($columna = mysqli_fetch_array($rs)) {
                $var = $columna['id_usuario'];
            }
            $rs->close();
            if (!empty($var)) {
                $resultado = 'true';
            } else {
                $resultado = 'false';
            }
        } else {
            $resultado = 'false';
        }
        $conexion->close();
        return $resultado;
    }

    public function consultaAsistentes($ponente) {
        $newConexion = new Conexion();
        $conexion = $newConexion->getConnection();
        $statement = $conexion->prepare("SELECT * FROM lista_asistentes WHERE es_ponente=?");
        $statement->bind_param("s", $ponente);
        $statement->execute();
        $rs = $statement->get_result();
        $data = mysqli_fetch_all($rs, MYSQLI_ASSOC);
        $rs->close();
        return $data;
    }

    public function consultaTalleres() {
        $newConexion = new Conexion();
        $conexion = $newConexion->getConnection();
        $statement = $conexion->prepare("SELECT * FROM lista_talleres;");
        $statement->execute();
        $rs = $statement->get_result();
        $data = mysqli_fetch_all($rs, MYSQLI_ASSOC);
        $rs->close();
        return $data;
    }

    public function consultaTalleresDisponibles($idUsuario) {
        $newConexion = new Conexion();
        $conexion = $newConexion->getConnection();
        $statement = $conexion->prepare("SELECT * FROM lista_talleres_disponibles WHERE id_usuario <> ? OR id_usuario IS NULL");
        $statement->bind_param("s", $idUsuario);
        $statement->execute();
        $rs = $statement->get_result();
        $data = mysqli_fetch_all($rs, MYSQLI_ASSOC);
        $rs->close();
        return $data;
    }

    public function consultaTalleresInscritos($idUsuario) {
        $newConexion = new Conexion();
        $conexion = $newConexion->getConnection();
        $statement = $conexion->prepare("SELECT * FROM lista_talleres_disponibles WHERE id_usuario = ?");
        $statement->bind_param("s", $idUsuario);
        $statement->execute();
        $rs = $statement->get_result();
        $data = mysqli_fetch_all($rs, MYSQLI_ASSOC);
        $rs->close();
        return $data;
    }

    public function actualizaContrasena($username, $passwd) {
        $newConexion = new Conexion();
        $conexion = $newConexion->getConnection();
        $resultado = 'false';
        $statement = $conexion->prepare("UPDATE login SET contrasena=AES_ENCRYPT(?,'sUp3r?M4rI0') WHERE usuario=?");
        $statement->bind_param("ss", $passwd, $username);
        $statement->execute();
        if ($statement->affected_rows === 0) {
            $resultado = 'false';
        } else {
            $resultado = 'true';
        }
        $statement->close();
        $conexion->close();
        return $resultado;
    }

    public function inscribirTaller($idUsuario, $idTaller) {
        $newConexion = new Conexion();
        $conexion = $newConexion->getConnection();
        $resultado = 'false';
        $statement = $conexion->prepare("INSERT INTO usuario_taller VALUES(?,?,NOW(),'Pendiente','1','');");
        $statement->bind_param("ss", $idUsuario, $idTaller);
        $statement->execute();
        if ($statement->affected_rows === 0) {
            $resultado = 'false';
        } else {
            $resultado = 'true';
        }
        $statement->close();
        $conexion->close();
        return $resultado;
    }

    public function abandonarTaller($idUsuario, $idTaller) {
        $newConexion = new Conexion();
        $conexion = $newConexion->getConnection();
        $resultado = 'false';
        $statement = $conexion->prepare("DELETE FROM usuario_taller WHERE id_usuario=? AND id_taller=?;");
        $statement->bind_param("ss", $idUsuario, $idTaller);
        $statement->execute();
        if ($statement->affected_rows === 0) {
            $resultado = 'false';
        } else {
            $resultado = 'true';
        }
        $statement->close();
        $conexion->close();
        return $resultado;
    }
    
    public function eliminarTaller($idTaller) {
        $newConexion = new Conexion();
        $conexion = $newConexion->getConnection();
        $resultado = 'false';
        $statement = $conexion->prepare("DELETE FROM taller WHERE id=?;");
        $statement->bind_param("s", $idTaller);
        $statement->execute();
        if ($statement->affected_rows === 0) {
            $resultado = 'false';
        } else {
            $resultado = 'true';
        }
        $statement->close();
        $conexion->close();
        return $resultado;
    }

    public function registraUsuario($username, $passwd, $es_ponente, $tipo) {
        $newConexion = new Conexion();
        $conexion = $newConexion->getConnection();
        $resultado = 'false';
        $statement = $conexion->prepare("INSERT INTO login VALUES(DEFAULT,?,?,AES_ENCRYPT(?,'sUp3r?M4rI0'),DEFAULT,?)");
        $statement->bind_param("ssss", $username, $tipo, $passwd, $es_ponente);
        $statement->execute();
        if ($statement->affected_rows === 0) {
            $resultado = 'false';
        } else {
            $resultado = 'true';
        }
        $statement->close();
        $conexion->close();
        return $resultado;
    }

    public function login(array $data) {
        $_SESSION['logged_in'] = false;
        $newConexion = new Conexion();
        $conexion = $newConexion->getConnection();
        if (!empty($data)) {
            $trimmed_data = array_map('trim', $data);
            $statement = $conexion->prepare("SELECT u.id, l.usuario, u.es_ponente, nombre, apellido, tipo, telefono, procedencia FROM login l LEFT JOIN usuario u ON u.usuario = l.usuario WHERE l.usuario=? AND contrasena=AES_ENCRYPT(?,'sUp3r?M4rI0')");
            $statement->bind_param('ss', $trimmed_data['username'], $trimmed_data['password']);
            $statement->execute();
            $rs = $statement->get_result();
            $data = mysqli_fetch_assoc($rs);
            $count = mysqli_num_rows($rs);
            $rs->close();
            if ($count == 1) {
                $_SESSION = $data;
                $_SESSION['logged_in'] = true;
                return true;
            } else {
                $_SESSION['logged_fail'] = true;
                throw new Exception(LOGIN_FAIL);
            }
        } else {
            throw new Exception(LOGIN_FIELDS_MISSING);
        }
    }
    
    public function eliminarUsuario($idUsuario) {
        $newConexion = new Conexion();
        $conexion = $newConexion->getConnection();
        $resultado = 'false';
        $statement = $conexion->prepare("DELETE FROM usuario WHERE id=?;");
        $statement->bind_param("s", $idUsuario);
        $statement->execute();
        if ($statement->affected_rows === 0) {
            $resultado = 'false';
        } else {
            $resultado = 'true';
        }
        $statement->close();
        $conexion->close();
        return $resultado;
    }

    public function redirecciona($url) {
        echo '<script language="javascript">window.location.href ="' . $url . '"</script>';
    }

}

?>