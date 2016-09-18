function expandDoc(imgPath, alt) {
    document.querySelector('#full-screen-box').style.display = 'block';
    document.getElementById("full-picture-box").innerHTML = '<img src="' + imgPath + '" alt="' + alt + '">';
}

