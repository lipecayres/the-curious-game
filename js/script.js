const labels = document.querySelectorAll('.form-control label')

labels.forEach(label => {
    label.innerHTML = label.innerText
        .split('')
        .map((letter, idx) => `<span style='transition-delay:${idx *30}ms'>${letter}</span>`)
        .join('')
    
})


function submitForm() {
    document.getElementById("myForm").submit(); // Submit the form
    window.location.href = "view.php"; // Redirect to the second page
  }