function expandDoc(imgPath, alt) {
    document.querySelector('#full-screen-box').style.display = 'block';
    document.getElementById("full-picture-box").innerHTML = '<img src="' + imgPath + '" alt="' + alt + '">';
}

function setMinHeightForPageWrap() {
    var height = document.documentElement.clientHeight - 
                (document.getElementById('top-bar').clientHeight + 
                document.getElementById('w0').clientHeight + 
                document.getElementById('footer').clientHeight + 109 + 26);
    document.getElementById('page-wrap').style.setProperty('min-height', height + 'px');
}

function activateMenuItem(tagId1, tagId2) {
    document.getElementById(tagId1).className += " active";
    document.getElementById(tagId2).className += " active";
}

