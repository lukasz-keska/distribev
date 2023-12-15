function getRand(min, max){
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

function openInNewTab(url) {
  var win = window.open(url, '_blank');
  win.focus();
}