<?php

// fungsi menampilkan (read)
function select($query) {
    global $db;

    $result = mysqli_query($db, $query);
    $rows = [ ];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;

    }

    return $rows;
}

// fungsi menambah (create)
function create_barang($post) {
    global $db;

    $nama = $post["nama"];
    $email = $post["email"];
    $password = $post["password"];

    $query = "INSERT INTO `usr` VALUES(null, '$nama', '$email', '$password')";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// fungsi ubah (update)
function update_barang($post) {
    global $db;

    $id = $post["id"];
    $nama = $post["nama"];
    $email = $post["email"];
    $password = $post["password"];

    $query = "UPDATE `usr` SET nama = '$nama', email = '$email', password = '$password' WHERE id = $id";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// fungsi menghapus barang
function delete_barang($id) {
    global $db;

    $query = "DELETE FROM `usr` WHERE id = $id";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}