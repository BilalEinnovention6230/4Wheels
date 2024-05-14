function myFunction1() {
  etoh.editor.value += '।';
  document.getElementById("editor").focus();
}

function myFunction2() {
  etoh.editor.value += '॥';
  document.getElementById("editor").focus();
}

function myFunction3() {
  etoh.editor.value += '॰';
  document.getElementById("editor").focus();
}

function myFunction5() {
  etoh.editor.value += ' ॐ ';
  document.getElementById("editor").focus();
}

function saveTextAsFile() {
  var textToSave = document.getElementById("editor").value;
  var textToSaveAsBlob = new Blob([textToSave], {type: "text/plain"});
  var textToSaveAsURL = window.URL.createObjectURL(textToSaveAsBlob);
  //var fileNameToSaveAs = document.getElementById("inputFileNameToSaveAs").value;
  var fileNameToSaveAs = "TypingTester.txt";

  var downloadLink = document.createElement("a");
  downloadLink.download = fileNameToSaveAs;
  downloadLink.innerHTML = "Download File";
  downloadLink.href = textToSaveAsURL;
  downloadLink.onclick = destroyClickedElement;
  downloadLink.style.display = "none";
  document.body.appendChild(downloadLink);

  downloadLink.click();
}

// for save as doc file

function saveDocAsFile() {
  var textToSave = document.getElementById("editor").value;
  var textToSaveAsBlob = new Blob([textToSave], {type: "text/Doc"});
  var textToSaveAsURL = window.URL.createObjectURL(textToSaveAsBlob);
  //var fileNameToSaveAs = document.getElementById("inputFileNameToSaveAs").value;
  var fileNameToSaveAs = "TypingTester.doc";

  var downloadLink = document.createElement("a");
  downloadLink.download = fileNameToSaveAs;
  downloadLink.innerHTML = "Download File";
  downloadLink.href = textToSaveAsURL;
  downloadLink.onclick = destroyClickedElement;
  downloadLink.style.display = "none";
  document.body.appendChild(downloadLink);

  downloadLink.click();
}


function destroyClickedElement(event) {
  document.body.removeChild(event.target);
}

// for copy text
var copyTextareaBtn = document.querySelector('.CopyText');

copyTextareaBtn.addEventListener('click', function (event) {
  var copyTextarea = document.querySelector('.js-copytextarea');
  copyTextarea.select();

  try {
    var successful = document.execCommand('copy');
    var msg = successful ? 'successful' : 'unsuccessful';
    console.log('Copying text command was ' + msg);
  } catch (err) {
    console.log('Oops, unable to copy');
  }
})