document.addEventListener('DOMContentLoaded', () => {
    const container = document.querySelector('.container');
    const btnSignUp = document.getElementById('btn-sign-up');
    const btnSignIn = document.getElementById('btn-sign-in');
  
    btnSignUp.addEventListener('click', () => {
      container.classList.add('toggle');
    });
  
    btnSignIn.addEventListener('click', () => {
      container.classList.remove('toggle');
    });
});

