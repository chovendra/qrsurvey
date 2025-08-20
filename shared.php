<?php
// shared.php - Common functions and database connection
session_start();

function connectDB() {
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'qrsurvey';
    
    $conn = new mysqli($host, $user, $pass, $db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

function uid() {
    return bin2hex(random_bytes(8));
}

function escapeHtml($s = '') {
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

function escapeAttr($s = '') {
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

function pretty($t) {
    $types = [
        'short' => 'Short Answer',
        'long' => 'Long Answer',
        'dropdown' => 'Dropdown',
        'radio' => 'Radio Button',
        'geo' => 'Geo Location',
        'mobile' => 'Mobile',
        'email' => 'Email',
        'frontcam' => 'Front Camera',
        'backcam' => 'Back Camera'
    ];
    return $types[$t] ?? $t;
}

function saveForm($form) {
    $conn = connectDB();
    $id = $form['id'] ?? uid();
    $title = $conn->real_escape_string($form['title']);
    $description = $conn->real_escape_string($form['description'] ?? '');
    $fields = $conn->real_escape_string(json_encode($form['fields']));
    
    $sql = "INSERT INTO forms (id, title, description, fields, created_at) 
            VALUES ('$id', '$title', '$description', '$fields', NOW())
            ON DUPLICATE KEY UPDATE title='$title', description='$description', fields='$fields'";
    
    return $conn->query($sql);
}

function getForm($id) {
    $conn = connectDB();
    $id = $conn->real_escape_string($id);
    $sql = "SELECT * FROM forms WHERE id = '$id'";
    $result = $conn->query($sql);
    
    if ($result && $result->num_rows > 0) {
        $form = $result->fetch_assoc();
        $form['fields'] = json_decode($form['fields'], true);
        return $form;
    }
    return null;
}

function getAllForms() {
    $conn = connectDB();
    $sql = "SELECT * FROM forms ORDER BY created_at DESC";
    $result = $conn->query($sql);
    $forms = [];
    
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $row['fields'] = json_decode($row['fields'], true);
            $forms[] = $row;
        }
    }
    return $forms;
}

function saveResponse($formId, $answers) {
    $conn = connectDB();
    $id = uid();
    $formId = $conn->real_escape_string($formId);
    $answers = $conn->real_escape_string(json_encode($answers));
    
    $sql = "INSERT INTO responses (id, form_id, answers, submitted_at) 
            VALUES ('$id', '$formId', '$answers', NOW())";
    
    return $conn->query($sql);
}

function getResponses($formId) {
    $conn = connectDB();
    $formId = $conn->real_escape_string($formId);
    $sql = "SELECT * FROM responses WHERE form_id = '$formId' ORDER BY submitted_at DESC";
    $result = $conn->query($sql);
    $responses = [];
    
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $row['answers'] = json_decode($row['answers'], true);
            $responses[] = $row;
        }
    }
    return $responses;
}

function csvEscape($s) {
    $s = str_replace('"', '""', $s);
    return preg_match('/[",\n]/', $s) ? '"'.$s.'"' : $s;
}

function downloadCSV($filename, $headers, $data) {
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="'.$filename.'"');
    
    $output = fopen('php://output', 'w');
    fputcsv($output, $headers);
    
    foreach ($data as $row) {
        fputcsv($output, $row);
    }
    
    fclose($output);
    exit;
}
?>