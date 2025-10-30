// Вставьте этот скрипт в конец <body> или в файл и подключите после HTML
document.addEventListener('DOMContentLoaded', () => {
    const login = document.getElementsByName('login')[0];
    const password = document.getElementsByName('password')[0];
    let error = document.querySelector('.Error');
  
    if (!login || !password) {
      console.error('Не найдены элементы input[name="login"] или input[name="password"]. Проверьте HTML.');
      return;
    }
  
    // Если блока .Error нет — создаём его сразу после поля password
    if (!error) {
      error = document.createElement('div');
      error.className = 'Error';
      error.style.display = 'none';
      error.setAttribute('aria-live', 'polite');
      password.insertAdjacentElement('afterend', error);
    }
  
    const showError = (msg) => {
      error.textContent = msg;
      error.style.color = 'red';
      error.style.display = 'block';
      error.style.visibility = 'visible';
      error.style.opacity = '1';
      error.setAttribute('role', 'alert');
    };
  
    const clearError = () => {
      error.textContent = '';
      error.style.display = 'none';
    };
  
    const check = (event) => {
      // Защита от ошибок
      try {
        const l = (login.value || '').trim();
        const p = (password.value || '').trim();
  
        if (!l || !p) {
          showError('Заполните данные');
          if (event && typeof event.preventDefault === 'function') event.preventDefault();
          // фокус на первом пустом
          if (!l) login.focus(); else password.focus();
          return false;
        }
  
        clearError();
        return true;
      } catch (err) {
        console.error('Ошибка в check():', err);
        return false;
      }
    };
  
    // Подписываемся на submit формы (лучше всего) и на клик кнопки
    const form = login.closest('form') || password.closest('form');
    if (form) {
      form.addEventListener('submit', check);
    }
  
    // На всякий случай — нажатие на кнопку
    const btn = document.querySelector('button[type="submit"], button');
    if (btn) btn.addEventListener('click', check);
  
    // Полезно: очищаем ошибку при вводе
    login.addEventListener('input', () => { if (login.value.trim()) clearError(); });
    password.addEventListener('input', () => { if (password.value.trim()) clearError(); });
  });