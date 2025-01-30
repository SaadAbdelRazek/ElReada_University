const fileDropZones = document.querySelectorAll('.file-drop-zone');
const fileInputs = document.querySelectorAll('.file-drop-zone input[type="file"]');
const fileNames = document.querySelectorAll('.file-upload-item p');
const submitButton = document.getElementById('submitButton');

fileDropZones.forEach((dropZone, index) => {
    dropZone.addEventListener('dragover', (e) => {
        e.preventDefault();
        dropZone.classList.add('dragover');
    });

    dropZone.addEventListener('dragleave', () => {
        dropZone.classList.remove('dragover');
    });

    dropZone.addEventListener('drop', (e) => {
        e.preventDefault();
        dropZone.classList.remove('dragover');
        fileInputs[index].files = e.dataTransfer.files;
        fileNames[index].textContent = fileInputs[index].files[0].name;
    });

    fileInputs[index].addEventListener('change', () => {
        fileNames[index].textContent = fileInputs[index].files[0].name;
    });
});

submitButton.addEventListener('click', (event) => {
    if (!document.getElementById('terms').checked) {
        event.preventDefault();
        alert('يجب الموافقة على شروط البرنامج الدراسي');
    }
});