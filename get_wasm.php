<?php
$url = 'https://unpkg.com/@ffmpeg/core@0.12.6/dist/umd/ffmpeg-core.wasm';
$file = 'ffmpeg-core.wasm';

echo "ダウンロード中...<br>";
if(copy($url, $file)) {
    echo "【成功】サーバーに ffmpeg-core.wasm が配置されました！";
} else {
    echo "【エラー】ダウンロードに失敗しました。";
}
?>