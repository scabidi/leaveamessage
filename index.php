<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scabidi - Leave A Message</title>
    <link rel="stylesheet" href="styles.css">
<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="a95d49c7-81f8-4333-8f30-ecf7a97890fd";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
</head>
<body>
    <div class="container">
        <h1>Scabidi - Leave A Message</h1>
        
        <div class="form-container">
            <form action="submit_sound.php" method="post" enctype="multipart/form-data">
                <input type="file" name="soundFile" accept="audio/*" required>
                <input type="text" name="soundTitle" placeholder="Enter title for the sound" required>
                <button type="submit">Upload Sound</button>
            </form>
        </div>
<a href="https://scabidi.com/leaveamessage/rules">Rules<p align="center"></p></a>
        <div class="sound-list">
            <?php include 'get_sounds.php'; ?>
        </div>
    </div>

    <script src="scripts.js"></script>
</body>
</html>

<style>
/* styles.css */

body {
    fon
    
    border-radius: 12px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    margin-bottom: 30px;
}

.form-container {
    text-align: center;
    margin-bottom: 30px;
}

.upload-btn {
    padding: 12px 24px;
    background-color: #007bff;
    color: #ffffff;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 16px;
}

.upload-btn:hover {
    background-color: #0056b3;
}

.input-file {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #ffffff;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 16px;
}

.input-file:hover {
    background-color: #0056b3;
}

.input-title {
    padding: 12px 20px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 16px;
    width: 300px;
    margin-right: 10px;
}

.sound-list {
    margin-top: 30px;
}

.sound-item {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 20px;
    background-color: #f2f2f2;
    border-radius: 8px;
    padding: 20px;
}

.sound-item audio {
    width: 100%;
    max-width: 400px;
}

</style>
</script>