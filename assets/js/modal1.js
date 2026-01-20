function openModal() {
  document.getElementById('agreementModal').classList.remove('hidden');
  document.body.style.overflow = 'hidden';
}

function closeModal() {
  document.getElementById('agreementModal').classList.add('hidden');
  document.body.style.overflow = 'auto';
}

window.onclick = function(event) {
  const modal = document.getElementById('agreementModal');
  if (event.target == modal) {
    closeModal();
  }
}
