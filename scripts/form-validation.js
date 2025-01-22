document.addEventListener('DOMContentLoaded', () => {
  const toastElement = document.getElementById('successToast');
  
  if (toastElement) {
    toastElement.classList.add('show');
  
    setTimeout(() => {
      toastElement.classList.remove('show');
    }, 3000);
  }
});

function showToast(message, type = 'Error') {
  const toastElement = document.createElement('div');
  toastElement.classList.add(`toast${type}`, 'show');
  toastElement.textContent = message;
  document.body.appendChild(toastElement);

  setTimeout(() => {
    toastElement.classList.remove('show');
    toastElement.remove();
  }, 3000);
}

document.addEventListener('DOMContentLoaded', () => {
  const toastElement = document.getElementById('successToast');
  
  if (toastElement) {
    toastElement.classList.add('show');
  
    setTimeout(() => {
      toastElement.classList.remove('show');
    }, 3000);
  }
});

document.querySelector('form').addEventListener('submit', (event) => {
  const nome = document.getElementById('nome').value.trim();
  const creci = document.getElementById('creci').value.trim();
  const cpf = document.getElementById('cpf').value.trim();

  let isValidForm = true;

  if (nome.length < 2) {
    showToast('O campo Nome deve ter pelo menos 2 caracteres.', 'Error');
    isValidForm = false;
  }
  
  if (creci.length < 2) {
    showToast('O campo CRECI deve ter pelo menos 2 caracteres.', 'Error');
    isValidForm = false;
  }
  
  if (cpf.length !== 14) {
    showToast('O campo CPF deve ter no mínimo 11 caracteres.', 'Error');
    isValidForm = false;
  }

  if (!isValidForm) {
    event.preventDefault();
  }
})

document.getElementById('cpf').addEventListener('input', (event) => {
  const input = event.target;
  let value = input.value.replace(/\D/g, '');

  value = value.replace(/(\d{3})(\d)/, '$1.$2');
  value = value.replace(/(\d{3})(\d)/, '$1.$2');
  value = value.replace(/(\d{3})(\d{1,2})$/, '$1-$2');

  input.value = value;
});

// biome-ignore lint/complexity/noForEach: <explanation>
document.querySelectorAll('.delete-link').forEach(link => {
  link.addEventListener('click', function(event) {
    event.preventDefault();
    const id = this.getAttribute('data-id');
    const confirmDeleteButton = document.getElementById('confirmDelete');

    confirmDeleteButton.onclick = () => {
      // biome-ignore lint/style/useTemplate: <explanation>
      window.location.href = 'process.php?delete=' + id;
    };
  });
});