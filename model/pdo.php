<?php
//Hàm kết nối đến CSDL phương thức PDO 
function pdo_get_connection(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=duan1_hl", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
// Thực thi câu lệnh SQL thao tác dữ liệ như (INSERT, UPDATE, DELETE)
function pdo_execute($sql){
    $sql_args=array_slice(func_get_args(),1);
    try{
        $conn=pdo_get_connection(); //kết nối đến 
        $stmt=$conn->prepare($sql);//chuẩn hóa
        $stmt->execute($sql_args);//Thực hiện câu lệnh 

    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}
function get_last_inserted_id() {
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->query("SELECT LAST_INSERT_ID()");
        $id = $stmt->fetchColumn();
        return $id;
    } catch(PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}


function pdo_execute_return_lastInsertId($sql){
    $sql_args=array_slice(func_get_args(),1);
    try{
        $conn=pdo_get_connection(); //kết nối đến 
        $stmt=$conn->prepare($sql);//chuẩn hóa
        $stmt->execute($sql_args);//Thực hiện câu lệnh 
        return $conn->lastInsertId();

    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}

// thực thi câu lệnh SQL truy vấn kiểu (SELECT * FROM tên bảng) => trả về nhiều bản ghi
function pdo_query($sql){
    $sql_args=array_slice(func_get_args(),1);

    try{
        $conn=pdo_get_connection();
        $stmt=$conn->prepare($sql);
        $stmt->execute($sql_args);
        $rows=$stmt->fetchAll();
        return $rows;
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}
//thực thi câu lệnh SQL truy vấn dl (SELECT * FROM tên bảng WHERE id/name/mã...) => trả về duy nhất 1 bản ghi
function pdo_query_one($sql){
    $sql_args=array_slice(func_get_args(),1);
    try{
        $conn=pdo_get_connection();
        $stmt=$conn->prepare($sql);
        $stmt->execute($sql_args);
        $row=$stmt->fetch(PDO::FETCH_ASSOC);
        // đọc và hiển thị giá trị trong danh sách trả về
        return $row;
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}
?>