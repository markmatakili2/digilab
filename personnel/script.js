function confirmTest() {
    const checkbox = document.getElementById('confirm');
    const progressBarFill = document.getElementById('progress-bar-fill');

    if (checkbox.checked) {
        progressBarFill.style.width = '100%';
        alert('Test confirmed and progress updated.');
    } else {
        alert('Please check the confirmation box.');
    }
}
