
// Input-file

let input = document.querySelector('#file-up');
let preview = document.querySelector('.preview');

if(document.querySelector('.label-file-t')) {
  input.addEventListener('change', updateFileDisplay);
};

function updateFileDisplay() {
  while(preview.firstChild) {
    preview.removeChild(preview.firstChild);
  }

  let curFiles = input.files;
  if(curFiles.length === 0) {
    let para = document.createElement('p');
    para.textContent = 'Aucun fichier sélectionné pour le moment';
    preview.appendChild(para);
  } else {
    let list = document.createElement('ol');
    preview.appendChild(list);
    for(let i = 0; i < curFiles.length; i++) {
      let listItem = document.createElement('li');
      let para = document.createElement('p');
        para.textContent = curFiles[i].name + ' | ' + returnFileSize(curFiles[i].size) + '.';
        listItem.appendChild(para);
        list.appendChild(listItem);
    }
  }
}

function returnFileSize(number) {
  if(number < 1024) {
    return number + ' octets';
  } else if(number >= 1024 && number < 1048576) {
    return (number/1024).toFixed(1) + ' Ko';
  } else if(number >= 1048576) {
    return (number/1048576).toFixed(1) + ' Mo';
  }
}
